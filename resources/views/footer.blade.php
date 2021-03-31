@section('footer')
<footer>
                <div class="footer-top pt-50 pb-50">
                    <div class="footer-widget-area">
                        <div class="container">
                            <div class="row">
                                <!-- Start footer widget -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="footer-widget widget-one">
                                        <div class="footer-widget-title">
                                            <h3>Hakkımızda</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>Kardeşimsim bir paylaşım platformudur. </p>
                                        </div>
                                        <div class="widget-contact-content">
                                            <h3>İletişime geçin!</h3>
                                            <a href="tel:+0012345678">Phone :  +(00) 1234-5678</a>
                                            <a href="mailto:info@granttheme.com">E-Posta :  info@kardesimsin.com</a>
                                            <p>Adres :  İstasyon Caddesi Tuzla/İstanbul.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-md-6 col-lg-2">
                                    <div class="footer-widget widget-two">
                                      
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-md-6 col-lg-2">
                                    <div class="footer-widget widget-two">
                                        <div class="footer-widget-title">
                                            <h3>SAYFALAR</h3>
                                        </div>
                                        <nav>
                                        <ul>
                                                <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                                                <li><a href="{{route('hakkimizda')}}">Blog</a></li>
                                                <li><a href="{{route('ihtiyaclarindex')}}">İhtiyaçlar</a></li>
                                                <li><a href="{{route('dersindex')}}">Dersler</a></li>
                                                <li><a href="{{route('iletisim')}}">İletişim</a></li>
                                               
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="footer-widget widget-four">
                                        <div class="footer-widget-title">
                                            <h3>BÜLTEN</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>En güncel etkinliklerden haberdar olmak için.</p>
                                        </div>
                                        <div class="newslater">
                                            <form id="mc-form" class="mc-form form">
                                                <input id="mc-email" type="email" autocomplete="off"  placeholder="E-Posta">
                                                <button id="mc-submit" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                            </form>
                                            <!-- mailchimp-alerts Start -->
                                            <div class="mailchimp-alerts text-centre">
                                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                            </div><!-- mailchimp-alerts end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="copyright">
                                    <p>Copyright 2021 Tüm Hakları Saklıdır. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <nav>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                         
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="" id="back-top"></div>
                    </div>
                </div>
            </footer>
@endsection