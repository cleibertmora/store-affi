<!-- Qicuk View Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="la la-remove"></i></span>
              </button>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="element-carousel slick-vertical-center"
                      data-slick-options='{
                          "slidesToShow": 1,
                          "slidesToScroll": 1,
                          "arrows": false,
                          {{-- "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-double-left" },
                          "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-double-right" } --}}
                      }'
                      >
                          <div class="product-image">
                              <div class="product-image--holder">
                                  <a href="product-details.html">
                                      <img src="assets/img/products/prod-01.jpg" alt="Product Image" class="primary-image">
                                  </a>
                              </div>
                              {{-- <span class="product-badge sale">sale</span> --}}
                          </div>
                          <div class="product-image">
                              <div class="product-image--holder">
                                  <a href="product-details.html">
                                      <img src="assets/img/products/prod-02.jpg" alt="Product Image" class="primary-image">
                                  </a>
                              </div>
                              <span class="product-badge sale">sale</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="modal-box product-summary">
                          {{-- <div class="product-navigation text-right mb--20">
                              <a href="#" class="prev"><i class="la la-angle-double-left"></i></a>
                              <a href="#" class="next"><i class="la la-angle-double-right"></i></a>
                          </div> --}}
                          <h3 id="product-title-modal" class="product-title mb--20"></h3>
                          <p id="product-description-modal" class="product-short-description mb--25"></p>
                          
                          <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                              <button data-link="" data-auth="" data-idproduct="" id="product-action-btn" type="button" onclick="redirectToProduct( this )" class="btn btn-shape-square">
                                  Check it out
                              </button>
                          </div>  
                          {{-- <div class="product-footer-meta">
                              <p><span>Category:</span>
                                  <a href="shop.html">Full Sweater</a>,
                                  <a href="shop.html">SweatShirt</a>,
                                  <a href="shop.html">Jacket</a>,
                                  <a href="shop.html">Blazer</a>
                              </p>
                          </div> --}}
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Qicuk View Modal End -->