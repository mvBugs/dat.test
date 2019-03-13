<header class="header">
    <div class="header__wrapper">
        <a href="{{ url(UrlAliasLocalization::getCurrentLocale()) }}" class="header__logo"><img src="/its-client/img/logo.png" alt=""></a>
        <button class="header__mobile">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="header__navbar">
            <ul>
                {!! \BlockVisualEditor::render('header_menu', '
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Sports betting</a></li>
                    <li><a href="#">Casino</a></li>
                    <li><a href="#">Vlog</a></li>
                ') !!}
            </ul>
        </nav>
        <div class="header__language">
            @foreach(\UrlAliasLocalization::getLocalesOrder() as $key => $item)
                <a href="{{ url($key) }}" class="@if (UrlAliasLocalization::getCurrentLocale() == $key) active @endif">{{ strtoupper($key) }}</a>
                @if(! $loop->last)<span>/</span>@endif
            @endforeach
        </div>
    </div>
</header>