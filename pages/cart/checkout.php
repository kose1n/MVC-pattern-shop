<?php include ROOT . '/pages/layouts/header.php'; ?>

<section class="checkout">
    <?php if ($result): ?>
        <p style="color: white; margin: 35px; text-align: center">Заказ оформлен. Ожидайте доставки.</p>
        <div class="block_btn">
            <a class="btn checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a
        </div>

    <?php else:?>
        <?php if (!$result): ?>

    <div class="container">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li style="color: white; font-size: 19px"> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <div class="row">
                        <div class="col-50">
                            <div class="login_form">
                                <form action="#" method="post">
                                    <h3 style="text-align: center; font-size: 30px; color: white">Оформление заказа</h3>
                                    <label for="fname"><i class="fa fa-user"></i>Фамилия Имя Отчество </label>
                                    <input class="checkout_input" type="text" name="userName" placeholder="Косенков Фронтенд Разрабович">

                                    <label for="phone"><i class="fa fa-envelope"></i>Номер телефона</label>
                                    <input class="checkout_input" type="text" name="userPhone" placeholder="89535222333">

                                    <label for="comment"><i class="fa fa-envelope"></i>Комментарий к заказу</label>
                                    <input class="checkout_input" type="text" name="userComment" placeholder="Какой то текст">

                                    <label for="adr"><i class="fa fa-address-card-o"></i>Адрес доставки</label>
                                    <input class="checkout_input" type="text" name="userAdress" placeholder="Пионерская 14а">

                                    <label for="city"><i class="fa fa-institution"></i>Город доставки</label>
                                    <input class="checkout_input" type="text"  name="userCity" placeholder="Череповец">

                                    <label for="comment"><i class="fa fa-institution"></i>Zip</label>
                                    <input class="checkout_input" type="text" name="userZip" placeholder="10001">


                                    <input style="width: 100%; font-size: 20px " type="submit" name="submit" class="btn" value="Оформить заказ" />
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-25">
                <div class="container">
                    <div class="product_body_checkout">
                        <div style="text-align: center; color: white; font-size: 20px; padding: 5px">Корзина</div>
                        <?php foreach ($products as $product): ?>
                        <div class="block_product_check">
                            <div class="check_name_product">
                                <a href="/product/<?php echo $product['id'];?>">
                                    <?php echo $product['name'];?>
                                </a>
                            </div>
                            <div class="check_price_product">
                                <span style="padding: 5px"><?php echo $product['price'];?> Руб</span>
                            </div>
                        </div>
                            <hr>
                        <?php endforeach; ?>
                        <div style="color:white" >Всего <span class="price" style="color:white"><b><?php echo $totalPrice;?> Руб</b></span></div>
                    </div>
                </div>
            </div>

            <?php endif; ?>

            <?php endif; ?>

    </div>
</section>

<?php include ROOT . '/pages/layouts/footer.php'; ?>