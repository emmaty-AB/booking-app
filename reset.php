<?php 
require_once("includes/initialize.php");


if (isset($_POST['submit'])) {

	

	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];

	
	$new_user = new User();

	$changed = $new_user->password_update($new_password);
	
	if($changed){
		echo "Password changed successfully";
	}else{

echo "Password chanege unsucessful";}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>QH Booking</title>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<form method="POST" action="">
		<div  style="display: flex; align-items: center; justify-content: center; height: 100%; ">
		<div class="loginContainer" style="margin: 0">
			<div style="color: #c1bdbd; font-size: 2rem; text-align: center;">Reset Password</div> <br>
			<div class="form-group" >
				<input class="form-control" type="text" name="old_password" placeholder="old passowrd" required>
			</div>

			<div class="form-group">
				<input class="form-control" type="text" name="new_password" placeholder="new passowrd" required>
			</div>

			<div>
				<button class="btn btn-primary btn-block" type="submit" name="submit"><a href=""></a> Update </button>

			</div>  
		
	</div>
	</div>
	</form>

	

</body>
</html>