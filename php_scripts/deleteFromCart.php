<?php

require_once "../connect.php";

/**
 *@var PDO $db
 */

$input = json_decode(file_get_contents("php://input"), true);
$user_id = (int) $input['user_id'];
$good_id = (int) $input['good_id'];

$sql_delete_good_from_carts = "delete from carts where user_id = :user_id and good_id = :good_id";
$sql_update_rest_in_goods = "update goods
                             set rest = rest + (select amount
                                                from carts
                                                where user_id = :user_id and good_id = :good_id)
                             where id = :good_id";

try {

  $delete_good = $db->prepare($sql_delete_good_from_carts);
  $update_rest = $db->prepare($sql_update_rest_in_goods);

  $db->beginTransaction();
  $update_rest->execute(compact('user_id', 'good_id'));
  $delete_good->execute(compact('user_id', 'good_id'));
  $db->commit();

  echo json_encode(true, JSON_UNESCAPED_UNICODE);

} catch (Exception $e) {

  $db->rollBack();
  echo json_encode($e->getMessage(), JSON_UNESCAPED_UNICODE);

}