@extends('admin.layouts.app')


@php
    $content_header = [
        'page_title' => $vocabulary->name,
        'url_back' => session('admin.terms.index'),
        'url_create' => ''
    ]
@endphp

@section('content')
<section class="content">
    <div class="box">
        {!! Form::model($term, [
            'method' => 'PATCH',
            'route' => ['admin.terms.update', $term],
            'files' => true
        ]) !!}
        <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Редактирование термина <strong>{{ $term->name }}</strong> словаря <strong>{{ $vocabulary->name }}</strong></h3>
        </div>
        <div class="box-body">
                @include('admin.taxonomy.terms._form')
        </div>
        {!! Form::close() !!}
    </div>
</section>
@stop