<!DOCTYPE html>
<html>
<head>
	<title> Latihan 1 Modul 3</title>
	<style>
		.ganti-style {
			font-family: arial;
			font-size: 28px;
			color: #1A0547;
			font-style: italic;
			font-weight: bold;
		}
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
	$tulisan = "Hello World! Here I come !!!";
	$kelas = "ganti-style";
	function ganti_style($tulisan, $kelas) {
		echo "<p class=".$kelas.">$tulisan</p>";
	}
	echo ganti_style($tulisan, $kelas); 
	 ?>
	 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>