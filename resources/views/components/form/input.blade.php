@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'form-control form-control-sm defaultconfig-3',
    'maxlength' => '',
    'placeholder' => '',
    'name' => '' ]) !!}
  type="text" 
>