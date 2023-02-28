<?php

require_once '../connect.php';

$input = json_decode(file_get_contents("php://input"), true);

$user_id = $input['user_id'];
$good_id = $input['good_id'];

$sql_select_good_in_carts = "select * from cart where $user_id = :user_id and $good_id = :good_id";
$sql_insert_good_in_carts = "insert into cart(user_id, good_id, amount) values(:user_id, :good_id, 1)";
$sql_update_good_in_carts = "update carts set amount = :amount where user_id = :user_id and good_id = :good_id";
$sql_update_rest_in_goods = "update goods set rest = :rest where good_id = :good_id";

$query = $db->prepare($sql_select_good_in_carts);
$query->execute(compact('user_id', 'good_id'));
$good = $query->fetch(PDO::FETCH_ASSOC);

if ($good){
    try {
        $amount = $good['amount'] + 1;
        $rest
        $update_carts = $db->prepare($sql_update_good_in_carts);
        $update_goods = $db->prepare($sql_update_rest_in_goods);

        $db->beginTransaction();
        $update_carts->execute(compact())
    }
}

echo json_encode(true, JSON_UNESCAPED_UNICODE);

