<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
a:link, a:visited {
    background-color: white;
    color: black;
    border: 2px solid black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    background-color: black;
    color: white;
}
	</style>
</head>
<body>
<?php 
	$hari = ["Senin", "Selasa"];

	print_r($hari);
	echo "</br>";
	$hari[] = "Rabu";
	print_r($hari);
	echo "</br>";
	$hari[3] = "Kamis";
	print_r($hari);

 ?>
 <div><a href="../../index.php">Back to Index !</a></div>
</body>
</html>