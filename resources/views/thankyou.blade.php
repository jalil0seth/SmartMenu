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
div#counter {
    font-size: 50px;
    text-align: center;
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
               <h1 class="title">Merci pour votre commande</h1>
               <div class="widget">
                  <div id="checkout">
                     <form action="/sendorder" method="post" id="passercommade_form">
                        @csrf
                        <div class="checkoutstep step1">
                          Informations sur votre commande
                        </div>
                        <div class="checkout naw clearfix">
                           <div class="items phonenumber">
                              <label for="phonenumber">
                               Reference		</label>
                               <div style="margin-top:4px;border-radius: 2px;height: 35px;padding: 3px;color: #555;border: 1px solid #adbcdb;background-color:beige">{{$order->ref}}</div>
                           </div>
                           <div class="items surname">
                              <label for="surname">
                              Status de votre commande </label>
                              <div style="margin-top:4px;border-radius: 2px;height: 35px;padding: 3px;color: #555;border: 1px solid #adbcdb;background-color:beige">{{($order->status == 'nouveau')? 'En cours de préparation': $order->status}}</div>
                           </div>

                           @if ($order->livreur_id != '')
                              <div class="items phonenumber">
                                 <label for="phonenumber">
                                 Nom de votre livreur			</label>
                                 <br><br>
                                 <div style="margin-top:4px;border-radius: 2px;height: 35px;padding: 3px;color: #555;border: 1px solid #adbcdb;background-color:beige">
                                    
                                    {{\App\Models\Livreur::find($order->livreur_id)->name}}</div>
                                 
                              </div>
                              <div class="items phonenumber">
                                 <label for="phonenumber">
                                    Appeller le livreur			</label>
                                 <br><br>
                                    <a href="tel:{{str_replace(' ','',\App\Models\Livreur::find($order->livreur_id)->first()->phone)}}"><img src="{{ asset('whatsap.png') }} " width="35px" srcset=""></a>
                              </div>
                           @endif
                        </div>
                        <div id="counter2">
                        <div class="checkoutstep step2">
                           Votre commande sera livré dans :
                        </div>
                        <div class="items remarks">
                           <div id="counter"></div>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="shoppingcart">
               <div class="widget">
                  <div id="basket">
                     <div class="baskettitle">
                        <h2 class="basket-title-closed">Votre commande ({{$order->total}} DH)</h2>
                        <h2 class="basket-title-open">Votre commande</h2>
                     </div>
                    <div id="cartcontent">
                     <div class="listproduct2">
                        @foreach ($orderd as $o)
                        <div class="productrow">
                           <div class="prodname">
                               <span style="display: flex; align-items: center;">{{$o->quantity}} x <img src="{{$o->image}}" width="40px" />{{$o->productname}}</span>
                           </div>
                           <div class="prodprice">{{$o->total/$o->quantity}} DH</div>
                       </div>
                        @endforeach
                    </div>
                    
                        <div class="productrow last"></div>
                        <div class="line delivery">
                           <div class="prodname">Livraison:</div>
                           <div class="prodprice">{{$order->livraison}} DH</div>
                        </div>
                        <div class="totals line">
                           <div class="prodname">Total</div>
                           <div class="prodprice">{{$order->total}} DH</div>
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
        <script type="text/javascript" src="{{ asset('tpl/template1/default1.js') }}"></script>
       <div class="background" style="background-image: url('{{ $setting->banners[0]['url'] }}');"></div>
        <script src="{{ asset('basket/js/shake.js') }}"></script>
        <script src="{{ asset('basket/js/shopping39.js') }}"></script>
        <script>

         // Set the date we're counting down to
         console.log(new Date(Date.parse('{{$order->created_at}}')));
         console.log(add_minutes(new Date(Date.parse('{{$order->created_at}}')),45+60));
         console.log(new Date());
         var countDownDate = add_minutes(new Date(Date.parse('{{$order->created_at}}')),45+60).getTime();
         
         // Update the count down every 1 second
         var x = setInterval(function() {
         
           // Get today's date and time
           var now = new Date().getTime();
             
           // Find the distance between now and the count down date
           var distance = countDownDate - now;
             
           // Time calculations for days, hours, minutes and seconds
           var days = Math.floor(distance / (1000 * 60 * 60 * 24));
           var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
           var seconds = Math.floor((distance % (1000 * 60)) / 1000);
             
           // Output the result in an element with id="demo"
           document.getElementById("counter").innerHTML =  minutes + "m " + seconds + "s ";
             
           // If the count down is over, write some text 
           if (distance < 0) {
             clearInterval(x);
             document.getElementById("counter2").style.display = "none";
           }
         }, 1000);
         </script>
   </body>
</html>
<!--templaterevamped--><!--ip-10-200-41-227
   -->