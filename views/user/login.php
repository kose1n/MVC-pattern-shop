<?php  include ROOT. '/views/layouts/header.php'; ?>

    <div class="container">
        <div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="content_titlle ">Войти</div>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Имя" value=""/>
                        <input type="email" name="email" placeholder="E-mail" value=""/>
                        <input type="password" name="password" placeholder="Пароль" value=""/>
                        <input type="submit" name="submit" class="btn" value="Войти" />
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php  include ROOT. '/views/layouts/footer.php'; ?>