<head>@include('template.head')</head>
<body>
<header id="header">
	@include('template.header')
</header>
		<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Menu				
							</h1>	
							<p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Menu</a></p>
						</div>	
					</div>
				</div>
			</section>
		<!-- End banner Area -->			

			<!-- Start menu-area Area -->
            <section id="menu" class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Menu Yang Kami Sajikan</h1>
								<p>Jangan lupa pilih jenis ikannya di etalase depan ya..!!</p>
								<a href="/menu/create"><button class="btn-outline-danger btn-lg">Tambah Menu Baru</button></a>
							</div>
						</div>
					</div>	

                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">Semua</li>
                        <li data-filter=".makanan">Makanan</li>
                        <li data-filter=".minuman">Minuman</li>
                        <li data-filter=".paket">Paket</li>
                    </ul>
                    
                    <div class="filters-content">
                        <div class="row grid">

                        	@foreach($menu as $data)
							<div class="col-md-6 all {{$data->jenis}}">								
								<div class="single-menu">
									<div class="row">
										<img class=" col-md-4 rounded-circle" width="100" height="100" src="{{asset('/img/'.$data->jenis.'/'.$data->gambar)}}" alt="">
										<div class="col-md-8">
											<div class="title-wrap d-flex justify-content-between">
												<h4>{{$data->nama_menu}}</h4>
												<h4 class="price">Rp.{{$data->harga}}</h4>
											</div>			
												<p>
													{{$data->keterangan}}
												</p>		
												<div class="d-flex ">
													<a href="/menu/{{$data->id_menu}}/edit"><button class="btn btn-outline-danger">Edit</button></a>
													<form action="/menu/{{ $data->id_menu }}" method="post">
														<input type="hidden" name="_method" value="delete">
														<button type="submit" class="btn btn-outline-danger">Hapus</button></a>
														@csrf
													</form>							
												</div>
										</div>
									</div>
								</div>					                               
						    </div>      
						@endforeach              
                        </div>
                    </div>
                    
                </div>
            </section>


@include('template.script')
@include('template.footer')
</body>
