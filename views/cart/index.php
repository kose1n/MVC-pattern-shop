<?php include ROOT. '/views/layouts/header.php'; ?>

<section class="basket">
    <div class="container">
        <div class="basket_titlle">
            КОРЗИНА
        </div>
        <?php if ($productsInCart): ?>
        <p>Вы выбрали такие товары:</p>
        <table class="table">
            <tr>
                <th>Код товара</th>
                <th>Название</th>
                <th>Стомость, РУБ</th>
                <th>Количество, шт</th>
                <th>Удалить</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['code'];?></td>
                    <td>
                        <a href="/product/<?php echo $product['id'];?>">
                            <?php echo $product['name'];?>
                        </a>
                    </td>
                    <td><?php echo $product['price'];?></td>
                    <td><?php echo $productsInCart[$product['id']];?></td>
                    <td>
                        <a href="/cart/delete/<?php echo $product['id'];?>">
                            <i class="fa fa-times">X</i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Общая стоимость, РУБ:</td>
                <td><?php echo $totalPrice;?></td>
            </tr>

        </table>
            <a class="btn checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
        <?php else: ?>
            <p>Корзина пуста</p>

            <a class="btn checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
        <?php endif; ?>
    </div>
</section>



<?php  include ROOT. '/views/layouts/footer.php'; ?>
