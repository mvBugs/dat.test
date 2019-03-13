@extends('admin.app')


@php
    $content_header = [
        'page_title' => 'Список типа: '.$eType->name ,
        'url_back' => session('admin.nodes.index'),
        'urlCreate' => ''
    ]
@endphp

@section('content')
<section class="content">
    <div class="box">

        <div class="box-header">
            <div class="row">
                <div class="col-lg-12">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title"> Редактирование списка<strong>{{ $item->name }}</strong></h3>
                    {{--@include('admin.inc.entity-navigation', [
                       'next' => $item->previous() ? route('admin.pages.edit', $item->previous()) : '',
                       'previous' => $item->next() ? route('admin.pages.edit', $item->next()) : '',
                    ])--}}
                </div>
            </div>
        </div>
        <div class="box-body">
            <!--tabs-->
            <div class="nav-tabs-justified">
                <ul class="nav nav-tabs">
                    @foreach(['Список' => route('admin.items.edit', $item), /*'SEO' => route('admin.pages.seo', $item)*/] as $title => $path)
                        <li class="@if(Request::url() == rtrim($path, '/')) active @endif"><a href="@if(Request::url() !== rtrim($path, '/')){{ $path }}@else # @endif">{{ $title }}</a></li>
                    @endforeach
                    {{--<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>--}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <br>
                        @php($tab = isset($tab) ? $tab : request('tab'))
                        @if($tab == 'seo')
                            {!! Form::model($item->metaTag, [
                                'method' => 'POST',
                                'route' => ['admin.page.seo.save', $item],
                            ]) !!}
                            @include('admin.pages._seo')
                        @else
                            {!! Form::model($item, [
                                'method' => 'PATCH',
                                'route' => ['admin.pages.update', $item],
                                'files' => true
                            ]) !!}
                            @include('admin.pages._form')
                        @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div><!--/tabs-->
        </div>

    </div>
</section>
@stop