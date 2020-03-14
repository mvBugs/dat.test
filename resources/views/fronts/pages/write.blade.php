@extends('fronts.layouts.app', ['title' => 'Напишіть нам'])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_write" style="background-image: url('/its-client/img/datsuk/write.webp')">
        <div class="about__wrapper">
            <h1 class="about__name big-name">Напишіть нам</h1>
            <div class="write">
                <div class="write__wrapper my-animate fadeInUp" data-duration="2" data-delay="0.5">
                    <form action="{{ action('Front\FormController@store') }}" method="post">
                        @csrf
                        <div class="write__form">
                            <div class="write__form-block">
                                @if($errors->has('name'))
                                    <div class="form-group">
                                        <label for="">Ім'я</label>
                                        <input class="error" type="text" name="name" value="{{ old('name') }}">
                                        <p class="error">{{ $errors->first('name') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Ім'я</label>
                                        <input type="text" name="name" @if($errors->has('*')) value="{{ old('name') }}" @endif>
                                    </div>
                                @endif
                            </div>
                            <div class="write__form-block">
                                @if($errors->has('phone'))
                                <div class="form-group">
                                    <label for="">Телефон</label>
                                    <input class="error" placeholder="+ 380 (___) __-__-__" name="phone" data-mask="+380 (000) 00-00-00" data-mask-clearifnotmatch="true" type="text" value="{{ old('phone') }}">
                                    {{--<input class="error" type="text" name="phone" value="{{ old('phone') }}">--}}
                                    <p class="error">{{ $errors->first('phone') }}</p>
                                </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Телефон</label>
                                        <input placeholder="+ 380 (___) __-__-__" name="phone" data-mask="+380 (000) 00-00-00" data-mask-clearifnotmatch="true" type="text" @if($errors->has('*')) value="{{ old('phone') }}" @endif>
                                        {{--<input type="text" name="phone" @if($errors->has('*')) value="{{ old('phone') }}" @endif>--}}
                                    </div>
                                @endif
                            </div>
                            <div class="write__form-block write__form-block_textarea">
                                @if($errors->has('description'))
                                    <div class="form-group">
                                        <label for="">Повідолення</label>
                                        <textarea class="error" name="description">{{ old('description') }}</textarea>
                                        <p class="error">{{ $errors->first('description') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Повідолення</label>
                                        <textarea name="description">@if($errors->has('*')) {{ old('description') }} @endif</textarea>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="write__form-button">
                            <button type="submit">Відправити</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('fronts.layouts.inc.footer-inner')
@endsection
