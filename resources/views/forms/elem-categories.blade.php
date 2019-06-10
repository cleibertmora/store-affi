@extends('forms.inc.fromRightForm')

@section('div')

<div class="mini-cart" id="elem-categories" style="overflow: auto;">

@overwrite

@section('content-form')

    {{ Form::open(['route' => 'categories.store', 'method' => 'post', 'files' => true], ['class' => 'form']) }}

        @include('forms.fields.categoriesForm')

        <div class="form__group text-center">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

    {{ Form::close() }}

@overwrite