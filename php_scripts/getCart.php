<?php

require_once '../connect.php';

/**
 *@var PDO $db
 */

$input = json_decode(file_get_contents('php://input'), true);
$user_id = $input;

$sql_select_goods = "select g.id, g.name, g.img, g.price, c.amount, g.price * c.amount as total
                     from carts c inner join goods g on c.good_id = g.id
                     where c.user_id = :user_id";

try {
  $query = $db->prepare($sql_select_goods);

  $db->beginTransaction();
  $query->execute(compact('user_id'));
  $db->commit();

  $goods = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  $db->rollBack();
  echo "Ошибка: " . $e->getMessage();
}



echo json_encode($goods, JSON_UNESCAPED_UNICODE);