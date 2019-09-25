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
	$hari = ["Senin", "Selasa", "Rabu"];

	echo "array awal : ";
	print_r($hari);
	echo "<hr>";

	echo "array setelah di pop : ";
	$hasil = array_pop($hari);
	print_r($hari);
	echo "<br> elemen yang di pop : $hasil <hr>";

	echo "array setelah di push : ";
	$hasil = array_push($hari, "Kamis", "Jum'at");
	print_r($hari);
	echo "<hr>";

	echo "array setelah di shift : ";
	$hasil = array_shift($hari);
	print_r($hari);
	echo "<br> elemen yang di shift : $hasil <hr>";

	echo "array setelah di unshift : ";
	$hasil = array_unshift($hari, "elemen", "ditambahkan");
	print_r($hari);

 ?>
 <div><a href="../../index.php">Back to Index !</a></div> 
 </body>
 </html>