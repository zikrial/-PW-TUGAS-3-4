<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 Modul 4</title>
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
		$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
		echo "<b>Daftar Negara ASEAN awal : </b>";
		foreach ($negara as $urutan) {
			echo "<li>$urutan</li>";
		}
		echo "<b><br>Daftar Negara ASEAN baru : </b>";
		$negara[] = "Laos";
		$negara[] = "Filipina";
		$negara[] = "Myanmar";
		foreach ($negara as $urutan) {
		 	echo "<li>$urutan</li>";
		 } ?>

	 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>