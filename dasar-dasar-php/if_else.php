<?php

$matematika = 65;
$wawancara = "a";

if($matematika > 60){
	echo "Lolos tes, dengan predikat ";
    
	if(strtoupper($wawancara) == "A") {
    	echo "Sangat memuaskan";
    } else if(strtoupper($wawancara) == "B") {
		echo "Memuaskan";
    } else {
    	echo "Cukup";
    }
} else {
	echo "Tidak lolos tes";
}
?>