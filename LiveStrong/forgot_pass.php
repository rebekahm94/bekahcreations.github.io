<!DOCTYPE html>

<html class="login-bg">
    <head>
        <title>Live Strong</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/login.css">
        <?php require 'utils/scripts.php'?>
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
                    </ul>
		</div>
            </div>
	</nav>

       <div class="container">
            <div class="login-header">
                <div class="col-lg-offset-3 col-sm-offset-2">
                    <h1 class="logo">Live Strong <small>Don't Worry We Got You!</small></h1>
                    <br>
                     <?php
                        if (isset($errorMessage))//if there is an error
                        {echo "<p style='color:white;'>$errorMessage</p>";}//this error message is out putted
                    ?>
                    <div class="row login-by-email">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                            <br>
                            <hr>
                            <h3>Forgot Your Password:</h3>
                            <br>
                            <form action="change.php" 
                                  method="POST"
                                  role="form"
                                  class="form-vertical">
                                      
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="email" class="control-label">Email:</label>
                                    </div>
                                    <div class="inner-addon left-addon right-addon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <input type="text" id="email" class="form-control" name="email" placeholder="Enter your email" value="<?php if (isset($formdata['email'])) {echo $formdata['email'];} ?>"/><!--each input element inserting a value into the element-->
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="error">
                                            <?php if (isset($errors['email'])){echo $errors['email'];} ?><!--The error message that will be displayed-->
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                    <input type="submit" name='ForgotPassword' class="form-control btn btn-primary" onclick="checkEmail()" value="Request Rest"/>
                                </div>
                                <script>
                                    function checkEmail()
                                    {
                                        var email = document.getElementById("email");
                                        var e = email.innerHTML;
                                        console.log(e);
                                        
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php' ?>
    </body>
</html>
