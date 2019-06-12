
<div class="form__group">
        {{ Form::label('name', 'Nombre del Producto'), ['class' => 'form__label'] }}
    
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
        {{ Form::label('description', 'Descripción del Producto'), ['class' => 'form__label'] }}
    
        {{ Form::textarea('description', null, ['class' => 'form__input form__input--textarea', 'id' => 'description']) }}
    </div>

    <div class="form__group">
        {{ Form::label('affiliate_link', 'Link afiliado'), ['class' => 'form__label'] }}
    
        {{ Form::textarea('affiliate_link', null, ['class' => 'form__input form__input--textarea', 'id' => 'affiliate_link']) }}
    </div>
    
    <div class="form__group">
        {{ Form::label('photo', 'Imagen de categoria (370px x 270px)'), ['class' => 'form__label'] }}
        <br/>
        {{ Form::file('photo', null, ['class' => 'form-control-file', 'id' => 'photo']) }}
    </div>
    <br/>