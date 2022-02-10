<?php include('applogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pending </title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

    <form class="login-form" action="Hospitallogin.php" method="post" style="text-align: center;">
		<p>
			We sent an email to You <b><?php //echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p>
	</form>
		
</body>
</html>