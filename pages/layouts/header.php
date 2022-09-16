<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/template/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/template/css/styleeу.css">
    <link rel="stylesheet" href="/template/css/maine_eey.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<header class="header header-top">
    <div class="wrap">
        <a class="menu_logo" href="/">CH</a>
        <nav class="head_nav">
            <ul class="menu">
                <li class="menu_list"><a href="/" class="menu_link">ГЛАВНАЯ</a></li>
                <li class="menu_list"><a href="" class="menu_link">ЖЕНСКОЕ</a>
                    <ul class="dropdown">
                        <li><a href="/kedforgirls">Кеды</a></li>
                        <li><a href="/sneakforgirls">Кроссовки</a></li>
                    </ul>
                </li>
                <li class="menu_list"><a href="" class="menu_link">МУЖСКОЕ</a>
                    <ul class="dropdown">
                        <li><a href="/kedforman">Кеды</a></li>
                        <li><a href="/sneakforman">Кроссовки</a></li>
                    </ul>
                </li>
                <li class="menu_list"><a href="/sport" class="menu_link">СПОРТ</a></li>
            </ul>
        </nav>
        <div class="header_links">
            <?php if (User::isGuest()): ?>
                <li class="links_user">
                    <a href="" class="menu_link"><i class="icon_user"></i></a>
                    <ul class="dropdownuser">
                        <li><a style="color: black" href="/user/login">Войти</a></li>
                        <li><a style="color: black" href="/user/register">Регистрация</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li class="links_user"> <a href="/user/logout" class="menu_link">Выход</a></li>
                <li class="links_user"> <a href="/user/profile" class="menu_link"><i class="icon_user"></i></a>
            <?php endif; ?>

            <li class="links_user">
                <a href="/cart" class="menu_link">
                    <i class="icon_home">
                        <span class="count_basket" style=" font-weight: 500; font-size: 10px; background-position: center; color: white;" id="cart-count"><?php echo Cart::countItems(); ?></span>
                    </i>
                </a>
            </li>

        </div>

    </div>

</header>






