@php
    $value = isset($value) ? $value : null;
    $field_name = isset($field_name) ? $field_name : '';
    $label = isset($label) ? $label : '[значение]';
@endphp

<a href="#"
   class="field-x-editable"
   data-value="{{ $value }}"
   data-type="{{ isset($type) ? $type : 'text' }}"
   data-name="{{ $field_name }}"
   @isset($url)data-url="{{ $url }}"@endisset
   @isset($pk)data-pk="{{ $pk }}"@endisset
> {{ $value ?: $label }}
</a>

{{--
 @include('admin.fields.field-editable', [
    'value' => $form->data['message'] ?? '[Вопрос]',
    'type' => 'textarea',
    'field_name' => 'data[message]',
    'pk' => $form->id,
    'url' => route('admin.forms.editable', $form),
])
--}}