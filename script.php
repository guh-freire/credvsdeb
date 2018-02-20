<?php

//Onde $a=debito $b=credito.
//Executar Script

$a=[];

$b=[];

$iguais = [];
$diferentes = [];
foreach($a as $item){
    $i = array_search($item, $b);
    if($i !== false){
        $iguais[] = '('. $item .', '. $b[$i] .')';
        unset($b[$i]);
    }else{
        $diferentes[] = $item;
    }
}
 
$d = [$b];
$e = [$diferentes];
 
$common = array_intersect( $diferentes, $b,$a); 
 
$diff2 = array_diff( $b, $common );
$diff3 = array_diff( $diferentes, $common );
 
$diferentes += $b;
 
echo "IGUAIS - ";
print_r($iguais);

echo "FALTA PERNA EM CREDITO - ";
print_r($diff3);

echo "SOMA(a) = ".array_sum($diff3)."\n";

echo "FALTA PERNA EM DEBITO - ";
print_r($diff2);

echo "SOMA(a) = ".array_sum($diff2)."\n";

?>

