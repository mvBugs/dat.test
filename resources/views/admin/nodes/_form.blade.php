@include('admin.fields.field-checkbox', [
    'label' => 'Публиковать',
    'field_name' => 'publish',
    'status' => isset($node) ? $node->publish : 1,
])

<input type="hidden" name="locale" value="{{ isset($node) ? $node->locale : request('locale', 'en') }}">
<input type="hidden" name="localable" value="{{ request('localable') }}">

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Название', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('data.fields.body') ? 'has-error' : ''}}">
    {!! Form::label('data[fields][body]', 'Контент', ['class' => 'control-label']) !!}
    {!! Form::textarea('data[fields][body]', isset($node) ? ($node->data['fields']['body'] ?? '') : '', ['class' => 'form-control ck-editor ck-full', 'rows' => 5]) !!}
    {!! $errors->first('data.fields.body', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('data.blade') ? 'has-error' : ''}}">
    {!! Form::label('data[blade]', 'Шаблон', ['class' => 'control-label']) !!}
    {!! Form::select('data[blade]', [
        'fronts.pages.write-end' => 'По умолчанию',
        'fronts.pages.home'         => 'Главная',
        'fronts.pages.about'        => 'О компании',
        'fronts.pages.delivery'     => 'Доставка',
        'fronts.pages.advantages'   => 'Преиущиства',
        'fronts.pages.export'       => 'Экспорт',
        'fronts.pages.norms'        => 'Нормы',
        'fronts.pages.contacts'     => 'Контакты',
        'fronts.pages.write'        => 'Напишыте нам',
        'fronts.pages.wood'         => 'Деревянные барабаны',
        'fronts.pages.cable'        => 'Канатные барабаны',
        'fronts.pages.metallic'     => 'Стальные барабаны',
        ], null, ['class' => 'form-control select2', 'data-minimum-results-for-search' => '-1']) !!}
    {!! $errors->first('data.blade', '<p class="help-block">:message</p>') !!}
</div>
<div class="row">
    <div class="col-md-6">
        @empty($node)
            <div class="form-group {{ $errors->has('url_alias') ? 'has-error' : ''}}">
                {!! Form::label('url_alias', 'URL-алиас', ['class' => 'control-label']) !!}
                {!! Form::text('url_alias', isset($node) ? optional($node->urlAlias)->alias : null, ['class' => 'form-control', isset($node) ? 'readonly' : '']) !!}
                {!! $errors->first('url_alias', '<p class="help-block">:message</p>') !!}
            </div>
        @endempty

        @include('admin.fields.field-file-uploaded',[
             'label' => 'Файл',
             'field_name' => 'file',
             'entity' => isset($node) ? $node : null,
        ])
    </div>
    <div class="col-md-6">
        @include('admin.fields.field-images-uploaded-sortable',[
     'label' => 'Изображения',
     'field_name' => 'image',
     'entity' => isset($node) ? $node : null,
])

        @include('admin.fields.field-form-buttons', [
            'url_store_and_create' => route('admin.nodes.create'),
            'url_store_and_close' => session('admin.nodes.index'),
            'url_destroy' => isset($node) ? route('admin.nodes.destroy', $node) : '',
            'url_after_destroy' => session('admin.nodes.index'),
            'url_close' => session('admin.nodes.index'),
        ])
    </div>
</div>
