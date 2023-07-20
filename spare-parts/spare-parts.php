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
                    <a href="/spare-parts/">
                        Запасные части
                    </a>
                </div>
                <div class="bread-crumbs-title">Пуансоны</div>
            </div>
        </div>

        <div class="options_another">
            <div class="options_another-wrap_alt">
                <div class="material">
                    <h1>Пуансоны</h1>
                </div>
                <div class="options_another-wrap_alt-text">
                    <div class="flex-container-block">
                        <div class="flex1">
                            <div class="flex-img">
                                <img src="/img/p.png" alt="Image 2">
                            </div>
                            <div class="flex-img">
                                <img src="/img/p1.jpg" alt="Image 1">
                            </div>

                            <!-- <div class="slider-top">
                                    <div class="main-photo">
                                        <img src="/img/p1.jpg" alt="Main Photo">
                                    </div>
                                    <div class="preview-photos">
                                        <img src="/img/p1.jpg" alt="Photo 1" class="photo-preview">
                                        <img src="/img/p2.jpg" alt="Photo 2" class="photo-preview">
                                    </div>
                                    <div class="nav-buttons">
                                        <button class="prev-btn">&lt;</button>
                                        <button class="next-btn">&gt;</button>
                                    </div>
                                </div> -->
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
                                                <input type="hidden" name="name" value="Пуансоны">
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
                                <ul class="list">
                                    <li class="list-item">
                                        Инструмент для таблетпрессов всех форм и размеров
                                    </li>
                                    <li class="list-item">
                                        Возможность нанесения гравировки
                                    </li>
                                    <li class="list-item">
                                        Возможность нанесения доп. покрытия
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-tab">
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