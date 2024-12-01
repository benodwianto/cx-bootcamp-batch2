<?php
header("Content-Type: application/json");

$users = [
    ["id" => 1, "name" => "John Doe"],
    ["id" => 2, "name" => "Jane Doe"]
];
echo json_encode($users);

//Array to Json
// $data = [
//     'nama' => "Joko",
//     'umur' => 50
// ];

// echo json_encode($data);
// echo "<br>";

//Json to Array
// $json = '{"nama":"Joko","umur":50, "alamat":"gunung padang"}';
// $arr = json_decode($json, true);
// echo $arr['nama'];
