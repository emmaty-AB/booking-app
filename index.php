<?php
require_once("includes/initialize.php");


//if($session->is_logged_in()) { redirect_to("book.php"); }


//$message = "";
// Remember to give your form's sbmit tag a name="submit" attribute!
// $username = '';
// $password = '';
//die(var_dump($_POST));
$failed = false;
if(isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);
	if($found_user) {
		redirect_to("book.php");
	} else {
		$failed =  "Invalid Login";
	}
	

	

}
	

// 	if($found_user) {
// 		die("I am here");
// 		//$session->login($found_user);
// 		//log_action('Login', "$found_user->username logged in.");
// 		redirect_to("reset.php");
// 		die("I am here");
// 	} else {
// 		// username/password combo was not found in the database
// 		$message = "Username/password combination incorrect.";
// 	}
// } else { // Form has not been submitted.
// 	$username = "";
// 	$password = "";
// }

?>



<!DOCTYPE html>
<html>
<head>
	<title>QH</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="row  alignment">
		<div class="welcome col-sm-4">
			<h1 id="notes">WELCOME</h1>
			<h3 class="subNotes">to QodeHub Booking App!</h3>
		</div>		
		<form method="POST" action="">
			<div class="loginContainer col-sm-2">
			<div style="color: #fff; font-size: 2rem; text-align: center;">Sign In<a href="reset.html" class="reset"><h6>(reset password?)</h6></a></div> <br>
			<?php if($failed) {echo "<span class='alert alert-danger'>$failed</span>";} ?>

		
					<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="Name" required>
			</div>

			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password" required>	
			</div>
			<div>
				<input type="submit" name = "submit" value = "Sign In" class="btn btn-primary btn-block" > </button>

			</div>
		
		<!--<input type="submit" name="submit"> -->


	</form>
		<!--<form action="" method="POST" >
		<div class="loginContainer col-sm-2">
			<div style="color: #fff; font-size: 2rem; text-align: center;">Sign In<a href="reset.html" class="reset"><h6>(reset password?)</h6></a></div> <br>
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="Name" required>
			</div>

			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password" required>	
			</div>

			<div>
				<input type="submit" value = "Sign In" class="btn btn-primary btn-block" > </button>

			</div>  
		</div>
	</form> -->





			
		</div>
	</div>

	

</body>
</html>