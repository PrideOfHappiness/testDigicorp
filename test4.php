<?php 
function sortAngka($angkaArray){
    $n = count($angkaArray);
    for($i=0; $i<$n-1 ;$i++){
        for($j=0; $j<$n - 1; $j++){
            if($angkaArray[$j] > $angkaArray[$j + 1]){
                $hasil = $angkaArray[$j];
                $angkaArray[$j] = $angkaArray[$j + 1];
                $angkaArray[$j + 1] = $hasil;
            }
        }
    }

    return $angkaArray;
}

//Test function
$a = [];
for($i=0; $i<5; $i++){
    $random = rand(10,100);
    if(!in_array($random,$a)){
        array_push($a,$random);
    }
}

var_dump($a);
$hasil = sortAngka($a);
echo "Angka terbesar adalah: " . $hasil[3] . "\n";
?>