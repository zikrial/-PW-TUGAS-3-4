<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4 Modul 3</title>
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
	$a = 6;		
	function faktorial ($a) {
		$hasil =1 ;
		for ($i=$a; $i >= 1 ; $i--) { 
		$hasil = $hasil*$i;
		}
		return "Faktorial dari $a = ".$hasil;
	} echo faktorial($a);
	 ?>
	 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>