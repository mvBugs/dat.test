@extends('fronts.layouts.app')

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_write">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
            <div class="write">
                <div class="write__wrapper my-animate fadeInUp" data-duration="2" data-delay="0.5">
                    <form action="/">
                        <div class="write__form">
                            <div class="write__form-block">
                                <div class="form-group">
                                    <label for="">Имя</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Название организации</label>
                                    <input class="error" type="text">
                                    <p class="error">Это поле обязательно для заполнения</p>
                                </div>
                            </div>
                            <div class="write__form-block">
                                <div class="form-group">
                                    <label for="">Телефон</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="write__form-block write__form-block_textarea">
                                <div class="form-group">
                                    <label for="">Сообщение</label>
                                    <textarea name=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="write__form-button">
                            <button type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('fronts.layouts.inc.header')
@endsection