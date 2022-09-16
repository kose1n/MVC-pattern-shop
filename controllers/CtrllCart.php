<?php

class CtrllCart
{

    public function actionAddAjax($id) //,$size
    {
        echo Cart::addProduct($id); //, $size
        return true;
    }

    public function actionInsert($insert)
    {
        echo Cart::addSize($insert);
        return true;
    }

    public function actionIndex()
    {
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once(ROOT . '/pages/cart/index.php');
        return true;
    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("Location: /cart");
    }

    public function actionCheckout()
    {
        $productsInCart = Cart::getProducts();
        $productSizeInCart = $_SESSION['sizeproducts'];

        if ($productsInCart == false) {
            header("Location: /");
        }
        $productsIds = array_keys($productsInCart);
        $products = Product::getProdustsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);
        $totalQuantity = Cart::countItems();

        $userName = false;
        $userPhone = false;
        $userComment = false;
        $userAdress = false;
        $userCity = false;
        $userZip = false;
        $result = false;

        if (!User::isGuest()) {
            $userId = User::checkLoggedId();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            $userId = false;
        }

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $userAdress = $_POST['userAdress'];
            $userCity = $_POST['userCity'];
            $userZip = $_POST['userZip'];
            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }

            if ($errors == false) {
                $result = Order::save($userName, $userComment, $userId, $userPhone, $userCity, $userAdress, $userZip, $productSizeInCart);

                if ($result) {
                    Cart::clearCart();
                }
            }
        }
        require_once(ROOT . '/pages/cart/checkout.php');
        return true;
    }

}