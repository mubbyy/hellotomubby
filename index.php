<!DOCTYPE html>
<html >
<head>
	<title>Mubby's Git</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="vala">
	<input type="text" name="valb">
	<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
	$a=$_POST['vala'];
	$b=$_POST['valb'];
	$sum=$a+$b;
	echo $sum;
}
?>
</body>
</html>
