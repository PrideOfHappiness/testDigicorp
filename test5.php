<?php 
    $string = 'Strawberry';
    $hasil = count_chars($string);

    $jumlah = 0;
    $commonChar = '';
    $common = [];

    foreach ($hasil as $key=>$value){
        if($value > $jumlah && ctype_alpha(chr($key))){
            $jumlah = $value;
            $commonChar = chr($key);
        }
    }

    echo "$string <br>";
    echo "$commonChar " . $jumlah . "br>";
?>