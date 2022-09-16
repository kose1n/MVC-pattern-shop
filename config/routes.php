<?php

return array(

    'product/([0-9]+)' => 'product/view/$1',

    'kedman' => 'kedman/index',
    'krossman' => 'krossman/index',
    'kedgirls' => 'kedgirls/index',
    'krossgirls' => 'krossgirls/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet' => 'cabinet/index',
    'cart/checkout' => 'cart/checkout',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart' => 'cart/index',




    '' => 'site/index',

);
