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
	function tulis_miring($text) {
		echo "<i>$text</i>";
	}
	echo tulis_miring("Ini Miring");
 ?>
 <div><a href="../../index.php">Back to Index !</a></div>

</body>
</html>