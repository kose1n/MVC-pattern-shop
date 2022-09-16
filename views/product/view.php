<?php  include ROOT. '/views/layouts/header.php'; ?>
<section class="new">
    <div class="container">
        <div class="row">
            <div class="new_content">
                <div class="content_up">
                    <div class="product_img"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img"></div>
                    <div class="product_content">
                        <div class="product_name"><?php echo $product['name']; ?> </div>
                        <div class="product_code">Код товара: <?php echo $product['id']; ?></div>
                        <hr size=3px width=500px align="left">
                        <div class="product_price"><?php echo $product['price']; ?> РУБ </div>
                        <hr size=3px width=500px align="left">
                        <div class="text"><?php echo $product['description']?> <br> <span style="color: rgb(255,83,0)">Как сделать заказ:</span> <br> <span style="display: inline">Добавляете товар в корзину и оформляете заказ; <br>С вами связывается наш менеджер и сообщает о наличии размера на складе. </span> </div>
                        <a href="#" data-id="<?php echo $product['id']; ?>" class="add-to-cart" ><button class="btn">Добавить в корзину</button></a>
                    </div>
                </div>
                <div class="content_down">
                <?php foreach ($latestProducts as $product): ?>
                    <div class="col-md-4">
                        <div class="product_block">
                            <div class="product_img">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img"></div>
                            <div class="product_text"><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?>  <br> <span class="product_price"><?php echo $product['price']; ?> РУБ</span></a> </div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php  include ROOT. '/views/layouts/footer.php'; ?>


</head>
<body>