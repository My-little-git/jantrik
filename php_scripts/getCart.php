<?php

require_once '../connect.php';

$input = json_decode(file_get_contents('php://input'), true);
$user_id = $input;

$sql_select_goods = "select g.id, g.name, g.img, g.price, c.amount
                     from carts c inner join goods g 
                     where c.user_id = :user_id";
$query = $db->prepare($sql_select_goods);
$query->execute(compact('user_id'));
$goods = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($goods, JSON_UNESCAPED_UNICODE);