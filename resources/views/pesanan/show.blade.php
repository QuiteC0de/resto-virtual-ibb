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
								Pesan				
							</h1>	
							<p class="text-white link-nav"><a href="/pesan">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pesan"> Pesan</a></p>
						</div>	
					</div>
				</div>
			</section><br>
		<!-- End banner Area -->		
	
	<div class="container">
		<div class="row ">
			<div class="col-md-3">
				<img class="rounded " src="{{asset('/img/'.$data->jenis.'/'.$data->gambar)}}" alt="Menu image" height="250" width="250"><br>
			</div>
			<div class="col-md-8">
				<form action="/cart" method="post">	
					@csrf
					<h4>{{$data->nama_menu}}</h4>
					<h4 class="price">Rp.{{$data->harga}}</h4>
					<p>{{$data->keterangan}}</p>
					<div class="mt-10">
						<input type="number" min="1" max="20" name="jumlah" placeholder="Jumlah" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required class="form-control">
					</div>

					<div class="mt-10">
						<textarea class="form-control" name="keterangan" placeholder="deskripsikan pesanan anda atau biarkan kosong" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" ></textarea>
					</div>
					<div class="mt-10">
					<button class="genric-btn primary circle" type="submit">Tambah Ke keranjang<span class="lnr lnr-arrow-right"></span></button>
					</div>
					
					<input type="hidden" name="id" value="{{$data->id_menu}}" id=""><br>
					<input type="hidden" name="nama" value="{{$data->nama_menu}}" id=""><br>
					<input type="hidden" name="harga" value="{{$data->harga}}" id=""><br>
				</form>	
			</div>
		</div>
	</div><br>

@include('template.script')
@include('template.footer')
</body>	