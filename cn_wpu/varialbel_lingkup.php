<?php 
$x	= 10;
//echo "$x";

function tampilX() {
	$x = 20;
	echo "$x";
}

tampilX();
echo "<br/>";
echo $x;
echo "<br/><hr>";

// beda variable
$xi	= 100;
//echo "$x";

function tampilXI() {
	global $xi;
	echo "$xi";
}

tampilXI();

?>