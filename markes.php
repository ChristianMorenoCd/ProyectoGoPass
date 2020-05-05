<?php

$url="https://api.gopass.com.co/maps/serviceWeb";
$resp;

$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
// var_dump(json_decode($result, true));

// echo (json_encode($result));
// echo $resultado = json_decode($result);

// $op = $_GET['tipo'];

// if($op == '1'){
//     echo json_decode($result);
// }

echo $result;

// var_dump($resultado);

?>