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
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style23.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/takeaway23.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('tpl/template1/additives.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('basket/css/sidedishes.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <style>
        .cart-meal-name {
            word-break: normal !important;
        }

        @media (max-width: 640px) {
            .checkout .items.paymenticons .payments {
                width: 30% !important;
                margin-right: 2%;
                max-width: 163px !important;
                margin-bottom: 2%;
            }

            .nav li.active a {
                padding: 16px !important;
            }
        }

        #cart,
        #basket {
            border: 0px;
        }

        @media (min-width: 1005px) {
            .checkoutform .btn_order {
                max-width: 3000px !important;
            }
        }

        .items.remarks {
            width: 98% !important;
        }

        .shoppingcart.opened {
            height: 100%;
            width: 100%;
            transform: translateY(0);
            overflow: auto;
            padding-bottom: 30px;
            background: #fff;
            color: #666;
        }

        .shoppingcart.opened .basket-title-open {
            display: block;
            color: #666;
            font-size: 16px;
            font-weight: 600;
            height: 56px;
            line-height: 56px;
            text-align: center;
            border-bottom: 1px solid #f8f5d2;
        }

        .shoppingcart .baskettitle h2::after {
         content: "" !important;
         position: absolute;
         top: 20px;
         left: 32px;
         font-size: 24px;
      }
               
        .faicon{
            position: absolute;
            top: 20px;
            right: 10px;
            font-size: 18px;
            transform: rotate(0deg);
            transition: all .5s ease-in-out;
         }
         .btnsmart {
            font-family: Takeaway Sans, Avant Garde, Century Gothic, Helvetica, Arial, sans-serif;
            font-weight: 600;
            position: relative;
            padding: 0 16px;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            appearance: none;
            color: #fff;
            background-color: #125fca;
            line-height: 50px;
            width: 100%;
            user-select: none;
            font-size: 18px;
            margin-top: 32px;
            border: 1px;
         }
         .shoppingcart .productrow {
            margin: auto;
         }
                  .shoppingcart .prodprice {
            margin-top: 10px !important;
         }

         .prodname img {
            margin: 0px 10px;
         }
         .mt10 {
            margin-top: 10px;
         }
    </style>
</head>

<body class="checkout">
    <div class="header">
        <div id="navigationopenbutton" class="menubutton"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
        <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li class='active'><a href="/">Menu</a></li>
                    <li><a href="tel:{{ str_replace(' ', '', str_replace(' ', '', $setting->phone)) }}">Appeler</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=212{{ str_replace('07', '7', str_replace('06', '6', str_replace(' ', '', $setting->whatsapp))) }}"
                            target="_blank">Whatsapp</a></li>
                    <li><a href="{{ $setting->instagram }}" target="_blank">Instagram</a></li>
                    <li><a href="{{ $setting->facebook }}" target="_blank">Facebook</a></li>
                    <li><a href="{{ $setting->tiktok }}" target="_blank">TikTok</a></li>
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
        <div class="checkoutpage clearfix">
            <div class="checkoutform">
                <div class="widget">
                    <div id="checkout">
                        <form action="/sendorder" method="post" id="passercommade_form">
                            @csrf
                            <div class="checkoutstep step1">
                                Comment pouvons-nous vous contacter?
                            </div>
                            <div class="checkout naw clearfix">
                                <div class="items surname">
                                    <label for="surname">
                                        Nom complet </label>
                                    <input type="text" id="nom" name="nom" value="" required />
                                </div>
                                <div class="items phonenumber">
                                    <label for="phonenumber">
                                        Numéro de téléphone </label>
                                    <input type="tel" id="phone" name="phone" minlength="10" maxlength="10"
                                        value="" required />
                                </div>
                                <div class="items address">
                                    <label for="address">
                                        Votre addresse</label>
                                    <textarea id="address2" name="address" required></textarea>
                                </div>
                                <div class="items region">
                                    <label for="region">
                                        Veuillez sélectionner votre <b>lieu sur Marrakech</b> </label>
                                    <select id="region" name="region" required>
                                        <option value="" selected>-</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->regions }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="items email">
                                    <label for="email">
                                        Email </label>
                                    <input type="text" id="email" name="email" value="" required />
                                </div>
                            </div>
                            <div class="checkoutstep step2">
                                Commande personnalisée :
                            </div>
                            <div class="items remarks">
                                <label for="remarks">
                                    Ajouter des notes à votre commande
                                </label>
                                <textarea id="notes" name="notes"></textarea>
                            </div>
                            <div class="paymentinfo clearfix">
                                <div class="items paymenticons clearfix">
                                    <div class="payments">
                                        <input type="radio" name="paymentmethod" id="ipaymentmethod0"
                                            class="offline" value="cod" checked /></td>
                                        <label for="ipaymentmethod0" class=""><img
                                                src="tpl/template1/images/paymenticons/payment_0.png" />Paiement à la
                                            livraison</label>
                                    </div>
                                    <div class="payments" style="display: none;">
                                        <input type="radio" name="paymentmethod" id="ipaymentmethod15"
                                            class="online" value="15" /></td>
                                        <label for="ipaymentmethod15" class=""><img
                                                src="tpl/template1/images/paymenticons/payment_15.png" />Klarna</label>
                                    </div>
                                    <div class="payments" style="display: none;">
                                        <input type="radio" name="paymentmethod" id="ipaymentmethod18"
                                            class="online" value="paypal" /></td>
                                        <label for="ipaymentmethod18" class=""><img
                                                src="tpl/template1/images/paymenticons/payment_18.png" />PayPal</label>
                                    </div>
                                </div>
                                <div id="paymethod_details" class="clearfix"></div>
                                <input type="hidden" name="cartContent" id="cartContent" value="">
                                <input type="hidden" name="total" id="total" value="">
                                <input type="hidden" name="livraison" id="livraison" value="">
                                <!--checkboxes and extra checks -->
                                <input type="submit" class="btn_order" id="passercommade" name="checkoutbutton"
                                    value="Passer votre commande" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="shoppingcart">
                <div class="widget">
                    <div id="basket">
                        <div class="baskettitle">
                            <h2 class="basket-title-closed">Votre commande (<span class="total-p" style="padding-left: 5px;"></span> DH ) <i class="faicon fa-solid fa-chevron-up"></i></h2>
                            <h2 class="basket-title-open">Votre commande <i class="faicon fa-sharp fa-solid fa-xmark"></i></h2>
                        </div>
                        <div id="cartcontent">
                            <div class="listproduct"></div>
                            <div class="productrow last"></div>
                            <div class="line delivery">
                              <div class="prodname mt10">Commande :</div>
                              <div class="prodprice"><span class="total-cart"></span> DH</div>
                          </div>
                            <div class="line delivery">
                                <div class="prodname mt10">Livraison:</div>
                                <div class="prodprice"><span class="total-shipping"></span> DH</div>
                            </div>
                            <div class="totals line">
                                <div class="prodname mt10">Total :</div>
                                <div class="prodprice"><span class="total-p"></span> DH</div>
                            </div>
                            <div>
                                <div colspan="4">&nbsp;</div>
                            </div>
                            <div>
                                <div class="prodactionbtn"></div>
                                <div class="prodnumber"></div>
                                <div class="prodname mt10">Livraison gratuite à partir de :</div>
                                <div class="prodprice">{{ $setting->free_shipping }} DH</div>
                                <input type="hidden" value="{{ $setting->free_shipping }} " id="free_shipping">
                                <input type="hidden" value="{{ $setting->shipping }} " id="shipping">
                                <input type="hidden" value="{{ $setting->min_order }} " id="min_order">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                itemprop="streetAddress">+212611551122</span><br /><span
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
    </div>
    <script type="text/javascript" src="{{ asset('tpl/template1/default1.js') }}"></script>
    <div class="background" style="background-image: url('{{ $setting->banners[0]['url'] }}');"></div>
    <script src="{{ asset('basket/js/shake.js') }}"></script>
    <script src="{{ asset('basket/js/shopping43.js') }}"></script>
    <script>
      $('.shoppingcart').after().click(function(){
         console.log('ok');
         $('.shoppingcart').toggleClass('opened') ;
         $('.basket-title-closed').toggle() ;
         $('.shoppingcart .baskettitle h2::after').css('content','\f078') ;
         
      })
    </script>
</body>

</html>