 <!-- Blog Area Start -->
 <section class="blog-area mb--70 mb-md--50">
    <div class="container">
        <div class="row mb--35 mb-md--23">
            <div class="col-12 text-center">
                <h2>Categorías Principales</h2>
                @if(!Auth::guest())
                    @if (Auth::user()->admin())
                        <a href="#categories-elem" id="catedories-btn" class="btn btn-small btn-outline">Add New Category</a>
                    @endif
                @endif
            </div>
        </div>

        @foreach($categories->chunk(3) as $item)
        <div class="col-12">
            <div class="row">        
                @foreach($item as $category)
                    <div class="item col-lg-4 col-md-6 col-sm-12">
                        <article class="blog">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="image">
                                        <img src="upload/categories-thumbnail/{{ $category->imagen }}" alt="Blog" class="w-100">
                                        <a href="blog-details-image.html" class="item-overlay"></a>
                                    </figure>
                                </div>
                                <div class="blog__info">
                                    <h2 class="blog__title"><a href="blog-details-image.html">{{ $category->name }}</a>&nbsp;&nbsp; <a href="#edit-category"><i class="fas fa-edit"></i></a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach                    
            </div>
        </div>
        @endforeach
        
    </div>
</section>
<!-- Blog Area End -->