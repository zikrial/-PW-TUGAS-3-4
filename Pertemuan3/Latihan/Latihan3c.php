<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Modul 3</title>
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
	$angka = 5;
	$pangkat = 4;
	function pangkat($angka, $pangkat) {
		pow($angka, $pangkat);
		return "$angka pangkat $pangkat = ".pow($angka, $pangkat);
	}
	echo pangkat($angka, $pangkat);
	 ?>
	 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>