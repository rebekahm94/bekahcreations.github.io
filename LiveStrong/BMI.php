<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <link rel="stylesheet" href="styles/index.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
		
        <title>Live Strong</title>
                
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
        <script language="JavaScript">
            function calcBMI(height, weight, system)
{
            var M, KG, BMI;

            if(isNaN(height) || isNaN(weight))
                {
                    alert("Error");
                }
            
            else
            {
                if(system[1].checked)
            {
                M = height;
                KG = weight;
            }
            
            else
            {
                M = height * .0254;
                KG = weight * .4536;
            }
                BMI = Math.round(KG/(M*M));
                alert(BMI);
            }
            
                                BMI = Math.round(KG/(M*M));

                                var msg;
                                    if(BMI < 19) msg =
                                        "Weight too low for optimum health";
                                    else if(BMI >= 19 && BMI <= 25) msg =
                                        " Weight in healthy range";
                                    else if(BMI >= 26 && BMI <= 30) msg =
                                        " Weight too high";
                                    else if(BMI > 30 && BMI <= 40) msg =
                                        " Weight in obese range";
                                    else if(BMI > 40) msg =
                                        " Weight in morbidly obese range";

                                    alert("BMI=" + BMI + msg);
}
</script>
    </head>
    <bodygit remote add origin https://github.com/bekahm94/LiveStrong.git>
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
            <div class="bmiCal">
              <div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
                <h1>BMI Calculator</h1>
                <br>
                <br>
                <form action="BMI.php"
                      role="form"
                      method="POST">
                        <div class="form-group">
                            <label for="height">Height:</label> 
                                <input type="text" class="form-control" id="height" name="height" placeholder="Please enter your height">
                        </div><!--form-group-->
                        
                        <div class="form-group">
                            <label for="weight">Weight:</label>
                                <input type="text" class="form-control" id="weight" name="weight" placeholder="Please enter your weight">
                        </div><!--form-group-->
                <div class="form-group">
                    <label>Measurement System:</label>
                    <br>
                        <input type="radio" name="system" value="english" CHECKED>
                            <label>Inches and Pounds</label>
                            
                                <input type="radio" name="system" value="metric">
                                <label>Meters and Kilograms</label>
                                <br>
                </div>              
                    <input type="submit" role="button" class="btn btn-primary pull-right submit" value="Calculate BMI" onClick="calcBMI(this.form.height.value, this.form.weight.value, this.form.system)">
                
                </form>
                <br><br>
                
                    </div><!--end of id-->
                </div><!--end of col 12-->
            </div><!--end of container-->
        </body>
    </html>




