
	
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="/pesan"><img width="100" height="100" src="{{url('img/logo.png')}}" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="\pesan#home">Home</a></li>
				          @if(Auth::user()->role == 'admin')
							<li><a href="\menu">Menu</a></li>
							<li><a href="\kasir">Kasir</a></li>
							<li><a href="\dapur">Dapur</a></li>
							<li><a href="\rekap">Rekap Penghasilan</a></li>
					      @elseif(Auth::user()->role == 'owner')
					      	<li><a href="\menu">Menu</a></li>
							<li><a href="\kasir">Kasir</a></li>
							<li><a href="\dapur">Dapur</a></li>
							<li><a href="\rekap">Rekap Penghasilan</a></li>
							<li class="menu-has-children"><a href="#">Admin</a>
					            <ul>
					              <li><a href="\admin">List Admin</a></li>
					              <li><a href="\admin\create">Tambah Admin</a></li>
					            </ul>
					        </li>
						  @else
				          	<li><a href="\pesan#menu">Menu</a></li>
				          @endif				          
				          <li><a href="\pesan#kontak">Contact</a></li>
				          <li><a href="\pesan#about">About</a></li>
				          @if(Auth::user()->role == 'user')				          
				          <li>
				          	<a href="\cart"><img src="{{url('img/icon/shop-cart.png')}}" alt="">Pesanan Saya </a>
				          </li>
				          @endif
				          	<li class="menu-has-children"><a href="#"><img src="{{url('img/icon/person.png')}}" alt="">{{ Auth::user()->name }}</a>
					            <ul>
					              <li><a href="\akun\{{ Auth::user()->id }}\edit">Ubah Profil</a></li>
					              <li>
							            <a href="{{ route('logout') }}" onclick="event.preventDefault();
			                              document.getElementById('logout-form').submit();">
											log-out
			                            </a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                            	@csrf
			                            </form>
						          </li>		
					            </ul>
					        </li>
				          
				          		          					          		          
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>

			<!-- #header -->
