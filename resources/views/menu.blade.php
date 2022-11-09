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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
   </head>
   <body class="menu">
      <div class="header">
         <div id="navigationopenbutton" class="menubutton"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
         <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i></div>
            <div class="nav-wrapper">
               <ul>
                  <li class='active'><a href="review" title="Bewertungen zu TopTop Donuts ansehen">Menu</a></li>
                  <li><a href="contact" title="Nehmen Sie Kontakt mit TopTop Donuts auf">Contact</a></li>
                  <li><a href="colofon" title="">About Us</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="templaterevamped-hero">
         <div class="templaterevamped-header">
            <div class="restaurantlogo">
               <img src="{{$setting->logo['url']}}">
            </div>
            <h1>
               {{$setting->nom}}     
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
                    <div class="menucat menucard__meals-group" anchor-id="cat{{$cat->id}}" id="cat{{$cat->id}}">
                    @if(isset($cat->image['url']))
                        <div class="menucard__category-image-container"
                           style="background-image: url('{{$cat->image['url']}}');">
                        </div>
                    @endif
                        <div class="category">
                           <div class="category-name">
                              {{$cat->name}}                             
                           </div>
                           <div class="category-description">
                           </div>
                        </div>
                        <div class="product-container">
                           @foreach (\App\Models\Product::where('category_id',$cat->id)->get() as $p)
                           <div itemscope itemtype="http://schema.org/Product">
                              <div class="add-to-cart addtobasket" data-name="{{$p->name}}" data-price="{{$p->price}}" data-imgproduct="{{$p->image[0]['url']}}">
                                 <div class="meal-wrapper">
                                    <div class="product-name" itemprop="name">
                                       {{$p->name}}                                                                                                        
                                    </div>
                                    <!-- product-name -->
                                    @isset($p->notes)
                                        <div class="product-description" itemprop="description">
                                        <ul class='notes'>
                                        @foreach (preg_split("/\r\n|\n|\r/", $p->notes) as $notes)
                                           <li>•  {{$notes}}</li>
                                        @endforeach
                                        </ul></div>
                                    @endisset

                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                       <div class="product-price" itemprop="price">
                                          {{$p->price}} DH                                    
                                       </div>
                                    </div>
                                 </div>
                                 <div class="meal__product-image-container2"><img class="meal__product-image" src="{{$p->image[0]['url']}}" alt="{{$p->name}}" border="0"></div>
                                 <div class="product-order-button"></div>
                              </div>
                              <!-- add simple product div OR show sidedish div -->
                           </div>
                           @endforeach
                        </div>
                        <!-- product-container -->
                     </div>
                  @endforeach
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
         <a href="#" rel="nofollow">
         <img class="footerlogo" src="{{$setting->logo['url']}}"/>
         </a>
      </div>
      <div class="container">
         <div class="contact">
            <h3>Kontakt</h3>
            <div class="widget" id="address">
               <div itemscope itemtype="http://schema.org/Restaurant">
                  <h2 itemprop="name">{{$setting->nom}}</h2>
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
      <div class="background" style="background-image: url('{{$setting->banners[0]['url']}}');"></div>
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

