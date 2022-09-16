<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/template/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <div class="container-fluid">
            <div id="header" class="header">
                <ul class="menu">
                    <a href="/"><img src="/template/img/icon/running%20(3).png" alt="" class="menu_logo"></a>
                    <li class="menu_list"><a href="/" class="menu_link">ГЛАВНАЯ</a></li>
                    <li class="menu_list"><a href="" class="menu_link">ЖЕНСКОЕ</a>
                        <div class="dropdown">
                            <a href="/kedgirls">Кеды</a>
                            <a href="/krossgirls">Кроссовки</a>
                            <a href="#">Туфли</a>
                        </div>
                    </li>
                    <li class="menu_list"><a href="" class="menu_link">МУЖСКОЕ</a>
                        <div class="dropdown">
                            <a href="/kedman">Кеды</a>
                            <a href="/krossman">Кроссовки</a>
                            <a href="#">Туфли</a>
                        </div></li>

                    <?php if (User::isGuest()): ?>
                    <li class="menu_list"><a href="/user/login/" class="menu_link">Вход</a></li>
                    <li class="menu_list"><a href="/user/register" class="menu_link">Регистрация</a></li>
                    <?php else: ?>
                    <li class="menu_list"><a href="/cabinet" class="menu_link">Аккаунт</a></li>
                    <li class="menu_list"><a href="/user/logout/" class="menu_link">Выход</a></li>
                    <?php endif; ?>
                    <a style="color: black" href="/cart">
                        <img src="/template/img/icon/shopping-cart.png" alt="" class="menu_logo">
                        (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</a>

                </ul>
            </div>
        </div>
        <!-- <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div> -->
    </nav>
</header>


