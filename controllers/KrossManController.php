<?php

class KrossManController
{

    public function actionIndex()
    {

        $latestProducts = Product::getLatestProducts(12);

        require_once(ROOT . '/views/krossman/index.php');

        return true;
    }
}