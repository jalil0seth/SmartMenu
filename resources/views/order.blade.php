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
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style22.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/takeaway22.css') }}" />
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
        @media (max-width: 640px){
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
      #cart, #basket {
          border: 0px;
      }
      @media (min-width: 1005px){
        .checkoutform .btn_order {
            max-width: 3000px !important;
        }
    }
    .items.remarks {
    width: 98% !important;
}
      
    </style>
</head>

   <body class="checkout">
      <div class="header">
         <div id="navigationopenbutton" class="menubutton"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
         <div class="nav">
            <div id="navigationclosebutton" class="menubutton"><i class="fa fa-close fa-2x" aria-hidden="true"></i></div>
            <div class="nav-wrapper">
              <ul>
                  <li class='active'><a href="#" title="Bewertungen zu TopTop Donuts ansehen">Menu</a></li>
                  <li><a href="#" title="Nehmen Sie Kontakt mit TopTop Donuts auf">Contact</a></li>
                  <li><a href="#" title="">About Us</a></li>
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
               <h1 class="title">Finaliser votre commande</h1>
               <div class="widget">
                  <div id="checkout">
                     <form action="/sendorder" method="post" id="passercommade_form">
                        @csrf
                        <div class="checkoutstep step1">
                          Comment pouvons-nous vous contacter?
                        </div>
                        <div class="checkout naw clearfix">
                          <div class="items address">
                            <label for="address">
                            Votre addresse</label>
                            <textarea id="address2" name="address" required></textarea>
                         </div>
                         <div class="items deliverytime">
                          <label for="deliverytime">
                           Veuillez sélectionner votre <b>lieu sur Marrakech</b>		</label>
                          <select id="region" name="region" required>
                             <option value="-" selected>-</option>
                             <option value="Massira 1" >Massira 1</option>
                             <option value="Mhamid" >Mhamid</option>
                          </select>
                       </div>
                           <div class="items surname">
                              <label for="surname">
                              Nom complet			</label>
                              <input type="text" id="nom"  name="nom" value="" required/>
                           </div>
                           <div class="items phonenumber">
                              <label for="phonenumber">
                               Numéro de téléphone			</label>
                              <input type="text" id="phone"  name="phone" value="" required/>
                           </div>
                        </div>
                        <div class="checkoutstep step2">
                          Ajouter des remarques sur votre commande
                        </div>
                        <div class="items remarks">
                           <label for="remarks">
                            Vos remarques
                           </label>
                           <textarea id="notes" name="notes"></textarea>
                        </div>
                        <div class="paymentinfo clearfix">
                           <div class="items paymenticons clearfix">
                              <div class="payments">
                                 <input type="radio" name="paymentmethod" id="ipaymentmethod0" class="offline" value="0" checked/></td>
                                 <label for="ipaymentmethod0" class=""><img src="tpl/template1/images/paymenticons/payment_0.png"/>Payement a la livraison</label>
                              </div>
                              <div class="payments" style="display: none;">
                                 <input type="radio" name="paymentmethod" id="ipaymentmethod15" class="online" value="15" /></td>
                                 <label for="ipaymentmethod15" class=""><img src="tpl/template1/images/paymenticons/payment_15.png"/>Klarna</label>
                              </div>
                              <div class="payments" style="display: none;">
                                 <input type="radio" name="paymentmethod" id="ipaymentmethod18" class="online" value="18" /></td>
                                 <label for="ipaymentmethod18" class=""><img src="tpl/template1/images/paymenticons/payment_18.png"/>PayPal</label>
                              </div>
                           </div>
                           <div id="paymethod_details" class="clearfix"></div>
                           <input type="hidden" name="cartContent" id="cartContent" value="">
                           <!--checkboxes and extra checks -->
                           <input type="submit" class="btn_order" id="passercommade" name="checkoutbutton" value="Passer votre commande"/>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="shoppingcart">
               <div class="widget">
                  <div id="basket">
                     <div class="baskettitle">
                        <h2 class="basket-title-closed">Votre commande (<span class="total-cart"></span> DH)</h2>
                        <h2 class="basket-title-open">Votre commande</h2>
                     </div>
                    <div id="cartcontent">
                        <div class="listproduct"></div>
                        <div class="productrow last"></div>
                        <div class="line delivery">
                           <div class="prodname">Livraison:</div>
                           <div class="prodprice"><span class="total-shipping"></span> DH</div>
                        </div>
                        <div class="totals line">
                           <div class="prodname">Total</div>
                           <div class="prodprice"><span class="total-p"></span> DH</div>
                        </div>
                        <div>
                           <div colspan="4">&nbsp;</div>
                        </div>
                        <div>
                           <div class="prodactionbtn"></div>
                           <div class="prodnumber"></div>
                           <div class="prodname">Livraison gratuite à partir de :</div>
                           <div class="prodprice">150 DH</div>
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
      <script type="text/javascript" src="http://127.0.0.1:8000/tpl/template1/default1.js"></script>
       <div class="background" style="background-image: url('{{ $setting->banners[0]['url'] }}');"></div>
        <script src="{{ asset('basket/js/shake.js') }}"></script>
        <script src="{{ asset('basket/js/shopping31.js') }}"></script>
   </body>
</html>
<!--templaterevamped--><!--ip-10-200-41-227
   -->