<?php

function ganti_kata($kata, $cari, $ganti){
    $array = str_split($kata);
    // print_r($array);
    for($i = 0; $i < count($array); $i++){
        print_r(array_keys());
        
        $condition = $array[$i] == $cari;
        if($condition){
            
        }
    } 

    echo str_replace($cari, $ganti, $kata);
}

print ganti_kata("purwakerta", "a", "o")
?>