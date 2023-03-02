<?php

require_once "../connect.php";

/**
 *@var PDO $db
 */

$input = json_decode(file_get_contents("php://input"), true);
$good_id = $input['good_id'];
$user_id = $input['user_id'];

$sql_select_amount = "select amount from carts where user_id = :user_id and good_id = :good_id";
$sql_update_amount = "update carts set amount = amount - 1 where user_id = :user_id and good_id = :good_id";
$sql_delete_good = "delete from carts where user_id = :user_id and good_id = :good_id";
$sql_update_rest = "update goods set rest = rest + 1 where id = :good_id";

try{
  $query_select_amount = $db->prepare($sql_select_amount);
  $query_update_amount = $db->prepare($sql_update_amount);
  $query_delete_good = $db->prepare($sql_delete_good);
  $query_update_rest = $db->prepare($sql_update_rest);

  $query_select_amount->execute(compact("user_id", "good_id"));
  $amount = $query_select_amount->fetch(PDO::FETCH_ASSOC)['amount'];

  $db->beginTransaction();

  if ($amount == 1){
    $query_delete_good->execute(compact("user_id", "good_id"));
  } else if ($amount > 1){
    $query_update_amount->execute(compact("user_id", "good_id"));
  }
    $query_update_rest->execute(compact("good_id"));

  $db->commit();

  echo json_encode(true, JSON_UNESCAPED_UNICODE);
}catch (Exception $e){
  $db->rollBack();

  echo json_encode(false, JSON_UNESCAPED_UNICODE);
}