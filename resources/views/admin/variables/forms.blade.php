@extends('admin.layouts.app')


@php
    $content_header = [
        'page_title' => 'Настройки системы',
        'url_back' => '',
        'url_create' => '',
    ]
@endphp

@section('content')
    <section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Общии настройки</h3>
                </div>
                <form action="{{ route('admin.variable.save') }}" method="POST">
                    <div class="box-body">
                        @csrf
                        {{--<input type="hidden" name="group" value="prices">--}}
                        <div class="form-group {{ $errors->has('vars.app_name') ? 'has-error' : ''}}">
                            <label for="vars.app_name">Имя сайта</label>
                            <input type="text" class="form-control" name="vars[app_name]" value="{{ variable('app_name') }}">
                            {!! $errors->first('vars.app_name', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('vars.title') ? 'has-error' : ''}}">
                            <label for="vars.mail_from_address">Title</label>
                            <input type="text" class="form-control" name="vars[title]" value="{{ variable('title') }}">
                            {!! $errors->first('vars.title', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('vars.keywords') ? 'has-error' : ''}}">
                            <label for="vars.mail_from_name">Keywords</label>
                            <textarea class="form-control" name="vars[keywords]">{{ variable('keywords') }}</textarea>
                            {!! $errors->first('vars.keywords', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('vars.description') ? 'has-error' : ''}}">
                            <label for="vars.description">Description</label>
                            <textarea class="form-control" name="vars[description]">{{ variable('description') }}</textarea>
                            {!! $errors->first('vars.description', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="box-footer">
                        @include('admin.fields.field-form-buttons')
                    </div>
                </form>
            </div>




            <div class="box box-default" style="display: none">
                <div class="box-header with-border">
                    <h3 class="box-title">Доставки заказа</h3>
                </div>
                <form action="{{ route('admin.variable.save') }}" method="POST">
                    <div class="box-body">
                        @csrf
                        {{--<input type="hidden" name="group" value="prices">--}}
                        {{--@include('admin.fields.field-links', [
                           'label' => 'Способы доставки',
                           'field_name' => 'vars_json[delivery_methods]',
                           'key_key' => 'key',
                           'key_value' => 'value',
                           'placeholder_key' => 'Ключ',
                           'placeholder_value' => 'Значение',
                           'items' => json_decode(variable('delivery_methods', '[]'), true),
                       ])
                        <hr>
                        @include('admin.fields.field-links', [
                           'label' => 'Цены за способы доставки, руб.',
                           'field_name' => 'vars_json[delivery_methods_price]',
                           'key_key' => 'key',
                           'key_value' => 'value',
                           'placeholder_key' => 'Ключ',
                           'placeholder_value' => 'Цена',
                           'items' => json_decode(variable('delivery_methods_price', '[]'), true),
                       ])--}}
                    </div>
                    <div class="box-footer">
                        @include('admin.fields.field-form-buttons')
                    </div>
                </form>
            </div>

            <div class="box box-default" style="display: none">
                <div class="box-header with-border">
                    <h3 class="box-title">Способы оплаты заказа</h3>
                </div>
                <form action="{{ route('admin.variable.save') }}" method="POST">
                    <div class="box-body">
                        @csrf
                        {{--<input type="hidden" name="group" value="prices">--}}
                        @include('admin.fields.field-links', [
                           'label' => 'Способы оплаты',
                           'field_name' => 'vars_json[payment_methods]',
                           'key_key' => 'key',
                           'key_value' => 'value',
                           'placeholder_key' => 'Ключ',
                           'placeholder_value' => 'Значение',
                           'items' => json_decode(variable('payment_methods', '[]'), true),
                       ])
                    </div>
                    <div class="box-footer">
                        @include('admin.fields.field-form-buttons')
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Инфо. о компании</h3>
                </div>
                <form action="{{ route('admin.variable.save') }}" method="POST">
                    <div class="box-body">
                        @csrf
                        {{--<input type="hidden" name="group" value="prices">--}}
                        <div class="form-group {{ $errors->has('vars.company_email') ? 'has-error' : ''}}">
                            <label for="vars.company_email">Email компании</label>
                            <input type="text" class="form-control" name="vars[company_email]" value="{{ variable('company_email') }}">
                            {!! $errors->first('vars.company_email', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('vars.company_phone') ? 'has-error' : ''}}">
                            <label for="vars.company_phone">Телефон компании</label>
                            <input type="text" class="form-control" name="vars[company_phone]" value="{{ variable('company_phone') }}">
                            {!! $errors->first('vars.company_phone', '<p class="help-block">:message</p>') !!}
                        </div>
                        {{--<div class="form-group {{ $errors->has('vars.company_work_schedule') ? 'has-error' : ''}}">
                            <label for="vars.company_work_schedule">График работы компании</label>
                            <input type="text" class="form-control" name="vars[company_work_schedule]" value="{{ variable('company_work_schedule') }}">
                            {!! $errors->first('vars.company_work_schedule', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('vars.text_info_delivery') ? 'has-error' : ''}}">
                            <label for="vars.text_info_delivery">Текст "Информация о доставке"</label>
                            <input type="text" class="form-control" name="vars[text_info_delivery]" value="{{ variable('text_info_delivery') }}">
                            {!! $errors->first('vars.text_info_delivery', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('vars.contact_latitude') ? 'has-error' : ''}}">
                            <label for="vars.contact_latitude">Широта</label>
                            <input type="text" class="form-control" name="vars[contact_latitude]" value="{{ variable('contact_latitude') }}">
                            {!! $errors->first('vars.contact_latitude', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('vars.contact_longitude') ? 'has-error' : ''}}">
                            <label for="vars.contact_longitude">Долгота</label>
                            <input type="text" class="form-control" name="vars[contact_longitude]" value="{{ variable('contact_longitude') }}">
                            {!! $errors->first('vars.contact_longitude', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('vars.contact_map_zoom') ? 'has-error' : ''}}">
                            <label for="vars.contact_map_zoom">Масштаб</label>
                            <input type="number" min="2" max="20" step="1" class="form-control" name="vars[contact_map_zoom]" value="{{ variable('contact_map_zoom') }}">
                            {!! $errors->first('vars.contact_map_zoom', '<p class="help-block">:message</p>') !!}
                        </div>--}}
                    </div>
                    <div class="box-footer">
                        @include('admin.fields.field-form-buttons')
                    </div>
                </form>
            </div>

        </div>
    </div>
    </section>
@endsection
