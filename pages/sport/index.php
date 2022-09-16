<?php  include ROOT . '/pages/layouts/header.php'; ?>

<section class="new">
    <div class="container">
        <div class="row">
            <div class="new_content">
                <div class="new_header">
                    <h2 class="new_title">СПОРТИВНАЯ ОБУВЬ</h2>
                </div>
                <div class="new_product">
                    <?php foreach ($lastProducts as $product): ?>
                        <div class="col-md-4">
                            <a href="/product/<?php echo $product['id']; ?>">

                                <div class="product_block">
                                    <div class="product_img">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img"></div>
                                    <div class="product_text">
                                        <span style="span_text"><?php echo $product['name']; ?>  </span>
                                        <br>
                                        <span class="product_price"><?php echo $product['price']; ?> РУБ</span></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
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

<?php  include ROOT . '/pages/layouts/footer.php'; ?>


</head>
<body>
