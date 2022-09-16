<?php  include ROOT . '/pages/layouts/header.php'; ?>
<section class="login_body">
    <div class="container">
        <div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <?php if ($result): ?>
                        <p style="color: white; padding: 15px; font-size: 45px; font-weight: 500">Вы зарегистрированы!</p>
                        <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <div class="tiltle_fail" style="color: white; margin: 25px">
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <div class="content_titllee">Регистрация</div>
                    <form action="#" method="post" class="login_form">
                        <input class="input_form" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                        <input class="input_form" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input class="input_form" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input style="width: 350px; outline: none" type="submit" name="submit" class="btn" value="Регистрация" />
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php  include ROOT . '/pages/layouts/footer.php'; ?>