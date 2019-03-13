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
        null => 'По умолчанию',
        'front.pages.home' => 'Домашняя страница',
        'front.pages.about' => 'О нас',
        'front.pages.payment' => 'Оплата и доставка',
        'front.pages.policy' => 'Политика конф.',
        'front.pages.cooperation' => 'Сотрудничество',
        //'front.pages.buy' => 'Где купить',
        'front.pages.faq' => 'Вопросы и контакты',
        'front.pages.questions' => 'Вопрос-ответ',
        'front.pages.contacts' => 'Контакты',
        'front.pages.study' => 'Обучение',
        ], null, ['class' => 'form-control select2', 'data-minimum-results-for-search' => '-1']) !!}
    {!! $errors->first('data.blade', '<p class="help-block">:message</p>') !!}
</div>

@empty($node)
<div class="form-group {{ $errors->has('url_alias') ? 'has-error' : ''}}">
    {!! Form::label('url_alias', 'URL-алиас', ['class' => 'control-label']) !!}
    {!! Form::text('url_alias', isset($node) ? optional($node->urlAlias)->alias : null, ['class' => 'form-control', isset($node) ? 'readonly' : '']) !!}
    {!! $errors->first('url_alias', '<p class="help-block">:message</p>') !!}
</div>
@endempty

@include('admin.fields.field-form-buttons', [
    'url_store_and_create' => route('admin.nodes.create'),
    'url_store_and_close' => session('admin.nodes.index'),
    'url_destroy' => isset($node) ? route('admin.nodes.destroy', $node) : '',
    'url_after_destroy' => session('admin.nodes.index'),
    'url_close' => session('admin.nodes.index'),
])
