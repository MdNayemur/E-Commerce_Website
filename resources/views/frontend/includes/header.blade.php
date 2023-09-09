<header class="header-area header-style-1 header-height-2">
       
       
       <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
           <div class="container">
               <div class="header-wrap">
                   <div>
                       <a href="{{ route('frontcatshow') }}"><img src="{{asset('frontend')}}/imgs/theme/logo.svg" alt="logo"></a>
                   </div>
                   <div class="header-right">
                       <div class="search-style-2">
               
                         <input type="text" class="search" placeholder="Search for your items...">
                         <div class="content bg-white rounded width-100 m-auto" style="display:none">
        
                         </div>
                         <style>
                           .content li{
                               font-size:17px;
                           }
                           .content li:hover{
                               background:rgba(0,0,0,0.3);
                               cursor:pointer;
                           }
                         </style>
                          
                       </div>
                      
                       <div class="header-action-right">
                           <div class="header-action-2">
                             
                               <div class="header-action-icon-2">
                               @if(Auth::check())
                                   <a href="#">
                                       <img class="svgInject" alt="Nest" src="{{asset('frontend')}}/imgs/theme/icons/icon-user.svg">
                                   </a>
                                  
                                   <a href="#"><span class="lable">{{ Auth::user()->fname}}</span></a>
                                   @endif
                               </div>
                               <div class="header-action-icon-2">
                                   <a class="mini-cart-icon" href="shop-cart.html">
                                       <img alt="Nest" src="{{asset('frontend')}}/imgs/theme/icons/icon-cart.svg">
                                       <span class="pro-count blue">{{ count(Cart::getContent()) }}</span>
                                   </a>
                                   <a href="#"><span class="lable">Cart</span></a>
                                   <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                       <ul>
                                           @php $item = Cart::getContent(); @endphp
                                           @foreach($item as $item)
                                           <li>
                                               <div class="shopping-cart-img">
                                                   <a href="#"><img alt="Nest" src="{{asset('backend/items/'.$item->attributes->img)}}"></a>
                                               </div>
                                               <div class="shopping-cart-title">
                                                   <h4><a href="#">{{ $item->name }}</a></h4>
                                                   <h4><span>{{ $item->quantity }} × </span>{{ $item->price }}</h4>
                                               </div>
                                               <div class="shopping-cart-delete">
                                                   <a href="{{ Route('itemDelete', $item->id) }}"><i class="fi-rs-cross-small"></i></a>
                                               </div>
                                           </li>
                                           @endforeach

                                           
                                       </ul>
                                       <div class="shopping-cart-footer">
                                           <div class="shopping-cart-total">
                                               <h4>Total <span> €{{ Cart::getSubTotal(); }}</span></h4>
                                           </div>
                                           <div class="shopping-cart-button">
                                               <a href="{{ Route('viewcart') }}">View Cart</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="header-action-icon-2">
                                   <a href="page-account.html">
                                       <img class="svgInject" alt="Nest" src="{{asset('frontend')}}/imgs/theme/icons/icon-user.svg">
                                   </a>
                                   <a href="#"><span class="lable ml-0">Account</span></a>
                                   <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                       <ul>
                                       
                                           @if(Auth::check())
                                           <li>
                                               <a href="#"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                           </li>
                                           <li>
                                               <a href="#"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                           </li>
                                           <li>
                                               <a href="#"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                           </li>
                                           <li>
                                               <a href="#"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                           </li>
                                           <li>
                                               <a href="#"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                           </li>
                                           <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                               <li>
                                             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               this.closest('form').submit();">
                                            <i class="fi fi-rs-sign-out mr-10"></i>
                                          Sign Out</a>
                                            </li>
                                             </form>
                                           @else
                                           <li>
                                               <a href="{{ Route('uregister') }}"><i class="fi fi-rs-user mr-10"></i>Register</a>
                                           </li>
                                        
                                           <li>
                                               <a href="{{ Route('ulogin') }}"><i class="fi fi-rs-user mr-10"></i>Log In</a>
                                           </li>
                                         
                                           @endif
                                       </ul>
                                       
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="header-bottom header-bottom-bg-color sticky-bar">
           <div class="container">
               <div class="header-wrap header-space-between position-relative">
                   <div class="logo logo-width-1 d-block d-lg-none">
                       <a href="index.html"><img src="{{asset('frontend')}}/imgs/theme/logo.svg" alt="logo"></a>
                   </div>
                   <div class="header-nav d-none d-lg-flex">
                       <div class="main-categori-wrap d-none d-lg-block">
                           <a class="categories-button-active" href="#">
                               <span class="fi-rs-apps"></span> <span class="et">All Categories</span> 
                               <i class="fi-rs-angle-down"></i>
                           </a>
                           <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                               <div class="d-flex categori-dropdown-inner">
                                   <ul>
                                       @php $count=1; @endphp
                                       @foreach($allcat as $allcat)
                                       @if($count < 5 )
                                       <li>
                                           <a href="#"> <img src="{{asset('frontend')}}/imgs/theme/icons/category-1.svg" alt="">{{ $allcat->subcatName }}</a>
                                       </li>
                                       @elseif($count == 5)
                                       </ul>
                                       <ul class="end">
                                       <li>
                                           <a href="#"> <img src="{{asset('frontend')}}/imgs/theme/icons/category-1.svg" alt="">{{ $allcat->subcatName }}</a>
                                       </li>
                                       @else
                                       <li>
                                           <a href="#"> <img src="{{asset('frontend')}}/imgs/theme/icons/category-1.svg" alt="">{{ $allcat->subcatName }}</a>
                                       </li>

                                       </ul>
                                      
                                       @endif
                                       @php $count++; @endphp
                                       @endforeach
                                      
                                      
                                   </ul>
                                  
                               </div>
                              
                            
                           </div>
                       </div>
                       <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                           <nav>
                               <ul>
                                  
                                   <li>
                                       <a  href="{{ route('frontcatshow') }}">Home</a>
                                    
                                   </li>
                                   <li>
                                       <a href="{{route('aboutshow')}}">About</a>
                                   </li>
                                 
                                   <li>
                                       <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                       <ul class="sub-menu">
                                           <li><a href="{{route('frontcatshow')}}">Home</a></li>
                                           <li><a href="{{route('aboutshow')}}">About</a></li>
                                           <li><a href="{{route('contactshow')}}">Contact</a></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <a href="{{route('contactshow')}}">Contact</a>
                                   </li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="hotline d-none d-lg-flex">
                       <img src="{{asset('frontend')}}/imgs/theme/icons/icon-headphone.svg" alt="hotline">
                       <p>1900 - 888<span>24/7 Support Center</span></p>
                   </div>
                   <div class="header-action-icon-2 d-block d-lg-none">
                       <div class="burger-icon burger-icon-white">
                           <span class="burger-icon-top"></span>
                           <span class="burger-icon-mid"></span>
                           <span class="burger-icon-bottom"></span>
                       </div>
                   </div>
                   <div class="header-action-right d-block d-lg-none">
                       <div class="header-action-2">
                           <div class="header-action-icon-2">
                               <a href="shop-wishlist.html">
                                   <img alt="Nest" src="{{asset('frontend')}}/imgs/theme/icons/icon-heart.svg">
                                   <span class="pro-count white">4</span>
                               </a>
                           </div>
                           <div class="header-action-icon-2">
                               <a class="mini-cart-icon" href="#">
                                   <img alt="Nest" src="{{asset('frontend')}}/imgs/theme/icons/icon-cart.svg">
                                   <span class="pro-count white">2</span>
                               </a>
                               <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                   <ul>
                                       <li>
                                           <div class="shopping-cart-img">
                                               <a href="shop-product-right.html"><img alt="Nest" src="{{asset('frontend')}}/imgs/shop/thumbnail-3.jpg"></a>
                                           </div>
                                           <div class="shopping-cart-title">
                                               <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                               <h3><span>1 × </span>$800.00</h3>
                                           </div>
                                           <div class="shopping-cart-delete">
                                               <a href="#"><i class="fi-rs-cross-small"></i></a>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="shopping-cart-img">
                                               <a href="shop-product-right.html"><img alt="Nest" src="{{asset('frontend')}}/imgs/shop/thumbnail-4.jpg"></a>
                                           </div>
                                           <div class="shopping-cart-title">
                                               <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                               <h3><span>1 × </span>$3500.00</h3>
                                           </div>
                                           <div class="shopping-cart-delete">
                                               <a href="#"><i class="fi-rs-cross-small"></i></a>
                                           </div>
                                       </li>
                                   </ul>
                                   <div class="shopping-cart-footer">
                                       <div class="shopping-cart-total">
                                           <h4>Total <span>$383.00</span></h4>
                                       </div>
                                       <div class="shopping-cart-button">
                                           <a href="shop-cart.html">View cart</a>
                                           <a href="shop-checkout.html">Checkout</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <div class="mobile-header-active mobile-header-wrapper-style">
       <div class="mobile-header-wrapper-inner">
           <div class="mobile-header-top">
               <div class="mobile-header-logo">
                   <a href="index.html"><img src="{{asset('frontend')}}/imgs/theme/logo.svg" alt="logo"></a>
               </div>
               <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                   <button class="close-style search-close">
                       <i class="icon-top"></i>
                       <i class="icon-bottom"></i>
                   </button>
               </div>
           </div>
           <div class="mobile-header-content-area">
               <div class="mobile-search search-style-3 mobile-header-border">
                   <form action="#">
                       <input type="text" placeholder="Search for items…">
                       <button type="submit"><i class="fi-rs-search"></i></button>
                   </form>
               </div>
               <div class="mobile-menu-wrap mobile-header-border">
                   <!-- mobile menu start -->
                   <nav>
                       <ul class="mobile-menu font-heading">
                           <li class="menu-item-has-children">
                               <a href="index.html">Home</a>
                               <ul class="dropdown">
                                   <li><a href="index.html">Home 1</a></li>
                                   <li><a href="index-2.html">Home 2</a></li>
                                   <li><a href="index-3.html">Home 3</a></li>
                                   <li><a href="index-4.html">Home 4</a></li>
                                   <li><a href="index-5.html">Home 5</a></li>
                                   <li><a href="index-6.html">Home 6</a></li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="shop-grid-right.html">shop</a>
                               <ul class="dropdown">
                                   <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                   <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                   <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                   <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                   <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                   <li class="menu-item-has-children">
                                       <a href="#">Single Product</a>
                                       <ul class="dropdown">
                                           <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                           <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                           <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                           <li><a href="shop-product-vendor.html">Product – Vendor Infor</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="shop-filter.html">Shop – Filter</a></li>
                                   <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                   <li><a href="shop-cart.html">Shop – Cart</a></li>
                                   <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                   <li><a href="shop-compare.html">Shop – Compare</a></li>
                                   <li class="menu-item-has-children">
                                       <a href="#">Shop Invoice</a>
                                       <ul class="dropdown">
                                           <li><a href="shop-invoice-1.html">Shop Invoice 1</a></li>
                                           <li><a href="shop-invoice-2.html">Shop Invoice 2</a></li>
                                           <li><a href="shop-invoice-3.html">Shop Invoice 3</a></li>
                                           <li><a href="shop-invoice-4.html">Shop Invoice 4</a></li>
                                           <li><a href="shop-invoice-5.html">Shop Invoice 5</a></li>
                                           <li><a href="shop-invoice-6.html">Shop Invoice 6</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="#">Vendors</a>
                               <ul class="dropdown">
                                   <li><a href="vendors-grid.html">Vendors Grid</a></li>
                                   <li><a href="vendors-list.html">Vendors List</a></li>
                                   <li><a href="vendor-details-1.html">Vendor Details 01</a></li>
                                   <li><a href="vendor-details-2.html">Vendor Details 02</a></li>
                                   <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                   <li><a href="vendor-guide.html">Vendor Guide</a></li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="#">Mega menu</a>
                               <ul class="dropdown">
                                   <li class="menu-item-has-children">
                                       <a href="#">Women's Fashion</a>
                                       <ul class="dropdown">
                                           <li><a href="shop-product-right.html">Dresses</a></li>
                                           <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                           <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                           <li><a href="shop-product-right.html">Women's Sets</a></li>
                                       </ul>
                                   </li>
                                   <li class="menu-item-has-children">
                                       <a href="#">Men's Fashion</a>
                                       <ul class="dropdown">
                                           <li><a href="shop-product-right.html">Jackets</a></li>
                                           <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                           <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                       </ul>
                                   </li>
                                   <li class="menu-item-has-children">
                                       <a href="#">Technology</a>
                                       <ul class="dropdown">
                                           <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                           <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                           <li><a href="shop-product-right.html">Tablets</a></li>
                                           <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                           <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="blog-category-fullwidth.html">Blog</a>
                               <ul class="dropdown">
                                   <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                   <li><a href="blog-category-list.html">Blog Category List</a></li>
                                   <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                   <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                   <li class="menu-item-has-children">
                                       <a href="#">Single Product Layout</a>
                                       <ul class="dropdown">
                                           <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                           <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                           <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="#">Pages</a>
                               <ul class="dropdown">
                                   <li><a href="page-about.html">About Us</a></li>
                                   <li><a href="page-contact.html">Contact</a></li>
                                   <li><a href="page-account.html">My Account</a></li>
                                   <li><a href="page-login.html">Login</a></li>
                                   <li><a href="page-register.html">Register</a></li>
                                   <li><a href="page-forgot-password.html">Forgot password</a></li>
                                   <li><a href="page-reset-password.html">Reset password</a></li>
                                   <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                   <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                   <li><a href="page-terms.html">Terms of Service</a></li>
                                   <li><a href="page-404.html">404 Page</a></li>
                               </ul>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="#">Language</a>
                               <ul class="dropdown">
                                   <li><a href="#">English</a></li>
                                   <li><a href="#">French</a></li>
                                   <li><a href="#">German</a></li>
                                   <li><a href="#">Spanish</a></li>
                               </ul>
                           </li>
                       </ul>
                   </nav>
                   <!-- mobile menu end -->
               </div>
               <div class="mobile-header-info-wrap">
                   <div class="single-mobile-header-info">
                       <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                   </div>
                   <div class="single-mobile-header-info">
                       <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                   </div>
                   <div class="single-mobile-header-info">
                       <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                   </div>
               </div>
               <div class="mobile-social-icon mb-50">
                   <h6 class="mb-15">Follow Us</h6>
                   <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-facebook-white.svg" alt=""></a>
                   <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-twitter-white.svg" alt=""></a>
                   <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-instagram-white.svg" alt=""></a>
                   <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-pinterest-white.svg" alt=""></a>
                   <a href="#"><img src="{{asset('frontend')}}/imgs/theme/icons/icon-youtube-white.svg" alt=""></a>
               </div>
               <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
           </div>
       </div>
   </div>