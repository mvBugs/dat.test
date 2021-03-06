@extends('admin.layouts.app')

@php
    $content_header = [
        'page_title' => 'Материал типа: '.$eType->name,
        'url_back' => session('admin.nodes.index'),
        'urlCreate' => ''
    ]
@endphp

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title"> Создание материала</h3>

            {{--<div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                    @foreach(UrlAliasLocalization::getLocalesOrder() as $key => $locale)
                        <li @if($key == request('locale', 'en')) class="active" @endif><a href="#">{{ strtoupper($key)}}</a></li>
                    @endforeach
                </ul>
            </div>--}}

        </div>
        <div class="box-body">

            <!--tabs-->
            <div class="nav-tabs-justified">
                <ul class="nav nav-tabs">
                    @foreach(['Материал' => route('admin.nodes.create'), /*'SEO' => '#'*/] as $title => $url)
                        <li class="@if(Request::url() == rtrim($url, '/')) active @else disabled @endif"><a @if(Request::url() != rtrim($url, '/')) && $url != '#')href="{{ $url }}"@endif>{{ $title }}</a></li>
                    @endforeach
                    {{--<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>--}}
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <br>
                        {!! Form::open([
                             'route' => 'admin.nodes.store',
                             'files' => true
                        ]) !!}
                        @include('admin.nodes._form')

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@stop
