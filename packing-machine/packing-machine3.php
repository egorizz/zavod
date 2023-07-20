<?php include realpath(__DIR__ . '/../header.php') ?>

<!-- MAIN -->
<main>
    <!-- EQUIPMENT -->
    <div class="section-outer outer-equipment">
        <div class="section-inner">
            <div class="bread-crumbs">
                <div class="bread-crumbs-title">
                    <a href="/">
                        Главная
                    </a>
                </div>

                <div class="bread-crumbs-title">
                    <a href="/packing-machine/">
                        Упаковочные машины
                    </a>
                </div>
                <div class="bread-crumbs-title">Горизонтальная упаковочная машина с застежкой-молнией</div>
            </div>
        </div>

        <div class="options_another">
            <div class="options_another-wrap_alt">
                <div class="material">
                    <h1>Горизонтальная упаковочная машина с застежкой-молнией</h1>
                </div>
                <div class="options_another-wrap_alt-text">
                    <div class="flex-container-block">
                        <div class="flex1">
                            <a href="#" class="flex1-img">
                                <img src="/img/packing3.png" alt="">
                            </a>
                        </div>
                        <div class="flex-btn">
                            <div id="forceRedraw"></div>
                            <button type="submit" class="btn" id="myBtn">Заказать</button>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <form class="form">
                                        <div class="form-title">ЗАКАЗАТЬ ОБОРУДОВАНИЕ</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="hidden" name="name" value="Горизонтальная упаковочная машина с застежкой-молнией">
                                                <input type="text" id="name" name="name" placeholder="Ваше имя" class="input-group_item" required />
                                                <input type="tel" id="telephone" name="telephone" placeholder="Ваш телефон" class="input-group_item" required />
                                                <input type="email" id="email" name="email" placeholder="Ваш Email" class="input-group_item" required />
                                            </div>
                                            <div class="textarea">
                                                <textarea id="message" name="message" placeholder="Ваше сообщение" required></textarea>
                                            </div>
                                        </div>
                                        <div class="checkbox-group">
                                            <div class="checkbox-consent">
                                                <input type="checkbox" id="consent" name="consent" required />
                                                *
                                                <label for="consent">
                                                    Подтверждаю согласие на обработку персональных данных в соответствии с Условиями
                                                </label>
                                            </div>

                                            <button type="submit" class="submit-button">ОТПРАВИТЬ ЗАПРОС</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slider-wrap">
            <div class="slider">
                <div class="tabs">
                    <div class="tab active" onclick="changeTab(1)">Описание</div>
                    <div class="tab" onclick="changeTab(2)">Характеристики</div>
                </div>
                <div class="section-inner content">
                    <div class="content-tab active">
                        <div class="content-wrap">
                            <div class="text">
                                <p>
                                    Упаковочная машина BHD-180SZ предназначена для дой-пак с застежкой-молнией. Она
                                    может выполнять формирование пакетов, подачу, измерение, наполнение, запечатывание,
                                    печать даты, наполнение азотом, подсчет, доставку готовой продукции. Он подходит для
                                    розлива различных продуктов, таких как гранулы, таблетки, жидкость, сливки, при
                                    наличии устройств для кормления и измерения.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-tab">
                        <table>
                            <tr>
                                <th>Модель</th>
                                <th>Ширина мешка</th>
                                <th>Длина мешочка</th>
                                <th>Емкость наполнения</th>
                                <th>Скорость (доля частиц на миллион)</th>
                            </tr>
                            <tr>
                                <td>BHD-180S</td>
                                <td>90-180 мм</td>
                                <td>110-250 мм</td>
                                <td>1000 мл</td>
                                <td>40-60</td>
                            </tr>
                            <tr>
                                <td>BHD-240S</td>
                                <td>100-240 мм</td>
                                <td>120-320 мм</td>
                                <td>2000 мл</td>
                                <td>40-6</td>
                            </tr>
                            <tr>
                                <td>BHD-280DS</td>
                                <td>90-140 мм</td>
                                <td>110-250 мм</td>
                                <td>500 мл</td>
                                <td>80-10</td>
                            </tr>
                        </table>
                    </div>
                    <div class="content-tab"></div>
                </div>
            </div>
        </div>


    </div>
    <!-- / EQUIPMENT -->

</main>
<!-- / MAIN -->


<?php include realpath(__DIR__ . '/../footer.php') ?>