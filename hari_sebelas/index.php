<?php 

echo "nomor 1<br><br>";
function buat(){
    echo "Buatkanlah saya dokumen<br>";
    echo "<br>";
}

buat();
buat();

echo "nomor 2<br><br>";
function nilai($bil1,$bil2,$bil3=20){
    return $bil1-$bil2-$bil3;
 }
 echo nilai(10,6,2)."<br>";
 echo nilai(20,3)."<br>";
 $jum=nilai(30,17,2)."<br><br>";
 echo $jum;


echo "nomor 3<br><br>";
function jumlahkan($bil1,$bil2,$bil3){
   return $bil1-$bil2-$bil3;
}
echo jumlahkan(14,26,2)."<br>";
echo jumlahkan(20,15,7)."<br>";
$jumlah=jumlahkan(26,11,2);
echo $jumlah;

?>