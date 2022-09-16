<?php
class CtrllSport
{
    public function actionIndex()
    {
        $lastProducts = Product::getKedManProducts(4);
        require_once(ROOT . '/pages/sport/index.php');
        return true;
    }
}