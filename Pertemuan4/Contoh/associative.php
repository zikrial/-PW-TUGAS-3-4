<?php 
	$mahasiswa = [
		"001" => "Ahmad",
		"002" => "Budi",
		"003" => "Chika",
		"004" => "Dhini",
		"005" => "Erwin"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>looping for array</title>
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
 	<?php foreach ($mahasiswa as $nrp => $nama) : ?>
 		<li><?php echo "$nrp : $nama" ?></li>
 	<?php endforeach ?>

 <div><a href="../../index.php">Back to Index !</a></div>
 
 </body>
 </html>