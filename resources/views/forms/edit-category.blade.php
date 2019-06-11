@extends('forms.inc.fromRightForm')

@section('div')

<div class="mini-cart" id="edit-category" style="overflow: auto;">

@overwrite

@section('content-form')

    {{ Form::open(['route' => 'categories.updateCategory', 'method' => 'post', 'files' => true], ['class' => 'form']) }}

        @include('forms.fields.categoriesForm')

        <div class="form__group text-center">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

    {{ Form::close() }}

@overwrite