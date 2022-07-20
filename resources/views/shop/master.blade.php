<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Basic page needs
         ============================================ -->
      <title>RoyalTech Market - E-commerce</title>
      <meta charset="utf-8">
      <meta name="keywords" content="" />
      <meta name="author" content="Magentech">
      <meta name="robots" content="index, follow" />
      <!-- Mobile specific metas
         ============================================ -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Favicon
         ============================================ -->
      @include('favicon')
      <!-- Google web fonts
         ============================================ -->
      <link href='{{asset('commerce/fonts.googleapis.com/css2d0f.css?family=Open+Sans:400,700,300')}}' rel='stylesheet' type='text/css'>
      <!-- Libs CSS
         ============================================ -->
      <link rel="stylesheet" href="{{asset('commerce/css/bootstrap/css/bootstrap.min.css')}}">
      <link href="{{asset('commerce/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/themecss/lib.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
      <!-- Theme CSS
         ============================================ -->
      <link href="{{asset('commerce/css/themecss/so_megamenu.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/themecss/so-categories.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/footer1.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/header1.css')}}" rel="stylesheet">
      <link id="color_scheme" href="{{asset('commerce/css/theme.css')}}" rel="stylesheet">
      <link href="{{asset('commerce/css/responsive.css')}}" rel="stylesheet">
   </head>
   <body class="res layout-subpage">
      <div id="wrapper" class="wrapper-full ">
         <!-- Header Container  -->
         <header id="header" class=" variantleft type_1">
            <!-- Header Top -->
            <div class="header-top">
               <div class="container">
                  <div class="row">
                     <div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">
                        <div class="form-group languages-block ">
                           <form action="#" method="post" enctype="multipart/form-data" id="bt-language">
                              <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                              <img src="{{asset('commerce/image/demo/flags/gb.png')}}" alt="English" title="English">
                              <span class="">English</span>
                              <span class="fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="#"><img class="image_flag" src="{{asset('commerce/image/demo/flags/gb.png')}}" alt="English" title="English" /> English </a></li>
                              </ul>
                           </form>
                        </div>
                        <div class="form-group currencies-block">
                           <form action="#" method="post" enctype="multipart/form-data" id="currency">
                              <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                              <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu btn-xs">
                                 <li> <a href="#">(€)&nbsp;Euro</a></li>
                                 <li> <a href="#">(£)&nbsp;Pounds	</a></li>
                                 <li> <a href="#">($)&nbsp;US Dollar	</a></li>
                              </ul>
                           </form>
                        </div>
                     </div>
                     <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock" id="TabBlock-1">
                           <ul class="top-link list-inline">
                              <li class="account" id="my_account">
                                 <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
                                 <ul class="dropdown-menu ">
                                    <li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
                                    <li><a href="login.html"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                                 </ul>
                              </li>
                              <li class="wishlist"><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
                              <li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
                              <li class="login"><a href="cart.html" title="Shopping Cart"><span >Shopping Cart</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- //Header Top -->
            <!-- Header center -->
            <div class="header-center left">
               <div class="container">
                  <div class="row">
                     <!-- Logo -->
                     <div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
                        <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/Royaltech-Original-1.png" title="RoyalTech Computers Limited" alt="RoyalTech Computers Limited" /></a>
                     </div>
                     <!-- //end Logo -->
                     <!-- Search -->
                     <div id="sosearchpro" class="col-sm-7 search-pro">
                        <form method="GET" action="#">
                           <div id="search0" class="search input-group">
                              <div class="select_category filter_type icon-select">
                                 <select class="no-border" name="category_id">
                                    <option value="0">All Categories</option>
                                    <option value="78">Apparel</option>
                                    <option value="77">Cables &amp; Connectors</option>
                                    <option value="82">Cameras &amp; Photo</option>
                                    <option value="80">Flashlights &amp; Lamps</option>
                                    <option value="81">Mobile Accessories</option>
                                    <option value="79">Video Games</option>
                                    <option value="20">Jewelry &amp; Watches</option>
                                    <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                    <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                    <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                 </select>
                              </div>
                              <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                              <span class="input-group-btn">
                              <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                              </span>
                           </div>
                           <input type="hidden" name="route" value="product/search" />
                        </form>
                     </div>
                     <!-- //end Search -->
                     <!-- Secondary menu -->
                     <div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
                        <!--cart-->
                        <div id="cart" class=" btn-group btn-shopping-cart">
                           <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                              <div class="shopcart">
                                 <span class="handle pull-left"></span>
                                 <span class="title">My cart</span>
                                 <p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
                              </div>
                           </a>
                           <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                              <li>
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td class="text-center" style="width:70px">
                                             <a href="product.html"> <img src="image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
                                          </td>
                                          <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                                          <td class="text-center"> x1 </td>
                                          <td class="text-center"> $1,202.00 </td>
                                          <td class="text-right">
                                             <a href="product.html" class="fa fa-edit"></a>
                                          </td>
                                          <td class="text-right">
                                             <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="text-center" style="width:70px">
                                             <a href="product.html"> <img src="image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
                                          </td>
                                          <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                                          <td class="text-center"> x1 </td>
                                          <td class="text-center"> $60.00 </td>
                                          <td class="text-right">
                                             <a href="product.html" class="fa fa-edit"></a>
                                          </td>
                                          <td class="text-right">
                                             <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </li>
                              <li>
                                 <div>
                                    <table class="table table-bordered">
                                       <tbody>
                                          <tr>
                                             <td class="text-left"><strong>Sub-Total</strong>
                                             </td>
                                             <td class="text-right">$1,060.00</td>
                                          </tr>
                                          <tr>
                                             <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                             </td>
                                             <td class="text-right">$2.00</td>
                                          </tr>
                                          <tr>
                                             <td class="text-left"><strong>VAT (20%)</strong>
                                             </td>
                                             <td class="text-right">$200.00</td>
                                          </tr>
                                          <tr>
                                             <td class="text-left"><strong>Total</strong>
                                             </td>
                                             <td class="text-right">$1,262.00</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <!--//cart-->
                     </div>
                  </div>
               </div>
            </div>
            <!-- //Header center -->
            <!-- Header Bottom -->
            <div class="header-bottom">
               <div class="container">
                  <div class="row">
                     <div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                           <div class="so-vertical-menu no-gutter compact-hidden">
                              <nav class="navbar-default">
                                 <div class="container-megamenu vertical  ">
                                    <div id="menuHeading">
                                       <div class="megamenuToogle-wrapper">
                                          <div class="megamenuToogle-pattern">
                                             <div class="container">
                                                <div>
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                                All Categories
                                                <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="navbar-header">
                                       <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
                                       </button>
                                       All Categories
                                    </div>
                                    <div class="vertical-wrapper" >
                                       <span id="remove-verticalmenu" class="fa fa-times"></span>
                                       <div class="megamenu-pattern">
                                          <div class="container">
                                             <ul class="megamenu">
                                                <li class="item-vertical style1 with-sub-menu hover">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/9.png" alt="icon">
                                                   <span>Automotive &amp; Motocrycle</span>
                                                   <b class="caret"></b>
                                                   </a>
                                                   <div class="sub-menu" data-subwidth="100" >
                                                      <div class="content" >
                                                         <div class="row">
                                                            <div class="col-sm-12">
                                                               <div class="row">
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Apparel</a>
                                                                              <ul>
                                                                                 <li><a href="#" >Accessories for Tablet PC</a></li>
                                                                                 <li><a href="#" >Accessories for i Pad</a></li>
                                                                                 <li><a  href="#" >Accessories for iPhone</a></li>
                                                                                 <li><a href="#" >Bags, Holiday Supplies</a></li>
                                                                                 <li><a href="#" >Car Alarms and Security</a></li>
                                                                                 <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Cables &amp; Connectors</a>
                                                                              <ul>
                                                                                 <li><a href="#" >Cameras &amp; Photo</a></li>
                                                                                 <li><a href="#" >Electronics</a></li>
                                                                                 <li><a href="#" >Outdoor &amp; Traveling</a></li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Camping &amp; Hiking</a>
                                                                              <ul>
                                                                                 <li><a href="#" >Earings</a></li>
                                                                                 <li><a href="#" >Shaving &amp; Hair Removal</a></li>
                                                                                 <li><a href="#" >Salon &amp; Spa Equipment</a></li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Smartphone &amp; Tablets</a>
                                                                              <ul>
                                                                                 <li><a href="#" >Sports &amp; Outdoors</a></li>
                                                                                 <li><a href="#" >Bath &amp; Body</a></li>
                                                                                 <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Bags, Holiday Supplies</a>
                                                                              <ul>
                                                                                 <li><a href="#" onclick="window.location = '18_46.html';">Battereries &amp; Chargers</a></li>
                                                                                 <li><a href="#" onclick="window.location = '24_64.html';">Bath &amp; Body</a></li>
                                                                                 <li><a href="#" onclick="window.location = '18_45.html';">Headphones, Headsets</a></li>
                                                                                 <li><a href="#" onclick="window.location = '18_30.html';">Home Audio</a></li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li class="item-vertical">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/10.png" alt="icon">
                                                   <span>Electronic</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical with-sub-menu hover">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <span class="label"></span>
                                                   <img src="image/theme/icons/3.png" alt="icon">
                                                   <span>Sports &amp; Outdoors</span>
                                                   <b class="caret"></b>
                                                   </a>
                                                   <div class="sub-menu" data-subwidth="60" >
                                                      <div class="content">
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                               <div class="row">
                                                                  <div class="col-md-12 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#" onclick="window.location = '81.html';" class="main-menu">Mobile Accessories</a>
                                                                              <ul>
                                                                                 <li><a href="#" onclick="window.location = '33_63.html';">Gadgets &amp; Auto Parts</a></li>
                                                                                 <li><a href="#" onclick="window.location = '24_64.html';">Bath &amp; Body</a></li>
                                                                                 <li><a href="#" onclick="window.location = '17.html';">Bags, Holiday Supplies</a></li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" onclick="window.location = '18_46.html';" class="main-menu">Battereries &amp; Chargers</a>
                                                                              <ul>
                                                                                 <li><a href="#" onclick="window.location = '25_28.html';">Outdoor &amp; Traveling</a></li>
                                                                                 <li><a href="#" onclick="window.location = '80.html';">Flashlights &amp; Lamps</a></li>
                                                                                 <li><a href="#" onclick="window.location = '24_66.html';">Fragrances</a></li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" onclick="window.location = '25_31.html';" class="main-menu">Fishing</a>
                                                                              <ul>
                                                                                 <li><a href="#" onclick="window.location = '57_73.html';">FPV System &amp; Parts</a></li>
                                                                                 <li><a href="#" onclick="window.location = '18.html';">Electronics</a></li>
                                                                                 <li><a href="#" onclick="window.location = '20_76.html';">Earings</a></li>
                                                                                 <li><a href="#" onclick="window.location = '33_60.html';">More Car Accessories</a></li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                               <div class="row banner">
                                                                  <a href="#">
                                                                  <img src="image/demo/cms/menu_bg2.jpg" alt="banner1">
                                                                  </a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li class="item-vertical with-sub-menu hover">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/2.png" alt="icon">
                                                   <span>Health &amp; Beauty</span>
                                                   <b class="caret"></b>
                                                   </a>
                                                   <div class="sub-menu" data-subwidth="100" >
                                                      <div class="content" >
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="row">
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Car Alarms and Security</a>
                                                                              <ul>
                                                                                 <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                 <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                 <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                 <li><a href="#" >Headphones, Headsets</a></li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="24.html" onclick="window.location = '24.html';" class="main-menu">Health &amp; Beauty</a>
                                                                              <ul>
                                                                                 <li>
                                                                                    <a href="#" >Home Audio</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Helicopters &amp; Parts</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Outdoor &amp; Traveling</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#">Toys &amp; Hobbies</a>
                                                                                 </li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Electronics</a>
                                                                              <ul>
                                                                                 <li>
                                                                                    <a href="#">Earings</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Salon &amp; Spa Equipment</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Shaving &amp; Hair Removal</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#">Smartphone &amp; Tablets</a>
                                                                                 </li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#"  class="main-menu">Sports &amp; Outdoors</a>
                                                                              <ul>
                                                                                 <li>
                                                                                    <a href="#" >Flashlights &amp; Lamps</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Fragrances</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Fishing</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >FPV System &amp; Parts</a>
                                                                                 </li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-4 static-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#" class="main-menu">More Car Accessories</a>
                                                                              <ul>
                                                                                 <li>
                                                                                    <a href="#" >Lighter &amp; Cigar Supplies</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Mp3 Players &amp; Accessories</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Men Watches</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Mobile Accessories</a>
                                                                                 </li>
                                                                              </ul>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
                                                                              <ul>
                                                                                 <li>
                                                                                    <a href="#" >Gift &amp; Lifestyle Gadgets</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Gift for Man</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Gift for Woman</a>
                                                                                 </li>
                                                                                 <li>
                                                                                    <a href="#" >Gift for Woman</a>
                                                                                 </li>
                                                                              </ul>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li class="item-vertical css-menu with-sub-menu hover">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/2.png" alt="icon">
                                                   <span>Smartphone &amp; Tablets</span>
                                                   <b class="caret"></b>
                                                   </a>
                                                   <div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
                                                      <div class="content" style="display: none;">
                                                         <div class="row">
                                                            <div class="col-sm-12">
                                                               <div class="row">
                                                                  <div class="col-sm-12 hover-menu">
                                                                     <div class="menu">
                                                                        <ul>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Headphones, Headsets</a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Home Audio</a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Health &amp; Beauty</a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li class="item-vertical">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/11.png" alt="icon">
                                                   <span>Flashlights &amp; Lamps</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/4.png" alt="icon">
                                                   <span>Camera &amp; Photo</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/5.png" alt="icon">
                                                   <span>Smartphone &amp; Tablets</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" >
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/7.png" alt="icon">
                                                   <span>Outdoor &amp; Traveling Supplies</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" style="display: none;">
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/6.png" alt="icon">
                                                   <span>Health &amp; Beauty</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" >
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/8.png" alt="icon">
                                                   <span>Toys &amp; Hobbies </span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" >
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/12.png" alt="icon">
                                                   <span>Jewelry &amp; Watches</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" >
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/13.png" alt="icon">
                                                   <span>Bags, Holiday Supplies</span>
                                                   </a>
                                                </li>
                                                <li class="item-vertical" >
                                                   <p class="close-menu"></p>
                                                   <a href="#" class="clearfix">
                                                   <img src="image/theme/icons/13.png" alt="icon">
                                                   <span>More Car Accessories</span>
                                                   </a>
                                                </li>
                                                <li class="loadmore">
                                                   <i class="fa fa-plus-square-o"></i>
                                                   <span class="more-view">More Categories</span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <!-- Main menu -->
                     <div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                           <nav class="navbar-default">
                              <div class=" container-megamenu  horizontal">
                                 <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    Navigation
                                 </div>
                                 <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                       <div class="container">
                                          <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                             <li class="home hover">
                                                <a href="{{url('/')}}"><span class="fa fa-home"></span> Home</a>
                                             </li>
                                             <li>
                                                <a href="{{url('/')}}"><span class="fa fa-info"></span> The Company</a>
                                             </li>
                                             <li>
                                                <a href="{{url('/')}}"><span class="fa fa-cog"></span> Center of Excellence</a>
                                             </li>
                                             <li>
                                                <a href="{{url('/')}}"><span class="fa fa-laptop"></span> Hire</a>
                                             </li>
                                             <li>
                                                <a href="{{url('/')}}"><span class="fa fa-phone"></span> Contact Us</a>
                                             </li>

                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </nav>
                        </div>
                     </div>
                     <!-- //end Main menu -->
                  </div>
               </div>
            </div>
            <!-- Navbar switcher -->
            <!-- //end Navbar switcher -->
         </header>
         <!-- //Header Container  -->
          @yield('content')
         <!-- Footer Container -->
         <footer class="main-footer footer-container type_footer1 style-two">
            <div class="pattern-layer-one" style="background-image: url('{{asset('corporate/images/background/pattern-7.png')}}')"></div>
		    <div class="pattern-layer-two" style="background-image: url('{{asset('corporate/images/background/pattern-8.png')}}')"></div>
            <!-- Footer Top Container -->
            <section class="footer-top">
               <div class="container content">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">Information</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="order-history.html">Order history</a></li>
									<li><a href="order-information.html">Order information</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-service">
						<div class="module clearfix">
							<h3 class="modtitle">Customer Service</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="return.html">Returns</a></li>
									<li><a href="sitemap.html">Site Map</a></li>
									<li><a href="my-account.html">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-account">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Brands</a></li>
									<li><a href="gift-voucher.html">Gift Vouchers</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Specials</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">Contact Us	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span> Tembo Co-op House Moi Ave Nairobi-Room 201</li>
									<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> support@royaltech.co.ke</a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0724 404935 <br>Phone 2: 0724404935</li>
								</ul>
							</div>
						</div>
					</div>

                     <div class="col-sm-12 collapsed-block footer-links">
                        <div class="module clearfix">
                           <div class="modcontent">
                              <hr class="footer-lines">
                              <div class="footer-directory-title">
                                 <h4 class="label-link">Top Stores : Brand Directory | Store Directory</h4>
                                 <ul class="footer-directory">
                                    <li>
                                       <h4>MOST SEARCHED KEYWORDS MARKET:</h4>
                                       <a href="#">Xiaomi Mi3</a> | <a href="#">Digiflip Pro XT 712 Tablet</a> | <a href="#">Mi 3 Phones</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>MOBILES:</h4>
                                       <a href="#">Moto E</a> | <a href="#">Samsung Mobile</a> | <a href="#">Micromax Mobile</a> | <a href="#">Nokia Mobile</a> | <a href="#">HTC Mobile</a> | <a href="#">Sony Mobile</a> | <a href="#">Apple Mobile</a> | <a href="#">LG Mobile</a> | <a href="#">Karbonn Mobile</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>CAMERA:</h4>
                                       <a href="#">Nikon Camera</a> | <a href="#">Canon Camera</a> | <a href="#">Sony Camera</a> | <a href="#">Samsung Camera</a> | <a href="#">Point shoot camera</a> | <a href="#">Camera Lens</a> | <a href="#">Camera Tripod</a> | <a href="#">Camera Bag</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>LAPTOPS:</h4>
                                       <a href="#">Apple Laptop</a> | <a href="#">Acer Laptop</a> | <a href="#">Sony Laptop</a> | <a href="#">Dell Laptop</a> | <a href="#">Asus Laptop</a> | <a href="#">Toshiba Laptop</a> | <a href="#">LG Laptop</a> | <a href="#">HP Laptop</a> | <a href="#">Notebook</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>TVS:</h4>
                                       <a href="#">Sony TV</a> | <a href="#">Samsung TV</a> | <a href="#">LG TV</a> | <a href="#">Panasonic TV</a> | <a href="#">Onida TV</a> | <a href="#">Toshiba TV</a> | <a href="#">Philips TV</a> | <a href="#">Micromax TV</a> | <a href="#">LED TV</a> | <a href="#">LCD TV</a> | <a href="#">Plasma TV</a> | <a href="#">3D TV</a> | <a href="#">Smart TV</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>TABLETS:</h4>
                                       <a href="#">Micromax Tablets</a> | <a href="#">HCL Tablets</a> | <a href="#">Samsung Tablets</a> | <a href="#">Lenovo Tablets</a> | <a href="#">Karbonn Tablets</a> | <a href="#">Asus Tablets</a> | <a href="#">Apple Tablets</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>WATCHES:</h4>
                                       <a href="#">FCUK Watches</a> | <a href="#">Titan Watches</a> | <a href="#">Casio Watches</a> | <a href="#">Fastrack Watches</a> | <a href="#">Timex Watches</a> | <a href="#">Fossil Watches</a> | <a href="#">Diesel Watches</a> | <a href="#">Luxury Watches</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>CLOTHING:</h4>
                                       <a href="#">Shirts</a> | <a href="#">Jeans</a> | <a href="#">T shirts</a> | <a href="#">Kurtis</a> | <a href="#">Sarees</a> | <a href="#">Levis Jeans</a> | <a href="#">Killer Jeans</a> | <a href="#">Pepe Jeans</a> | <a href="#">Arrow Shirts</a> | <a href="#">Ethnic Wear</a> | <a href="#">Formal Shirts</a> | <a href="#">Peter England Shirts</a> | <a href="#">View all</a>
                                    </li>
                                    <li>
                                       <h4>FOOTWEAR:</h4>
                                       <a href="#">Shoes</a> | <a href="#">Casual Shoes</a> | <a href="#">Adidas Shoes</a> | <a href="#">Gas Shoes</a> | <a href="#">Puma Shoes</a> | <a href="#">Reebok Shoes</a> | <a href="#">Woodland Shoes</a> | <a href="#">Red tape Shoes</a> | <a href="#">Nike Shoes</a> | <a href="#">View all</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                         <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <!-- Column -->
                                    <div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="copyright">Copyright &copy; 2022 by RoyalTech Computers Limited | All Rights Reserved.</div>
                                    </div>
                                    <!-- Column -->
                                    <div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="footer-nav">

                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms and Conditions</a></li>
                                            <li><a href="#">Copyright Statement</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Footer Bottom Container -->
               </div>
            </section>
            <!-- /Footer Top Container -->
            <!-- Footer Bottom Container -->

         </footer>
         <!-- //end Footer Container -->


	<!-- //end Footer Container -->
         {{--  --}}
      </div>
      <!-- Include Libs & Plugins
         ============================================ -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="{{asset('commerce/js/jquery-2.2.4.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/owl-carousel/owl.carousel.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/themejs/libs.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/unveil/jquery.unveil.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/countdown/jquery.countdown.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/datetimepicker/moment.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Theme files
         ============================================ -->
      <script type="text/javascript" src="{{asset('commerce/js/themejs/so_megamenu.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/themejs/addtocart.js')}}"></script>
      <script type="text/javascript" src="{{asset('commerce/js/themejs/application.js')}}"></script>
      <script type="text/javascript"><!--
         // Check if Cookie exists
         	if($.cookie('display')){
         		view = $.cookie('display');
         	}else{
         		view = 'list';
         	}
         	if(view) display(view);
         //-->
      </script>
   </body>
</html>