<header class="header">
    <div class="header__wrapper">
        <div class="header__left">
            <div class="header__phone">
                <svg class="icon-svg icon-svg-phone "><use xlink:href="/its-client/img/sprite.svg#phone"></use></svg>
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
                                <li><a href="#rubble" class="active">Щебінь</a></li>
                                <li><a href="#sand">Пісок</a></li>
                                <li><a href="#peat">Торф</a></li>
                                <li><a href="#wood">Дрова</a></li>
                                <li><a href="#bobcat">Послуги БОБКАТА</a></li>
                                <li><a href="/write">Напишите нам</a></li>
                                <li><a href="/delivery">Доставка</a></li>
                            ') !!}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
