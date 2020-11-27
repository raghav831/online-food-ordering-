<?php
include("admin/connection/connection.php");

$id=$_GET['user_id'];

$cat_qry="select * from user where user_id=$id";
$cat_exe=mysql_query($cat_qry);
$arrcat=mysql_fetch_array($cat_exe);
$user_name=$arrcat['user_name'];





$randomone="select * from news_master where userid=$id ORDER by news_id DESC";
$randomqry=mysql_query($randomone);
$random='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
$date=date("d/m/Y",strtotime($randomoneshow['date']));
  $random.="<div class='col-xs-4'>
  <div class='news-layout-1'>
                                                    <a href='#' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
                                                    <div class='news-content'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
                                                        <ul class='info'>
                                                            
                                                            <li><a href='#' class='link'>$date</a></li>
                                                            
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                                </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from swlabs.co/directnews/html/category-2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 08:15:37 GMT -->
<head>
        <title>Directnews | Cateogry two column with Sidebar</title>
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
                                <div class="breadcrumb-text">News By <?php echo $user_name;?></div>
                                <ol class="breadcrumb-content">
                                    <li class="breadcrumb-list"><a href="index.html" class="breadcrumb-link">Home</a></li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="main-category-wrapper padding-top-60 padding-bottom-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="category-2col-wrapper">
                                        <div class="row">

                                                
												<?php echo $random; ?>
												
                                            </div>
											
                                            
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                                
                            </div>
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
    </body>


<!-- Mirrored from swlabs.co/directnews/html/category-2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 08:15:45 GMT -->
</html>