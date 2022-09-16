<?php include ROOT . '/pages/layouts/header.php'; ?>

<section class="new">
    <div class="container">
        <div class="profile_body">
            <div class="new_content">
                <div style="color: green; font-size: 18px; display: block; width:400px;">
                    <?php if ($result): ?>
                        <p>Данные отредактированы!
                            <a href="/user/profile"> <button class="btn">Вернуться в профиль</button></a></p>
                    <?php else: ?>
                    <div style="color: red; font-size: 18px; display: block; width:400px;">
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul><br>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="page-content">
                    <div class="content-block">
                        <div class="profile_title">Кабинет пользователя</div>
                        <form method="post" action="#" enctype="multipart/form-data" style="width:100%; ">
                            <div class="body_form">
                                <div class="left_bar">
                                    <div class="block_ava">
                                        <div class="ava_img">
                                            <? if ($user['ava'] == '') { ?>
                                            <img src="../../template/avatars/defava.jpg" width="300" class="img-c-tree">
                                            <? } else { ?>
                                            <img src="../../template/avatars/<?php echo $user['ava']; ?>" class="img-c-tree">
                                            <?}?>
                                        </div>
                                    </div>
                                    <div class="profile_name">
                                        <?php echo $user['name'];?>
                                    </div>
                                    <div class="profile_submit">
                                        <div class="aga"><input id="submit_ava" name="ava" type="file" multiple accept="image/*"/></div>

                                    </div>
                                    <div class="submit_img">
                                        <input type="submit" name="submit" class="btn" value="Изменить" />
                                    </div>
                                </div>
                                <div class="right_bar">
                                    <div class="some_title">
                                        Привет, <?php echo $user['name'];?> ! Это Твой Кабинет!
                                    </div>
                                    <hr>
                                    <div class="some_text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur culpa eaque in inventore ipsa ipsam maiores minima molestias omnis optio quam, quidem rem tenetur vel, veritatis voluptas voluptatem voluptatum.
                                    </div>
                                </div>
                            </div>




                            <?php endif; ?>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/pages/layouts/footer.php'; ?>