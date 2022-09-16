<?php
class CtrllKedForGirls
{
    public function actionIndex()
    {
        $lastProducts = Product::getKedGirlsProducts(4);
        require_once(ROOT . '/pages/kedgirls/index.php');

        return true;
    }
}