@extends('admin.layouts.app')

@php
    $content_header = [
        'page_title' => $vocabulary->name,
        'url_back' => session('admin.terms.index'),
        'urlCreate' => ''
    ]
@endphp

@section('content')
<section class="content">
    <div class="box">
        {!! Form::open([
             'route' => 'admin.terms.store',
             'files' => true
        ]) !!}
        <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Создание термина словаря <strong>{{ $vocabulary->name }}</strong></h3>
        </div>
        <div class="box-body">
            @include('admin.taxonomy.terms._form')
        </div>
        {!! Form::close() !!}
    </div>
</section>
@stop
