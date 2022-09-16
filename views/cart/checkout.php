<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="checkout">
    <div class="container">
        <div class="basket_body">
            <h2 class="basket_titlle">Оформление заказа</h2>

            <?php if ($result): ?>
                <p>Заказ оформлен. Мы Вам перезвоним.</p>
            <?php else: ?>

                <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, РУБ</p><br/>

                <?php if (!$result): ?>

                    <div class="form_chek">
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <p style="color: black">Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                        <div class="login_form">
                            <form action="#" method="post">

                                <p>Ваша имя</p>
                                <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                <p>Номер телефона</p>
                                <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                <p>Комментарий к заказу</p>
                                <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                <br/>
                                <br/>
                                <input type="submit" name="submit" class="btn" value="Оформить" />
                            </form>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>