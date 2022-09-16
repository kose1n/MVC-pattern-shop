<?php


class SiteController
{

    public function actionIndex()
    {


        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}
