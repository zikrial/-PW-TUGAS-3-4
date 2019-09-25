
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
	function nominal($nominal = 10000) {
		echo "Nominal = $nominal";
	};
	nominal(12500);
	echo "<br>";
	nominal();

 ?>
 <div><a href="../../index.php">Back to Index !</a></div>
 
 </body>
 </html>