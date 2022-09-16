<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    public function actionView($productId)
    {

        // Получаем инфомрацию о товаре
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);
        $product = Product::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}
