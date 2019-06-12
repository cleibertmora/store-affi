@extends('layout.main')

@section('content')

<section class="blog-area mb--70 mb-md--50">
    <div class="container">
        {{ Form::open(['route' => 'products.store', 'method' => 'post', 'files' => true], ['class' => 'form']) }}

        @include('products.inc.form')

        <div class="form__group text-center">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

        {{ Form::close() }}
    </div>
</section>

@endsection