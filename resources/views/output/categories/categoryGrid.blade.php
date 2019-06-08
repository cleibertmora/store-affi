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
        <div class="row">
            <div class="col-12">
                <div class="element-carousel" data-slick-options='{
                    "spaceBetween": 30,
                    "slidesToShow": 3,
                    "slidesToScroll": 1
                }'
                data-slick-responsive='[
                    {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                    {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                ]'>
                    <div class="item">
                        <article class="blog">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="image">
                                        <img src="assets/img/blog/blog-01.jpg" alt="Blog" class="w-100">
                                        <a href="blog-details-image.html" class="item-overlay"></a>
                                    </figure>
                                </div>
                                <div class="blog__info">
                                    <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="blog">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="image">
                                        <img src="assets/img/blog/blog-02.jpg" alt="Blog" class="w-100">
                                        <a href="blog-details-image.html" class="item-overlay"></a>
                                    </figure>
                                </div>
                                <div class="blog__info">
                                    <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="blog">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="image">
                                        <img src="assets/img/blog/blog-03.jpg" alt="Blog" class="w-100">
                                        <a href="blog-details-image.html" class="item-overlay"></a>
                                    </figure>
                                </div>
                                <div class="blog__info">
                                    <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- Blog Area End -->