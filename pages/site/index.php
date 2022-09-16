<?php  include ROOT . '/pages/layouts/header.php'; ?>

<section class="sub_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-0 col-lg-10 offset-lg-1">
                <div class="promo_text">
                    <h1 class="tiltle">CHEROSS</h1>
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
                <div class="small_banners">
                    <div class="item">
                        <a class="js_bs_counter bs_counter" href="/sneakforman"><img src="/template/img/Homepage/mankro.jpg" alt="">
                            <span class="name_span"><spen>МУЖСКИЕ КРОССОВКИ</spen></span>
                        </a></div>
                    <div class="item">
                        <a class="js_bs_counter bs_counter"  href="/sport"><img src="/template/img/Homepage/sport.jpg" alt="">
                            <span class="name_span"><span>СПОРТ</span></span>
                        </a></div>
                    <div  class="item">
                        <a  class="js_bs_counter bs_counter"  href="/sneakforgirls"><img style="max-height: 150%;" src="/template/img/Homepage/krgirls.jpg" alt="">
                            <span class="name_span"><spen>ЖЕНСКИЕ КРОССОВКИ</spen></span>
                        </a></div>
                </div>
                
                <div class="new_header">
                    <hr style="width: 30%">
                    <h2 style="color: black; font-size: 30px;" class="new_title">НОВИНКИ</h2>
                    <hr style="width: 30%">
                </div>
                <div class="new_product">
                <?php foreach ($lastProducts as $product): ?>
                <?php if ($product['is_new']): ?>
                    <div class="col-md-4">
                        <a href="/product/<?php echo $product['id']; ?>">

                        <div class="product_block">
                            <div class="product_img">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img">
                            </div>
                            <div class="product_text">
                                <span style="span_text"><?php echo $product['name']; ?>  </span>
                                <br>
                                <span class="product_price"><?php echo $product['price']; ?> РУБ</span>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php endforeach?>
                </div>
                <div class="new_header">
                    <hr style="width: 30%">
                    <h2 style="color: black; font-size: 30px;" class="new_title">БРЕНДЫ ТОВАРОВ</h2>
                    <hr style="width: 30%">
                </div>
                <div class="small_banners">
                    <div class="item">
                        <a class="js_bs_counter bs_counter" href="/sneakforman"><img src="/template/img/first_brand/nike.jpg" alt="">
                            <span class="name_span"><spen></spen></span>
                        </a></div>
                    <div class="item">
                        <a class="js_bs_counter bs_counter"  href="/sport"><img src="/template/img/first_brand/adidas0.jpg" alt="">
                            <span class="name_span"><span></span></span>
                        </a>
                    </div>
                    <div  class="item">
                        <a  class="js_bs_counter bs_counter"  href="/sneakforgirls"><img src="/template/img/first_brand/rebbok.jpg" alt="">
                            <span class="name_span"><spen></spen></span>
                        </a>
                    </div>
                    <div  class="item">
                        <a  class="js_bs_counter bs_counter"  href="/sneakforgirls"><img src="/template/img/first_brand/New_Balance_logo.png" alt="">
                            <span class="name_span"><spen></spen></span>
                        </a>
                    </div>
                    <div  class="item">
                        <a  class="js_bs_counter bs_counter"  href="/sneakforgirls"><img src="/template/img/first_brand/Timberland.jpg" alt="">
                            <span class="name_span"><spen></spen></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  include ROOT . '/pages/layouts/footer.php'; ?>

</head>
<body>
