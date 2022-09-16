<?php
class Product
{
    const SHOW_BY_DEFAULT = 10;
    public static function getPreviousProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }
    public static function getKedGirlsProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT id, name, price, is_new FROM product_girls_keds '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        // conv to array and run
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function getKrossGirlsProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT id, name, price, is_new FROM product_girls_kross '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }
    public static function getKrossManProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT id, name, price, is_new FROM product_man_kross '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function getKedManProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT id, name, price, is_new FROM product_man_keds '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }



    public static function getProductById($id)
    {
        $db = DateBaseConnect::getConnection();
        $sql = 'SELECT * FROM product WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getProdustsByIds($idsArray)
    {
        $db = DateBaseConnect::getConnection();
        $idsString = implode(',', $idsArray);
        #18
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        $products = array();

        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['avallabillty'] = $row['avallabillty'];
            $i++;
        }
        return $products;
    }


    public static function getImage($id)
    {
        $path = '/upload/images/products/photo/';
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            return $pathToProductImage;
        }
        return $path;
    }
    public static function getAvailability($avallabillty)
    {
        switch ($avallabillty) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Нет в наличии, только под заказ';
                break;
        }
    }

}