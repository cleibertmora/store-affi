@extends('layout.main')

@section('content')

<section class="blog-area mb--70 mb-md--50">
    <div class="container">
        {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put', 'files' => true], ['class' => 'form']) }}

        @include('forms.fields.categoriesForm')

        <div class="form__group text-center">
            {{ Form::submit('Guardar', ['class' => 'btn']) }}
        </div>

        {{ Form::close() }}
    </div>
</section>

@endsection