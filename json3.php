<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->name;
echo "<br>";
echo "No_HP : "; echo $obj->no_hp;
echo "<br>";
echo "Matakuliah: ";echo $obj->matakuliah[0];
echo "<br>";
echo "Matakuliah kedua: ";echo $obj->matakuliah[1];
echo "<br>";
echo "Matakuliah ketiga: ";echo $obj->matakuliah[2];
?>