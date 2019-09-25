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
	$GLOBALS['varGlobal'] = 18;
	function testvar()
	{
		$varLokal = 1;
		echo "<p> test variable didalam function.</p>";
		echo "Variable global : ".$GLOBALS['varGlobal'];
		echo "<br>";
		echo "variable lokal : $varLokal";
		echo "<br>";
	}

	testvar();
		echo "<p> test variable didalam function.</p>";
		echo "Variable global : $varGlobal";
		echo "<br>";
		// tidak bisa diakses variable dari dalam fungsi
		echo "Variable lokal : $varLokal";
		echo "<br>";


 ?>

 <div><a href="../../index.php">Back to Index !</a></div>
 
 </body>
 </html>