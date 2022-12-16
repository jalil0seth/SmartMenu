<html dir="rtl" lang="ar">
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="fr" xml:lang="fr"
    xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ $setting->nom }} - خدمة التوصيل</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="theme-color" content="#55ADDE" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <link rel="shortcut icon" href="{{ $setting->logo['thumbnail'] }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style22_ar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/takeaway22.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tpl/template1/additives.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('basket/css/sidedishes.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300&display=swap'); </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
        <style>
        .cart-meal-name {
            word-break: normal !important;
        }
        @media (min-width:600px) {
            ul {
                height: 30px !important;
            }
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
            margin-left: 6px;
        }

        @media (max-width:600px) {
            .nav li.active a {
                padding: 15px;
                font-size: 20px;
            }

            #contactnous {
                display: none;
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

        .category {
            margin-bottom: 0px !important; 
        }

        .oldprice{
            text-decoration: line-through;
            color: #f86600;
            font-size: 13px;
        }

        #hrslide {
            border-top: 1px solid #b8b2ac !important;
        }

        #hrdesc {
            border-top: 1px solid #f2efed !important;
        }

        .category {
            margin-bottom: 0px !important;
        }

        @keyframes tilt-shaking {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(5deg);
            }

            50% {
                transform: rotate(0eg);
            }

            75% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        @keyframes skew-y-shakeing {
            0% {
                transform: skewY(-15deg);
            }

            5% {
                transform: skewY(15deg);
            }

            10% {
                transform: skewY(-15deg);
            }

            15% {
                transform: skewY(15deg);
            }

            20% {
                transform: skewY(0deg);
            }

            100% {
                transform: skewY(0deg);
            }
        }

        .slide-whatsapp {
            color: #025f06 !important;
        }

        .slide-phone {
            color: #008ff8 !important;
        }

        .slide-instagram {
            color: #9f12a4 !important;
        }

        .slide-fb {
            color: #003aeb !important;
        }

        .header .menubutton {
            float: left !important;
            margin: 10px
        }

        ul {
            height: 60px;
        }

        ul.notes{
            height: 100% !important;
        }
        .nav li.active a {
            margin-right: 0px !important;
        }

        .ar{
            font-family: 'IBM Plex Sans Arabic', sans-serif !important;
        }
        .cart-single-meal .cart-row .cart-meal-amount {
            padding-left: 6px !important;
            padding-right: 0px !important;
        }
        .icon-ta-next-v2:before {
            content: "\e993" !important;
        }
        .menucard-container .menucat .addtobasket .product-price {
            margin-top: 20px;
        }
        #mobile{
            display: none;
        }

    </style>
</head>

<body class="menu" dir="rtl" lang="ar">
    <div class="header">
        <div id="navigationopenbutton" class="menubutton"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
        <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li class='active ar'><a href="/"> القَائمة <i class="fa-regular fa-square-caret-down" id="icon"></i>
                         </a></li>
                    <li><a href="tel:{{ str_replace(' ', '', str_replace(' ', '', $setting->phone)) }}"><i
                                class="fa-solid fa-phone-volume" id="icon"></i> اتصل بنا</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=212{{ str_replace('07', '7', str_replace('06', '6', str_replace(' ', '', $setting->whatsapp))) }}"
                            target="_blank"><i class="fa-brands fa-whatsapp" id="icon"></i> Whatsapp</a></li>
                    <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa-brands fa-instagram"
                                id="icon"></i> Instagram</a></li>
                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa-brands fa-facebook"
                                id="icon"></i>Facebook</a></li>
                    <li><a href="{{ $setting->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"
                                id="icon"></i> TikTok</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="templaterevamped-hero">
        <div class="templaterevamped-header">
            <div class="restaurantlogo">
                <img src="{{ asset($setting->logo['url']) }}">
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
                                        <a href="/ar" class="swiper-slide wiper-slide-next ar"> <img src="{{ asset('left-arrow.svg') }}" style="width:14px;margin-left:2px" > رجوع الى المجموعات </a>
                                        <a href="#" class="slide-active ar" style="text-decoration:none"><img src="{{ asset('bookmark.svg') }}" style="width:12px;margin-left:4px" >{{ $cat->name_ar ? $cat->name_ar : $cat->name }}</a>
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
                                        style="background-image: url('{{ asset($cat->image['url'] )}}');">
                                    </div>
                                @endif
                                <div class="category">
                                    <div class="category-name ar">
                                        {{ $cat->name_ar ? $cat->name_ar : $cat->name }}
                                        @if (collect($discounts)->where('category_id', $cat->id)->first() != null)
                                            <span
                                                class="float-right discount bg-danger">{{ round(collect($discounts)->where('category_id', $cat->id)->first()->discount) }}%-</span>
                                        @endif
                                    </div>
                                    <div class="category-description ar">
                                        أكثر من {{ \App\Models\Product::where('category_id', $cat->id)->count() }}
                                        منتجات في هذه المجموعة 
                                        @if (isset($cat->description))<hr id="hrdesc">@endif
                                        {!! $cat->description_ar ? $cat->description_ar : $cat->description !!}
                                    </div>
                                </div>
                                <div class="product-container">
                                    @foreach (\App\Models\Product::where('category_id', $cat->id)->orderBy('rank','asc')->get() as $p)
                                        <div itemscope itemtype="http://schema.org/Product">
                                            <div class="add-to-cart addtobasket" data-name="{{ $p->name }}"
                                                data-price="{{ $p->price }}"
                                                data-imgproduct="{{ asset($p->image[0]['url']) }}"
                                                data-productid="{{ $p->id }}"
                                                data-oos="{{ $p->oos }}">
                                                <div itemprop="offers" itemscope
                                                    itemtype="http://schema.org/Offer">
                                                    <div class="product-price" itemprop="price">
                                                        {{ $p->price }} دم 
                                                    </div>
                                                    @if ($p->old_price != '' and $p->old_price>$p->price)
                                                    <div class="oldprice">
                                                        {{ $p->old_price }} دم 
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="meal__product-image-container2"><img
                                                    class="meal__product-image" src="{{ asset($p->image[0]['url']) }}"
                                                    alt="{{ $p->name }}" border="0"></div>
                                                <div class="meal-wrapper">
                                                    <div class="product-name ar" itemprop="name">
                                                        {{ $p->name_ar ? $p->name_ar : $p->name }} 
                                                        @if ($p->old_price != '' and $p->old_price>$p->price)
                                                        <span class="float-right discount bg-danger">{{round(($p->old_price-$p->price)*100/$p->old_price)}}%-</span>
                                                        @endif
                                                        @if ($p->oos == 1)
                                                            <span class="float-right badge bg-danger">غير متوفر</span>
                                                        @endif
                                                    </div>
                                                    <!-- product-name -->
                                                    <div>
                                                    @isset($p->notes)
                                                        <div class="product-description" itemprop="description">
                                                            <ul class='notes'>
                                                                @foreach (preg_split("/\r\n|\n|\r/", $p->notes) as $notes)
                                                                    <li>{{ $notes }} </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endisset
                                                    </div>
                                                </div>

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
                                <span id="toshake" class="ar">
                                    <span class="btn-text-placeholder">المجموع </span>
                                    <span class="btn-text btn-cart-price"><span class="total-cart"></span> دم</span>
                                </span>
                            </h2>
                        </div>
                        <div class="btn-cart-icon">
                            <span class="btn-cart-amount total-count"></span>
                        </div>
                    </div>
                    <div class="basket-title-open baskettitle">
                        <div class="basket-title-text">
                            <span id="command" style="margin-right: -15px !important;" class="ar"><b>طلبيتك</b></span>
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
                                    <span class="cart-sum-name grey">طلبيتك</span>
                                    <span class="cart-sum-price grey"><span class="total-cart"></span> دم</span>
                                </div>
                                <div class="cart-row">
                                    <span class="cart-sum-name grey">التوصيل</span>
                                    <span class="cart-sum-price grey"><span class="total-shipping"></span> دم</span>
                                </div>
                                <div class="cart-row row-sum">
                                    <span class="cart-sum-name">المجموع</span>
                                    <span class="cart-sum-price"><span class="total-p"></span> دم</span>
                                </div>
                                <div class="cart-row chcolor">
                                    <span class="cart-sum-name">توصيل مجاني ابتدأ من 
                                        {{ $setting->free_shipping }} دم</span>
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
                                    <span class="cart-sum-name row-green chcolor2">المبلغ المتبقي للطلب
                                        ({{ $setting->min_order }} دم)</span>
                                    <span class="cart-sum-price row-green chcolor2"><span class="total-r"></span>
                                        دم</span>
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
                                    اطلبها الآن
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
                                itemprop="streetAddress">{{str_replace(' ','',str_replace(' ','',$setting->phone))}}
                                </span><br /><span
                                itemprop="postalCode">40000</span>&nbsp;<span
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
        <div class="background" style="background-image: url('{{ asset($setting->banners[0]['url'] }})');"></div>
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
        <script src="{{ asset('basket/js/shopping42.js') }}"></script>

</body>

</html>
