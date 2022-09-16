<?php
class News
{
    public static function editUserCabinetImg($id_user, $img_url, $tmp_name_img)
    {
        $ava_url = self::downloadAvatar($img_url, $tmp_name_img);
        $db = DateBaseConnect::getConnection();
        $sql = "UPDATE user ava SET ava = :ava WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':ava', $ava_url, PDO::PARAM_STR);
        $result->bindParam(':id', $id_user, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function downloadAvatar($img_url, $tmp_name_img)
    {
        $path = 'C:/openserver/domains/localhost/template/avatars/';
        move_uploaded_file($tmp_name_img, $path .  $img_url);
        return $img_url;
    }


}

