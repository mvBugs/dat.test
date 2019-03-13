<header class="header">
    <div class="header__wrapper">
        <div class="header__left">
            <div class="header__phone">
                <svg class="icon-svg icon-svg-phone "><use xlink:href="./img/sprite.svg#phone"></use></svg>
                {!! \BlockVisualEditor::render('home_header_phone', '
                <span>
                    8 (843) 239 02 81
                </span>
                ') !!}
            </div>
        </div>
        <div class="header__right">
            <div class="header__menu">
                <span class="header__menu-text">Menu</span>
                <div class="header__menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header-menu__open">
                <div class="header-menu__open-wrapper">
                    <nav>
                        <ul>
                            {!! \BlockVisualEditor::render('menu', '
                            <li><a href="/home" class="active">Главная</a></li>
                            <li><a href="/wood">
                                    Кабельные
                                    барабаны
                                </a>
                            </li>
                            <li><a href="/cable">Барабаны <br> для канатов</a></li>
                            <li><a href="/metallic">Стальные барабаны</a></li>
                            <li><a href="/advantages">Преимущества</a></li>
                            <li><a href="/about">О компании</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                            <li><a href="/write">Напишите нам</a></li>
                            <li><a href="/export">Експорт</a></li>
                            <li><a href="#">Закупка </a></li>
                            <li><a href="/delivery">Доставка</a></li>
                            ') !!}

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>