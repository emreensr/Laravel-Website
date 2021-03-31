@extends('welcome')
@include('header')
@section('content')
        <!-- Start page title -->
            <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>İletişim</h1>
                            </div>
                            <div class="breadcrumbs-area  text-center">
                                <ol class="breadcrumbs">
                                    <li><a href="#">Anasayfa</a></li>
                                    <li class="active">İletişim</li>
                                </ol>
                            </div>
                            <div class="back-home">
                                <a href="index.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> ANASAYFAYA DÖN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End page title -->
            <!-- Start keep in touch area -->
            <section class="keep-in-touch-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>İRTİBATTA <span>OLALIM</span></h2>
                                <img src="img/title-bottom.png" alt="">
                                <p>Sen de ihtiyaç duymadığın ürünlerini bağışlayabilirsin.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                    </div>
                    <div class="row keep-in-touch-therd-box">
                        <!-- Start single box -->
                        <div class="col-sm-4">
                            <div class="single-box text-center">
                                <i class="fa fa-map" aria-hidden="true"></i>
                                <h3>ADRES</h3>
                                <p>İstasyon Caddesi <br>Tuzla<br>İstanbul</p>
                            </div>
                        </div>
                        <!-- End single box -->
                        <!-- Start single box -->
                        <div class="col-sm-4">
                            <div class="single-box text-center">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3>BİZİ ARAYIN</h3>
                                <p>+90 234 56 78</p>
                            </div>
                        </div>
                        <!-- End single box -->
                        <!-- Start single box -->
                        <div class="col-sm-4">
                            <div class="single-box text-center">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h3>E-POSTA</h3>
                                <p>info@kardesimsin.com </p>
                            </div>
                        </div>
                        <!-- End single box -->
                    </div>
                </div>
            </section>
            <!-- End keep in touch area -->
            <!-- Start contact form area -->
            <section class="contact-form-area pb-60 pt-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>MERHABA <span>DE</span></h2>
                                <img src="img/title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="col-sm-12">
                            <div class="contact-form">
                                <form id="contact-form" method="POST" action="mail.php">
                                    <div class="form-fields">
                                        <label for="name">Adı</label>
                                        <input id="name" name="name" type="text" placeholder="Adınız" required>
                                    </div>
                                    <div class="form-fields">
                                        <label for="email">E-Posta</label>
                                        <input id="email" name="email" type="text" placeholder="E-Postanız" required>
                                    </div>
                                    <div class="form-fields last">
                                        <label for="phone">Telefon</label>
                                        <input id="phone" name="phone" type="text" placeholder="Telefonunuz" required>
                                    </div>
                                    <div class="message-fields">
                                        <label for="mess">Mesajınız</label>
                                        <textarea name="mess" id="mess" cols="30" rows="10" placeholder="Mesajınız"></textarea>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">Mesajını Gönder</button>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact form area -->
            <!-- Start google map -->
            <div class="google-map pb-90">
                <div id="googleMap"></div>
            </div>
            <!-- End google map -->
        
        </div>
        <!-- End main area -->
		      
      

        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(40.824582, 29.295706)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
@endsection
@include('footer')