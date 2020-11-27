<?php
include("admin/connection/connection.php");

$id=$_GET['news_id'];

$cat_qry="select * from category_master";
$cat_exe=mysql_query($cat_qry);
$name12='';

while ($arrcat=mysql_fetch_array($cat_exe))
{
$category_name=$arrcat['category_name'];

$name12.="<ul class='tag-list list-unstyled list-inline'>

                                                    <li class='tag wow flipInY'><a href='category_listings.php?news_id=$id' class='tag-link'>$category_name</a></li>

													</ul>";
}

$show="select * from news_master where news_id=$id";

$descrip=mysql_query($show);
$see=mysql_fetch_array($descrip);

$name=$see['news_title'];
$name1=$see['news_description'];
$name2=$see['photoimg'];
$date=date("d/m/Y",strtotime($see['date']));
$userid=$see['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
 $username=$arruser['user_name'];
 

$randomone="select * from news_master order by RAND() limit 0,5";
$randomqry=mysql_query($randomone);
$random='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
  $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
 $username=$arruser['user_name'];

  

  $random.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
      </div>
  </div>";
}
$randomone="select * from news_master order by RAND() limit 0,5";
$randomqry=mysql_query($randomone);
$random1='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
  
    $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $random1.="<div class='slide-item'>
      <div class='single-recent-post-widget'>
          <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
          <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
              <ul class='info'>
                  <li><a href='#' class='link'>By $username</a></li>
                  <li>$date</li>

              </ul>
          </div>
      </div>
  </div>";
}
$randomone="select * from news_master order by RAND() limit 0,2";
$randomqry=mysql_query($randomone);
$random2='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
  
    $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $random2.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper' /></a>
      <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
      </div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,2";
$randomqry=mysql_query($randomone);
$random2='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
  
    $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $random2.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper' /></a>
      <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,1";
$randomqry=mysql_query($randomone);
$random3='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
  
    $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $random3.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
      </div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,1";
$randomqry=mysql_query($randomone);
$random4='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];

      $date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  
 $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  
  
  $random4.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
      </div>
  </div>";
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from swlabs.co/directnews/html/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 18:18:55 GMT -->
<head>
        <title>Directnews | Blog Detail</title>
        <?php include("include/header.php");?>
    </head>

    <body>
        <!--BEGIN PAGE LOADER-->
        <div class="body-wrapper">
            <!-- MENU MOBILE-->
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <!-- HEADER-->
                <?php include("include/menu.php");?>
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <!-- Blog detail-->
                    <div class="breadcrumb">
                        <div class="container">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">News</div>
                                <ol class="breadcrumb-content">
                                    <li class="breadcrumb-list"><a href="index-2.html" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-list active"> <span>News Single</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="main-blog-detail-wrapper padding-top-60 padding-bottom-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-xs-12">
                                    <div class="blog-detail-wrapper">
                                        <div class="news-content"><a class="title-detail"><?php echo $name; ?></a>
                                            <div class="list-info clearfix">
                                                <ul class="info">
                                                    <li><a href="#" class="link">By <?php echo $username;?></a></li>
                                                    <li><?php echo $date;?></li>
                                                </ul>


                                            </div>
                                            <a class="news-image"><img src="admin/news_image/<?php echo $name2; ?>" alt="" class="responsive"></a>
                                            <div class="post-single-content">
                                                <p><?php echo $name1; ?></p>
                                            </div>
                                            <div class="slide-blog-detail slide-blog padding-top-60">
                                                <?php echo $random1; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12 sidebar">
                                    <div class="sidebar-wrapper">
                                        <div class="col-2">
                                            <div class="recent-post-widget widget">
                                                <div class="title-topic-2">Recent Posts</div>
                                                <div class="layout-list-news">
                                                  <?php echo $random; ?>
                                                </div>
                                            </div>
                                            <div class="tag-widget widget">
                                                <div class="title-topic-2">Tags</div>
												<?php echo $name12; ?>
                                                
                                            </div>

                                            <div class="banner-widget widget">
                                                <div class="section-content">
                                                    <a href="#" class="link"><img src="assets/images/banner-images/travel_ads_1.png" alt="" class="img-responsive"></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box post-left"><a href="javascript:void(0)" class="close">×</a>
                        <?php echo $random3; ?>
                        </div>
                        <div class="slide-box post-right"><a href="javascript:void(0)" class="close">×</a>
                          <?php echo $random4; ?>
                        </div>
                    </div>
                </div>
                <!-- FOOTER-->
               <?php include("include/footer.php");?>
                <!-- BUTTON BACK TO TOP-->
                <div class="btn-wrapper back-to-top"><a href="#" class="btn btn-transparent"><i class="fa fa-angle-double-up"></i></a></div>
            </div>
        </div>
        <!-- LIBRARY JS-->
        <script src="assets/libs/jquery/jquery-2.2.3.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
        <script src="assets/libs/slick-slider/slick.min.js"></script>
        <script src="assets/libs/easy-ticker/jquery.easing.min.js"></script>
        <script src="assets/libs/easy-ticker/jquery.easy-ticker.min.js"></script>
        <script src="assets/libs/custom-scroll/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/libs/isotope/fit-columns.js"></script>
        <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/libs/weather/jquery.simpleWeather.min.js"></script>
        <!-- MAIN JS-->
        <script src="assets/js/main.js">
        </script>
        <!-- LOADING SCRIPTS FOR PAGE-->
        <script src="assets/js/pages/blog.js"></script>
    </body>


<!-- Mirrored from swlabs.co/directnews/html/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 18:18:56 GMT -->
</html>
