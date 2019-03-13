
@include('admin.fields.field-checkbox', [
    'label' => 'Публиковать',
    'field_name' => 'publish',
    'status' => isset($item) ? $item->publish : 1,
])

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Название', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

{{--
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('body', 'Контент', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control ck-editor ck-full', 'rows' => 5]) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
--}}

@include('admin.fields.field-form-buttons', [
    'url_store_and_create' => route('admin.items.create'),
    'url_store_and_close' => session('admin.items.index'),
    'url_destroy' => isset($item) ? route('admin.items.destroy', $item) : '',
    'url_after_destroy' => session('admin.items.index'),
    'url_close' => session('admin.items.index'),
])
