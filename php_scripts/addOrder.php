<?php

require_once "../connect.php";

/**
 *@var PDO $db
 */

$input = json_decode(file_get_contents("php://input"), true);
$user_id = $input;

$sql_insert_into_orders = "insert into orders(user_id) values(:user_id)";
$sql_insert_into_order_good = "insert into order_good(order_id, good_id, amount)
                               select :order_id, good_id, amount
                               from carts
                               where user_id = :user_id";
$sql_delete_from_carts = "delete from carts
                          where user_id = :user_id";

try{
  $query_insert_into_orders = $db->prepare($sql_insert_into_orders);
  $query_insert_into_order_good = $db->prepare($sql_insert_into_order_good);
  $query_delete_from_carts = $db->prepare($sql_delete_from_carts);

  $db->beginTransaction();

  $query_insert_into_orders->execute(compact('user_id'));
  $order_id = $db->lastInsertId();
  $query_insert_into_order_good->execute(compact('order_id', 'user_id'));
  $query_delete_from_carts->execute(compact('user_id'));

  $db->commit();

  echo json_encode(true, JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
  $db->rollBack();

  echo json_encode(false, JSON_UNESCAPED_UNICODE);
}