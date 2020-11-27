<?php
error_reporting('error');
include("admin/connection/connection.php");

$randomone="select * from news_master order by RAND() limit 0,1";
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

  $random.="<div class='block-item news-layout-3 big'><a href='index.php' class='label-topic-1'><span>News</span></a><a href='news_detail.php?news_id={$anchor}' class='news-image'><span class='mask-gradient style-4'></span><img src='admin/news_image/273_{$image}' alt='' class='img-responsive' style='height: 552px;'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
  </div>
  </div>";
}

$businessone="select * from news_master where category_id=2 ORDER by category_id DESC limit 0,1 ";
$businessqry=mysql_query($businessone);
$business='';

while ($businessoneshow=mysql_fetch_array($businessqry))
{

  $anchor1=$businessoneshow['news_id'];
  $title=$businessoneshow['news_title'];
  $description=$businessoneshow['news_description'];
  $image=$businessoneshow['photoimg'];
  $date=date("d/m/Y",strtotime($businessoneshow['date']));
  $userid=$businessoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  
  $business.="<div class='block-item news-layout-3 entertainment'><a href='entertainment.html' class='label-topic-1'><span>Business</span></a><a href='news_detail.php?news_id={$anchor1}' class='news-image'><span class='mask-gradient style-3'></span><img src='admin/news_image/{$image}' alt='' class='img-responsive' style='height: 274px;'></a>
      <div
          class='news-content'><a href='news_detail.php?news_id={$anchor1}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
  </div>
  </div>";
}

$entertainmentone="select * from news_master where category_id=4 ORDER by category_id DESC limit 0,1 ";
$entertainmentqry=mysql_query($entertainmentone);
$entertainment='';

while ($entertainmentoneshow=mysql_fetch_array($entertainmentqry))
{

  $anchor2=$entertainmentoneshow['news_id'];
  $title=$entertainmentoneshow['news_title'];
  $description=$entertainmentoneshow['news_description'];
  $image=$entertainmentoneshow['photoimg'];
  $date=date("d/m/Y",strtotime($entertainmentoneshow['date']));
  $userid=$entertainmentoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  
  
  $entertainment.="<div class='block-item news-layout-3 entertainment'><a href='entertainment.html' class='label-topic-1'><span>entertainment</span></a><a href='news_detail.php?news_id={$anchor2}' class='news-image'><span class='mask-gradient style-3'></span><img src='admin/news_image/{$image}' alt='' class='img-responsive' style='height: 274px;'></a>
      <div
          class='news-content'><a href='news_detail.php?news_id={$anchor2}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>

          </ul>
  </div>
  </div>";
}

$politicsone="select * from news_master where category_id=7 ORDER by category_id DESC limit 0,1 ";
$politicsqry=mysql_query($politicsone);
$politics='';

while ($politicsoneshow=mysql_fetch_array($politicsqry))
{

  $anchor3=$politicsoneshow['news_id'];
  $title=$politicsoneshow['news_title'];
  $description=$politicsoneshow['news_description'];
  $image=$politicsoneshow['photoimg'];
  $date=date("d/m/Y",strtotime($politicsoneshow['date']));
  $userid=$politicsoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  
  
  $politics.="<div class='news-layout-1'><a href='index-2.html' class='label-topic-1'><span>Politics</span></a>
      <a href='news_detail.php?news_id={$anchor3}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor3}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$travelone="select * from news_master where category_id=6 ORDER by category_id DESC limit 0,1 ";
$travelqry=mysql_query($travelone);
$travel='';

while ($traveloneshow=mysql_fetch_array($travelqry))
{
  $anchor4=$traveloneshow['news_id'];
  $title=$traveloneshow['news_title'];
  $description=$traveloneshow['news_description'];
  $image=$traveloneshow['photoimg'];
$date=date("d/m/Y",strtotime($traveloneshow['date']));
$userid=$traveloneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];



  $travel.="<div class='news-layout-1'><a href='index-2.html' class='label-topic-1'><span>Travel</span></a>
      <a href='news_detail.php?news_id={$anchor4}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor4}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$sportone="select * from news_master where category_id=3 ORDER by category_id DESC limit 0,1 ";
$sportqry=mysql_query($sportone);
$sport='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor5=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];
$date=date("d/m/Y",strtotime($sportoneshow['date']));
$userid=$sportoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  $sport.="<div class='news-layout-1'><a href='index-2.html' class='label-topic-1'><span>Sport</span></a>
      <a href='news_detail.php?news_id={$anchor5}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor5}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$technologyone="select * from news_master where category_id=1 ORDER by category_id DESC limit 0,1 ";
$technologyqry=mysql_query($technologyone);
$technology='';

while ($technologyoneshow=mysql_fetch_array($technologyqry))
{
  $anchor6=$technologyoneshow['news_id'];
  $title=$technologyoneshow['news_title'];
  $description=$technologyoneshow['news_description'];
  $image=$technologyoneshow['photoimg'];
$date=date("d/m/Y",strtotime($sportoneshow['date']));

  $technology.="<div class='news-layout-3 big'><a href='index-2.html' class='label-topic-1'><span>Technology</span></a><a href='news_detail.php?news_id={$anchor6}' class='news-image'><span class='mask-gradient style-4'></span><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div
          class='news-content'><a href='news_detail.php?news_id={$anchor6}' class='title'>$title</a></div>
  </div>";
}

$sportone="select * from news_master where category_id=3 order by RAND() limit 0,1";
$sportqry=mysql_query($sportone);
$sport1='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor7=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];
$date=date("d/m/Y",strtotime($sportoneshow['date']));
$userid=$sportoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];



  $sport1.="<div class='news-layout-1 sport'><a href='home-sport.html' class='label-topic-1'><span>sport</span></a>
      <a href='news_detail.php?news_id={$anchor7}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor7}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$businessone="select * from news_master where category_id=3 order by RAND() limit 0,1";
$businessqry=mysql_query($businessone);
$business1='';

while ($businessoneshow=mysql_fetch_array($businessqry))
{
  $anchor8=$businessoneshow['news_id'];
  $title=$businessoneshow['news_title'];
  $description=$businessoneshow['news_description'];
  $image=$businessoneshow['photoimg'];
$date=date("d/m/Y",strtotime($businessoneshow['date']));
$userid=$businessoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];





  $business1.="<div class='news-layout-1'>
      <a href='news_detail.php?news_id={$anchor8}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor8}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$entertainmentone="select * from news_master where category_id=4 order by RAND() limit 0,1";
$entertainmentqry=mysql_query($entertainmentone);
$entertainment1='';

while ($entertainmentoneshow=mysql_fetch_array($entertainmentqry))
{
  $anchor9=$entertainmentoneshow['news_id'];
  $title=$entertainmentoneshow['news_title'];
  $description=$entertainmentoneshow['news_description'];
  $image=$entertainmentoneshow['photoimg'];
$date=date("d/m/Y",strtotime($entertainmentoneshow['date']));
$userid=$entertainmentoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];



  $entertainment1.="<div class='news-layout-1'>
      <a href='news_detail.php?news_id={$anchor8}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor9}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$lifestyleone="select * from news_master where category_id=5 order by RAND() limit 0,1";
$lifestyleqry=mysql_query($lifestyleone);
$lifestyle='';

while ($lifestyleoneshow=mysql_fetch_array($lifestyleqry))
{
  $anchor10=$lifestyleoneshow['news_id'];
  $title=$lifestyleoneshow['news_title'];
  $description=$lifestyleoneshow['news_description'];
  $image=$lifestyleoneshow['photoimg'];
$date=date("d/m/Y",strtotime($lifestyleoneshow['date']));
$userid=$lifestyleoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];




  $lifestyle.="<div class='news-layout-1'>
      <a href='news_detail.php?news_id={$anchor10}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor10}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$editorone="select * from news_master where editor_choice=3 order by RAND() limit 0,1";
$editorqry=mysql_query($editorone);
$editor='';

while ($editoroneshow=mysql_fetch_array($editorqry))
{
  $anchor11=$editoroneshow['news_id'];
  $title=$editoroneshow['news_title'];
  $description=$editoroneshow['news_description'];
  $image=$editoroneshow['photoimg'];
$date=date("d/m/Y",strtotime($editoroneshow['date']));
$userid=$editoroneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];




  $editor.="<div class='news-layout-1 big'>
      <a href='news_detail.php?news_id={$anchor11}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='#' class='label-topic-2'>news</a><a href='news_detail.php?news_id={$anchor11}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>
  </div>";
}

$sportone="select * from news_master where category_id=2 order by RAND() limit 0,1";
$sportqry=mysql_query($sportone);
$sport2='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor12=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];

  $sport2.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor12}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>Bussiness</a><a href='news_detail.php?news_id={$anchor12}' class='title'>$title</a></div>
  </div>";
}

$businessone="select * from news_master where category_id=5 order by RAND() limit 0,1";
$businessqry=mysql_query($businessone);
$business2='';

while ($businessoneshow=mysql_fetch_array($businessqry))
{
  $anchor13=$businessoneshow['news_id'];
  $title=$businessoneshow['news_title'];
  $description=$businessoneshow['news_description'];
  $image=$businessoneshow['photoimg'];

  $business2.="<div class='single-recent-post-widget business'>
      <a href='news_detail.php?news_id={$anchor13}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>Lifestyle</a><a href='news_detail.php?news_id={$anchor13}' class='title'>$title</a></div>
  </div>";
}

$travelone="select * from news_master where category_id=6 ORDER by category_id DESC limit 0,1 ";
$travelqry=mysql_query($travelone);
$travel1='';

while ($traveloneshow=mysql_fetch_array($travelqry))
{
  $anchor14=$traveloneshow['news_id'];
  $title=$traveloneshow['news_title'];
  $description=$traveloneshow['news_description'];
  $image=$traveloneshow['photoimg'];

  $travel1.="<div class='single-recent-post-widget travel'>
      <a href='news_detail.php?news_id={$anchor14}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>travel</a><a href='news_detail.php?news_id={$anchor14}' class='title'>$title</a></div>
  </div>";
}

$entertainmentone="select * from news_master where category_id=1 order by RAND() limit 0,1";
$entertainmentqry=mysql_query($entertainmentone);
$entertainment2='';

while ($entertainmentoneshow=mysql_fetch_array($entertainmentqry))
{
  $anchor15=$entertainmentoneshow['news_id'];
  $title=$entertainmentoneshow['news_title'];
  $description=$entertainmentoneshow['news_description'];
  $image=$entertainmentoneshow['photoimg'];

  $entertainment2.="<div class='single-recent-post-widget entertainment'>
      <a href='news_detail.php?news_id={$anchor15}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>Technology</a><a href='news_detail.php?news_id={$anchor15}' class='title'>$title</a></div>
  </div>";
}

$technologyone="select * from news_master where category_id=3 order by RAND() limit 0,1";
$technologyqry=mysql_query($technologyone);
$technology1='';

while ($technologyoneshow=mysql_fetch_array($technologyqry))
{
  $anchor16=$technologyoneshow['news_id'];
  $title=$technologyoneshow['news_title'];
  $description=$technologyoneshow['news_description'];
  $image=$technologyoneshow['photoimg'];

  $technology1.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor16}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>technology</a><a href='news_detail.php?news_id={$anchor16}' class='title'>$title</a></div>
  </div>";
}

$lifestyleone="select * from news_master where category_id=7 order by RAND() limit 0,1";
$lifestyleqry=mysql_query($lifestyleone);
$lifestyle1='';

while ($lifestyleoneshow=mysql_fetch_array($lifestyleqry))
{
  $anchor17=$lifestyleoneshow['news_id'];
  $title=$lifestyleoneshow['news_title'];
  $description=$lifestyleoneshow['news_description'];
  $image=$lifestyleoneshow['photoimg'];

  $lifestyle1.="<div class='single-recent-post-widget business'>
      <a href='news_detail.php?news_id={$anchor17}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>lifestyle</a><a href='news_detail.php?news_id={$anchor17}' class='title'>$title</a></div>
  </div>";
}

$politicsone="select * from news_master where category_id=4 ORDER by category_id DESC limit 0,1 ";
$politicsqry=mysql_query($politicsone);
$politics1='';

while ($politicsoneshow=mysql_fetch_array($politicsqry))
{
  $anchor18=$politicsoneshow['news_id'];
  $title=$politicsoneshow['news_title'];
  $description=$politicsoneshow['news_description'];
  $image=$politicsoneshow['photoimg'];

  $politics1.="<div class='single-recent-post-widget travel'>
      <a href='news_detail.php?news_id={$anchor18}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='#' class='label-topic-2'>travel</a><a href='news_detail.php?news_id={$anchor18}' class='title'>$title</a></div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,1";
$randomqry=mysql_query($randomone);
$random1='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor19=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
$date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];



  $random1.="<div class='news-layout-1 big'>
      <a href='news_detail.php?news_id={$anchor19}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='#' class='label-topic-2'>news</a><a href='news_detail.php?news_id={$anchor19}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,5";
$randomqry=mysql_query($randomone);
$random2='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor20=$randomoneshow['news_id'];
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
      <div class='post-info'><a href='news_detail.php?news_id={$anchor20}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
      </div>
  </div>";
}
$randomone="select * from news_master order by RAND() limit 0,5";
$randomqry=mysql_query($randomone);
$random3='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor21=$randomoneshow['news_id'];
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
      <div class='post-info'><a href='news_detail.php?news_id={$anchor21}' class='title'>$title</a>
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
  $anchor22=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];
  $description=$randomoneshow['news_description'];
  $image=$randomoneshow['photoimg'];
$date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];


  $random4.="<div class='news-layout-1'>
      <a href='news_detail.php?news_id={$anchor22}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor22}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
          <p class='description'>".substr($randomoneshow['news_description'],0,150)."...</p>
                </div>
  </div>";
}

$randomone="select * from news_master order by RAND() limit 0,1";
$randomqry=mysql_query($randomone);
$random5='';

while ($randomoneshow=mysql_fetch_array($randomqry))
{
  $anchor23=$randomoneshow['news_id'];
  $title=$randomoneshow['news_title'];

  $image=$randomoneshow['photoimg'];
$date=date("d/m/Y",strtotime($randomoneshow['date']));
$userid=$randomoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $random5.="<div class='news-layout-1'>
      <a href='news_detail.php?news_id={$anchor23}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
      <div class='news-content'><a href='news_detail.php?news_id={$anchor23}' class='title'>$title</a>
          <ul class='info'>
              <li><a href='#' class='link'>By $username</a></li>
              <li>$date</li>
          </ul>
          <p class='description'>".substr($randomoneshow['news_description'],0,150)."...</p>
                </div>
  </div>";
}

$sportone="select * from news_master where category_id=2 order by RAND() limit 0,5";
$sportqry=mysql_query($sportone);
$sport3='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor24=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];

  $sport3.="<div class='single-recent-post-widget'>
      <a href='news_detail.php?news_id={$anchor24}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper'></a>
      <div class='post-info'><a href='index-2.html' class='label-topic-2'>news</a><a href='news_detail.php?news_id={$anchor24}' class='title'>$title</a></div>
  </div>";
}

$technologyon="select * from news_master where category_id=1 order by RAND() limit 0,1";
$technologyqry=mysql_query($technologyon);
$technology5='';

while ($technologyoneshow=mysql_fetch_array($technologyqry))
{
  $anchor16=$technologyoneshow['news_id'];
  $title=$technologyoneshow['news_title'];
  $description=$technologyoneshow['news_description'];
  $image=$technologyoneshow['photoimg'];
$date=date("d/m/Y",strtotime($technologyoneshow['date']));
$userid=$technologyoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];




  $technology5.="<div class='layout-main-news'>
                                            <div class='news-layout-1'>
                                                <a href='news_detail.php?news_id={$anchor16}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
                                                <div class='news-content'><a href='news_detail.php?news_id={$anchor16}' class='title'>$title</a>
                                                    <ul class='info'>
                                                        <li><a href='#' class='link'>By $username</a></li>
                                                        <li>$date</li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>";
}
$sportone="select * from news_master where category_id=2 order by RAND() limit 0,1";
$sportqry=mysql_query($sportone);
$sport5='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor24=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];
  $date=date("d/m/Y",strtotime($sportoneshow['date']));
  $userid=$sportoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];

  $sport5.="<div class='layout-main-news'>
                                            <div class='news-layout-1'>
                                                <a href='news_detail.php?news_id={$anchor24}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
                                                <div class='news-content'><a href='news_detail.php?news_id={$anchor24}' class='title'>$title</a>
                                                    <ul class='info'>
                                                        <li><a href='#' class='link'>By $username</a></li>
                                                        <li>$date</li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>";
}

$travelone="select * from news_master where category_id=6 ORDER by category_id DESC limit 0,1 ";
$travelqry=mysql_query($travelone);
$travel5='';

while ($traveloneshow=mysql_fetch_array($travelqry))
{
  $anchor14=$traveloneshow['news_id'];
  $title=$traveloneshow['news_title'];
  $description=$traveloneshow['news_description'];
  $image=$traveloneshow['photoimg'];
 $date=date("d/m/Y",strtotime($traveloneshow['date']));
  $userid=$traveloneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  $travel5.="<div class='layout-main-news'>
                                            <div class='news-layout-1'>
                                                <a href='news_detail.php?news_id={$anchor14}' class='news-image'><img src='admin/news_image/{$image}' alt='' class='img-responsive'></a>
                                                <div class='news-content'><a href='news_detail.php?news_id={$anchor14}' class='title'>$title</a>
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
$random13='';

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
  
  $random13.="<div class='single-recent-post-widget'>
                                                        <a href='news_detail.php?news_id={$anchor}' class='thumb'><img src='admin/news_image/{$image}' alt='' class='img-wrapper' /></a>
                                                        <div class='post-info'><a href='news_detail.php?news_id={$anchor}' class='title'>$title</a>
                                                            <ul class='info'>
                                                                <li><a href='#' class='link'>By $username</a></li>
                                                                <li>$date</li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div>";
}
$technologyon="select * from news_master where category_id=1 order by RAND() limit 0,4";
$technologyqry=mysql_query($technologyon);
$technology6='';

while ($technologyoneshow=mysql_fetch_array($technologyqry))
{
  $anchor16=$technologyoneshow['news_id'];
  $title=$technologyoneshow['news_title'];
  $description=$technologyoneshow['news_description'];
  $image=$technologyoneshow['photoimg'];
 $date=date("d/m/Y",strtotime($technologyoneshow['date']));
    $userid=$technologyoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
  
  $technology6.="<div class='single-recent-post-widget'>
                                                <div class='post-info'><a href='news_detail.php?news_id={$anchor16}' class='title'>$title</a>
                                                    <ul class='info'>
                                                        <li><a href='#' class='link'>By $username</a></li>
                                                        <li><a href='#' class='link'>$date</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>";
}
$sportone="select * from news_master where category_id=2 order by RAND() limit 0,4";
$sportqry=mysql_query($sportone);
$sport6='';

while ($sportoneshow=mysql_fetch_array($sportqry))
{
  $anchor24=$sportoneshow['news_id'];
  $title=$sportoneshow['news_title'];
  $description=$sportoneshow['news_description'];
  $image=$sportoneshow['photoimg'];
 $date=date("d/m/Y",strtotime($sportoneshow['date']));
     $userid=$sportoneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
 
 
 
  $sport6.="<div class='single-recent-post-widget'>
                                                <div class='post-info'><a href='news_detail.php?news_id={$anchor24}' class='title'>$title</a>
                                                    <ul class='info'>
                                                        <li><a href='#' class='link'>By $username</a></li>
                                                        <li>$date</li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>";
}
$travelone="select * from news_master where category_id=6 ORDER by category_id DESC limit 0,4 ";
$travelqry=mysql_query($travelone);
$travel6='';

while ($traveloneshow=mysql_fetch_array($travelqry))
{
  $anchor14=$traveloneshow['news_id'];
  $title=$traveloneshow['news_title'];
  $description=$traveloneshow['news_description'];
  $image=$traveloneshow['photoimg'];
 $date=date("d/m/Y",strtotime($traveloneshow['date']));
      $userid=$traveloneshow['userid'];
  $userqry="select * from user where user_id=$userid";
  $exeqry=mysql_query($userqry);
  $arruser=mysql_fetch_array($exeqry);
  $username=$arruser['user_name'];
 
 
 
  $travel6.="<div class='single-recent-post-widget'>
                                                <div class='post-info'><a href='news_detail.php?news_id={$anchor14}' class='title'>$title</a>
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


<!-- Mirrored from swlabs.co/directnews/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 18:01:51 GMT -->
<head>
       <title>Direct News</title>
	   <?php include("include/header.php");?>
<!-----------------------------------------****************************************************************------------------------------------------------->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!-----------------------------------------****************************************************************------------------------------------------------->

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
                <div>
                <img src="food-eating-potatoes-beer-8313.jpg" style="width:100%;height:700px;background-size:cover;background-repeat:no-repeat">
                </div>
                <div class="main-content">
                    <!-- BLOCK MAIN-->
                    <!--<div class="block-main-1-wrapper">
                        <div class="container">
                            <div class="block-main-1 news-masonry">
                                <div class="block-item-wrapper item-width-2">
                                    <?php echo $random; ?>
                            </div>
                            <div class="block-item-wrapper item-width-1">
                             <?php echo $business; ?>
                        </div>
                        <div class="block-item-wrapper item-width-1">
                            <?php echo $entertainment; ?>
                    </div>
                </div>
            </div>
        </div>-->
        <!-------------**************-------------->
        
        
        <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="logo.PNG" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> Rs0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="#Home" class="scroll">Home</a></li>|
						<li><a href="popular-restaurents.html">Popular Restaurants</a></li>|
						<li><a href="order.html">Order</a></li>|
						<li><a href="contact.html">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form>
						  <ul class="navmain">
							<li><span>Location Name</span>
							 <input type="text" class="text" value="Secunderabad" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Secunderabad';}">
							</li>
							<li><span>Restaurant Name</span>
							 <input type="text" class="text" value="Swagath Grand" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Swagath Grand';}">
							</li>
							<li><span>Cuisine Name</span>
							 <input type="text" class="text" value="Chicken Biriyani" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Chicken Biriyani';}">
						    </li>
						  </ul>
						</form>
						</div>
					<!-- start search-->
		 <div class="main-search">
	        <form action="search.html">
	           <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
	            <input type="submit" value=""/>
	        </form>
	        <div class="close"><img src="images/cross.png" /></div>
	    </div>
	    <div class="srch"><button></button></div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Ordering food was never so easy</h3>
					<div class="dotted-line">
						<h4>Just 4 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose <span>Your Food</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Order  <span>Your Cuisine</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Pay   <span> online / on delivery</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span>your food </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
                    <div>
                    <img src="special_offer.PNG">
                    </div>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Enjoy With your friends </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Enjoy With Your Family </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: false,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Top Restaurants</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
								<img src="images/restaurent-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-3.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Top Cuisines</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine1.jpg" class="img-responsive" alt="" /> </a>
							<label>PIZZA</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine2.jpg" class="img-responsive" alt="" /> </a>
							<label>BURGER</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine3.jpg" class="img-responsive" alt="" /> </a>
							<label>CHOCOLATE</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine4.jpg" class="img-responsive" alt="" /> </a>
							<label>PANEER</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine5.jpg" class="img-responsive" alt="" /> </a>
							<label>CHICKEN</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine6.jpg" class="img-responsive" alt="" /> </a>
							<label>SALAD</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine7.jpg" class="img-responsive" alt="" /> </a>
							<label>PASTA</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="images/cuisine8.jpg" class="img-responsive" alt="" /> </a>
							<label>VEG PASTA</label>
					    </div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 service-section-top-row-grid1">
						<h3>Enjoy Exclusive Food Order any of these</h3>
					</div>
					<div class="col-md-2 service-section-top-row-grid2">
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Party Orders</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists">Home Made Food</li>
						</ul>
						<ul>
							<li><i class="arrow"></i></li>
							<li class="lists"> Diet Food </li>
						</ul>
					</div>
					<div class="col-md-5 service-section-top-row-grid3">
						<img src="images/lunch.png" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="order.html"><input type="submit" value="Order Now"></a>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Full assurance </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Security at its First </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Order at your tips </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">WEBATHON<a href="http://google.com" target="target_blank">TEAM 60</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        <!-------------**************-------------->
        
        <!-- MAIN NEWS-->
       <!--    <div class="main-news-wrapper padding-top-60 padding-bottom-60">
            <div class="container">
                <!-- SLIDE 1-->
               <!-- <div class="title-topic-2">FOOD ITEMS</div>
                <div class="slide-3-wrapper margin-bottom-60">
                    <div class="item">
                  <?php echo $politics; ?>
                    </div>
                    <div class="item">
                        <?php echo $travel; ?>
                    </div>
                    <div class="item">
                        <?php echo $sport; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-xs-12 main-news main-left">
                        <!-- BLOCK 1-->
                      <!--  <div class="block-news-1 margin-bottom-60">
                            <div class="title-topic-2"> TODAY'S POPULAR </div>
                            <div class="block-news-content slide">
                                <div class="slide-item">
                                    <div class="layout-main-news">
                                        <?php echo $editor; ?>
                                    <div class="layout-list-news">
                                          <?php echo $sport2; ?>
                                        <?php echo $business2; ?>
                                        <?php echo $travel1; ?>
                                        <?php echo $entertainment2; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="slide-item">
                                    <div class="layout-main-news">
                                          <?php echo $random1; ?>
                                    </div>
                                    <div class="layout-list-news">
                                        <?php echo $technology1; ?>
                                        <?php echo $lifestyle1; ?>
                                        <?php echo $politics1; ?>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- BANNER ADV-->
                      <!--  <div class="banner-adv-wrapper margin-bottom-60">
                            <a href="#" class="banner-adv-728x90"><img src="assets/images/banner-images/banner-728x90-2.jpg" alt="" class="img-responsive"></a>
                        </div> -->
                        <!-- BLOCK 5-->
                    <!--    <div class="block-news-5 margin-bottom-60">
                            <div class="title-topic-2">hot NEW</div>
                            <div class="block-news-content">
                                <div class="layout-main-news"> -->
                                  <?php echo $technology; ?>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- BANNER ADV-->
                    <!-- <div class="banner-adv-wrapper margin-bottom-60">
                        <a href="#" class="banner-adv-728x90"><img src="assets/images/banner-images/banner-728x90-3.jpg" alt="" class="img-responsive"></a>
                    </div> -->
                    <!-- BLOCK 2-->
                    <!--<div class="block-news-2">
                        <div class="title-topic news">FOOD ITEMS</div>
                        <div class="block-news-content slide">
                            <div class="slide-item">
                                <div class="layout-main-news">
                                  <?php echo $random4; ?>
                                </div>
                                <div class="layout-list-news">
                                    <?php echo $random3; ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="slide-item">
                                <div class="layout-main-news">
                                    <?php echo $random5; ?>
                                </div>
                                <div class="layout-list-news">
                                  <?php echo $random2; ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                        <div class="col-2">
                            <!-- <div class="latest-news-widget widget">
                                <div class="title-topic-2">Latest Orders</div>
                                <div class="block-news-3">
                                    <div class="block-news-content">
                                        <div class="layout-main-news">

                                          <?php echo $sport1; ?>

                                        </div>
                                        <div class="layout-list-news">
                                          <?php echo $sport3; ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="banner-widget widget">
                                <div class="section-content">
                                    <!-- <a href="#" class="link"><img src="assets/images/banner-images/travel_ads_2.png" alt="" class="img-responsive"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- BANNER 1-->
       
        <div class="main-news-wrapper padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 main-news">
                        <div class="row catelogy-topic">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 business">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        <div class="layout-main-news">
                                        <?php echo $business1; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 entertainment">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        <div class="layout-main-news">

                                          <?php  echo $entertainment1; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 lifestyle">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        <div class="layout-main-news">
                                          <?php echo $lifestyle; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- BANNER ADV-->
                            <div class="col-xs-12 banner-hidden">
                                <div class="banner-adv-wrapper margin-bottom-60">
                                    <a href="#" class="banner-adv-728x90"><img src="assets/images/banner-images/banner-728x90-3.jpg" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 tech">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        
										<?php echo $technology5; ?>
										
                                        <div class="layout-list-news">
                                            <?php echo $technology6; ?>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 sport">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        
										<?php echo $sport5; ?>
										
                                        <div class="layout-list-news">
                                            <?php echo $sport6; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <!-- BLOCK 3-->
                                <div class="block-news-3 travel">
                                    <div class="title-topic"></div>
                                    <div class="block-news-content">
                                        
									<?php echo $travel5; ?>	
									
                                        <div class="layout-list-news">
                                            <?php echo $travel6; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
            </div>
        </div>
        <!-- BANNER 2-->
        
        
        </div>
        <!-- FOOTER-->

	   			


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
        <script src="assets/js/pages/news.js"></script>
        <script src="assets/libs/chart/chart.min.js"></script>
        <script src="assets/js/pages/chart.js"></script>
    </body>


<!-- Mirrored from swlabs.co/directnews/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 18:07:09 GMT -->
</html>
