<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Live Strong</title>
                
        <?php require 'utils/scripts.php'; ?>
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
        
        <div class="exerciseHeader">
            <img class="img-responsive" src="images/exerciseHeader.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-8 col-xs-5 col-xs-offset-7">
                            <h1 class="exerciseQuote">"If It Doesn't Challenge You, It Won't Change You"</h1>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="exercise-workout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h1>Choose a Workout</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <br>
                        <br>
                        <a href="cardioWorkouts.php"> <img class="img-circle center-block" src="images/cardioIconBefore.png" onmouseover="this.src='images/cardioIconAfter.png'" onmouseout="this.src='images/cardioIconBefore.png'"></a>
                        <h3>Cardiovascular Exercises</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs 6">
                        <br>
                        <br>
                        <a href="bodyBuilding.php"> <img class="img-circle center-block" src="images/weightsIconBefore.png" onmouseover="this.src='images/weightsIconAfter.png'" onmouseout="this.src='images/weightsIconBefore.png'"></a>
                        <h3>Body Building Exercises</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <br>
                        <br>
                        <a href="strength.php"> <img class="img-circle center-block" src="images/strengthIconBefore.png" onmouseover="this.src='images/strengthIconAfter.png'" onmouseout="this.src='images/strengthIconBefore.png'"></a>
                        <h3>Strength Exercises</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <br>
                        <br>
                        <a href="flexibility.php"> <img class="img-circle center-block" src="images/yogaIconBefore.png" onmouseover="this.src='images/yogaIconAfter.png'" onmouseout="this.src='images/yogaIconBefore.png'"></a>
                        <h3>Flexibility Exercises</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <br>
                        <h1>Hobbies to Improve Lifestyle</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <br>
                        <h3 class="technique">Boxing</h3>
                        <img class="img-responsive" src="images/boxing.jpg">
                        <h3>Benefits</h3>
                        <p>Enhanced Cardio, <br> Improved Strength, <br>
                            Hand-Eye Coordination, <br>Decreased Stress</p>
                        <h4>Exercise type:</h4>
                        <img class="img-circle" src="images/cardioIconSmall.jpg">
                        <img class="img-circle" src="images/strengthIconSmall.png">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <br>
                        <h3 class="technique">Martial Arts</h3>
                        <img class="img-responsive" src="images/kickboxing.jpg">
                        <h3>Benefits</h3>
                        <p>Improved Cardio, <br> Weight Loss, <br> 
                            Improve Self Confidence, <br> Improved Reflexes </p>
                        <h4>Exercise Type:</h4>
                        <img class="img-circle" src="images/cardioIconSmall.jpg">
                        <img class="img-circle" src="images/strengthIconSmall.png">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <br>
                        <br>
                        <h3 class="technique">Mountain Biking</h3>
                        <img class="img-responsive" src="images/mountainBike.jpg">
                        <h3>Benefits</h3>
                        <p>Improved Heart Health, <br> Less Joint Stress, 
                            <br>Decreased Health Issues, <br>Increased Brain Power </p>
                        <h4>Exercise Type:</h4>
                        <img class="img-circle" src="images/cardioIconSmall.jpg">
                        <img class="img-circle" src="images/strengthIconSmall.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <h3 class="technique">Running</h3>
                        <img class="img-responsive" src="images/running.jpg">
                        <h3>Benefits</h3>
                        <p>Stronger Bones. <br> Strengthen Muscles, 
                            <br> Calorie Burner, <br> Help Maintain Healthy Weight </p>
                        <h4>Exercise Type:</h4>
                        <img class="img-circle" src="images/cardioIconSmall.jpg">
                        <img class="img-circle" src="images/strengthIconSmall.png">
                    </div> 
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <h3 class="technique">Weights</h3>
                        <img class="img-responsive" src="images/weightLifting.jpg">
                        <h3>Benefits</h3>
                        <p>Physical Strength, <br> Strengthens Bones and Tendons, <br>
                            Improve Muscle Tone, <br> Helps BMI </p>
                        <h4>Exercise Type:</h4>
                        <img class="img-circle" src="images/strengthIconSmall.png">
                        <img class="img-circle" src="images/weightLiftingIconSmall.png">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <br>
                        <h3 class="technique">Yoga</h3>
                        <img class="img-responsive" src="images/yoga.jpg">
                        <h3>Benefits</h3>
                        <p>Increased Flexibility, <br> Increased Muscle Strength & Tone, <br>
                            Protection from Injury, <br> Decreased Stress </p>
                        <h4>Exercise Type:</h4>
                        <img class="img-circle" src="images/strengthIconSmall.png">
                        <img class="img-circle" src="images/yogaIconSmall.png">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="article">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <h2>Check out our Articles!</h2>
                        <h4 class="updated">Updated Weekly</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <a href="http://www.menshealth.com/fitness/time-audit"><img class="img-responsive" src="images/article1.jpg"></a>
                        <br>
                        <p>Don't Have Time to Workout? <br> Here's Why That's Total BS</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <br>
                        <a href="https://www.nerdfitness.com/blog/do-a-pull-up/"><img class="img-responsive" src="images/article2.jpg"></a>
                        <br>
                        <p>Can't Do a Pull Up Yet? <br> Here's How to Get it Done</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <br>
                        <a href="http://yogadork.com/2017/01/18/it-all-starts-with-awareness/"><img class="img-responsive" src="images/article3.jpg"></a>
                        <br>
                        <p>The Truth About Yoga <br>It All Starts With Awareness</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="findAGym">
            <div class="container hidden-xs hidden-sm">
                <div class="google-maps">
                    <div class="row">
                        <div class="col-lg-6">
                            <br>
                            <h1>Find a Gym Near You!</h1>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d38124.598768240976!2d-6.283152639718143!3d53.329159402467134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgyms+in+dublin!5e0!3m2!1sen!2sie!4v1486905187359" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer-exercise">
                <div class="container">
                    <div class='row'>
                        <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-4">
                            <br>
                            <img src='images/logo.png'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5 col-sm-4 col-sm-offset-5 col-xs-offset-3">
                            <h1 class="liveHead">Live Strong</h1>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-8 col-lg-offset-2'>
                            <div class="dedicated">
                                <hr>
                                <br>
                                <p>Live Strong is all you need to help you live a healthier, happier and more energetic lifestyle
                                    We are dedicated to helping you become the best version of yourself through good diet and exercise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                            <br>
                            <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-flickr fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <br>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="email">
                                <p>Follow <a href="#">@livestrong</a> on Twitter for the latest news. <br>
                                    For further inquiries, you can email us at <a href="#">company@livestrong.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="copyright">
                                <br>
                                <br>
                                <p>COPYRIGHT 2017 LIVESTRONG, ALL RIGHTS RESERVED</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
        
        