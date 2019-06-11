{{ Form::text('user_id', Auth::user()->id, ['hidden']) }}

<div class="form__group">
    {{ Form::label('name', 'Nombre de la Categoria'), ['class' => 'form__label'] }}

    {{ Form::text('name', null, ['class' => 'form__input', 'id' => 'name']) }}
</div>

<div class="form__group">
    {{ Form::label('slug', 'Slug (separado por "-")'), ['class' => 'form__label'] }}

    {{ Form::text('slug', null, ['class' => 'form__input', 'id' => 'slug']) }}
</div>

<div class="form__group">
    {{ Form::label('seo_title', 'Titulo SEO'), ['class' => 'form__label'] }}

    {{ Form::text('seo_title', null, ['class' => 'form__input', 'id' => 'seo_title']) }}
</div>

<div class="form__group">
    {{ Form::label('meta_description', 'Descripción SEO (menos de 150 palabras)'), ['class' => 'form__label'] }}

    {{ Form::textarea('meta_description', null, ['class' => 'form__input form__input--textarea', 'id' => 'meta_description']) }}
</div>

<div class="form__group">
    {{ Form::label('description', 'Descripción de la categoria'), ['class' => 'form__label'] }}

    {{ Form::textarea('description', null, ['class' => 'form__input form__input--textarea', 'id' => 'description']) }}
</div>

<div class="form__group">
    {{ Form::label('imagen', 'Imagen de categoria (370px x 270px)'), ['class' => 'form__label'] }}
    <br/>
    {{ Form::file('imagen', null, ['class' => 'form-control-file', 'id' => 'imagen']) }}
</div>
<br/>