 <!-- Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->

@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
@section('header')

       
<div class="main-area">
        	<!-- Start header -->
        	<header>
        		<!-- Start header top -->
        		<div class="header-top">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-5 col-lg-6">
	                            <div class="top-social">
	                                <nav>
	                                	<ul>
		                                    <li><a href="#">Bizi Takip Edin:</a></li>
		                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
	                        <div class="col-md-7 col-lg-6">
	                            <div class="call-to-action">
	                                <nav>
	                                	<ul>
		                                	<li><a href="mailto:ourmail@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i> E-Posta: info@kardesimsin.com</a></li>
		                                	<li><a href="tel:+5881234567"><i class="fa fa-phone" aria-hidden="true"></i> Telefon: (+90) 534 123 4567</a></li>
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
        				</div>
        			</div>
        		</div>
        		<!-- End header top -->
        		<!-- Start main menu area -->
        		<div class="main-menu-area" id="sticker">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-3 col-xs-12">
        						<div class="logo ptb-32">
        							<a href="{{route('anasayfa')}}">
        								<img src="/assets/img/logo1.png" alt="">
        							</a>
        						</div>
        					</div>
        					<div class="col-md-9 col-xs-12">
        						<div class="main-menu">
        							<nav>
        								<ul>
        									<li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
											<li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
											<li><a href="{{route('blogindex')}}">Blog</a></li>

        									<li><a href="">Kategoriler</a>
                                                <ul class="drop-menu">
                                                    <li><a href="{{route('ihtiyaclarindex')}}">İhtiyaçlar</a></li>
                                                    <li><a href="{{route('dersindex')}}">Dersler</a></li>
                                                   </ul>
                                            </li>
                                            <li><a href="{{route('iletisim')}}">İletişim</a></li> 
        								</ul>
        							</nav>
								</div>

									@if (Auth::check())
									<div class="donate-button ptb-32">
								<button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown" >
								{{ Auth::user()->name }}
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									@if(Auth()->user()->type=='admin')
								<div class=" px-4 py-2  drop-text text-muted">
                                {{ __('Admin İşlemleri') }}
                            </div>

                            <x-jet-dropdown-link  href="{{ route('ihtiyacindex') }}" class="text-drop">
                                {{ __('Panele Git') }}
							</x-jet-dropdown-link>
							<div class=" px-4 py-2  drop-text text-muted">
                                {{ __('Kategori İşlemleri') }}
                            </div>

                            <x-jet-dropdown-link  href="{{ route('ihtiyaclist') }}" class="text-drop">
                                {{ __('Kategorileri Yönet') }}
							</x-jet-dropdown-link>
							@endif
								<div class="px-4 py-2  drop-text text-muted">
                                {{ __('Hesabını Yönet') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}"  class="text-drop">
                                {{ __('Profil') }}
                            </x-jet-dropdown-link>
								<form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" class="text-drop"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                   Çıkış Yap
                                </x-jet-dropdown-link>
                            </form>

								</div>
        						
								</div>
									@else
									<div class="donate-button ptb-32">
        							<a class="waves-effect waves-light" href="{{route('register')}}">Üye Ol</a>
								</div>									
								@endif
        						
        					</div>
        				</div>
        			</div>
        		</div>
@endsection

@stack('modals')

@livewireScripts