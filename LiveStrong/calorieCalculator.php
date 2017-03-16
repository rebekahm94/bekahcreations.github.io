<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/calorieCalculator.css">
        
		
        <title>Live Strong</title>
                
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body class="calorieCalc" data-spy="scroll" data-target=".submit">
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
        
        <div class="container">
            <div class="col-lg-6 hidden-md hidden-xs hidden-sm bodyInfo">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5">
                        <br>
                        <br>
                        <img class="img-responsive" src="images/calorieCalculatorIcon.png">
                    </div>
                </div>
                <div class="row">
                    <br>
                    <br>
                    <div class="col-lg-6 col-lg-offset-3 calorieHeader">
                        <h1>CALORIE <br> CALCULATOR</h1>
                        <p>Calculate the Calories your body requires. Enter your 
                            age, height (CM), weight(KGS), gender and activity level</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 calArrowIcon">
                        <br>
                        <br>
                        <br>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 calForm">
                <form action="calorieCalculator.php" role="form" method="POST">
                    <div class="form-group">
                        <br>
                        <br>
                        <label for="gender">Gender: </label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div><!--form-group-->
                    <div class="form-group">
                        <label for="age">Age: </label>
                        <select class="form-control 1-100" id="age" name="age"></select>
                    </div><!--form-group-->
                    <div class="form-group">
                        <label for="weight">Weight (KGS): </label>
                        <select class="form-control 1-150" id="weight" name="weight"></select>
                    </div><!--form-group-->
                    <div class="form-group">
                        <label for="height">Height (CM): </label>
                        <select class="form-control 1-195" id="height" name="height"></select>
                    </div><!--form-group--> 
                    <div class="form-group">
			<label for="activity"> Activity: </label>
			<select class="form-control" id="activity" name="activity">
                            <option value="sedentary" name="sedentary">Sedentary - little or no exercise</option>
                            <option value="light" name="light">Lightly Active - exercise/sports 1-3 times/week</option>
                            <option value="moderate" name="moderate">Moderately Active - exercise/sports 3-5 times/week</option>
                            <option value="very" name="very">Very Active - exercise/sports 6-7 times/week</option>
                            <option value="extra" name="extra">Extra Active - very hard exercise/sports or physical job</option>
			</select>
                    </div>
                    <a href="#result"><button type="submit" role="button" class="btn btn-primary pull-right submit" >Calculate</button></a>
                </form>
                <br><br>
                <div id="result">
                    <?php 
                        $gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
                        $age= (isset($_POST['age']) ? $_POST['age'] : '');
                        $weight = (isset($_POST['weight']) ? $_POST['weight'] : '');
                        $height = (isset($_POST['height']) ? $_POST['height'] : '');
                        $activity = (isset($_POST['activity']) ? $_POST['activity'] : '');
                        
                     
                        
                        switch ($gender) {
                            case 'Female':
                                $gender = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
             
                                if($_POST['activity'] == 'sedentary') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.2) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.2 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.2 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'light') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.375) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.375 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.375 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'moderate') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.55) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.55 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.55 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'very') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.725) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.725 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.725 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'extra') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.9) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.9 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.9 - 1000) . " " . "Calories Per Day</p>";
                                }
                       
                                break;
                            
                            case 'Male':
                                $gender = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
                        
                                if($_POST['activity'] == 'sedentary') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.2) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.2 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.2 - 1000) . " " . "Calories Per Day</p>";
                                }
                        
                                else if($_POST['activity'] == 'light') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.375) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.4 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.4 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'moderate') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.55) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.5 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.5 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'very') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.725) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 1.7 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 1.7 - 1000) . " " . "Calories Per Day</p>";
                                }
             
                                else if($_POST['activity'] == 'extra') {
                                    echo "<h1>RESULTS: </h1>";
                                    echo "<p class='BMR'>Basic Metabolic Rate: $gender</p>";
                                    echo "<p class='maintenance'>Maintenance: " . " " . ($gender * 1.9) . " " . "Calories Per Day</p>";
                                    echo "<p class='weightLoss'>Lose 0,5 KG Per Week: " . " " . ($gender * 2 - 500) . " " . "Calories Per Day</p>";
                                    echo "<p class='xWeightLoss'>Lose 1 KG Per Week: " . " " . ($gender * 2 - 1000) . " " . "Calories Per Day</p>";
                                }
                            }
                        ?>
                    </div><!--end of id-->
                </div><!--end of col 12-->
            </div><!--end of container-->
        </body>
        
        <script type="text/javascript">
            $(function() {
                var $select = $(".1-100");
                for(i=1;i<=100;i++) {
                    $select.append($('<option></option>').val(i).html(i))
                }
            });
            
            $(function() {
                var $select = $(".1-150");
                for(i=1;i<=150;i++) {
                    $select.append($('<option></option>').val(i).html(i))
                }
            });
            
            $(function() {
               var $select = $(".1-195");
                for(i=1;i<=195;i++) {
                    $select.append($('<option></option>').val(i).html(i))
                } 
            });
        </script>
        
            
            
            
            
            
         
            
            
            
            
            
            
            
            
            




