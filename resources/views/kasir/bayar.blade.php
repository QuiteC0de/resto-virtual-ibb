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
                                Kasir             
                            </h1>   
                            <p class="text-white link-nav"></p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-md-5">
		<!-- Card Rincian tagihan -->
		<div class="card">
			<div class="card-header d-flex justify-content-around align-items-center">
				<h3><b>{{$pembeli->kd_pesanan}}</b></h3>
			</div>
			<div class="card-header d-flex justify-content-around align-items-center">
				<h6><b>{{$pembeli->name}}</b></h6>
				<b>Pesanan: {{$pembeli->jenis_pesan}}</b>

			</div>
			<ul class="list-group list-group-flush">
				<div class="row">
					@forelse($data as $data)
					<div class="col-8">
						<li class="list-group-item d-flex justify-content-between align-items-center">
							{{$data->nama_menu}}
							<span class="badge badge-warning badge-pill">Rp.{{$data->harga_satuan}}({{$data->jml_menu}})</span>
						</li>
					</div>
					<div class="col-3">
						<li class="list-group-item d-flex justify-content-center align-items-center">
							<span class="badge badge-success badge-pill">Rp. {{$data->total_bayar}}</span>
						</li>
					</div>
					@empty
					@endforelse
				</div>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<strong>tanggal-transaksi</strong>
					<span class="badge badge-primary badge-pill">{{$data->tgl_pesan}}</span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<strong>Total Tagihan</strong>
					<span class="badge-md badge-danger badge-pill">Rp. {{$bayar}}</span>
				</li>
			</ul>
		</div>
		<!-- End Card Rincian tagihan -->
		</div>
	</div>

	<div class="row d-flex justify-content-center">
		<div class="col-md-5">
			<form method="post" action="/bayar">
				@csrf()
				<input type="hidden" name="kd_pesanan" value="{{$pembeli->kd_pesanan}}" id="">
				<input type="hidden" name="harga" value="{{$bayar}}" id="">
				<input type="text" class="form-control" placeholder="Masukan nominal pembayaran (Rp)" id="byr" name="bayar" id=""><br>
				<div class="d-flex justify-content-between">
					<a href="/kasir"><button class="genric-btn primary circle">Kembali</button></a>
					<button type="submit" class="genric-btn primary circle">Bayar</button>	
				</div>
			</form>
		</div>
	</div><br>

</div>
@include('template.script')
@include('template.footer')
</body>	