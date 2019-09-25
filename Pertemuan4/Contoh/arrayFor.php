<?php 
	$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];
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
 	<?php 
 	for ($i=0; $i < count($nama) ; $i++) { 
 	 	echo "<li>$nama[$i]</li>";
 	 } 
 	 ?>
 <div><a href="../../index.php">Back to Index !</a></div>
 
 </body>
 </html>