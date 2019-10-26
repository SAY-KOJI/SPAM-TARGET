<?php
include 'func.php';

/*
    https://github.com/SAY-KOJI/SAPM-TARGET
    Made by SAY-KOJI
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 3x/Jam)

echo "Nomor? (ex : 628xxxx)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "081390962290"; //Nomer Hp tujuan

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
