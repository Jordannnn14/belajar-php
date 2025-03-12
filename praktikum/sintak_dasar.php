<?php
echo "Selamat datang di PHP";
?>

<h4>variabel dan tipe data</h4> 
<br>
<?php
$nama = "M Jordan Sulaeman";
$umur = 21;
echo "Nama saya " . $nama . " dan saya berumur " . $umur . " tahun.";
?>


<br>
<h4>ini adalah oprator aritmatika</h4>
<?php
$a = 10;
$b = 5;
$jumlah = $a + $b;
echo "Hasil penjumlahan: " . $jumlah;
?>

<br>
<h4>oprator perbandingan</h4>
<?php
$x = 10;
$y = 20;
if ($x < $y) {
echo "$x lebih kecil dari $y";
}
?>

<br>
<h4>Operator Logika</h4>
<?php
$nilai = 85;
if ($nilai >= 70 && $nilai <= 100) {
echo "Lulus";
} else {
echo "Tidak Lulus";
}
?>