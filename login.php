<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>International  Conference Management System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->
</head>
<body>
<div class="signup-form">
    <form action="loginForm.php" method="post">
		<h2>User Login</h2> 
		<p>Please enter Credentials!</p>
		<hr>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>  
    </form>
	<div class="hint-text">Admin login? <a href="adminlogin.php">login here</a></div>
    <div class="hint-text">Reviewer login? <a href="reviewerlogin.php">login here</a></div>
</div>
</body> 
</html>