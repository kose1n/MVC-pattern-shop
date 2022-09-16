<?php



class KrossGirlsController
{

    public function actionIndex()
    {

        $latestProducts = Product::getLatestProducts(9);

        require_once(ROOT . '/views/krossgirls/index.php');

        return true;
    }
}