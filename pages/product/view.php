<?php  include ROOT . '/pages/layouts/header.php'; ?>
<section class="new">
    <div class="container">
        <div class="row">
            <div class="new_content">
                <div class="content_up">
                    <div class="product_img">
                        <div style="cursor: pointer" class="product_img_body">
                            <img width="600px" src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img">
                            <img width="200px" src="/template/icon/lupa.png" alt="" class="new_img_lupa">
                        </div>

                    </div>
                    <div class="product_content">
                        <div class="product_name"><?php echo $product['name']; ?> </div>
                        <div style="font-weight:400; font-size: 17px" class="product_code">Код товара: <span style="color: rgb(255,83,0);"><?php echo $product['id']; ?></span></div>
                        <div style="font-weight:400; font-size: 17px" class="product_code">Бренд товара: <span style="color: rgb(255,83,0);"><?php echo $product['brand']; ?></span></div>
                        <div style="font-weight:400; font-size: 17px" class="product_code">Наличие товара: <span style="color: rgb(255,83,0);"><?php echo Product::getAvailability($product['avallabillty']); ?></span></div>
                        <hr size=3px width=500px align="left">
                        <div class="product_price"><?php echo $product['price']; ?> РУБ </div>
                        <hr size=3px width=500px align="left">
                        <div class="text"><?php echo $product['description']?> <br> <span style="color: rgb(255,83,0)">Как сделать заказ:</span> <br> <span style="display: inline">Добавляете товар в корзину и оформляете заказ; <br>С вами связывается наш менеджер и сообщает о наличии размера на складе. </span> </div>
                        <div style="color: rgb(255,83,0);" class="product_code">Выберите размер:</div>
                        <div class="checkboxx">
                            <form class="block_size" action="" method ='post'>

                                <div class="block_checkbox">
                                    <input id="check_box1" type="radio" name="checkbox" value="40" checked>
                                    <label for="check_box1">40 размер</label>

                                </div>

                                <div class="block_checkbox">
                                    <input id="check_box2" type="radio" name="checkbox" value="41">
                                    <label for="check_box2">41 размер</label>

                                </div>

                                <div class="block_checkbox">
                                    <input id="check_box3" type="radio" name="checkbox" value="42">
                                    <label for="check_box3">42 размер</label>

                                </div>

                                <div class="block_checkbox">
                                    <input id="check_box4"  type="radio" name="checkbox" value="43">
                                    <label for="check_box4">43 размер</label>

                                </div>

                                <div class="block_checkbox">
                                    <input id="check_box5"  type="radio" name="checkbox" value="44">
                                    <label for="check_box5">44 размер</label>

                                </div>

                                <div class="block_checkbox">
                                    <input id="check_box6"  type="radio" name="checkbox" value="45">
                                    <label for="check_box6">45 размер</label>

                                </div>
                            </form>


                        </div>
                        <div class="choice">Вы выбрали:
                            <h3 style="color: black; padding-top: 10px" id="result"> </h3>
                            размер
                        </div>

                        <div class="cart_add">
                            <a href="#" data-id="<?php echo $product['id']; ?>" class="add-to-cart" ><button class="btn">Добавить в корзину</button></a>
                        </div>



                    </div>

                </div>
                <h2 class="new_titllee">Другие товары</h2>
                <div class="new_product">
                <?php foreach ($lastProducts as $product): ?>
                    <div class="col-md-4">
                        <a href="/product/<?php echo $product['id']; ?>">
                        <div class="product_block">
                            <div class="product_img">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="new_img"></div>
                            <div class="product_text">
                                <span style="span_text"><?php echo $product['name']; ?>  </span>
                                <br>
                                <span class="product_price"><?php echo $product['price']; ?> РУБ</span></div>
                        </div>
                        </a>
                    </div>
                <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php  include ROOT . '/pages/layouts/footer.php'; ?>

