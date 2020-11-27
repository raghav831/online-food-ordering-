<?php
include("admin/connection/connection.php");

if(isset($_POST['submit']))
{
$query="insert into user(user_name,user_email,user_mobile,user_pass,user_address,user_city,isdeleted,date) values('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['password']."','".$_POST['address']."','".$_POST['city']."',1,now())";
$execute=mysql_query($query) or die(mysql_error());
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
       <title>Directnews | Home Default</title>
	   
	   <?php include("include/header.php");?>

    </head>

<body>


			<?php include("include/menu.php");?>

          <!--BEGIN PAGE LOADER-->
        <div class="body-wrapper">
            <!-- MENU MOBILE-->
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">

            	<div class="main-content">
                	<div class="breadcrumb">
                        <div class="container">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">Add User</div>    
                            </div>
							
                        </div>
                    </div>
					
					
												
												
                    <div class="contact-form-wrapper clearfix">
                    	<form method="post" class="contact-form">
                    		
                    			<div class="form-group width-100per">
                    				<label for="title">Name</label>
                    				
                    					<input type="text" id="title" name="name" class="form-control" />
                    				
                    			</div>
								<div class="form-group width-100per">
                    				<label for="title">E-mail</label>
                    				
                    					<input type="text" id="title" name="email" class="form-control" />
                    				
                    			</div>
								<div class="form-group width-100per">
                    				<label for="title">Mobile</label>
                    				
                    					<input type="text" id="title" name="mobile" class="form-control" />
                    				
                    			</div>
								<div class="form-group width-100per">
                    				<label for="title">Password</label>
                    				
                    					<input type="password" id="title" name="password" class="form-control" />
                    				
                    			</div>
								<div class="form-group width-100per">
                    				<label for="title">Address</label>
                    				
                    					<textarea id="description" name="address" class="form-control" /></textarea>
                    				
                    			</div>
								<div class="form-group width-100per">
                    				<label for="title">City</label>
                    				
                    					<input type="text" id="title" name="city" class="form-control" />
                    				
                    			</div>
								<div class="btn-wrapper">
                    			<input type="submit" name="submit" value="submit" class="btn btn-style-1" />
                    			<input type="reset" value="Reset" class="btn btn-style-1" />
								
                    		</div>
                    		</div>
                    		
                    	</form>
                    </div>
                </div>



                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->

            <!-- Footer -->
			<?php include("include/footer.php");?>
            

        </div>
        <!-- Main Container End -->

    </div>
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
</html>
