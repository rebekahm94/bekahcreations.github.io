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
		<link rel="stylesheet" href="styles/dish.css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		
		<title>Live Strong</title>
	</head>
	<body class="dish-body">
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
					<a href="index.php" class="navbar-brand">Live Strong</a>
				</div>
				<div class="collapse navbar-collapse" id="collapsemenu">
					<ul class="nav navbar-nav navbar-right hover">
						<li><a href="index.php">HOME</a></li>
						<li><a href="exercise.php">EXERCISE</a></li>
						<li><a href="courses.php">FOOD</a></li>
						<li class="divider-vertical"></li>
						<li><a class="hover-change" href="login_form.php">Login</a></li>
						<li><a class="hover-change" href="register_form.php">Register</a></li>
					</div>
				</ul>
			</div>
		</nav>
            <div class="dish">
                <div class="dish-header">
                        <img class="img-responsive" src="images/basil-header.jpg">
                </div>
            <div class="nutrional">
                <div class="container">
                    <h3>Nutrition <span>per serving:</span></h3>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/kcal.jpg">
                        
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/fat.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/saturates.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/carbs.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/fibre.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <br>
                        <img class="im-responsive img-circle" src="images/salt.jpg">
                    </div>
                    <br>
                </div>
            </div>
                <br>
                <div class="info">
                    <div class="container">
                        <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                        <br><br>
                        <h1>Basil scramble with wilted spinach & seared tomatoes</h1>
                    </div>
                        <hr>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="ingredients">
                                <h2>Ingredients</h2>
                                <br>
                                <ul>
                                    <li>1 tbsp rapeseed oil, plus 1 tsp</li>
                                    <br>
                                    <li>3 tomatoes, halved</li>
                                    <br>
                                    <li>4 large eggs</li>
                                    <br>
                                    <li>4 tbsp natural bio yogurt</li>
                                    <br>
                                    <li>⅓ small pack basil, chopped</li>
                                    <br>
                                    <li>175g baby spinach, dried well (if it needs washing)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-4 col-sm-4">
			<div class="method">
                            <h2>Method</h2>
                            <h3>1.</h3><p>Heat 1 tsp oil in a large non-stick frying pan, add the tomatoes and cook, cut-side down, 
                                over a medium heat. While they are cooking, beat the eggs in a jug with the yogurt, 2 tbsp water, 
                                plenty of black pepper and the basil.</p>
				<h3>2.</h3><p>Transfer the tomatoes to serving plates. Add the spinach to the pan and wilt, stirring 
                                    a few times while you cook the eggs.</p>
				<h3>3.</h3><p>Heat the rest of the oil in a non-stick pan over a medium heat, pour in the egg mixture 
                                    and stir every now and then until scrambled and just set. Spoon the spinach onto the plates and top 
                                    with the scrambled eggs.</p>
                        </div>
                    </div>
                </div>
          </div>
       </div>

        <?php require 'utils/footer.php'; ?><!--linking the footer class to the index page with the source folder it is located in-->
    </body>
</html>