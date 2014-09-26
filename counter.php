<?php
// sessions starts here
session_start();

// session counter is incremented by 1 using SESSION GLOBAL Variables
$_SESSION['counter'] = $_SESSION['counter']+1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter++</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
	<h1>YOU VISITED THIS SITE</h1>
<!-- Calling GLOBAL variable from PHP code -->
<h2><?=$_SESSION['counter']?></h2>

	<h1>TIMES</h1>

		<form action="process.php">
			<input type="submit" name="reset" value="Reset">
		</form>
	</div>
</body>
</html>