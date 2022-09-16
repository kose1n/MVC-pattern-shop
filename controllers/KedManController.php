<?php



class KedManController
{

    public function actionIndex()
    {

        $latestProducts = Product::getLatestProducts(12);

        require_once(ROOT . '/views/kedman/index.php');

        return true;
    }
}