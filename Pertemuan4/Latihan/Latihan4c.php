<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Modul 4</title>
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
		$negara = [
			"D.K.I Jakarta" => "Indonesia",
			"Singapura" => "Singapura",
			"Kuala Lumpur" => "Malaysia",
			"Bandar Seri Begawan" => "Brunei",
			"Bangkok" => "Thailand",
			"Vientiane" => "Laos",
			"Manila" => "Filipina",
			"Naypyidaw" => "Myanmar"];
		echo "<b>Daftar Negara ASEAN dan Ibukota : </b>";
		foreach ($negara as $urutan => $ibukota) {
			echo "<li>$ibukota : $urutan</li>";
		}

		?>

	 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>