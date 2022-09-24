<?php include ROOT . '/pages/layouts/header.php'; ?>

<section class="basket">
    <div class="container">
        <?php if ($productsInCart): ?>
        <div class="cart_checkout">
            <div class="table_titlle">
                <span style="font-size: 35px; color: #ffffff; font-weight: 500" >Корзина товаров</span>
            </div>
            <div class="body_product">
            <?php foreach ($products as $product): ?>

                <div class="col-md-4">
                    <div style="background-color: rgb(0 0 0 / 0.4); padding: 10px; margin: 5px" class="product_block">
                        <a href="/product/<?php echo $product['id']; ?>">
                            <div class="product_img">
                                <img style="border-radius: 30px; height: 210px;"; src="<?php echo Product::getImage($product['id']);?>" alt="" class="new_img">
                            </div>
                            <div class="product_text">
                                <div class="prod_link">
                                    <?php echo $product['name']; ?>
                                </div>
                                <div style="text-decoration: underline" class="prod_avall">
                                    <?php echo Product::getAvailability($product['avallabillty']); ?>
                                </div>
                                <div class="prod_count">
                                    Кол-во: <?php echo $productsInCart[$product['id']];?>
                                </div>

                                <div s class="product_price">
                                    <?php echo $product['price']; ?> РУБ
                                </div>

                                <div class="delet_product">
                                    <a href="/cart/delete/<?php echo $product['id'];?>">
                                        <div class="fa fa-times">

                                        </div>
                                <div/>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

                <?php endforeach; ?>

            <div class="price_products">
                Общая стоимость: <span style="font-size: 30px; color: coral; padding: 10px; text-decoration: overline "><?php echo $totalPrice;?> РУБ</span>
                <!--<td style="font-size: 30px; border: 1px solid black; border-radius: 50%"><?php /*echo $totalPrice;*/?> РУБ</td>-->
            </div>

            <?php if (User::isGuest()): ?>
            <div class="block_btn">
                <div class="text_autf"><a style="color: white; font-size: 20px; text-decoration: underline" href="/user/login/">Для оформления заказа необходимо авторизоваться!</a></div>
            <?php else: ?>
                <div class="block_btn">
                    <a class="btn checkout" href="/cart/checkout">Перейти к оформлению</a>
                </div>
            <?php endif; ?>
            <div class="block_btn">
                <a class="btn checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a
            </div>




        <?php else: ?>
            <div style="color: white; text-shadow: 1px 2px black" class="basket_titlle">
                Ваша корзина товаров пуста
            </div>
            <div style="font-size: 25px; color: white;text-shadow: 1px 2px black;  margin: 10px" class="basket_nothing">Добавьте в нее любой товар</div>
            <div style="padding: 30px" class="cart_btn">
                <a style="margin: 10px; text-decoration: none; color: white" class="btn checkout" href="/"> Вернуться к покупкам</a>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>


<?php  include ROOT . '/pages/layouts/footer.php'; ?>
