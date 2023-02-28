<?php

require '../connect.php';

$input = json_decode(file_get_contents("php://input"), true);
$sql_select_rest = "select rest from goods where id = :id";

$data = $db->prepare($sql_select_rest);
$data->execute(['id' => $input]);

$rest = $data->fetch(PDO::FETCH_ASSOC)['rest'];

if ($rest){
  echo json_encode(true, JSON_UNESCAPED_UNICODE);
}else {
  echo json_encode(false, JSON_UNESCAPED_UNICODE);
}