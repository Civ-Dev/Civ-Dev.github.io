<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Civilisations 2: The Rebirth</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="/css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	
		.jumbotron{
			margin-top: 0px;
			   background-image: url("https://i.imgur.com/bOMulMU.jpg");
			background-size: cover;
			color: white
		}
	
	
	
	</style>
</head>
<body>

<form action="phpwebhook.php" method="post">
    <input type="text" id="message" name="message">
    <input type="submit" value="Send">
</form>

<?php
include "../html_helpers.php";
echo html_helpers::get_footer();
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="/js/bootstrap.js"></script>
</body>
</html>
