
<!DOCTYPE html>
<html >
<head>
	<title><?php 
     	$a;
     	$b;
     	$sum;


	 ?></title>
</head>
<body>
<input type="name" name="vala" >
<input type="name" name=valb>
<input type="submit" name="button">
<output><h1> <<?
$a=$_POST['vala'];
$b=$_POST['valb'];
$sum=$a+$b;
php echo $sum ?></h1></output>
</body>
</html>