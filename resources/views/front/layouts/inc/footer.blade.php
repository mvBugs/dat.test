<footer>
    <div class="footer-container">
        <div class="top-content">
            <div class="top-content__left">
                <div class="logo-block">
                    <a href="#">
                        <img src="/its-client/img/logo.png" alt="">
                    </a>
                    <div class="logo-block__text">
                        {!! \BlockVisualEditor::render('footer_titles', '
                        <h5 class="title"> Top Casino Reviews </h5>
                        <p class="joker-text"> from bearded Joker  </p>
                        ') !!}
                    </div>
                </div>
            </div>
            <div class="top-content__right">
                <nav class="header__navbar">
                    <ul>
                        {!! \BlockVisualEditor::render('footer_menu', '
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Sports betting</a></li>
                        <li><a href="#">Casino</a></li>
                        <li><a href="#">Vlog</a></li>
                        ') !!}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bottom-content">
            <div class="bottom-content__left">
                <p>  © Copyright 2018 </p>
            </div>
            <div class="bottom-content__right">
                <div class="block-right">
                    {!! \BlockVisualEditor::render('footer_socials', '
                    <a href=""> <img src="/its-client/img/youtube.png"  alt=""> </a>
                    <a href="#"> <img src="/its-client/img/instagram.png"  alt=""></a>
                    <a href="#"> <img src="/its-client/img/facebook.png"  alt=""></a>
                    ') !!}
                </div>
            </div>
        </div>
    </div>
</footer>