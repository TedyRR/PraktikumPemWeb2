<?php 

//Inisiasi Array
$animals = ["burung", "sapi", "ikan", "tikus"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";

//Menampilkan data dengan looping
foreach ($animals as $animal) {
    echo $animal . "<br>";
}



//Inisiasi Array Asosiatif
$mahasiswa = ["nama"=>"Tedy", "jurusan"=>"SI", "semester"=>6];
echo $mahasiswa["jurusan"] . ",<br>";

//Menampilkan data
foreach ($mahasiswa as $key=>$value){
    echo "Key : " . $key . "Value : " . $value . "<br>";
}



//Inisiasi Array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0];

// 0


?>