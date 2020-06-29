<?php

$S="CodingCoding";



$array = str_split($S);
$result = array_unique($array);


for( $i=0 ; $i < count($result); $i++){
    $fin .= $result[$i] ;
}

echo $fin;