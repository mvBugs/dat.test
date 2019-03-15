@extends('fronts.layouts.app', ['title' =>$node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_write">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
            <div class="write">
                <div class="write__wrapper my-animate fadeInUp" data-duration="2" data-delay="0.5">
                    <form action="{{ action('Front\FormController@store') }}" method="post">
                        @csrf
{{--                        @if($errors->has('company')){{ dd($errors) }} @endif--}}
                        <div class="write__form">
                            <div class="write__form-block">
                                @if($errors->has('name'))
                                    <div class="form-group">
                                        <label for="">Имя</label>
                                        <input class="error" type="text" name="name" value="{{ old('name') }}">
                                        <p class="error">{{ $errors->first('name') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Имя</label>
                                        <input type="text" name="name" @if($errors->has('*')) value="{{ old('name') }}" @endif>
                                    </div>
                                @endif
                                @if($errors->has('company'))
                                    <div class="form-group">
                                        <label for="">Название организации</label>
                                        <input class="error" type="text" name="company" value="{{ old('company') }}">
                                        <p class="error">{{ $errors->first('company') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Название организации</label>
                                        <input type="text" name="company" @if($errors->has('*')) value="{{ old('company') }}" @endif>
                                    </div>
                                @endif

                            </div>
                            <div class="write__form-block">
                                @if($errors->has('phone'))
                                <div class="form-group">
                                    <label for="">Телефон</label>
                                    <input class="error" type="text" name="phone" value="{{ old('phone') }}">
                                    <p class="error">{{ $errors->first('phone') }}</p>
                                </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Телефон</label>
                                        <input type="text" name="phone" @if($errors->has('*')) value="{{ old('phone') }}" @endif>
                                    </div>
                                @endif
                                @if($errors->has('email'))
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="error" type="email" name="email" value="{{ old('email') }}">
                                        <p class="error">{{ $errors->first('email') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" @if($errors->has('*')) value="{{ old('email') }}" @endif>
                                    </div>
                                @endif
                            </div>
                            <div class="write__form-block write__form-block_textarea">
                                @if($errors->has('description'))
                                    <div class="form-group">
                                        <label for="">Сообщение</label>
                                        <textarea class="error" name="description">{{ old('description') }}</textarea>
                                        <p class="error">{{ $errors->first('description') }}</p>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Сообщение</label>
                                        <textarea name="description">@if($errors->has('*')) {{ old('description') }} @endif</textarea>
                                    </div>
                                @endif
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
    @include('fronts.layouts.inc.footer-inner')
@endsection