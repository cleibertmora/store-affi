@extends('layout.main')

@section('customcss')

    <link rel="stylesheet" href="{{ asset('css/bootstrap-tagsinput.css') }}">

@endsection

@section('content')

<section class="blog-area mb--70 mb-md--50">
    <div class="container">
        {{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put', 'files' => true], ['class' => 'form']) }}

        @include('products.inc.form')

        <div class="form__group text-center">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

        {{ Form::close() }}
    </div>
</section>

@endsection

@section('customjs')

    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>

@endsection