<?php
class CtrllProduct
{
    public function actionView($productId)
    {
        $lastProducts = array();
        $lastProducts = Product::getPreviousProducts(3);
        $product = Product::getProductById($productId);
        require_once(ROOT . '/pages/product/view.php');

        return true;
    }

}
