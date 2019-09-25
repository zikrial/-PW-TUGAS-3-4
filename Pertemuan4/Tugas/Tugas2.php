<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 Modul 4</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/Tugas2.css">
	<style type="text/css">
		.back {
			position: fixed;
			top: 100px;
			left: 10px;
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
	<h1>PENEMU - PENEMU TERKENAL DI DUNIA</h1>
	<?php 
		$temuan = array (
			["Galileo Galilei", "Termometer", "Italia", "1593", "GalileoGalilei.jpg"],
			["Guglielmo Marconi", "Radio", "Italia", "1895", "GuglielmoMarconi.jpg"],
			["J. Lagie Baird", "Televisi", "Inggris", "1920", "J.LagieBaird.jpg"],
			["Samuel F.B. Morse", "Telegrap", "Amerika Serikat", "1837", "SamuelMorse.jpg"],
			["Alexander Graham Bell", "Telepon", "Amerika Serikat", "1876", "AlexanderGrahamBell.jpg"],
			["Michael Faraday", "Dinamo", "Inggris", "1831", "MichaelFaraday.jpg"],
			["Wilbur dan Wright", "Pesawat terbang", "Amerika Serikat", "1903", "OliverdanWilbur.jpg"],
			["Thomas Alfa Edison", "Bola lampu", "Amerika Serikat", "1868", "thomasalvaedison.jpg"],
			["Robert Fulton" , "Kapal api", "Amerika Serikat", "1807", "robertfulton.jpg"],
			["James Watt", "Mesin uap", "Inggris", "1765", "JamesWatt.jpg"] );

	?>

	<table align="Center">
		<tr>
			<th>Penemu</th>
			<th>Temuan</th>
			<th>Asal Negara</th>
			<th>Tahun ditemukan</th>
			<th>Gambar Penemu</th>
		</tr>
		<?php 
		foreach ($temuan as $urutan) {
		 	echo "<tr><td>$urutan[0]</td>
		 		<td>$urutan[1]</td>
		 		<td>$urutan[2]</td>
		 		<td>$urutan[3]</td>
		 		<td><img src='../../assets/image/$urutan[4]'></td>
		 		</tr>";
		 } ?>

 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>