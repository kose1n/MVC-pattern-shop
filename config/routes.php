<?php

return array(

    'product/([0-9]+)' => 'product/view/$1',
    'kedforman' => 'kedforman/index',
    'sneakforman' => 'sneakforman/index',
    'kedforgirls' => 'kedforgirls/index',
    'sneakforgirls' => 'sneakforgirls/index',
    'sport' => 'sport/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/profile' => 'profile/index',
    'cart/checkout' => 'cart/checkout',
    'cart/insert' => 'cart/insert',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart' => 'cart/index',
    '' => 'site/index',

);

