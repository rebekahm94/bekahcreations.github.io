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
                    <img class="img-responsive" src="images/beef-header.jpg">
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
                        <h1>Beef Carpaccio, Japanese Style</h1>
                    </div>
                        <hr>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="ingredients">
                                <h2>Ingredients</h2>
                                <br>
                                <ul>
                                    <li>beef eye fillet 500g (try to get a thinner, longer piece if possible)</li>
                                    <br>
                                    <li>baby radishes 2-3, very thinly sliced</li>
                                    <br>
                                    <li>granny smith or Braeburn apple ½, thinly sliced and cut into matchsticks</li>
                                    <br>
                                    <li>carrot ½, shredded or cut into very fine matchsticks (optional)</li>
                                    <br>
                                    <li>coriander leaves small handful</li>
                                    <br>
                                    <h3>For the dressing(Japanese Style)</h3>
                                    <br>
                                    <li>freshly squeezed lime or lemon juice 1/3 cup</li>
                                    <br>
                                    <li>light soy sauce 1/3 cup (use tamari for gluten-free)</li>
                                    <br>
                                    <li>sesame oil 2 teaspoons</li>
                                     <br>
                                    <li>mirin or sugar 2 teaspoons</li>
                                     <br>
                                    <li>extra-virgin olive oil 1 tablespoon</li>
                                    <br>
                                    <li>shallot 1, finely chopped</li>
                                    <br>
                                    <li>red chilli 1, finely chopped (optional)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-4 col-sm-4">
			<div class="method">
                            <h2>Method</h2>
                            <h3>1.</h3><p>Heat a little oil in a fry pan on medium to high heat. Season eye fillet with salt and 
                                freshly ground black pepper and sear for 45 seconds on all sides, so the middle is still rare.
                                Remove and set aside to rest (and cool) for 10 minutes. Lay a piece of cling film, about an arm’s length, 
                                out on the bench and wrap eye fillet up in a nice cylindrical shape, twisting the ends of the cling film to secure. 
                                Freeze wrapped eye fillet for at least 3 hours until very firm.</p>
				<h3>2.</h3><p>Remove cling film from eye fillet and slice very thinly with a sharp knife (slice as thinly as you can). 
                                    Note: If it has been frozen overnight, allow it to thaw for 20 minutes on the bench so it is easier to slice.</p>
				<h3>3.</h3><p>To make the dressing, combine the lime or lemon juice, soya sauce, sesame oil, mirin or sugar, extra virgin 
                                    olive oil, shallot and chili.</p>
                                <br>
                                <h3>To assemble:</h3><p>lay slices of beef and radish around plates, slightly overlapping. Place a small pile of watercress, 
                                    carrot and apple in the middle and spoon over a couple of tablespoons of the dressing over the beef. Serve immediately – 
                                    the beef will be at the perfect temperature, it should be cold but not frozen.</p>
                        </div>
                    </div>
                </div>
          </div>
       </div>

        <?php require 'utils/footer.php'; ?><!--linking the footer class to the index page with the source folder it is located in-->
    </body>
</html>