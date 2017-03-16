<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Live Strong</title>
        <?php require 'utils/styles.php'; ?><!--linking the styles class to the index page with the source folder it is located in-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts class to the index page with the source folder it is located in-->	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/recipe.css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
		
		<title>Live Strong</title>
	</head>
	<body>
		 <nav class="navbar navbar-default">
            <div class="container">
		<div class="navbar-header">
                    <button type="button"
			class="navbar-toggle collapsed"
			data-toggle="collapse"
			data-target="#collapsemenu"
			aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">Live Strong</a>
		</div>
		<div class="collapse navbar-collapse" id="collapsemenu">
                    <ul class="nav navbar-nav navbar-right hover">
			<li><a href="index.php">HOME</a></li>
			<li><a href="exercise.php">EXERCISE</a></li>
                        <li><a href="courses.php">FOOD</a></li>
			<li class="divider-vertical"></li>
			<li><a class="hover-change" href="login_form.php">Login</a></li>
                        <li><a class="hover-change" href="register_form.php">Register</a></li>
                        <li><a class="hover-change" href="dashboard.php">My Profile</a></li>
                    </ul>
		</div>
            </div>
	</nav>
             <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--id for the carousel makes it unique to this page, the class makes the carousel slide and the data-date starts the slide-->
		<ol class="carousel-indicators"> <!--tells the indicators which image to slide to next-->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li> <!--image with the index of 0 is the first image in the list and placing active on the image makes it the first image seen upon page load-->
                    <li data-target="#myCarousel" data-slide-to="1"></li> <!--slides to the second breakfast image with an index of 1-->
                    <li data-target="#myCarousel" data-slide-to="2"></li> <!--slides to the third lunch image with an index of 2-->
                    <li data-target="#myCarousel" data-slide-to="3"></li> <!--slides to the fourth dinner image with an index of 3-->
                    <li data-target="#myCarousel" data-slide-to="4"></li><!--slides to the fifth starter image with an index of 4-->
                    <li data-target="#myCarousel" data-slide-to="5"></li><!--slides to the sixth main image with an index of 5-->
                    <li data-target="#myCarousel" data-slide-to="6"></li><!--slides to the seventh dessert image with an index of 6-->
		</ol> <!--end of ordered list-->
		<div class="carousel-inner"> <!--beginning of the inside of the carousel, this holds the images and text-->
                    <div class="item active"> <!--beginning of item 2 which holds the second image and text-->
			<img src="images/coursecar.jpg"> <!--image 2-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <h2>Courses</h2> <!--text with a tag of h2 so it can be targeted in the css-->
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--the first item in the list which is marked as active so its the firs to appear upon page load-->
			<img src="images/brekfastcar.jpg"> <!--image 1-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="break.php" class="btn btn-default" role="button">Breakfast</a>
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 3 which holds the 3rd image and text-->
			<img src="images/lunchc.jpg"> <!--image 3-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="lunch.php" class="btn btn-default" role="button">Lunch</a>
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 3 which holds the 3rd image and text-->
			<img src="images/dinnercar.jpg"> <!--image 3-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="dinner.php" class="btn btn-default" role="button">Dinner</a>
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 4 which holds the 4th image and text-->
			<img src="images/starterc.jpg"> <!--image 4-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="starter.php" class="btn btn-default" role="button">Starter</a>
			</div><!--end og carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 4 which holds the 4th image and text-->
			<img src="images/mainc.jpg"> <!--image 4-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="main.php" class="btn btn-default" role="button">Main</a>
			</div><!--end og carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 4 which holds the 4th image and text-->
			<img src="images/dessertc.jpg"> <!--image 4-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <a href="dessert.php" class="btn btn-default" role="button">Dessert</a>
			</div><!--end og carousel-caption-->
                    </div><!--end of item-->

		</div> <!--end of carousel-inner-->
		<a class="carousel-control left" href="#myCarousel" role="button" data-slide="prev"> <!--code to move the carousel to the left using the glyphs-->
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
		</a> <!--end of a tag-->
		<a class="carousel-control right" href="#myCarousel" role="button" data-slide="next"> <!--code to move the carousel to the right using the glyphs-->
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
		</a> <!--end of a tag-->
            </div> <!--end of #mycarousel-->
            <div class="all">
                <div class="container">
                    <div class="course">
                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-1">
                            <h1>Course</h1>
                            <p>Choose your perfect recipe</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="break.php"><img class="img-responsive img-center" src="images/breakfast.jpg" alt=""></a>
							<div class="overlay">
								<a href ="break.php"><h2>Breakfast</h2></a>
								<a  class="link" href ="break.php">click here to view recipes!</a>
							</div>
						</div>
                                                    <h2>Breakfast</h2>
                                                
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="lunch.php"><img class="img-responsive img-center" src="images/lunch.jpg" alt=""></a>	
							<div class ="overlay">
								<h2>Lunch</h2>
								<a  class="link" href ="lunch.php">click here to view recipes!</a>
							</div>
						</div>
						<h2>Lunch</h2>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="dinner.php"><img class="img-responsive img-center" src="images/main.jpg" alt=""></a>	
							<div class="overlay">
								<h2>Dinner</h2>
								<a  class="link" href ="dinner.php">click here to view recipes!</a>
							</div>
						</div>
						<h2>Dinner</h2>
					</div>
				</div>
			
		<br>
		<hr />
		<div class = "courses">
			<div class = "container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="starter.php"><img class="img-responsive img-center" src="images/starter.jpg" alt=""></a>	
								<div class="overlay">
									<h2>Starter</h2>
									<a  class="link" href ="starter.html">click here to view recipes!</a>
								</div>
						</div>
						<h2>Starter</h2>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="main.html"><img class="img-responsive img-center" src="images/dinner.jpg" alt=""></a>	
								<div class="overlay">
									<h2>Main</h2>
									<a  class="link" href ="main.php">click here to view recipes!</a>
								</div>
						</div>
						<h2>Main</h2>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="hovereffect">
							<a href ="dessert.php"><img class="img-responsive img-center" src="images/dessert.jpg" alt=""></a>	
							<div class="overlay">
								<h2>Dessert</h2>
								<a  class="link" href ="dessert.php">click here to view recipes!</a>
							</div>
						</div>
						<h2>Dessert</h2>
					</div>
		</div>
	</div>
		<br>
		<hr />
                </div>
             <?php require 'utils/footer.php'; ?><!--linking the footer class to the index page with the source folder it is located in-->
       
    </body>
    
    <!-- below is javascript for the carousel, this javascript targets the carousel using an id and gives it an automatic interval of 3 seconds-->
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 3000
     });
</script>
