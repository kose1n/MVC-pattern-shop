<?php
class CtrllSneakForMan
{
    public function actionIndex()
    {
        $lastProducts = Product::getKrossManProducts(4);
        require_once(ROOT . '/pages/krossman/index.php');
        return true;
    }
}