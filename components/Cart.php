<?php
//shopping cart
class Cart
{
    public static function addProduct($id) //,$size
    {
        $id = intval($id);
        $productsInCart = array();
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;


        return self::countItems();
    }

    public static function addSize($insert)
    {

        $keys = array_keys($_SESSION['products']);
        $id = array_pop($keys);
        $productSizeInCart = array();

        if (isset($_SESSION['sizeproducts'])) {
        $productSizeInCart = $_SESSION['sizeproducts'];
        }

        if (array_key_exists($id, $productSizeInCart)) {
            array_push($productSizeInCart[$id],$insert);
        } else {
            $productSizeInCart[$id] = [$insert];
        }

        $_SESSION['sizeproducts'] = $productSizeInCart;
        return $insert;
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getProductsSize()
    {
        if (isset($_SESSION['sizeproducts'])) {
            return $_SESSION['sizeproducts'];
        }
        return false;
    }

    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;

        $productsSizeInCart = self::getProductsSize();
        unset($productsSizeInCart[$id]);
        $_SESSION['sizeproducts'] = $productsSizeInCart;
    }

    public static function clearCart()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
        if (isset($_SESSION['sizeproducts'])) {
            unset($_SESSION['sizeproducts']);
        }
    }

}