<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Modul 4</title>
	<style>
		tr {
			text-align: center;
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
		$negara = array (
			["Indonesia","D.K.I Jakarta","+62"],
			["Singapura","Singapura","+65"],
			["Malaysia","Kuala Lumpur","+60"],
			["Brunei","Bandar Seri Begawan","+673"],
			["Thailand","Bangkok","+66"],
			["Laos","Vientiane","+856"],
			["Filipina","Manila","+63"],
			["Myanmar","Naypyidaw","+95"],
			);
	?>

	<table border="1">
		<tr>
			<td><b>Negara</b></td>
			<td><b>Ibukota</b></td>
			<td><b>Kode Telepon</b></td>
		</tr>
		<?php 
		foreach ($negara as $urutan) {
		 	echo "<tr><td>$urutan[0]</td><td>$urutan[1]</td><td>$urutan[2]</td></tr>";
		 } ?>
	</table>
	 <div><a href="../../index.php">Back to Index !</a></div>
</body>
</html>