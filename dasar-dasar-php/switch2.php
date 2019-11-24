<?php

$binatang = "sapi";

switch($binatang){
	case "ayam":
    	echo $binatang . " termasuk hewan omnivora";
        break;
	case "sapi":
    	echo $binatang . " termasuk hewan herbivora";
        break;
	case "kambing":
    	echo $binatang . " termasuk hewan herbivora";
        break;
	case "serigala":
    	echo $binatang . " termasuk hewan karnivora";
        break;
	case "harimau":
    	echo $binatang . " termasuk hewan karnivora";
        break;
	case "tikus":
    	echo $binatang . " termasuk hewan omnivora";
        break;
	default:
    	echo $binatang . " tidak terdaftar di program";
        break;
}