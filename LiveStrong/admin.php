<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--linking the styles class to the index page with the source folder it is located in-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts class to the index page with the source folder it is located in-->
    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/header.php'; ?><!--linking the header class to the index page with the source folder it is located in-->
                </div>
            </div>
              
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/toolbar.php'; ?><!--linking the toolbar class to the index page with the source folder it is located in-->
                </div>
            </div>
         
        <div class="container">
            <!--Navigation-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
			<a href="index.php"><img src="images/logo.jpg"></a>
                    </li>
                    <li>
			<a href="index.php" class="change">Home</a>
                    <li>
                        <a href="exercise.php" class="change">Exercise</a>
                    </li>
                    <li>
                        <a href="courses.php" class="change">Food</a>
                    </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
                    <li>
			<a href="login_form.php" class="change">Login</a>
                    </li>
                    <li>
			<a href="register_form.php" class="change">Register</a>
                    </li>
                    <li>
			<a href="cart.php" class="change">Cart</a>
                    </li>
                    <li>
			<a href="admin.php" class="change">Admin</a>
                    </li>
                </ul><!--End of navbar information-->
            </div><!--End of navbar collapse-->
	</div><!--End of Container-->
    </nav><!--End of Navigation-->
	<div class="container">
	  <div class="row chart">
	  <br><br><br><br>
    <div class="col-md-12 col-push-6">
    	<h3>Recipes</h3>  
    </div>
  </div><!--/row-->

  <div class="row chart">
    <div class="col-md-10 col-md-push-1">
        <div id="area-example" style="height: 300px;"></div>
    </div>
	<hr />
    <div class="col-md-10 col-md-push-1">
        <div id="line-example" style="height: 300px;"></div>
    </div>
	<hr />
    <div class="col-md-6">
        <div id="donut-example" style="height: 250px;"></div>
    </div>
    <div class="col-md-6">
        <div id="bar-example" style="height: 250px;"></div>
    </div>
  </div>
  <hr />
  <hr />
  <hr />
  <table class="table">
    <thead>
    <th><a href="viewBreakfasts.php" class="btn btn-primary" role="button">View Breakfasts</a></th>
        <th><a href="viewLunches.php" class="btn btn-primary" role="button">View Lunches</a></th>
         <th><a href="viewDinners.php" class="btn btn-primary" role="button">View Dinners</a></th>
         <th><a href="viewStarters.php" class="btn btn-primary" role="button">View Starters</a></th>
          <th><a href="viewMains.php" class="btn btn-primary" role="button">View Mains</a></th>
           <th><a href="viewDesserts.php" class="btn btn-primary" role="button">View Desserts</a></th>
         
    </thead>
  </table>
  </div>
  </div>
 <hr />
</div>
     <div class="row">
        <div class="col-lg-12">
            <?php require 'utils/footer.php'; ?><!--linking the footer class to the index page with the source folder it is located in-->
        </div>
    </div>
    </body>
</html>