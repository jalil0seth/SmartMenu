<!DOCTYPE html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="de"
   xml:lang="de" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>TopTop Donuts - Essen online Commander in Köln</title>
      <meta name="description" content="Wähle deine Lieblingsgerichte von der TopTop Donuts Speisekarte in Köln und bestelle einfach online. Genieße leckeres Essen, schnell geliefert!"/>
      <meta name="keywords" content="TopTop Donuts, TopTop Donuts, Essen Commander, TopTop Donuts Köln, Essen liefern, Snacks, Kuchen, Nachspeisen"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="theme-color" content="#55ADDE"/>
      <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
      <link rel="shortcut icon" href="favicon.ico"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('style/style22.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/takeaway22.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('tpl/template1/additives.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('basket/css/sidedishes.css') }}"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
      <style>
         .menucard-container .menucat .addtobasket .product-description {
            display: none !important;
         }

         .menucard-container .meal__product-image-container2 {
            align-self: center;
            display: flex;
            text-align: right;
            height: 130px;
         }

         .staticBasket .cart-single-meal {
            padding: 0;
            padding-top: 0 !important;
         }
      </style>
      
      <style type="text/css">
      @charset "UTF-8";
         #js-basket-container {
           overflow: auto;
           background: #fff;
           height: 100%;
           position: relative;
           width: 320px;
           top: -55px; }
           #js-basket-container .cart-sum {
             border-top: 1px solid #ccc;
             border-bottom: 1px solid #ccc;
             padding: 16px; }
           #js-basket-container .cart-paymentmethods,
           #js-basket-container .cartbutton {
             padding: 0 16px;
              }
           #js-basket-container .cartbutton .cartbutton-button {
             border-radius: 3px;
             display: inline-block;
             text-align: center;
             cursor: pointer;
             -webkit-appearance: none;
             -moz-appearance: none;
             appearance: none;
             color: #fff;
             box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
             background-color: #1574f5;
             height: 50px;
             line-height: 50px;
             text-transform: uppercase;
             width: 100%;
             margin-bottom: 4px;
             -webkit-user-select: none;
             -moz-user-select: none;
             -ms-user-select: none;
             user-select: none;
             font-weight: 600;
             font-size: 20px; }
             #js-basket-container .cartbutton .cartbutton-button:hover {
               background-color: #0953bd;
               color: #fff; }
             #js-basket-container .cartbutton .cartbutton-button.btn-disabled {
               border-bottom-color: #bbb;
               background-color: #f0f0f0;
               color: #bbb;
               text-shadow: none;
               cursor: not-allowed; }
         
         body.fullscreen.basket .menucard-listing .menu-menucard,
         body.fullscreen.basket .menucard-listing .tabs-inforating {
           display: none !important; }
         
         .missing,
         .mismatch {
           padding: 16px; }
         
         .cart-sum-name {
           width: 100%;
           padding: 4px 0; }
         
         .cart-sum-price {
           min-width: 85px;
           text-align: right;
           white-space: nowrap; }
         
         .cartbutton-button-sidedishes {
           text-transform: none; }
         
         .cart-single-meal {
           padding: 4px 0 4px 16px;
           font-size: 13px;
           color: #000; }
           .cart-single-meal.highlight {
             background: #FFFDD0; }
           .cart-single-meal .cart-row .cart-meal-amount {
             padding-right: 32px;
             width: 20px; }
           .cart-single-meal .cart-row .cart-meal-edit-delete,
           .cart-single-meal .cart-row .cart-meal-edit-add,
           .cart-single-meal .cart-row .cart-meal-edit-comment,
           .cart-single-meal .cart-row .cart-meal-delete {
             cursor: pointer;
             float: left; }
           .cart-single-meal .cart-row .cart-meal-delete {
             min-width: 40px; }
             .cart-single-meal .cart-row .cart-meal-delete:before {
               display: inline-block;
               cursor: pointer;
               color: #1574f5;
               font-size: 18px;
               content: '';
               font-family: fontello;
               font-weight: 400;
               line-height: 0.3;
               float: right;
               padding: 16px; }
           .cart-single-meal .cart-row .cart-meal-edit-delete:before,
           .cart-single-meal .cart-row .cart-meal-edit-add:before {
             content: '';
             font-family: fontello;
             font-weight: 400;
             line-height: 1;
             padding: 4px 8px;
             margin: 0 3px;
             border: 1px solid #cecece;
             border-radius: 4px;
             cursor: pointer; }
           .cart-single-meal .cart-row .cart-meal-edit-delete:before {
             content: ''; }
         
         .cart-row {
           display: -webkit-box;
           display: -webkit-flex;
           display: -moz-flex;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-pack: start;
           -ms-flex-pack: start;
           -webkit-justify-content: flex-start;
           -moz-justify-content: flex-start;
           justify-content: flex-start;
           -webkit-box-align: center;
           -ms-flex-align: center;
           -webkit-align-items: center;
           -moz-align-items: center;
           align-items: center;
           -webkit-transform: translate3d(0, 0, 0);
           transform: translate3d(0, 0, 0);
           width: 100%; }

           .chcolor {
               color: #666 !important;
            }

            .chcolor2 {
               color: #8d4e4e !important;
            }

         .cart-meal-edit-buttons {
           min-width: 98px; }
         
         .cart-meal-name {
           width: 100%;
           padding: 4px 0;
           word-break: break-word; }
         
         .cart-meal-price {
           min-width: 80px;
           text-align: right; }
         
         .cart-meal-delete-disabled:before {
           color: #fff;
           cursor: default; }
         
         .cart-meal-edit-comment:before {
           display: inline-block;
           cursor: pointer;
           color: #1574f5;
           font-size: 18px;
           content: "";
           font-family: fontello;
           font-weight: 400;
           line-height: 1;
           padding: 0 10px; }
         
         .cart-meal-edit-comment.hascomment:before {
           color: #0094FF; }
         
         .cart-meal-extra,
         .cart-meal-comment {
           padding: 0 0 8px 32px; }
         
         .cart-meal-comment {
           width: 100%;
           margin-right: 12px;
           font-style: italic;
           overflow: hidden;
           text-overflow: ellipsis;
           white-space: nowrap; }
         
         .cart-row.commentinput {
           display: block; }
         
         .cart-row.commentinput fieldset {
           margin-right: 12px;
           border: 1px solid #1574f5; }
         
         .cart-row.commentinput fieldset legend {
           margin-left: 10px;
           padding: 0 4px; }
         
         textarea.cart-meal-textarea {
           width: 100%;
           padding: 0 12px;
           resize: none; }
         
         .cart-meal-btns {
           float: right; }
         
         .cart-meal-btn {
           min-width: 80px;
           padding: 10px 12px;
           float: left;
           text-align: right;
           font-weight: 600; }
         
         .meal-error-mismatch:before,
         .meal-error-missing:before {
           margin-right: 12px;
           content: '';
           color: #FF0000;
           font-family: fontello;
           font-weight: 400;
           font-size: 18px; }
         
         .cart-meal-error:before {
           margin-right: 12px;
           content: '';
           color: #FF0000;
           font-family: fontello;
           font-weight: 400;
           font-size: 18px; }
         
         .cart-meal-exclude:before {
           margin-right: 4px;
           content: '';
           color: #888;
           font-family: fontello;
           font-weight: 400;
           font-size: 12px; }
         
         #cart-exclusive .cart-meal-exclude {
           padding: 0 16px 0;
           margin-top: 20px;
           text-align: center; }
         
         .cart-meal-exclude-only {
           padding: 16px;
           text-align: center; }
         
         .grey {
           color: #666; }
         
         .row-sum {
           font-weight: 900;
           color: #000; }
         
         .row-green {
           color: #380;
           font-weight: 600; }
         
         .minimumorderamount-reached {
           margin-top: 12px;
           text-align: center; }
         
         .basket-notification {
           font-size: 12px;
           padding: 20px;
           margin: 0px 22px;
           margin-bottom: 12px;
           border-radius: 3px;
           border: 1px solid rgba(80, 174, 204, 0.51);
           background-color: rgba(80, 174, 204, 0.1);
           display: block; }
         
         .legend.excluded_from_minimum_calculation {
           text-align: center;
           margin: 1em; }
           .legend.excluded_from_minimum_calculation:before {
             display: inline-block;
             color: #888;
             content: "";
             font-family: fontello;
             font-weight: 400;
             line-height: 1;
             line-height: .3; }
            
            .hideit{
               display: none;
            }
         </style>
   </head>
   <body class="menu">
      <div class="header">
         <div id="navigationopenbutton" class="menubutton"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
         <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i></div>
            <div class="nav-wrapper">
               <ul>
                  <li><a href="review" title="Bewertungen zu TopTop Donuts ansehen">Bewertungen</a></li>
                  <li><a href="contact" title="Nehmen Sie Kontakt mit TopTop Donuts auf">Kontaktdaten</a></li>
                  <li><a href="colofon" title="">Impressum</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="templaterevamped-hero">
         <div class="templaterevamped-header">
            <div class="restaurantlogo">
               <img src="https://static.lieferando.de/images/restaurants/de/OR0037R1/logo_465x320.png">
            </div>
            <h1>
               TOPTOP DONUTS        
            </h1>
         </div>
      </div>
      <div class="full">
         <div class="menucard-main">
            <div class="menuproducts">
               <div class="js-menu-category-bar-sticky">
                  <div class="menu-category-bar-container">
                     <div class="menu-category-bar menucard-container">
                        <div class="menu-category-list">
                           <div class="swiper-container js-swiper">
                              <div class="swiper-wrapper">
                              @foreach ($categories as $cat)
                                @if ($categories->first()->id == $cat->id)
                                    <a href="#cat{{$cat->id}}" data-category="cat{{$cat->id}}" class="swiper-slide slide-active swiper-slide-active">{{$cat->name}}</a>
                                @elseif ($categories->skip(1)->first()->id == $cat->id)   
                                    <a href="#cat{{$cat->id}}" data-category="cat{{$cat->id}}" class="swiper-slide wiper-slide-next">{{$cat->name}}</a>
                                @else
                                    <a href="#cat{{$cat->id}}" data-category="cat{{$cat->id}}" class="swiper-slide">{{$cat->name}}</a>
                                @endif
                              @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="swipe-next">
                           <i class="icon-ta-next-v2 swipe-next-button"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget menucard-listing" id="menu">
                  <div class="menucard-container ">
                  @foreach ($categories as $cat)
                    <div class="menucat menucard__meals-group" anchor-id="cat{{$cat->id}}"
                        id="cat2">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_classic_ungefuellt.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              {{$cat->name}}                             
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Naomi Donut" data-price="5" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_naomi_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Naomi Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_naomi_donut.png" alt="Naomi Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Sarah Donut" data-price="7" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sarah_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sarah Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          7 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sarah_donut.png" alt="Sarah Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Lesley Donut" data-price="12" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_lesley_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lesley Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Topping: Schokostreusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          12 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_lesley_donut.png" alt="Lesley Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Emma Donut" data-price="15" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_emma_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Emma Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          15 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_emma_donut.png" alt="Emma Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1P1O710N1"
                                 data-categoryId="" id="OO57N7R01/O1P1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Olivia Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Erdnüsse und Erdnussbuttercreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_olivia_donut.png" alt="Olivia Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OOP1O710N1"
                                 data-categoryId="" id="OO57N7R01/OOP1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Isabella Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: Krokant                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_isabella_donut.png" alt="Isabella Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O7P1O710N1"
                                 data-categoryId="" id="OO57N7R01/O7P1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mia Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: Mini-Brezel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_mia_donut.png" alt="Mia Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O071O710N1"
                                 data-categoryId="" id="OO57N7R01/O071O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nadine Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Schokokuchen und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_nadine_donut.png" alt="Nadine Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O371O710N1"
                                 data-categoryId="" id="OO57N7R01/O371O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Scarlett Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_scarlett_donut.png" alt="Scarlett Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP71O710N1"
                                 data-categoryId="" id="OO57N7R01/OP71O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Charlotte Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Topping: Haribo und bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_charlotte_donut.png" alt="Charlotte Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OR71O710N1"
                                 data-categoryId="" id="OO57N7R01/OR71O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ella Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Topping: Zucker und Zimt                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ella_donut.png" alt="Ella Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ONQ1O710N1"
                                 data-categoryId="" id="OO57N7R01/ONQ1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Evelyn Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Leibnizkeks und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_evelyn_donut.png" alt="Evelyn Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5Q1O710N1"
                                 data-categoryId="" id="OO57N7R01/O5Q1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Chloe Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: dunkle Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_chloe_donut.png" alt="Chloe Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1R1O710N1"
                                 data-categoryId="" id="OO57N7R01/O1R1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sophie Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping:Himbeersauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sophie_donut.png" alt="Sophie Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OOR1O710N1"
                                 data-categoryId="" id="OO57N7R01/OOR1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ruby Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ruby_donut.png" alt="Ruby Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O7R1O710N1"
                                 data-categoryId="" id="OO57N7R01/O7R1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Alice Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_alice_donut.png" alt="Alice Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O00NO710N1"
                                 data-categoryId="" id="OO57N7R01/O00NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Annalise Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: weiße Schoko linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_annalise_donut.png" alt="Annalise Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                  @endforeach
                     <div class="menucat menucard__meals-group" anchor-id="cat2"
                        id="cat2">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_classic_ungefuellt.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Classic ungefüllt                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Naomi Donut" data-price="5" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_naomi_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Naomi Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_naomi_donut.png" alt="Naomi Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Sarah Donut" data-price="7" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sarah_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sarah Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          7 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sarah_donut.png" alt="Sarah Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Lesley Donut" data-price="12" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_lesley_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lesley Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Topping: Schokostreusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          12 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_lesley_donut.png" alt="Lesley Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="Emma Donut" data-price="15" data-imgproduct="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_emma_donut.png">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Emma Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          15 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_emma_donut.png" alt="Emma Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1P1O710N1"
                                 data-categoryId="" id="OO57N7R01/O1P1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Olivia Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Erdnüsse und Erdnussbuttercreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_olivia_donut.png" alt="Olivia Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OOP1O710N1"
                                 data-categoryId="" id="OO57N7R01/OOP1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Isabella Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: Krokant                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_isabella_donut.png" alt="Isabella Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O7P1O710N1"
                                 data-categoryId="" id="OO57N7R01/O7P1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mia Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: Mini-Brezel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_mia_donut.png" alt="Mia Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O071O710N1"
                                 data-categoryId="" id="OO57N7R01/O071O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nadine Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Schokokuchen und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_nadine_donut.png" alt="Nadine Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O371O710N1"
                                 data-categoryId="" id="OO57N7R01/O371O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Scarlett Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_scarlett_donut.png" alt="Scarlett Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP71O710N1"
                                 data-categoryId="" id="OO57N7R01/OP71O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Charlotte Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Topping: Haribo und bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_charlotte_donut.png" alt="Charlotte Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OR71O710N1"
                                 data-categoryId="" id="OO57N7R01/OR71O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ella Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Topping: Zucker und Zimt                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ella_donut.png" alt="Ella Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ONQ1O710N1"
                                 data-categoryId="" id="OO57N7R01/ONQ1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Evelyn Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Topping: Leibnizkeks und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_evelyn_donut.png" alt="Evelyn Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5Q1O710N1"
                                 data-categoryId="" id="OO57N7R01/O5Q1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Chloe Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: dunkle Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_chloe_donut.png" alt="Chloe Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1R1O710N1"
                                 data-categoryId="" id="OO57N7R01/O1R1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sophie Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping:Himbeersauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sophie_donut.png" alt="Sophie Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OOR1O710N1"
                                 data-categoryId="" id="OO57N7R01/OOR1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ruby Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ruby_donut.png" alt="Ruby Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O7R1O710N1"
                                 data-categoryId="" id="OO57N7R01/O7R1O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Alice Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_alice_donut.png" alt="Alice Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O00NO710N1"
                                 data-categoryId="" id="OO57N7R01/O00NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Annalise Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Topping: weiße Schoko linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_annalise_donut.png" alt="Annalise Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat3"
                        id="cat3">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_classic_gefuellt.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Classics gefüllt                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQ1NO710N1"
                                 data-categoryId="" id="O757N7R01/OQ1NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Naomi Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Schokopudding                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_naomi_donut.png" alt="Naomi Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1NNO710N1"
                                 data-categoryId="" id="O757N7R01/O1NNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sarah Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Vanillepudding<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sarah_donut.png" alt="Sarah Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OONNO710N1"
                                 data-categoryId="" id="O757N7R01/OONNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lesley Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Schokopudding<br/>• Topping: Schokostreusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_lesley_donut.png" alt="Lesley Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O03NO710N1"
                                 data-categoryId="" id="O757N7R01/O03NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Emma Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Himbeermarmelade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_emma_donut.png" alt="Emma Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O33NO710N1"
                                 data-categoryId="" id="O757N7R01/O33NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Olivia Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Erdnussbuttercreme<br/>• Topping: Erdnüsse und Erdnussbutter                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_olivia_donut.png" alt="Olivia Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP3NO710N1"
                                 data-categoryId="" id="O757N7R01/OP3NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Isabella Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Sahne<br/>• Topping: Krokant                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_isabella_donut.png" alt="Isabella Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OR3NO710N1"
                                 data-categoryId="" id="O757N7R01/OR3NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mia Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Erdnussbuttercreme<br/>• Topping: Mini-Brezel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_mia_donut.png" alt="Mia Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ONONO710N1"
                                 data-categoryId="" id="O757N7R01/ONONO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nadine Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Vanillepudding<br/>• Topping: Schokokuchen und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_nadine_donut.png" alt="Nadine Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5ONO710N1"
                                 data-categoryId="" id="O757N7R01/O5ONO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Scarlett Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Erdbeermarmelade<br/>• Topping: Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_scarlett_donut.png" alt="Scarlett Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQONO710N1"
                                 data-categoryId="" id="O757N7R01/OQONO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Charlotte Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Schokopudding<br/>• Topping: Haribo und bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_charlotte_donut.png" alt="Charlotte Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O15NO710N1"
                                 data-categoryId="" id="O757N7R01/O15NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ella Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Füllung: Apfelmus<br/>• Topping: Zucker und Zimt                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ella_donut.png" alt="Ella Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO5NO710N1"
                                 data-categoryId="" id="O757N7R01/OO5NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Evelyn Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Schokopudding<br/>• Topping: Leibnizkeks und weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_evelyn_donut.png" alt="Evelyn Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O75NO710N1"
                                 data-categoryId="" id="O757N7R01/O75NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Chloe Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Vanillepudding<br/>• Topping: dunkle Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_chloe_donut.png" alt="Chloe Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3PNO710N1"
                                 data-categoryId="" id="O757N7R01/O3PNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sophie Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Himbeermarmelade<br/>• Topping: Himbeersauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_sophie_donut.png" alt="Sophie Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OPPNO710N1"
                                 data-categoryId="" id="O757N7R01/OPPNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ruby Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Schokopudding                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_ruby_donut.png" alt="Ruby Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ORPNO710N1"
                                 data-categoryId="" id="O757N7R01/ORPNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Alice Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Vanillepudding<br/>• Topping: bunte Streusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_alice_donut.png" alt="Alice Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ON7NO710N1"
                                 data-categoryId="" id="O757N7R01/ON7NO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Annalise Donut gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Schokopudding<br/>• Topping: weiße Schoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,30 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/classic_annalise_donut.png" alt="Annalise Donut gefüllt" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat4"
                        id="cat4">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_special.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Special                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O0RNO710N1"
                                 data-categoryId="" id="O0P7N7R01/O0RNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Helena Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Kinderriegel und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_helena_donut.png" alt="Helena Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3RNO710N1"
                                 data-categoryId="" id="O0P7N7R01/O3RNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lorena Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: blaue Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: M-M's und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_lorena_donut.png" alt="Lorena Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OPRNO710N1"
                                 data-categoryId="" id="O0P7N7R01/OPRNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Manuela Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Jogurette, bunte Streusel und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_manuela_donut.png" alt="Manuela Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ORRNO710N1"
                                 data-categoryId="" id="O0P7N7R01/ORRNO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Cecilla Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Happy Hippo, Krokant und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_cecilla_donut.png" alt="Cecilla Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQ03O710N1"
                                 data-categoryId="" id="O0P7N7R01/OQ03O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Bianca Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Bueno White, Schokostreusel und Vollmilchschoko Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_bianca_donut.png" alt="Bianca Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O113O710N1"
                                 data-categoryId="" id="O0P7N7R01/O113O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nicole Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Bueno, Schokostreusel und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_nicole_donut.png" alt="Nicole Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO13O710N1"
                                 data-categoryId="" id="O0P7N7R01/OO13O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Camilla Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Toffifee, Karamellstreusel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_camilla_donut.png" alt="Camilla Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O713O710N1"
                                 data-categoryId="" id="O0P7N7R01/O713O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Adele Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Schokobons, Krokant, Schokostreusel und Vollmilchschokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_adele_donut.png" alt="Adele Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O0N3O710N1"
                                 data-categoryId="" id="O0P7N7R01/O0N3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Miriam Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Giotto, Krokant und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_miriam_donut.png" alt="Miriam Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3N3O710N1"
                                 data-categoryId="" id="O0P7N7R01/O3N3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nancy Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: • Nutellacreme<br/>• Topping: Kinder Country, Kellogs Smacks und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_nancy_donut.png" alt="Nancy Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ORN3O710N1"
                                 data-categoryId="" id="O0P7N7R01/ORN3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Luna Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Knoppers, Schokoraspeln und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_luna_donut.png" alt="Luna Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ON33O710N1"
                                 data-categoryId="" id="O0P7N7R01/ON33O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Amira Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Raffaello, Mandelscheiben und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_amira_donut.png" alt="Amira Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O533O710N1"
                                 data-categoryId="" id="O0P7N7R01/O533O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Rihanna Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Oreo und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_rihanna_donut.png" alt="Rihanna Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQ33O710N1"
                                 data-categoryId="" id="O0P7N7R01/OQ33O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Ekram Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Twix, Karamellstreusel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_ekram_donut.png" alt="Ekram Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1O3O710N1"
                                 data-categoryId="" id="O0P7N7R01/O1O3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Pauline Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Brownies, Krokant und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_pauline_donut.png" alt="Pauline Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OOO3O710N1"
                                 data-categoryId="" id="O0P7N7R01/OOO3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Estelle Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Lotus-Keks und Vollmilchschokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_estelle_donut.png" alt="Estelle Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O053O710N1"
                                 data-categoryId="" id="O0P7N7R01/O053O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Alicia Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: 1/2 Überraschungsei, bunte Streusel und M&M's                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_alicia_donut.png" alt="Alicia Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O353O710N1"
                                 data-categoryId="" id="O0P7N7R01/O353O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Elif Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Snickers, Erdnüsse und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_elif_donut.png" alt="Elif Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP53O710N1"
                                 data-categoryId="" id="O0P7N7R01/OP53O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lisa Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Hanuta, Krokant und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_lisa_donut.png" alt="Lisa Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OR53O710N1"
                                 data-categoryId="" id="O0P7N7R01/OR53O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Salma Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Schokobons, Kinderkarts, bunte Streusel und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,60 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_salma_donut.png" alt="Salma Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat5"
                        id="cat5">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_special_plus.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Special Plus                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ONP3O710N1"
                                 data-categoryId="" id="O3P7N7R01/ONP3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Berlin Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Käsekuchen, Erdbeeren und Erdbeermarmelade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_berlin_donut.png" alt="Berlin Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5P3O710N1"
                                 data-categoryId="" id="O3P7N7R01/O5P3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Marrakesch Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: blaue Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Milchschnitte, Blaubeeren, bunte Streusel und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_marrakesch_donut.png" alt="Marrakesch Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQP3O710N1"
                                 data-categoryId="" id="O3P7N7R01/OQP3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Monaco Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Pistaziencreme<br/>• Füllung: Pistaziencreme<br/>• Topping: Toffifee, Himbeeren, Krokant und Buenocreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_monaco_donut.png" alt="Monaco Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O173O710N1"
                                 data-categoryId="" id="O3P7N7R01/O173O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       San Francisco Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutellacreme<br/>• Topping: Kinder Pinguin, Erdbeeren, Schokoraspeln und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/san-francisco.png" alt="San Francisco Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO73O710N1"
                                 data-categoryId="" id="O3P7N7R01/OO73O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Istanbul Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: lila Schokolade<br/>• Füllung: Raffaellocreme<br/>• Topping: Blaubeeren und Puderzucker                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_istanbul_donut.png" alt="Istanbul Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O0Q3O710N1"
                                 data-categoryId="" id="O3P7N7R01/O0Q3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Dubai Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Happy Hippo, Himbeeren, Blaubeeren, Haselnüsse und Buenocreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special__plus_dubai_donut.png" alt="Dubai Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3Q3O710N1"
                                 data-categoryId="" id="O3P7N7R01/O3Q3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Miami Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Raffaellocreme<br/>• Topping: Blaubeeren-Macarons, Blaubeeren, Raffaello, Kokosraspeln und Nutellasauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_miami_donut.png" alt="Miami Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OPQ3O710N1"
                                 data-categoryId="" id="O3P7N7R01/OPQ3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Monte Carlo Donut                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Nutellacreme und Himbeermarmelade<br/>• Topping: Himbeer-Macarons, Himbeeren, Haselnüsse und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,10 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/special_plus_montecarlo_donut.png" alt="Monte Carlo Donut" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat6"
                        id="cat6">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_boom.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Boom                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ORQ3O710N1"
                                 data-categoryId="" id="OPP7N7R01/ORQ3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       New York Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Happy Hippo, Lion White, Erdbeeren, bunte Streusel und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_new_york.png" alt="New York Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5R3O710N1"
                                 data-categoryId="" id="OPP7N7R01/O5R3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sydney Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Buenocreme<br/>• Topping: Maxi King, Rocher, Krokant, Karamellsauce und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_sydney.png" alt="Sydney Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQR3O710N1"
                                 data-categoryId="" id="OPP7N7R01/OQR3O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       London Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Bueno, Bueno White, Himbeeren, Rocher und Nutellasauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_london.png" alt="London Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O10OO710N1"
                                 data-categoryId="" id="OPP7N7R01/O10OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mailand Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Bueno White, Amicelli, Himbeeren, Haselnüssen und Buenocreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_mailand.png" alt="Mailand Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO0OO710N1"
                                 data-categoryId="" id="OPP7N7R01/OO0OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Los Angeles Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Buenocreme<br/>• Topping: Bueno, Bueno White, Erdbeeren, bunte Streusel und Nutellasauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_los_angeles.png" alt="Los Angeles Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O70OO710N1"
                                 data-categoryId="" id="OPP7N7R01/O70OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lissabon Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Lotuscreme<br/>• Topping: Lotus-Keks, Giotto, Toffifee, Erdbeeren und Lotuscreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_moskau.png" alt="Lissabon Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP1OO710N1"
                                 data-categoryId="" id="OPP7N7R01/OP1OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Madrid Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Pistaziencreme<br/>• Topping: Pistazien Macarons, Schokobons, Duplo, Haselnüssen und Pistaziensauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/boom_madrid.png" alt="Madrid Boom" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat7"
                        id="cat7">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/de-newcategorypicture-crotops-6576698.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              CroTops                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO557OO1O1"
                                 data-categoryId="" id="OO3R57ON1/OO557OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Biarritz                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Biarritz" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: 
                                          Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutella<br/>• Topping: Käsekuchen, Erdbeerstücken und Erdbeermarmelade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_biarritz_500.png" alt="CroTop Biarritz" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O7557OO1O1"
                                 data-categoryId="" id="OO3R57ON1/O7557OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Lille                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Lille" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Erdbeermarmelade<br/>• Topping: Erdbeeren und Erdbeermarmeladen-Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_lille_500.png" alt="CroTop Lille" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O0P57OO1O1"
                                 data-categoryId="" id="OO3R57ON1/O0P57OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Montpellier                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Montpellier" data-allergens="A,C,F,G" data-additives="1,13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: rosa Schokolade<br/>• Füllung: Vanillepudding<br/>• Topping: Erdbeeren und bunte Zuckerstreusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_montpellier_500.png" alt="CroTop Montpellier" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3P57OO1O1"
                                 data-categoryId="" id="OO3R57ON1/O3P57OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Orleans                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Orleans" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Füllung: Apfelmus<br/>• Topping: Zucker und Zimt                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_orleans_500.png" alt="CroTop Orleans" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OPP57OO1O1"
                                 data-categoryId="" id="OO3R57ON1/OPP57OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Lyon                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Lyon" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: lila Schokolade<br/>• Füllung: Raffaellocreme<br/>• Topping: Blaubeeren und Puderzucker                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_lyon_500.png" alt="CroTop Lyon" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ORP57OO1O1"
                                 data-categoryId="" id="OO3R57ON1/ORP57OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Cannes                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Cannes" data-allergens="A,Wh,C,F,G,H,Ha" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutella<br/>• Topping: Giotto, Krokant und Vollmilchschokoladen-Linien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_cannes_500.png" alt="CroTop Cannes" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ON757OO1O1"
                                 data-categoryId="" id="OO3R57ON1/ON757OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Nizza                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Nizza" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Raffaellocreme<br/>• Topping: Raffaello und Kokosraspeln                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_nizza_500.png" alt="CroTop Nizza" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5757OO1O1"
                                 data-categoryId="" id="OO3R57ON1/O5757OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Rouen                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Rouen" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Pistaziencreme<br/>• Füllung: Pistaziencreme<br/>• Topping: Toffifee, Himbeeren und Krokant                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_rouen_500.png" alt="CroTop Rouen" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQ757OO1O1"
                                 data-categoryId="" id="OO3R57ON1/OQ757OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop La Rochelle                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop La Rochelle" data-allergens="A,C,F,G" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Vollmilchschokolade<br/>• Füllung: Nutella<br/>• Topping: Happy Hippo, Krokant und weiße Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_la_rochelle_500.png" alt="CroTop La Rochelle" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1Q57OO1O1"
                                 data-categoryId="" id="OO3R57ON1/O1Q57OO1O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       CroTop Marseille                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="CroTop Marseille" data-allergens="A,C,F,G,H,Ha" data-additives="13" data-nutrition="kann Spuren enthalten von: Lupinen, Schalenfrüchten, Senf, Soja" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: weiße Schokolade<br/>• Füllung: Nutella<br/>• Topping: Bueno White, Schokostreusel und Karamellsauce                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/03P05P5N/products/crotop_marseille_500.png" alt="CroTop Marseille" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat8"
                        id="cat8">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/generic/categories/1_dessert/dessert_donut.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Donut-Boxen                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('OR7OO710N1','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Special                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">mit Donuts nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          20,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O7POO710N1','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Classic, gefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">mit Donuts nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          12,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O305O710N1','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Classic, ungefüllt                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">mit Donuts nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          11,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O3OP037N31','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Boom                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">mit Donuts nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          30,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('ON5Q0O7N31','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Vegan Classic                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          12,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O55Q0O7N31','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Vegan Special                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          21,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RRPP7N77P1','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box Special Plus                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          22,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R155QN77P1','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Top Top Box CroTops                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          27,50 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O5O7P37N31','ON77N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Party Surprise                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Eine Mischung unserer besten Classics mit einer Hälfte gefüllten Donuts und eine Hälfte ungefüllte Donuts                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          74,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O073R37N31"
                                 data-categoryId="" id="ON77N7R01/O073R37N31">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mischbox mit 36 Donuts                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• 9. Classic Donuts<br/>• 9. Vegane Donuts<br/>• 9. Special Donuts<br/>• 6. Boom Donuts                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          119,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O373R37N31"
                                 data-categoryId="" id="ON77N7R01/O373R37N31">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mischbox mit 54 Donuts                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• 27. Classic Donuts<br/>• 9. Vegane Donuts<br/>• 9. Special Donuts<br/>• 9. Boom Donuts                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          144,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat9"
                        id="cat9">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/generic/categories/1_dessert/dessert_donut.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Donut-Torten                                
                           </div>
                           <div class="category-description">
                              Alle Donut-Torten können auf Wunsch individuell Beschriftet werden - Auch für Geburtstage, Hochzeiten und andere Anlässe möglich, Ihren Wunsch bitte In den Anmerkungen vermerken.                                
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O515O710N1','O577N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Donut-Torte-Classic (mit ungefüllten Donuts)                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Torte aus 15 Classic Donuts mit 3 Glasuren nach Wahl und 3 Toppings nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          44,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O1N7R37N31','O577N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Donut-Torte-Classic (mit gefüllten Donuts)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Donut-Torte-Classic (mit gefüllten Donuts)" data-allergens="A,E,F,G,H,Ha,Wa,Pi"   data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Torte aus 15 Classic Donuts mit 3 Glasuren nach Wahl und 3 Toppings nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          49,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('ON15O710N1','O577N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Donut-Torte-Special (mit gefüllten Donuts)                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Torte aus 15 Special Donuts mit 3 Glasuren nach Wahl und 3 Toppings nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          55,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('OQ15O710N1','O577N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Donut-Torte-Vegan (mit ungefüllten Donuts)                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Torte aus 15 Veganen Donuts mit 2 Glasuren nach Wahl und 3 Toppings nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          49,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('O57RRO7N31','O577N7R01', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Donut-Torte-Vegan Special (mit gefüllten Donuts)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Donut-Torte-Vegan Special (mit gefüllten Donuts)" data-allergens="A,Wh,G,H,Ha,Wa,Pi"   data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Torte aus 15 Veganen Special Donuts mit 2 Glasuren nach Wahl und 3 Toppings nach Wahl                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          55,90 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat10"
                        id="cat10">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_vegan.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Classic Vegan                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O5NOO710N1"
                                 data-categoryId="" id="ORP7N7R01/O5NOO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Bangkok Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Topping: Puderzucker                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_bangkok.png" alt="Bangkok Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQNOO710N1"
                                 data-categoryId="" id="ORP7N7R01/OQNOO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Jakarta Vegan                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Jakarta Vegan"  data-additives="1"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: pinke Glasur<br/>• Topping: Zuckerstreusel                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_jakarta.png" alt="Jakarta Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O13OO710N1"
                                 data-categoryId="" id="ORP7N7R01/O13OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Seoul Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Erdbeermarmelade<br/>• Topping: Zitronenkeks, Haselnüssen und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_seoul.png" alt="Seoul Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OO3OO710N1"
                                 data-categoryId="" id="ORP7N7R01/OO3OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Delhi Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Topping: Zucker und Zimt                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_delhi.png" alt="Delhi Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O73OO710N1"
                                 data-categoryId="" id="ORP7N7R01/O73OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Singapur Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_singapur.png" alt="Singapur Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O0OOO710N1"
                                 data-categoryId="" id="ORP7N7R01/O0OOO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Mumbai Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: Erdnussbuttercreme mit Zuckerguss<br/>• Topping: Erdnüsse und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,40 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_classic_mumbai.png" alt="Mumbai Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat11"
                        id="cat11">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/restaurants/de/OR0037R1/categories/kategoriebild_vegan_plus.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Special Vegan                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3OOO710N1"
                                 data-categoryId="" id="OOO1N3711/O3OOO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Tokyo Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Nuss-Nougat-Creme<br/>• Topping: Oreo und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,80 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_special_tokyo.png" alt="Tokyo Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OPOOO710N1"
                                 data-categoryId="" id="OOO1N3711/OPOOO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Hongkong Vegan                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Hongkong Vegan"  data-additives="1"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Nuss-Nugat-Creme<br/>• Topping: Schokokekse, Krokant und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,80 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_special_hongkong.png" alt="Hongkong Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ON5OO710N1"
                                 data-categoryId="" id="OOO1N3711/ON5OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Peking Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Erdbeermarmelade<br/>• Topping: Zitronenkeks, Krokant und dunkle Schokolinien                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,80 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_special_peking.png" alt="Peking Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O55OO710N1"
                                 data-categoryId="" id="OOO1N3711/O55OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Shanghai Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Lotuscreme<br/>• Topping: Lotus-Keks und Lotuscreme                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,80 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_special_shanghai.png" alt="Shanghai Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OQ5OO710N1"
                                 data-categoryId="" id="OOO1N3711/OQ5OO710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Nara Vegan                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">• Glasur: dunkle Schokolade<br/>• Füllung: Himbeermarmelade<br/>• Topping: Himbeeren, Erdbeeren, Blaubeeren, Kokosraspeln und dunkle Schokolade                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,80 DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/restaurants/de/OR0037R1/products/vegan_special_nara.png" alt="Nara Vegan" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat12"
                        id="cat12">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/generic/categories/1_getraenke/getraenke_saft.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Smoothie                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="ROPPRP73P1"
                                 data-categoryId="" id="RP1NN35O1/ROPPRP73P1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Tropical Smoothie 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Tropical Smoothie 0,5l"   data-nutrition="Zutaten: Ananas, Erdbeere, Kokosmilsch." data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       9,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="R7PPRP73P1"
                                 data-categoryId="" id="RP1NN35O1/R7PPRP73P1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Energy Smoothie 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Energy Smoothie 0,5l" data-allergens="A,Wh"  data-nutrition="Zutaten: Blaubeere, Erdbeere, Schwarze Johannisbeere, Mango, Energy &amp; Green Nutri Pellet 
                                          ( Weizengras, Guarana,Weizenkleie, Spirolina, Chorella, Acerola, Traubenkernextrat, Grünteeextrat, Ginsengextrat)." data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       9,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="R07PRP73P1"
                                 data-categoryId="" id="RP1NN35O1/R07PRP73P1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Superfood Smoothie 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Superfood Smoothie 0,5l"   data-nutrition="Zutaten: Erdbeere, Blaubeere, Mango, Acai Püree." data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       9,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="R37PRP73P1"
                                 data-categoryId="" id="RP1NN35O1/R37PRP73P1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Detox Smoothie 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Detox Smoothie 0,5l"   data-nutrition="Zutaten: Ananas, Banane, Spiinat, Mango." data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       9,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="RP7PRP73P1"
                                 data-categoryId="" id="RP1NN35O1/RP7PRP73P1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Powerfruit Smoothie 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Powerfruit Smoothie 0,5l"   data-nutrition="Zutaten: Pfirsich, Passionsfrucht, Mango." data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       9,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat13"
                        id="cat13">
                        <div class="category">
                           <div class="category-name">
                              Bubble Tea                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RR17RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Green Apple Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Green Apple Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R13513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Green Apple Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Green Apple Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RNN7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Blueberry Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Blueberry Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RO3513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Blueberry Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Blueberry Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R5N7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Passionsfruit Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Passionsfruit Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R73513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Passionsfruit Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Passionsfruit Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQN7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kiwi Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kiwi Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R0O513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kiwi Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kiwi Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RO37RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Strawberry Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Strawberry Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RPO513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Strawberry Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Strawberry Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R737RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Guava Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Guava Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RRO513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Guava Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Guava Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R0O7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       White Peach Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="White Peach Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RN5513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       White Peach Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="White Peach Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R3O7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kumquat Lemon Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kumquat Lemon Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R55513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kumquat Lemon Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kumquat Lemon Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RPO7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       HoneyDew Melon Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="HoneyDew Melon Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQ5513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       HoneyDew Melon Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="HoneyDew Melon Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RRO7RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       WaterMelon Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="WaterMelon Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R1P513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       WaterMelon Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="WaterMelon Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RN57RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lychee Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Lychee Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('ROP513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lychee Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Lychee Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQ57RNROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Peach Tea 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Peach Tea 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R07513ROP1','R13PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Peach Tea 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Peach Tea 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat14"
                        id="cat14">
                        <div class="category">
                           <div class="category-name">
                              Bubble Milk                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RRPN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Green Apple Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Green Apple Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R1O3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Green Apple Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Green Apple Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RN7N53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Blueberry Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Blueberry Milk 0,5l"  data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('ROO3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Blueberry Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Blueberry Milk 0,7l"  data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R57N53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Passionsfruit Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Passionsfruit Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R7O3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Passionsfruit Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Passionsfruit Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQ7N53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kiwi Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kiwi Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R053Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kiwi Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kiwi Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('ROQN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Strawberry Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Strawberry Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RP53Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Strawberry Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Strawberry Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R7QN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Guava Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Guava Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RR53Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Guava Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Guava Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R0RN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       White Peach Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="White Peach Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RNP3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       White Peach Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="White Peach Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R3RN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kumquat Lemon Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kumquat Lemon Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R5P3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Kumquat Lemon Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Kumquat Lemon Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RPRN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       HoneyDew Melon Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="HoneyDew Melon Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQP3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       HoneyDew Melon Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="HoneyDew Melon Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RRRN53ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Watermelon Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Watermelon Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R173Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Watermelon Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Watermelon Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RN0353ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lychee Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Lychee Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RO73Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Lychee Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Lychee Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R50353ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Peach Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Peach Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R773Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Peach Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Peach Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RQ0353ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Caramel Milk 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Caramel Milk 0,5l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       8,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R0Q3Q3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Caramel Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Caramel Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          4,90 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,00 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('RO75R3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Black Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Black Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,14 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R775R3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Green Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Green Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,14 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket " data-min-age="0"
                                 data-template="templaterevamped"
                                 onclick="menucard_ShowSideDishes('R0Q5R3ROP1','RO3PONPO1', '0', 'templaterevamped'); return false;">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Tiger Black Sugar Milk 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Tiger Black Sugar Milk 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,14 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat15"
                        id="cat15">
                        <div class="category">
                           <div class="category-name">
                              Bubble Milk Special mit Tapioca                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="R11QR3ROP1"
                                 data-categoryId="" id="R73PONPO1/R11QR3ROP1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Black Milk mit Tapioca 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Black Milk mit Tapioca 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,14 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="R71QR3ROP1"
                                 data-categoryId="" id="R73PONPO1/R71QR3ROP1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Tiger Black Sugar Milk mit Tapioca 0,7l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Tiger Black Sugar Milk mit Tapioca 0,7l" data-allergens="G" data-additives="1,2,4,9,10,13"  data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          5,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       7,14 DH/l, 0,7l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                     <div class="menucat menucard__meals-group" anchor-id="cat16"
                        id="cat16">
                        <div class="menucard__category-image-container"
                           style="background-image: url('https://static.thuisbezorgd.nl/images/generic/categories/1_drinks/getraenke_cola.png');">
                        </div>
                        <div class="category">
                           <div class="category-name">
                              Alkoholfreie Getränke                                
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="00PN7P73O1"
                                 data-categoryId="" id="OQ77N7R01/00PN7P73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Fuze Tea Grüner Tee Limette Minze 0,4l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Fuze Tea Grüner Tee Limette Minze 0,4l (EINWEG)"  data-additives="3,9,13" data-nutrition="Zutaten: Wasser, Zucker, Limettensaft aus Limettensaftkonzentrat (1%), löslicher Grüntee-Extrakt (0,14%)**, Säuerungsmittel Citronensäure, Säureregulator Natriumcitrate, natürliches Zitronen- und Limettenaroma, Antioxidationsmittel Ascorbinsäure, Minzextrakt, natürliches Minzaroma mit anderen natürlichen Aromen, Süßungsmittel Steviolglykoside. **von Rainforest-Alliance-zertifizierten Farmen
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 80kJ
                                          Energie: 19kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,05g
                                          Kohlenhydrate: 4,5g
                                          Davon Zucker: 4,5g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Eine außergewöhnliche Fusion aus dem Guten des Tees und einer einzigartigen Kombination aus Grüntee-Extrakt, Limetten- & Minzgeschmack.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 5,88 DH/l, 0,4l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="03PN7P73O1"
                                 data-categoryId="" id="OQ77N7R01/03PN7P73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Fuze Tea Schwarzer Tee Zitrone 0,4l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Fuze Tea Schwarzer Tee Zitrone 0,4l (EINWEG)"  data-additives="3,13" data-nutrition="Zutaten: Wasser, Zucker, Zitronensaft aus Zitronensaftkonzentrat (1%), Säuerungsmittel Citronensäure, löslicher Tee-Extrakt (0,12%), Säureregulator Natriumcitrate, Antioxidationsmittel Ascorbinsäure, Aroma.
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 129kJ
                                          Energie: 30kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,03g
                                          Kohlenhydrate: 7,2g
                                          Davon Zucker: 7,2g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Eine außergewöhnliche Fusion aus dem Guten des Tees und fruchtiger Zitronen-Note.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 5,88 DH/l, 0,4l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/fuzetea_schwarzzitrone04l_pet.png" alt="Fuze Tea Schwarzer Tee Zitrone 0,4l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="0PPN7P73O1"
                                 data-categoryId="" id="OQ77N7R01/0PPN7P73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Fuze Tea Schwarzer Tee Pfirsich Hibiskus 0,4l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Fuze Tea Schwarzer Tee Pfirsich Hibiskus 0,4l (EINWEG)"  data-additives="13" data-nutrition="Zutaten: Wasser, Zucker, Pfirsichsaft aus Pfirsichsaftkonzentrat (1%), Säuerungsmittel Citronensäure, löslicher Tee-Extrakt (0,12%), Säureregulator Natriumcitrate, Aroma.
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 79kJ
                                          Energie: 19kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,03g
                                          Kohlenhydrate: 4,3g
                                          Davon Zucker: 4g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Eine außergewöhnliche Fusion aus dem Guten des Tees und fruchtiger Pfirsich-Note, abgerundet durch die einzigartige Essenz der Hibiskusblüte.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 5,88 DH/l, 0,4l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/fuzetea_schwarzpfirsichhibiskus04l_pet.png" alt="Fuze Tea Schwarzer Tee Pfirsich Hibiskus 0,4l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O1N5O710N1"
                                 data-categoryId="" id="OQ77N7R01/O1N5O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Coca-Cola 0,5l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Coca-Cola 0,5l (EINWEG)"  data-additives="1,10.2,13,10" data-nutrition="Zutaten: Wasser, Zucker, Kohlensäure, Farbstoff E 150d, Säuerungsmittel Phosphorsäure, natürliches Aroma, Aroma Koffein
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 180kJ
                                          Energie: 42kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0g
                                          Kohlenhydrate: 10,6g
                                          Davon Zucker: 10,6g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Coca-Cola steht für einzigartigen Geschmack, Erfrischung und Momente voller Lebensfreude. Die 0,5l wiederverschließbare PET Einwegflasche - die richtige Trinkgröße für jeden Anlass.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       Enthält Koffein. Für Kinder und schwangere Frauen nicht geeignet. (10,0 mg/100 ml), inkl. Pfand (0,25 DH), 4,75 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/cc_05l_pet.png" alt="Coca-Cola 0,5l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OON5O710N1"
                                 data-categoryId="" id="OQ77N7R01/OON5O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Coca-Cola Zero Sugar 0,5l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Coca-Cola Zero Sugar 0,5l (EINWEG)"  data-additives="1,9,9.1,10.2,13,10" data-nutrition="Zutaten: Wasser, Kohlensäure, Farbstoff E 150d, Säuerungsmittel Phosphorsäure, Süßungsmittel (Natriumcyclamat, Acesulfam K, Aspartam), natürliches Aroma, Säureregulator Natriumcitrate, Aroma Koffein. Enthält eine Phenylalaninquelle.
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 0,9kJ
                                          Energie: 0,2kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,02g
                                          Kohlenhydrate: 0g
                                          Davon Zucker: 0g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Keine Kalorien. Null Zucker. Für alle Coke Liebhaber, die beim Geschmack keinen Kompromiss eingehen wollen.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       Enthält Koffein. Für Kinder und schwangere Frauen nicht geeignet. (10,0 mg/100 ml), inkl. Pfand (0,25 DH), 4,75 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/cc_zero_05l_pet.png" alt="Coca-Cola Zero Sugar 0,5l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O035O710N1"
                                 data-categoryId="" id="OQ77N7R01/O035O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Fanta Orange 0,5l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Fanta Orange 0,5l (EINWEG)"  data-additives="1,3,13,14" data-nutrition="Zutaten: Wasser, Zucker, Orangensaft aus Orangensaftkonzentrat, Kohlensäure, Säuerungsmittel Citronensäure, Citrusextrakt, natürliches Orangenaroma mit anderen natürlichen Aromen, Antioxidationsmittel Ascorbinsäure, Farbstoff Carotin, Stabilisatoren (E 412, E 414 und E 445).
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 160kJ
                                          Energie: 38kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,01g
                                          Kohlenhydrate: 9,2g
                                          Davon Zucker: 9,1g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Trinke Fanta. Lebe bunter. Spritzig erfrischend begleitet die originale Fanta Orange jede Lebenssituation und macht jetzt noch mehr Spaß.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 4,75 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/fa_orange05l_pet.png" alt="Fanta Orange 0,5l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O335O710N1"
                                 data-categoryId="" id="OQ77N7R01/O335O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Sprite 0,5l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Sprite 0,5l (EINWEG)"  data-additives="13" data-nutrition="Zutaten: Wasser, Zucker, Kohlensäure, Säuerungsmittel Citronensäure, natürliches Zitronen- und Limettenaroma, Säureregulator Natriumcitrate.
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 159kJ
                                          Energie: 37kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,02g
                                          Kohlenhydrate: 9,1g
                                          Davon Zucker: 9,1g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Bist du bereit für Sprite? Die einzigartige Formel aus grünen Limetten und sonnengelben Zitronen erfrischt dich maximal.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 4,75 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/sprite_05l_pet.png" alt="Sprite 0,5l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OP35O710N1"
                                 data-categoryId="" id="OQ77N7R01/OP35O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Fuze Tea Schwarzer Tee Pfirsich 0,4l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Fuze Tea Schwarzer Tee Pfirsich 0,4l (EINWEG)"  data-additives="13" data-nutrition="Zutaten: Wasser, Zucker, Pfirsichsaft aus Pfirsichsaftkonzentrat (1%), Säuerungsmittel Citronensäure, löslicher Tee-Extrakt (0,12%), Säureregulator Natriumcitrate, Aroma.
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 119kJ
                                          Energie: 28kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0,04g
                                          Kohlenhydrate: 6,7g
                                          Davon Zucker: 6,5g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Eine außergewöhnliche Fusion aus dem Guten des Tees und fruchtiger Pfirsich-Note.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 5,88 DH/l, 0,4l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/fuzetea_schwarzpfirsich04l_pet.png" alt="Fuze Tea Schwarzer Tee Pfirsich 0,4l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="OR35O710N1"
                                 data-categoryId="" id="OQ77N7R01/OR35O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       ViO still 0,5l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="ViO still 0,5l (EINWEG)"   data-nutrition="Zutaten: Natürliches Mineralwasser
                                          Hersteller: Coca-Cola European Partners DE mit Genehmigung von THE COCA-COLA COMPANY, Postfach 670156, 10207 Berlin
                                          Aufbewahrung- und Verwendungshinweise: Kühl und trocken lagern!
                                          Nährwerte pro 100ml:
                                          Energie: 0kJ
                                          Energie: 0kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Salz: 0g
                                          Kohlenhydrate: 0g
                                          Davon Zucker: 0g
                                          Eiweiß: 0g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div class="product-description"
                                       itemprop="description">Das stille Mineralwasser in der umweltfreundlichen 0,5l Flasche aus heimischer Quelle der Lüneburger Heide hat einen weichen Geschmack und ist außergewöhnlich leicht zu trinken.                                    </div>
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       inkl. Pfand (0,25 DH), 3,75 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="https://static.lieferando.de/images/chains/de/cocacola/products/vio_still_05l_pet.png" alt="ViO still 0,5l (EINWEG)" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="O3P5O710N1"
                                 data-categoryId="" id="OQ77N7R01/O3P5O710N1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Bull 0,25l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Bull 0,25l (EINWEG)"  data-additives="1,10,10.1,13" data-nutrition="Zutaten: Wasser, Saccharose, Glucose, Säuerungsmittel Zitronensäure, Kohlensäure, Taurin 0,4%, Säureregulator (Natriumcarbonate, Mangesium carbonat), Koffein 0,03%, Vitamine (Niacin, Pantothensäure, B6, B12), Aroma, Farbstoffe (einfacher Zuckerkulör, Riboflavin)
                                          Hersteller: Red Bull GmbH, 5330 Fuschl am See
                                          Ursprungsland: Österreich
                                          Nährwerte
                                          Brennwert pro 100ml: 194KJ / 46Kcal 
                                          Fett pro 100ml: 0g
                                          Gesättigte Fettsäuren pro 100ml: 0g  
                                          Kohlenhydrate pro 100ml: 11g 
                                          Zucker pro 100ml: 11g 
                                          Eiweiß pro 100ml:  0g 
                                          Salz pro 100ml: 0,1g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       Erhöhter Koffeingehalt. Für Kinder und schwangere oder stillende Frauen nicht empfohlen (32,0 mg/100 ml), inkl. Pfand (0,25 DH), 11,25 DH/l, 0,25l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="00Q7PP73O1"
                                 data-categoryId="" id="OQ77N7R01/00Q7PP73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Red Bull Sugarfree 0,25l (EINWEG)                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Red Bull Sugarfree 0,25l (EINWEG)"  data-additives="1,9,9.1,10,10.1,13" data-nutrition="Zutaten: Wasser,Säuerungsmittel (Citronensäure), Kohlensäure,Taurin (0,4%), Säureregulatoren,(Natriumcarbonate, Magnesiumcarbonate), Süßungsmittel (Acesulfam K, Aspartam), Koffein (0,03%), Vitamine (Niacin, Pantothensäure, B6, B12), Aromen,Verdickungsmittel (Xanthan), Farbstoffe (Zuckerkulör, Riboflavine). Enthält eine Phenylalaninquelle.
                                          Hersteller: Red Bull GmbH, 5330 Fuschl am See
                                          Ursprungsland: Österreich
                                          Nährwerte
                                          Brennwert pro 100ml: 13KJ / 3Kcal 
                                          Fett pro 100ml: 0g
                                          Gesättigte Fettsäuren pro 100ml: 0g  
                                          Kohlenhydrate pro 100ml: 0g 
                                          Zucker pro 100ml: 0g 
                                          Eiweiß pro 100ml:  0g 
                                          Salz pro 100ml: 0,1g
                                          Niacin: 8mg
                                          Vitamin B6: 2mg
                                          Vitamin B12: 2mg
                                          Pantothensäure: 2mg" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          3,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       Erhöhter Koffeingehalt. Für Kinder und schwangere oder stillende Frauen nicht empfohlen (32,0 mg/100 ml), inkl. Pfand (0,25 DH), 11,25 DH/l, 0,25l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="0NR7PP73O1"
                                 data-categoryId="" id="OQ77N7R01/0NR7PP73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Bratee, Zitrone 0,75l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Bratee, Zitrone 0,75l"  data-additives="3,13" data-nutrition="Zutaten: 89% direkt gebrühter schwarzer Tee (Wasser, Schwarztee), Zucker, Säuerungsmittel Citronensäure, Zitronensaftkonzentrat, Säureregulator Trinatriumcitrat, natürliches Aroma, Antioxidationsmittel Ascorbinsäure 
                                          Hersteller: UniBev GmbH, Quellenstraße 7, 70376 Stuttgart
                                          Nährwerte pro 100ml:
                                          Energie: 150 kJ/35kcal
                                          Fett:   0,5g
                                          davon ges. Fettsäuren: 0,5g
                                          Kohlenhydrate: 8,6g
                                          davon Zucker:  8,6g
                                          Eiweiß: 0,5g
                                          Salz: 0,034g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       3,33 DH/l, 0,75l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="05R7PP73O1"
                                 data-categoryId="" id="OQ77N7R01/05R7PP73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       Bratee, Granatapfel 0,75l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="Bratee, Granatapfel 0,75l"  data-additives="1,13" data-nutrition="Zutaten: 89% direkt gebrühter schwarzer Tee (Wasser, Schwarztee), Zucker, Säuerungsmittel Citronensäure, färbendes Konzentrat aus Karotte, Säureregulator Trinatriumcitrat, Aroma, Granatapfelsaftkonzentrat Hersteller: 
                                          UniBev GmbH, Quellenstraße 7, 70376 Stuttgart
                                          Nährwerte pro 100ml:
                                          Energie        153 kJ
                                          Energie        36 kcal
                                          Fett        &lt; 0,01 g
                                          Fett, davon gesättigte Fettsäuren &lt; 0,01 g
                                          Kohlenhydrate        8,8 g
                                          Kohlenhydrate, davon Zucker        8,8 g
                                          Salz        0,04 g
                                          Eiweiß &lt; 0,01 g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,50 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       3,33 DH/l, 0,75l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="addtobasket "
                                 onclick="addSimpleProductBasket(event, 'templaterevamped'); return false;"
                                 data-min-age="0"
                                 data-productId="001QPP73O1"
                                 data-categoryId="" id="OQ77N7R01/001QPP73O1">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       4Bro, Ice Tea Mango Maracuja 0,5l                                    <span onclick="allergens(event); return false" class="meal-allergens" title="Weitere Produktinformationen"  data-name="4Bro, Ice Tea Mango Maracuja 0,5l"  data-additives="3,13" data-nutrition="Zutaten: Wasser, Zucker, Säuerungsmittel: Citronensäure (E330), Mangomark (0,15%), Schwarztee-Extrakt (0,12%), Säureregulator: Natriumcitrate (E331), Aroma, Antioxidationsmittel: Ascorbinsäure (E300)
                                          Hersteller: CALIDRIS 28 Deutschland GmbH, Kuckucksweg 10, 14195 Berlin
                                          Nährwerte pro 100ml:
                                          Brennwert: 121kJ
                                          Brennwert: 28kcal
                                          Fett: 0g
                                          Davon gesättigte Fettsäuren: 0g
                                          Kohlenhydrate: 6,8g
                                          Davon Zucker: 6,8g
                                          Eiweiß: 0,02g
                                          Salz: 0,08g" data-template="templaterevamped"></span>                                                                    
                                    </div>
                                    <!-- product-name -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          2,00 DH                                    
                                       </div>
                                    </div>
                                    <div class="meal-description-attribute-descriptions">
                                       4,00 DH/l, 0,5l                                    
                                    </div>
                                 </div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           <!--itemscope schema product -->
                        </div>
                        <!-- product-container -->
                     </div>
                     <!-- menucat -->
                  </div>
                  <!-- menucard-container -->
               </div>
               <!-- menucard-listng -->
            </div>
            <div id="sB" class="staticBasket" >
               <div class="main-basket">
                  <div class="btn btn-basket baskettitle basket-title-closed" id="btn-basket">
                     <div class="btn-icon">
                        <h2 onclick="$('#sB').toggleClass('opnU');">
                        <span id="toshake">
                           <span class="btn-text-placeholder">Votre Commande            </span>
                           <span class="btn-text btn-cart-price"><span class="total-cart"></span> DH</span>
                        </span>
                        </h2>
                     </div>
                     <div class="btn-cart-icon">
                        <span class="btn-cart-amount total-count"></span>
                     </div>
                  </div>
                  <div class="basket-title-open baskettitle">
                     <div class="basket-title-text">
                        <span id="command" style="margin-right: -15px !important;"><b>Votre Commande</b></span> 
                        <span ><i style="float: right !important;margin-top: 20px !important;margin-right: 15px !important;font-size: 20px !important;" class="fa fa-times" id="close" 
                            aria-hidden="true"></i> </span>
                     </div>
                  </div>
                  <div id="js-basket-container" class="widget">
                     <div class="menu-cart-fixed">
                        <div class="basket-notification" style="display: none">
                           undefined
                        </div>
                        <div class="missing" style="display: none">
                           <h3 class="cart-meal-error">The following products are not available and removed from your basket.</h3>
                           <div class="missing_products"></div>
                        </div>
                        <div class="mismatch" style="display: none">
                           <h3 class="cart-meal-error">Some products have been changed. We've updated them for you.</h3>
                        </div>
                        <!-- 
                           START OF PRODUCTS
                        -->
                        <div id="products hideit">
                           <div class="show-cart"></div>
                        </div>

                        <!-- 
                           END OF PRODUCTS
                        -->
                        <div id="discounts"></div>
                        <div id="autoaddproducts"></div>



                        <div id="sum" class="cart-sum hideit" style="">
                           <div class="cart-row">
                              <span class="cart-sum-name grey">Commande</span>
                              <span class="cart-sum-price grey"><span class="total-cart"></span> DH</span>
                           </div>
                           <div class="cart-row">
                              <span class="cart-sum-name grey">Livraison</span>
                              <span class="cart-sum-price grey"><span class="total-shipping"></span> DH</span>
                           </div>
                           <div class="cart-row row-sum">
                              <span class="cart-sum-name">Total</span>
                              <span class="cart-sum-price"><span class="total-p"></span> DH</span>
                           </div>
                           <div class="cart-row chcolor">
                              <span class="cart-sum-name">Livraison gratuite à partir de 150 DH</span>
                           </div>
                           <div class="cart-row remining">
                              <span class="cart-sum-name row-green chcolor2">Montant nécessaire pour atteindre la valeur minimale de commande</span>
                              <span class="cart-sum-price row-green chcolor2"><span class="total-r"></span>  DH</span>
                           </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div id="empty" class="jig-cart-empty-state visible">
                           <div class="jig-cart-empty-state-icon"></div>
                           <h3>Choisissez de délicieux plats dans le menu et commandez votre menu.</h3>
                           <br>
                        </div>
                        <div class="cart-row" id="cart-exclusive" style="display: none">
                           <span class="cart-sum-name cart-meal-exclude">Nicht im Mindestbestellwert</span>
                        </div>
                        <section class="cartbutton">
                           <a class="cartbutton-button btn-disabled" onclick="proceedCheckout()" href="order.html">
                           Commander
                           </a>
                           <div class="minimumorderamount-reached" style="display: none;"></div>
                        </section>
                        <div class="cart-row" id="cart-exclusive-only" style="display: none;">
                           <span class="cart-sum-name cart-meal-exclude-only">Du kannst leider noch nicht Commander, da Deine ausgewählten Produkte nur in Kombination mit anderen Produkten geliefert werden können.</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--menucard  main-->
      </div>
      <!--full div-->
      <div class="footer dark">
      <div class="affillogo">
         <a href="https://www.lieferando.de/" rel="nofollow">
         <img class="footerlogo" src="tpl/template1/images/logo/logo_2.png"/>
         </a>
      </div>
      <div class="container">
         <div class="contact">
            <h3>Kontakt</h3>
            <div class="widget" id="address">
               <div itemscope itemtype="http://schema.org/Restaurant">
                  <h2 itemprop="name">TopTop Donuts</h2>
                  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Severinstraße&nbsp;56</span><br/><span itemprop="postalCode">50678</span>&nbsp;<span itemprop="addressLocality">Köln</span></div>
                  <div><br/></div>
                  <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                     <meta itemprop="latitude" content="50.9247977" />
                     <meta itemprop="longitude" content="6.9587405" />
                  </div>
               </div>
            </div>
         </div>
         <div class="links">
            <h3>Info</h3>
            <a href="terms">AGB</a><br/>
            <a href="privacystatement">Datenschutzerklärung</a><br/>
            <a href="cookiestatement">Verwendung von Cookies</a><br/>
            <a href="colofon">Impressum</a>
            <br/>
         </div>
      </div>
      <script type="text/javascript" src="{{ asset('tpl/template1/default1.js') }}"></script>
      <div class="background" style="background-image: url('https://static.takeaway.com/images/restaurants/de/OR0037R1/headers/header.jpg');"></div>
      <script>
         /* DH migration */
         
         function getUrlParameter(name) {
             name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
             var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
             var results = regex.exec(location.search);
             return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
         }
         let refr = getUrlParameter('refr')
         if (refr === 'dh') {
             // setcookie
             setCookie('realRefr','dh',false);
         }
         
         
      </script>
      <div id="tooltip" class="tooltip" style="display:none"></div>
      <div
         class="cc-banner"
         data-content-text="Wir verwenden Cookies und andere Technologien, um Dein Benutzererlebnis zu verbessern und zu personalisieren, für Analysen zur Optimierung und Werbung in Zusammenarbeit mit Dritten. Wir verwenden unsere eigenen Cookies und Cookies von Dritten. Wenn Du auf OK klickst, akzeptierst Du die Verwendung aller Cookies. Wir setzen immer notwendige Cookies. Wähle {preferencesUrl}Einstellungen verwalten{/preferencesUrl}, um zu entscheiden, welche Cookies Du akzeptieren möchtest, um Deine Präferenzen anzupassen und um weitere Informationen zu finden."
         data-url="/cookiestatement"
         data-url-text="Einstellungen verwalten"
         data-button-text="OK"
         data-hide-link-after-text="true"
         data-button-text-aria="Alle Cookies akzeptieren"
         data-button-essential-package="Essentielle"
         data-button-essential-package-aria="Essentielles Cookie-Paket akzeptieren"
         ></div>
      <script src="{{ asset('assets/js/app11.js') }}"></script>
      <script src="{{ asset('tpl/template1/additives1.js') }}" /></script>    <script type="application/javascript">
         var uaCode = 'UA-7904955-1';
      </script>



      <script src="{{ asset('js/allergens.js') }}"></script>
      <script src="{{ asset('basket/js/vendor/js.cookie.min.js') }}"></script>
      <script src="{{ asset('basket/js/vendor/moment.min.js') }}"></script>
      <script src="{{ asset('basket/js/vendor/moment-timezone.min.js') }}"></script>

      <script src="{{ asset('basket/js/main22.js') }}"></script>
      <script src="{{ asset('basket/js/shake.js') }}"></script>
      <script src="{{ asset('basket/js/shopping31.js') }}"></script>

   </body>
</html>

