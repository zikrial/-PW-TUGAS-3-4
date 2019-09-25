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
	$bulan = array("Januari", "Februari", "Maret", "April", "Mei");
	$angka = [1,2,3,4,5];

	echo "Ini isi array bulan : </br>";
	var_dump($bulan);
	echo "</br>";

	echo "Ini isi array angka : </br>";
	print_r($angka);
	echo "</br>";

	echo "Ini isi index ke 2 dari array bulan : </br>";
	echo $bulan[2];
	echo "</br>";

 ?>
 <div><a href="../../index.php">Back to Index !</a></div>
</body>
</html>