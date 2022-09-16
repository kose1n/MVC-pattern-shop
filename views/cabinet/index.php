<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="new">
    <div class="container">
        <div class="row">
            <div class="new_content">
                <div class="content_up">
                    <div class="product_img"><img src="/template/img/user.jpg" alt=""></div>
                    <div class="product_content">
                        <div class="product_name">Кабинет пользователя</div>
                        <div class="product_code"><h4>Привет, <?php echo $user['name'];?>!</h4></div>
                        <div class="product_price"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab beatae cum dolorem dolorum earum error, harum libero magni minus perferendis reprehenderit sed totam, voluptas? A doloremque dolorum error inventore tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad adipisci at atque aut beatae consectetur cumque dicta ducimus eveniet magni mollitia, perspiciatis placeat porro possimus quod veniam vero vitae? </div>

                    </div>
                </div>
                <!--<div class="content_down">
                    <div class="content_titlle">Описание товара</div>
                    <span class="text"><?php /*echo $product['description']*/?> </span>
                </div>-->
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>