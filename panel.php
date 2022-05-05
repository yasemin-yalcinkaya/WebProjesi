<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color: #ecf0f1;">

<center><h1>Hoşgeldin    <?php echo $_SESSION['userName']; ?>  :)</h1> <br>
<h3>Mail Adresi : <?php echo $_SESSION['Mail']; ?></h3>
</center>




</body>
</html>

