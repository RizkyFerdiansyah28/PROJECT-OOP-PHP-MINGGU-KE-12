<?php 

// array dimensi

// $nama = array("joni","teja","budi","siti",100,2.5);

// var_dump($nama);

// echo "<br>";

// echo $nama[5];

// echo "<br>";

// for ($i=0; $i < 0; $i++) { 
//     # code...
//     echo $nama[$i]."<br>";
// }

// foreach ($nama as $k) {
//     echo $k.'<br>';
// }

// array asosiatif

// $nama = array(
//      "joni" => "surabaya";
//      "budi" => "malang raya";
//      "tejo" => "jakarta";
//      "siti" => "sidoarjo";
// );

     
$nama["joni"]="surabaya";
$nama["budi"]="malang raya";
$nama["tejo"]="jakarta";
$nama["siti"]="ssidoarjo";
$nama["rdi"]="semarang";

var_dump($nama);

echo "<br>";

// echo $nama['budi'];

foreach ($nama as $k => $v) {
    echo $k." => ".$v;

    echo "<br>";
}


?>