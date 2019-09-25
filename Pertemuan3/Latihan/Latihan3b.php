<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 Modul 3</title>
	<style>
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
	$bilangan = null;
	$angka = 1;
	echo isset($angka);//jika dia bernilai maka true jika tidak false
	echo "<br>penggunaan echo isset jika dia bernilai maka true jika tidak false <br>";
	echo empty($bilangan);//jika dia tidak bernilai maka true jika bernilai false
	echo "<br>penggunaan echo empty jika dia tidak bernilai maka true jika bernilai false <br>";
	 ?>
	 <div><a href="../../index.php">Back to Index !</a></div>
</body>
</html>