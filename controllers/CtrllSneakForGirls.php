<?php
class CtrllSneakForGirls
{
    public function actionIndex()
    {
        $lastProducts = Product::getKrossGirlsProducts(4);
        require_once(ROOT . '/pages/krossgirls/index.php');
        return true;
    }
}