<?php
class CtrllSite
{
    public function actionIndex()
    {
        $lastProducts = array();
        $lastProducts = Product::getPreviousProducts(15);
        require_once(ROOT . '/pages/site/index.php');
        return true;
    }

}
