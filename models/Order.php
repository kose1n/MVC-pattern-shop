<?php

class Order
{
    public static function save($userName, $userComment, $userId, $userPhone, $userCity, $userAdress, $userZip, $productSizeInCart)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'INSERT INTO order_users (user_name, user_phone, user_comment, user_id, user_adress, user_city, user_zip, products) '
                . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :user_adress, :user_city, :user_zip, :products)';

        $productSizeInCart = json_encode($productSizeInCart);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':user_adress', $userAdress, PDO::PARAM_STR);
        $result->bindParam(':user_city', $userCity, PDO::PARAM_STR);
        $result->bindParam(':user_zip', $userZip, PDO::PARAM_STR);
        $result->bindParam(':user_zip', $userZip, PDO::PARAM_STR);
        $result->bindParam(':products', $productSizeInCart, PDO::PARAM_STR);
        return $result->execute();
    }
}
