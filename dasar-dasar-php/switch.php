<?php

$haywan = "kalb";

switch($haywan) {
	case "hirroh":
    	echo "<h1>Ini Gambar Kucing</h1>";
    	echo '<img src="http://i.imgur.com/4AiXzf8.jpg" />';
        break;
    case "kalb":
    	echo "<h1>Ini Gambar Anjing</h1>";
    	echo '<img src="http://i.imgur.com/A8eQsll.jpg" />';
        break;
    case "qird":
        echo "<h1>Ini Gambar Monyet</h1>";
    	echo '<img src="http://i.imgur.com/CXwaR8c.jpg" />';
        break;
    default:
    	echo "<h1>Ini Gambar Manusia</h1>";
    	echo '<img src="http://i.imgur.com/u0mFu.jpg" />';
}