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
        <link rel="stylesheet" href="styles/recipe.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Live Strong</title>
                
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body class="dashboard">
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
                    </ul>
		</div>
            </div>
	</nav>
        
        <div class="container">
            <div class="user-profile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-1">
                            <i class="fa fa-user-circle"></i>
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <h1>Welcome User</h1>
                        </div>
                    </div>
                </div>
                <div class="faveArticles">
                    <div class="col-lg-3">
                        <a href="http://www.bodybuilding.com/fun/how-much-weight-should-you-lift.html"><img class="img-responsive" src="images/article1.jpg"></a>
                        <h4>How Much Weight Should you Lift?</h4>
                    </div>
                    <div class="col-lg-3">
                        <a href="http://www.health.com/health/gallery/0,,20553780,00.html"><img class="img-responsive" src="images/healthfood.jpg"></a>
                        <h4>Top Fat Burning Foods</h4>
                    </div> 
                </div>
                <div class="faveExercises">
                    <div class="row">
                        <img class="img-circle" src="images/cardioIconBefore.png">
                        <div class="col-lg-4">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/0DSrudz6IVY" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/NljaynACdxA" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/NljaynACdxA" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mealsToday">
                    <div class="dish-body">
                        <h1>Meals o the Day</h1>
                        <br>
                        <h2>Breakfast</h2>
                        <br>
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
                                        <br>
                                        <br>
                                        <br>
					<div class="card" style="width: 310rem; height: 400rem">
                                                <a href="poached.php"><img class="img-responsive" src="images/poached-eggs.jpg" alt="poachedeggs"></a>
                                                    <div class="card-block">
                                                        <br>
                                                        <h4>Poached eggs with Broccoli, Tomatoes & wholemeal flatbread</h4>
                                                        <br>
                                                            <p>Protein-packed eggs with antioxidant-rich broccoli make this a healthy 
                                                            and satisfying breakfast choice</p>
										<br>
                                                            <a href="poached.php" class="btn btn-warning" role="button">VIEW RECIPE</a>
                                                    </div>
                                
					</div>
                                    </div>
                        <h2>Lunch</h2>
                        <br>
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
                                        <br>
                                        <br>
                                        <br>
                                        <div class="card" style="width: 310rem; height: 400rem">
                                            <a href="sushi.php"><img class="img-responsive" src="images/sushi.jpg" alt=""></a>
                                                    <div class="card-block">
                                                       <br>
                                                        <h4>Smoked salmon & avocado sushi</h4>
                                                        <br>    
                                                        <p>Fancy making sushi at home? This simple recipe makes 32 healthy little bites,
                                                          ideal for lunch or served as canapés</p>
										<br><br>
                                                            <a href="sushi.php" class="btn btn-warning" role="button">VIEW RECIPE</a>
                                                    </div>
                                
					</div>
                                    </div>
                        <h2>Dinner</h2>
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
                                        <br>
                                        <br>
                                        <br>
                                        <div class="card" style="width: 310rem; height: 400rem">
                                                <a href="narvin.php"><img class="img-responsive" src="images/narvinLamb.jpg" alt=""></a>
                                                    <div class="card-block">
                                                        <br>
                                                        <h4>Aromatic lamb navarin</h4>
                                                        <br>    
                                                        <p>Lamb stew with a twist - lamb and chunky vegetables slowly cooked in a stock flavoured 
                                                        with cinnamon, bay leaves, cloves and mixed herbs - it doesn't get tastier than this!</p>
										<br>
                                                            <a href="narvin.php" class="btn btn-warning" role="button">VIEW RECIPE</a>
                                                    </div>
                                
					</div>
                                    </div>
                    </div>
                </div>
                <div class="reminder">
                    <div class="row">
                        <div class="col-lg-4">
                            <h1>Upcoming Reminders</h1>
                            <p>Stuff</p>
                            <p>Stuff</p>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-responsive" src="images/restHeart.jpg">
                        </div>
                        <div class="col-lg-4">
                            <img class="img-responsive" src="images/poundsToGo.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <footer class="footer">
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
        
        