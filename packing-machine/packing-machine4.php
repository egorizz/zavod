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
                    <a href="/raw-material-preparation/">
                        Упаковочные машины
                    </a>
                </div>
                <div class="bread-crumbs-title">Малая вертикальная упаковочная машина для гранул</div>
            </div>
        </div>

        <div class="options_another">
            <div class="options_another-wrap_alt">
                <div class="material">
                    <h1>Малая вертикальная упаковочная машина для гранул</h1>
                </div>
                <div class="options_another-wrap_alt-text">
                    <div class="flex-container-block">
                        <div class="flex1">
                            <a href="#" class="flex1-img">
                                <img src="/img/packing4.png" alt="">
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
                                                <input type="hidden" name="name" value="Малая вертикальная упаковочная машина для гранул">
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
                                <h3>Функции:</h3>
                                <ul class="list">
                                    <li class="list-item">
                                        Модель: BVS-220
                                    </li>
                                    <li class="list-item">
                                        Скорость: 25-40 стр / мин
                                    </li>
                                    <li class="list-item">
                                        Объем заполнения: 100 мл
                                    </li>
                                    <li class="list-item">
                                        Ширина чехла: 20-70 мм
                                    </li>
                                    <li class="list-item">
                                        Длина мешочка: 50-180 мм
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-tab">
                        <table>
                            <tr>
                                <th>Модель</th>
                                <th>Длина мешочка</th>
                                <th>Ширина мешка</th>
                                <th>Емкость упаковки</th>
                                <th>Ширина пленки</th>
                                <th>Дорожки Нет.</th>
                                <th>Масса</th>
                                <th>Размеры машины (Ш * В)</th>
                            </tr>
                            <tr>
                                <td>БВС-220</td>
                                <td>50-180</td>
                                <td>20-70</td>
                                <td>40</td>
                                <td>220 мм</td>
                                <td>1</td>
                                <td>400</td>
                                <td>815 x 1155 x 2285 мм</td>
                            </tr>
                            <tr>
                                <td>БВС 2-220</td>
                                <td>50-180</td>
                                <td>20-4</td>
                                <td>80</td>
                                <td>220 мм</td>
                                <td>2</td>
                                <td>400</td>
                                <td>815 x 1155 x 2285 мм</td>
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