<div class="foot">
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="footer_navigation">
                        <div class="col-md-3">
                            <div class="footer_up">
                                <ul>
                                    <li><a href="">Как заказать</a></li>
                                    <li> <a href="">Новинки</a></li>
                                    <li> <a href="">Новости</a><</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer_up">
                                <ul>
                                    <li> <a href="">Оплата</a></li>
                                    <li> <a href="">Доставка</a> </li>
                                    <li> <a href="">Бренды</a> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer_up">
                                <ul>
                                    <li> <a href="">Распродажа</a><</li>
                                    <li> <a href="">Возврат</a></li>
                                    <li> <a href="">Я не знаю</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_social">
                        <h2>МЫ в социальных сетях</h2>
                        <div class="footer_img">
                            <a href="#"><img src="/template/icon/inst.png" alt="" class="footer_icon"></a>
                            <a href="#"><img src="/template/icon/telegram_icon-icons.com_72055.png" alt="" class="footer_icon"></a>
                            <a href="#"><img src="/template/icon/vk.png" alt="" class="footer_icon"></a>
                        </div>
                        <div class="footer_phone">
                            <a href="" class="footer_call">+79535207823</a>
                            <a href="" class="footer_call">kocccs@mail.ru</a>
                        </div>
                    </div>
                </div>
                <hr width="100%" color="black" align="left" size="5">
                <p style="color: rgb(151, 150, 150);">
                    Почему Cher?<br>

                    • Лимитированные коллекции, редкие расцветки, крутые кроссовочные коллаборации – все это у нас <br>

                    • Один из самых больших сетевых магазинов кроссовок в России и СНГ<br>

                    • Сотрудничество с ведущими спортивными брендами напрямую: 100% оригинальная продукция<br>

                    • Доставка по всему миру <br>

                    • Работа со всеми платежными системами
                </p>
            </div>
        </div>
    </section>
</div>


<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>

