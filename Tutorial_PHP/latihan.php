<?php

echo "Universitas Sebelas Maret<br />";
Echo "Universitas Sebelas Maret<br />";
ecHo "Universitas Sebelas Maret<br /><br />";

$prodi = "Informatika";
echo "Prodi saya $prodi<br />";
echo "Prodi teman saya di " . $prodi . "<br /><br />";

$x = 100;
$y = 92;

function pertambahan() {
	return $GLOBALS['a'] = $GLOBALS['x'] + $GLOBALS['y'];	
}

var_dump(pertambahan());

echo $x + $y;
pertambahan();

echo $a;