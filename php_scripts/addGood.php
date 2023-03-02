<?php

require_once '../connect.php';

/**
 *@var PDO $db
 */

$input = json_decode(file_get_contents("php://input"), true);

$user_id = $input['user_id'];
$good_id = $input['good_id'];

$sql_select_good_in_carts = "select * from carts where user_id = :user_id and good_id = :good_id";
$sql_select_good_in_goods = "select rest from goods where id = :good_id";
$sql_insert_good_in_carts = "insert into carts(user_id, good_id, amount) values(:user_id, :good_id, 1)";
$sql_update_good_in_carts = "update carts set amount = :amount where user_id = :user_id and good_id = :good_id";
$sql_update_rest_in_goods = "update goods set rest = :rest where id = :good_id";

$query = $db->prepare($sql_select_good_in_carts);
$query->execute(compact('user_id', 'good_id'));
$good_in_cart = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare($sql_select_good_in_goods);
$query->execute(compact('good_id'));
$rest = $query->fetch(PDO::FETCH_ASSOC)['rest'];

if ($good_in_cart){
  try {
    $amount = $good_in_cart['amount'] + 1;
    $rest -= 1;

    $update_carts = $db->prepare($sql_update_good_in_carts);
    $update_goods = $db->prepare($sql_update_rest_in_goods);

    $db->beginTransaction();
    $update_carts->execute(compact('amount', 'user_id', 'good_id'));
    $update_goods->execute(compact('rest', 'good_id'));
    $db->commit();
  } catch (Exception $e){
    $db->rollBack();
    echo "Ошибка: " . $e->getMessage();
  }
} else {
  try {
    $query = $db->prepare($sql_insert_good_in_carts);

    $db->beginTransaction();
    $query->execute(compact('user_id', 'good_id'));
    $db->commit();
  } catch (Exception $e) {
    $db->rollBack();
    echo "Ошибка: " . $e->getMessage();
  }
}

echo json_encode(true, JSON_UNESCAPED_UNICODE);

