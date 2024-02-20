<?php 
$RGB = ['Merah', 'Kuning', 'Hijau'];
$posisi = 0;

for($i = 0; $i < count($RGB); $i++) {
    $index = ($i + ($posisi + 3)) % count($RGB);
    $hasil = $RGB[$index];
    echo $hasil;
    echo "<br>";
}
?>