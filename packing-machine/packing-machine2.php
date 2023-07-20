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
                <div class="bread-crumbs-title">Машина для упаковки саше</div>
            </div>
        </div>

        <div class="options_another">
            <div class="options_another-wrap_alt">
                <div class="material">
                    <h1>Машина для упаковки саше</h1>
                </div>
                <div class="options_another-wrap_alt-text">
                    <div class="flex-container-block">
                        <div class="flex1">
                            <a href="#" class="flex1-img">
                                <img src="/img/packing2.png" alt="">
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
                                        Высокоскоростная автоматическая многополосная машина для упаковки саше
                                    </li>
                                    <li class="list-item">
                                        Модель: BVS-500F
                                    </li>
                                    <li class="list-item">
                                        Скорость: 280-420 стр. / Мин
                                    </li>
                                    <li class="list-item">
                                        Ширина чехла: 32-105 мм
                                    </li>
                                    <li class="list-item">
                                        Длина мешочка: 50-300 мм
                                    </li>
                                    <li class="list-item">
                                        Применимый стиль уплотнения: 4-х стороннее уплотнение
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-tab">
                        <table>
                            <tr>
                                <th>Модель</th>
                                <th>Сумка Длина</th>
                                <th>Ширина мешка</th>
                                <th>Длина пленки (мм)</th>
                                <th>Количество дорожек Скорость (мешок / мин)</th>
                                <th>Скорость</th>
                            </tr>
                            <tr>
                                <td>БВС-500Ф</td>
                                <td>50-300</td>
                                <td>32-105</td>
                                <td>500</td>
                                <td>7</td>
                                <td>280-42</td>
                            </tr>
                            <tr>
                                <td>БВС-900Ф</td>
                                <td>50-300</td>
                                <td>32-105</td>
                                <td>900</td>
                                <td>14</td>
                                <td>560-84</td>
                            </tr>
                            <tr>
                                <td>БВС-1200Ф</td>
                                <td>50-120</td>
                                <td>40-105</td>
                                <td>1200</td>
                                <td>15</td>
                                <td>600-90</td>
                                
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