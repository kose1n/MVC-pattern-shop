<?php
class CtrllKedForMan
{
    public function actionIndex()
    {
        $lastProducts = Product::getKedManProducts(4);
        require_once(ROOT . '/pages/kedman/index.php');

        return true;
    }
}