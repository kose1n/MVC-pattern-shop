<?php  include ROOT. '/views/layouts/header.php'; ?>

<section class="sub_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-0 col-lg-10 offset-lg-1">
                <div class="promo_text">
                    <h1 class="tiltle">CHER-CROSS</h1>
                    <div class="promo_tilt">
                        Это крупный интернет-магазин молодежной обуви. Мы работаем на рынке уже более 8 лет и пердлагаем обувь Nike, Abibas, Reebak, PUMA, Tommy Hilfiger, GucciLebedi, ASICS и др.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="new">
    <div class="container">
        <div class="row">
            <div class="new_content">
                <div class="new_header">
                    <h2 class="new_title">НОВИНКИ</h2>
                </div>
                <div class="new_product">
                <?php foreach ($latestProducts as $product): ?>
                    <div class="col-md-4">
                        <div class="product_block">
                            <div class="product_img">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img"></div>
                            <div class="product_text"><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?>  <br> <span class="product_price"><?php echo $product['price']; ?> РУБ</span></a> </div>
                            <div class="product_code">Код товара: <?php echo $product['id']; ?></div>
                            <a href="#" data-id="<?php echo $product['id']; ?>" class="add-to-cart" ><button class="btn">Добавить в корзину</button></a>
                        </div>
                    </div>
                <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <div class="row">
    <div class="col-12">
        <div class="fadein">
            <img src="img/sneakers_shoes_surface_166343_1920x1080.jpg">
            <img src="img/jorge-salvador-Vz0ZNqVI90k-unsplash.jpg">
            <img src="img/cedric-letsch-X7GnLpLdl0M-unsplash.jpg">
        </div>
    </div>
</div> -->

<?php  include ROOT. '/views/layouts/footer.php'; ?>

</head>
<body>
