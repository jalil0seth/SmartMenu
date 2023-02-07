<!DOCTYPE html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="fr" xml:lang="fr"
    xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ $setting->nom }} - Livraison à domicile</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="theme-color" content="#55ADDE" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <link rel="shortcut icon" href="{{ $setting->logo['thumbnail'] }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style42.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/takeaway23.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tpl/template1/additives.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('basket/css/sidedishes.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}" />
    <meta property="og:image" content="{{ $setting->logo['thumbnail'] }}" />
    <style>
        .buttonX {
            background-color: #1574f5;
                border: none;
                color: white;
                padding: 8px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                margin: 2px 2px;
                cursor: pointer;
                border: 1px solid #c1c1c1;
        }
        #discount {
            border-radius: 2px;
            /* height: 35px; */
            /* padding: 3px; */
            color: #555;
            border: 1px solid #c1c1c1;
            padding: 8px 15px;
            margin: -4px 2px;
        }
        .cart-meal-name {
            word-break: normal !important;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #919397;
            margin: 1em 0;
            padding: 0;
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 10px;
            font-weight: bold;
            color: #fff;
            line-height: 1;
            vertical-align: middle;
            white-space: nowrap;
            text-align: center;
            background-color: rgba(220, 149, 149, 0.56);
            border-radius: 10px;
        }

        #icon {
            margin-right: 6px;
        }

        @media (max-width:600px) {
            .nav li.active a {
                padding: 15px;
                font-size: 20px;
            }
        }

        @media (max-width:400px){
            .m2enucard-container .meal__product-image-container2 {
               height: 100% !important;
            }
        }

        .discount {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
            line-height: 1;
            vertical-align: middle;
            white-space: nowrap;
            text-align: center;
            background-color: rgba(209, 19, 19, 0.56);
            border-radius: 5px;
        }

        .category-description {
            color: #545454 !important;
        }

        #hrslide {
            border-top: 1px solid #b8b2ac !important;
        }

        .category {
            margin-bottom: 0px !important;
        }

        .oldprice {
            text-decoration: line-through;
            color: #f86600;
            font-size: 13px;
        }

        #mobile {
            display: none;
        }

        @media (max-width:600px) {
            #contactnous {
                display: none;
            }
        }
        .notification {
            background-color: #f8f5f2;
            color: black;
            text-decoration: none;
            padding: 5px 14px;
            position: relative;
            display: inline;
            border-radius: 9px;
            /* height: 20px; */
            top: -6px;
        }
        .notification .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 6px 8px;
            border-radius: 100%;
            background: red;
            color: white;
            font-size: 11px;
        }

    </style>
</head>

<body class="menu">
    <div class="header">
        <div id="navigationopenbutton" class="menubutton" ><a href="#" class="notification"><span><i class="fa-solid fa-bars"></i> Menu</span><span class="badge" @if ($host == 'toptopdonuts.ma')   style="display: none"  @endif >1</span></a> </div>
        <div id="navigationopenbutton" class="menubutton" @if ($host == 'toptopdonuts.ma') style="display: none" @endif><a href="/ar-cat{{ $cat->id }}-{{ str_replace(' ', '-', $cat->name) }}" class="notification"><span> العربية <i class="fa-solid fa-earth-americas"></i></span></a> </div>
        <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li class='active'><a href="/"><i class="fa-regular fa-square-caret-down" id="icon"></i>
                            Menu</a></li>
                    <li><a href="tel:{{ str_replace(' ', '', str_replace(' ', '', $setting->phone)) }}"><i
                                class="fa-solid fa-phone-volume" id="icon"></i> Appeler</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=212{{ str_replace('+212', '', str_replace(' ', '', $setting->whatsapp)) }}"
                            target="_blank"><i class="fa-brands fa-whatsapp" id="icon"></i> Whatsapp</a></li>
                    <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa-brands fa-instagram"
                                id="icon"></i> Instagram</a></li>
                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa-brands fa-facebook"
                                id="icon"></i>Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="templaterevamped-hero">
        <div class="templaterevamped-header">
            <div class="restaurantlogo">
                <img src="{{ $setting->logo['url'] }}">
            </div>
            <h1>
                {{ $setting->nom }}
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
                                        <a href="/" class="swiper-slide wiper-slide-next"> <img
                                                src="{{ asset('left-arrow.svg') }}"
                                                style="width:14px;margin-right:2px"> Tous les categories</a>
                                        <a href="#" class="slide-active" style="text-decoration:none"><img
                                                src="{{ asset('bookmark.svg') }}"
                                                style="width:12px;margin-right:4px">{{ $cat->name }}</a>
                                        <div id="contactnous" @if ($host == 'www.toptopdonuts.ma') style="display: none" @endif>
                                            <a style="text-decoration:none; font-size:16px" id="contactnous"
                                            class="ar">Changer la langue :</a>
                                            <a href="/ar-cat{{ $cat->id }}-{{ str_replace(' ', '-', $cat->name) }}"class="notification" style="top: 0 !important;"><span> العربية <i class="fa-solid fa-earth-americas"></i></span></a>
                                        </div>
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
                        <div class="menucat menucard__meals-group" anchor-id="cat{{ $cat->id }}"
                            id="cat{{ $cat->id }}">
                            @if (isset($cat->image['url']))
                                <div class="menucard__category-image-container"
                                    style="background-image: url('{{ $cat->image['url'] }}');">
                                </div>
                            @endif
                            <div class="category">
                                <div class="category-name">
                                    {{ $cat->name }}
                                    @if (collect($discounts)->where('category_id', $cat->id)->first() != null)
                                        <span
                                            class="float-right discount bg-danger">-{{ round(collect($discounts)->where('category_id', $cat->id)->first()->discount) }}%</span>
                                    @endif
                                </div>
                                <div class="category-description">
                                    {!! $cat->description !!}
                                </div>
                            </div>
                            <div class="product-container">
                                @foreach (\App\Models\Product::where('category_id', $cat->id)->orderBy('rank', 'asc')->get() as $p)
                                    <div itemscope itemtype="http://schema.org/Product">
                                        <div class="add-to-cart addtobasket" data-name="{{ $p->name }}"
                                            data-price="{{ $p->price }}"
                                            data-imgproduct="{{ $p->image[0]['url'] }}"
                                            data-productid="{{ $p->id }}" data-oos="{{ $p->oos }}">
                                            <div class="meal-wrapper">
                                                <div class="product-name" itemprop="name">
                                                    {{ $p->name }}
                                                    @if ($p->old_price != '' and $p->old_price > $p->price)
                                                        <span
                                                            class="float-right discount bg-danger">-{{ round((($p->old_price - $p->price) * 100) / $p->old_price) }}%</span>
                                                    @endif
                                                    @if ($p->oos == 1)
                                                        <span class="float-right badge bg-danger">Non disponible</span>
                                                    @endif
                                                </div>
                                                <!-- product-name -->
                                                @isset($p->notes)
                                                    <div class="product-description" itemprop="description">
                                                        <ul class='notes'>
                                                            @foreach (preg_split("/\r\n|\n|\r/", $p->notes) as $notes)
                                                                <li>• {{ $notes }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endisset

                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                    <div class="product-price" itemprop="price">
                                                        {{ $p->price }} DH
                                                    </div>
                                                    @if ($p->old_price != '' and $p->old_price > $p->price)
                                                        <div class="oldprice">
                                                            {{ $p->old_price }} DH
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="meal__product-image-container2"><img
                                                    class="meal__product-image" src="{{ $p->image[0]['url'] }}"
                                                    alt="{{ $p->name }}" border="0"></div>
                                            <div class="product-order-button"></div>
                                        </div>
                                        <!-- add simple product div OR show sidedish div -->
                                    </div>
                                @endforeach
                            </div>
                            <!-- product-container -->
                        </div>
                    </div>
                    <!-- menucard-container -->
                </div>
                <!-- menucard-listng -->
            </div>
            <div id="sB" class="staticBasket">
                <div class="main-basket">
                    <div class="btn btn-basket baskettitle basket-title-closed" id="btn-basket">
                        <div class="btn-icon">
                            <h2 onclick="$('#sB').toggleClass('opnU');">
                                <span id="toshake">
                                    <span class="btn-text-placeholder">Votre Commande </span>
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
                            <span><i style="float: right !important;margin-top: 20px !important;margin-right: 15px !important;font-size: 20px !important;"
                                    class="fa fa-times" id="close" aria-hidden="true"></i> </span>
                        </div>
                    </div>
                    <div id="js-basket-container" class="widget">
                        <div class="menu-cart-fixed">
                            <div class="basket-notification" style="display: none">
                                undefined
                            </div>
                            <div class="missing" style="display: none">
                                <h3 class="cart-meal-error">The following products are not available and removed from
                                    your basket.</h3>
                                <div class="missing_products"></div>
                            </div>
                            <div class="mismatch" style="display: none">
                                <h3 class="cart-meal-error">Some products have been changed. We've updated them for
                                    you.</h3>
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
                                <div class="cart-row">
                                    <input type="text" id="discount" name="discount"  placeholder="Entrer votre code promo"  />
                                    <button class="buttonX button4" id="validate" >Valider</button>
                                </div>
                                <label id="hint" style="display:none; color:red;">Le code est incorrecte</label>
                                <script>
                                    function getCookie(name) {
                                        const cookies = document.cookie.split(";");
                                        for (let i = 0; i < cookies.length; i++) {
                                        const cookie = cookies[i].trim();
                                        if (cookie.startsWith(name + "=")) {
                                            return cookie.substring((name + "=").length);
                                        }
                                        }
                                        return "";
                                    }

                                     $(document).ready(function() {
                                        const cookieValue = getCookie("discount");
                                        //$("#discount").val(cookieValue);
                                    });
                                    document.querySelector("#validate").addEventListener("click", function() {

                                      const discountCode = document.querySelector("#discount").value;
                                      const csrfToken = '{{ csrf_token() }}';
                                  
                                      
                                  
                                      // Make a POST request to the server to check if the discount code exists
                                      const xhr = new XMLHttpRequest();
                                      xhr.open("POST", "/check-discount", true);
                                      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                      xhr.setRequestHeader("X-CSRF-Token", csrfToken);
                                      xhr.onreadystatechange = function() {
                                        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                          const response = JSON.parse(xhr.responseText);
                                          if (response.exists) {
                                            // Show the discount value
                                            // Store the discount code in a cookie for 1 hour
                                            console.log(response)
                                            const expireDate = new Date();
                                            expireDate.setTime(expireDate.getTime() + (60 * 60 * 1000));
                                            document.cookie = "discount=" + response.code + "; expires=" + expireDate.toUTCString() + "; Max-Age=" + (60 * 60);
                                            document.cookie = "dvalue=" + response.percentage + "; expires=" + expireDate.toUTCString() + "; Max-Age=" + (60 * 60);

                                            $("#hint").hide();
                                            $("#couponr").show();
                                            $("#discount").css("border-color", "#91e348");
                                            
                                          } else {
                                            // Show an error message
                                            $("#couponr").hide();
                                            $("#discount").css("border-color", "red");
                                            $("#hint").show();
                                          }
                                        }
                                      };
                                      xhr.send("code=" + discountCode);
                                    });
                                  </script>
                                <hr>
                                <div class="cart-row row-sum">
                                    <span class="cart-sum-name">Total</span>
                                    <span class="cart-sum-price"><span class="total-p"></span> DH</span>
                                </div>
                                <div id="couponr" style="display:none;">
                                    <div class="cart-row row-sum">
                                        <span class="cart-sum-name">Reduction de <span class="reduction"></span>%</span>
                                        <span class="cart-sum-price"><span class="total-reduction"></span> DH</span>
                                    </div>
                                    <div class="cart-row row-sum">
                                        <span class="cart-sum-name">Total apres la reduction</span>
                                        <span class="cart-sum-price"><span class="total-apres-reduction"></span> DH</span>
                                    </div>
                                </div>
                                <div class="cart-row chcolor">
                                    <span class="cart-sum-name">Livraison gratuite à partir de
                                        {{ $setting->free_shipping }} DH</span>
                                    <input type="hidden" value="{{ $setting->free_shipping }} " id="free_shipping">
                                    <input type="hidden" value="{{ $setting->shipping }} " id="shipping">
                                    <input type="hidden" value="{{ $setting->min_order }} " id="min_order">
                                    <input type="hidden" value="{{ $setting->end_time }} "
                                        data-text="{{ $setting->nom }} est actuellement fermé. <br> Les horaires d'ouverture sont entre <br> {{ $setting->start_time }} et {{ $setting->end_time }}"
                                        id="end_time">
                                    <input type="hidden" value="{{ $setting->start_time }} " id="start_time">
                                    <input type="hidden" value="Ce produit n'est pas disponible pour le moment"
                                        id="oos_text">

                                </div>
                                <div class="cart-row remining">
                                    <span class="cart-sum-name row-green chcolor2">Montant nécessaire pour commander
                                        ({{ $setting->min_order }} DH)</span>
                                    <span class="cart-sum-price row-green chcolor2"><span class="total-r"></span>
                                        DH</span>
                                </div>
                            </div>













                            <div id="empty" class="jig-cart-empty-state visible">
                                <div class="jig-cart-empty-state-icon"></div>
                                <h3>Choisissez de délicieux plats dans le menu et commandez votre menu.</h3>
                                <br>
                            </div>
                            <div class="cart-row" id="cart-exclusive" style="display: none">
                                <span class="cart-sum-name cart-meal-exclude">Pas dans la valeur minimale de
                                    commande</span>
                            </div>
                            <section class="cartbutton">
                                
                                <a class="cartbutton-button btn-disabled" href="">
                                    Commander
                                </a>
                                <div class="minimumorderamount-reached" style="display: none;"></div>
                            </section>
                            <div class="cart-row" id="cart-exclusive-only" style="display: none;">
                                <span class="cart-sum-name cart-meal-exclude-only">Malheureusement, vous ne connaissez
                                    pas encore Commander, car les produits que vous avez sélectionnés ne peuvent être
                                    livrés qu'en combinaison avec d'autres produits.</span>
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
                <img class="footerlogo" src="{{ $setting->logo['url'] }}" />
            </a>
        </div>
        <div class="container">
            <div class="contact">
                <h3>Adresse</h3>
                <div class="widget" id="address">
                    <div itemscope itemtype="http://schema.org/Restaurant">
                        <h2 itemprop="name">{{ $setting->nom }}</h2>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span
                                itemprop="streetAddress">{{ str_replace(' ', '', str_replace(' ', '', $setting->phone)) }}
                            </span><br /><span itemprop="postalCode">40000</span>&nbsp;<span
                                itemprop="addressLocality">Marrakech</span></div>
                        <div><br /></div>
                        <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                            <meta itemprop="latitude" content="50.9247977" />
                            <meta itemprop="longitude" content="6.9587405" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="links">
                <h3>Info</h3>
                <a href="#">About us</a><br />
                <a href="#">Contact</a><br />
                <a href="#">Planifier votre evenement</a><br />
                <br />
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('tpl/template1/default1.js') }}"></script>
        <div class="background" style="background-image: url('{{ $setting->banners[0]['url'] }}');"></div>
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
                setCookie('realRefr', 'dh', false);
            }
            var site = '';
        </script>
        <div id="tooltip" class="tooltip" style="display:none"></div>


        <script src="{{ asset('assets/js/app11.js') }}"></script>
        <script src="{{ asset('tpl/template1/additives1.js') }}" />
        </script>
        <script type="application/javascript">
         var uaCode = 'UA-7904955-1';
      </script>



        <script src="{{ asset('js/allergens.js') }}"></script>
        <script src="{{ asset('basket/js/vendor/js.cookie.min.js') }}"></script>
        <script src="{{ asset('basket/js/vendor/moment.min.js') }}"></script>
        <script src="{{ asset('basket/js/vendor/moment-timezone.min.js') }}"></script>

        <script src="{{ asset('basket/js/main22.js') }}"></script>
        <script src="{{ asset('basket/js/shake.js') }}"></script>
        <script src="{{ asset('basket/js/shopping44.js') }}"></script>

</body>

</html>
