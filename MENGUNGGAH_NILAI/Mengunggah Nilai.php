<?php
$nilai = 77;
echo "Nilai = $nilai";

//bagaimana jika kita melakukan konversi ke nilai huruf? dengan grade
/*
A = 85 - 100
B = 75 - 89.99
C = 65 - 79.99
D = 55 - 69.99
E = 0 - 59.99
*/
echo "<hr";
if($nilai >= 85 and $nilai <= 100 ) { echo "A"; } //ini adalah konsep awalnya, mari kita jalankan.
if($nilai >= 75 and $nilai < 90) { echo "B"; } //mengapa < 90 ? karena 89.999999... dst bisa menjadi bug jadi lebih amannya kita fix kan saja semua yang kurang dari 90 adalah batas atasnya.
if($nilai >= 65 and $nilai < 80) { echo "C";}
if($nilai >= 55 and $nilai < 70) { echo "D";}
if($nilai >= 0 and $nilai <60) { echo "E";}
// coba bikin function yuk
?>
<hr>
konverensi nilai dengan