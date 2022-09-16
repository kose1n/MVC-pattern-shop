<?php  include ROOT. '/views/layouts/header.php'; ?>

<div class="container">
    <div id="popup" class="popup">
        <div class="popup_body">
            <div class="popup_content">
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                <div class="content_titlle ">Регистрация</div>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                    <input type="submit" name="submit" class="btn" value="Регистрация" />
                </form>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php  include ROOT. '/views/layouts/footer.php'; ?>