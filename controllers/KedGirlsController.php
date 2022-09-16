<?php



class KedGirlsController
{

    public function actionIndex()
    {

        $latestProducts = Product::getLatestProducts(9);

        require_once(ROOT . '/views/kedgirls/index.php');

        return true;
    }
}