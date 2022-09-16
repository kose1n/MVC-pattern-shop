<?php  include ROOT . '/pages/layouts/header.php'; ?>
<section class="login_body">
    <div class="container">
        <div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li style="color: white; margin: 25px"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="content_titllee">Войти</div>
                    <form action="#" method="post" class="login_form">
                        <input class="input_form" type="email" name="email" placeholder="E-mail" value=""/>
                        <input class="input_form" type="password" name="password" placeholder="Пароль" value=""/>
                        <input style="width: 350px; margin-top: 35px; border-radius: 25px; outline: none" type="submit" name="submit" class="btn" value="Войти" />
                        <div class="create_acc">
                            <a class="create_text" href="/user/register">Создать аккаунт</a>
                            <a class="create_text" href="">Пустышка</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  include ROOT . '/pages/layouts/footer.php'; ?>
