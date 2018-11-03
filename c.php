<?php
function acak($panjang)
{
    $karakter= '123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
	$pos = rand(0, strlen($karakter)-1);
	$string .= $karakter{$pos};
    }
    return $string;
}
$hasil_1= acak(3);
echo $hasil_1;

echo $today = date("Y-m-d H:i:s");  
?>