<?php
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use App\Models\Backend\Items;
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

 <!-- head -->
 @include('frontend.includes.head')

<body>
 <!-- header -->
 @include('frontend.includes.header')
   
   
    <!--End header-->
    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('frontend')}}/imgs/slider/slider-1.png)">
                            <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                    Don’t miss amazing<br>
                                    grocery deals
                                </h1>
                                <p class="mb-65">Sign up for the daily newsletter</p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address">
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                             
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('frontend')}}/imgs/slider/slider-2.png)">
                            <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                    Fresh Vegetables<br>
                                    Big discount
                                </h1>
                                <p class="mb-65">Save up to 50% off on your first order</p>
                                <form action="{{ Route('ulogin') }}" method="get" class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address">
                                    <button  class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>
        <!--End hero slider-->
        <section class="popular-categories section-padding">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="title">
                        <h3>Featured Categories</h3>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
                </div>
                <div class="carausel-10-columns-cover position-relative">
                    <div class="carausel-10-columns" id="carausel-10-columns">
                        @php
                        $allsubcats= Subcategory::all();
                        @endphp
                        @foreach($allsubcats as $allsubcat)
                        <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="#tab-one"><img src="{{asset('backend/subcategoryimages/'. $allsubcat->img)}}" alt=""></a>
                            </figure>
                            <h6><a href="#">{{ $allsubcat->subcatName }}</a></h6>
                        </div>
                        @endforeach
                       
                      
                      
                       
                      
                        
                    </div>
                </div>
            </div>
        </section>
        <!--End category slider-->
       
        <!--End banners-->
        <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>All Products</h3>
                  
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($items as $item)
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{Route('showProductDetails',$item->id)}}">
                                                <img class="default-img" src="{{asset('backend/items/'. $item->pic)}}" alt="">
                                                <img class="hover-img" src="{{asset('backend/items/'. $item->pic)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="View Product" class="action-btn" href="{{Route('showProductDetails',$item->id)}}"><i class="fi-rs-eye"></i></a>
                                            <!-- <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a> -->
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                           
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                          
                                        </div>
                                        <h2><a href="{{Route('showProductDetails',$item->id)}}">{{$item->name}}</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>${{$item->disPrice}}</span>
                                                <span class="old-price">${{$item->salePrice}}</span>
                                            </div>
                                            <div class="add-cart">
                                                <form action="{{ Route('add') }}" method="post">
                                                    @csrf
                                                <input type="hidden" name="pid" value="{{$item->id}}">
                                                <input type="hidden" name="qnt" value="1">
                                                <button  type="submit" class="add addcart{{$item->id }}"><i class="fi-rs-shopping-cart mr-5"></i>Add</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--end product card-->
                           
                            
                        </div>
                        <!--End product-grid-4-->
                    </div>
               
              
                    <!--En tab four-->
                  
                    <!--En tab five-->
              
                    <!--En tab six-->
                   
                    <!--En tab seven-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <!--Products Tabs-->
        
        <!--End Best Sales-->
     
        <!--End Deals-->
    
        <!--End 4 columns-->
    </main>
    <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Please share your valuable<br>
                                    feedback  with us
                                </h2>
                                <p class="mb-45">Start You'r Shopping with <span class="text-brand">Nest Mart</span></p>
                                
                                <a href="{{route('contactshow')}}" class="btn" >Feedback Form</a>
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-1.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-2.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-3.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-4.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-5.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/imgs/theme/icons/icon-6.svg" alt="">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="{{asset('frontend')}}/imgs/theme/logo.svg" alt="logo"></a>
                               
                            </div>
                            <ul class="contact-infor">
                                <li><img src="{{asset('frontend')}}/imgs/theme/icons/icon-location.svg" alt=""><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{asset('frontend')}}/imgs/theme/icons/icon-contact.svg" alt=""><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                <li><img src="{{asset('frontend')}}/imgs/theme/icons/icon-email-2.svg" alt=""><strong>Email:</strong><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b485a575e7b755e484f15585456">[email&#160;protected]</a></span></li>
                                <li><img src="{{asset('frontend')}}/imgs/theme/icons/icon-clock.svg" alt=""><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s>
                    <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Phone</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">All</a></li>
                            <li><a href="#">Tech</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <h4 class="widget-title">Install App</h4>
                        <p class="">From App Store or Google Play</p>
                        <div class="download-app">
                            <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="{{asset('frontend')}}/imgs/theme/app-store.jpg" alt=""></a>
                            <a href="#" class="hover-up mb-sm-2"><img src="{{asset('frontend')}}/imgs/theme/google-play.jpg" alt=""></a>
                        </div>
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class="" src="{{asset('frontend')}}/imgs/theme/payment-method.png" alt="">
                    </div>
                </div>
        </div></section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2022, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template <br>All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="{{asset('frontend')}}/imgs/theme/icons/phone-call.svg" alt="hotline">
                        <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('frontend')}}/imgs/theme/icons/phone-call.svg" alt="hotline">
                        <p>1900 - 8888<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-facebook-white.svg" alt=""></a>
                        <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-twitter-white.svg" alt=""></a>
                        <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-instagram-white.svg" alt=""></a>
                        <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-pinterest-white.svg" alt=""></a>
                        <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-youtube-white.svg" alt=""></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('frontend')}}/imgs/theme/loading.gif" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('frontend')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('frontend')}}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('frontend')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/slick.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/waypoints.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/wow.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/select2.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/counterup.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/images-loaded.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/isotope.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/scrollup.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{asset('frontend')}}/js/main.js?v=5.2"></script>
    <script src="{{asset('frontend')}}/js/shop.js?v=5.2"></script>
    <script>
  
            jQuery('.search').keyup(function(){
                var search = jQuery(".search").val();
                if(search!=""){
                    jQuery(".content").show();
                    $.ajax({
                        url:'cart/searchdata/'+search,
                        dataType:'json',
                        type:'get',
                        success:function(result){
                            jQuery(".content").html('')
                            $.each(result.data, function(key,item){
                                $(".content").append('<li class="list-unstyled rounded">'+item.name+'</li>');
                            });
                            
                            
                        }
                    });

                   

                }
                else{
                    jQuery(".content").hide();

                }
            });
            jQuery(document).on('click', '.content li', function(){
                var text=jQuery(this).text();
                jQuery(".search").val(text);
                jQuery(".content").hide();

            })

        

    </script>
</body>

</html>