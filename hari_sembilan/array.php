<?php
// index array

$nama=array("Andi","Budi","Candra","Dedi","Emon"); 
echo $nama[3]."<br><br>";

// mengubah data
$nama[3]="udin";

// nambah data
$nama[]="kidul<br><br>"; 

// menghapus data
unset($nama[4]);

echo $nama[1]."<br><br>";

foreach ($nama as $n){ 
    echo $n.'<br>'; 
    } 


// assosiative array
$data=array("nama"=>"Andi", 
"nisn"=>"98765665845", 
"kelas"=>"XI RPL 1<br>"); 

foreach ($data as $dt){
    echo $dt.'<br>';
}

//update data
$data=array("nama"=>"andi",
            "nisn"=>"98765665845",
            "kelas"=>"XI RPL 1<br>");

$data['nama']="budi"; //merubah data

foreach ($data as $dt){
    echo $dt.'<br>';
}

//menambah data
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"jenis_kelamin"=>"laki-laki",
"kelas"=>"XI RPL 1<br>");

$data['nama']="budi";
$data['nisn']="123456789";
$data["jenis_kelamin"]="perempuan";//menambah data

foreach ($data as $dt)
    echo $dt.'<br>';

//menghapus data
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1<br>");

unset($data["nisn"]);//menghapus data nisn

foreach ($data as $dt){
echo $dt.'<br>';
}

//multidimensi
$data=array(
    array("nama"=>"andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
    array("nama"=>"budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
    array("nama"=>"candra","nisn"=>"98125665437","kelas"=>"XI RPL 2"),
    array("nama"=>"dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2"));

    foreach($data as $dt){
        echo $dt['nama'].'--'.$dt['nisn'].'--'.$dt['kelas']."<br>";
    }
    













    