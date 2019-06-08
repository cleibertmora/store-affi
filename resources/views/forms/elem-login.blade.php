@extends('forms.inc.fromRightForm')

@section('div')

<div class="mini-cart" id="login-form" style="overflow: auto;">

@overwrite

@section('content-form')

    @if(Auth::guest())
        
        <h3 class="mini-cart__heading mb--45">Log In</h3>

        {{ Form::open(['route' => 'login', 'method' => 'post'], ['class' => 'form']) }}

            @include('forms.fields.login')
        
        {{ Form::close() }}

    @endif

@overwrite