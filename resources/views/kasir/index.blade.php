<head>@include('template.head')
</head>
<body>
<header id="header">
    @include('template.header')
</header>
@include('template.script')

        <!-- start banner Area -->
            <section class="about-banner relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Kasir             
                            </h1>   
                            <p class="text-white link-nav">List Pesanan Yang Belum Di Bayar</p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->
<script>
	function myFunc(){
		var i = document.getElementById("kd").value;
		var url = "/kasir/"+i;
		window.location.href=url;
	}
</script>
@if(Session::get('pesan'))
	<script>
		swal("", "{{Session::get('pesan')}}", "info");
	</script>
@endif
        <div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-12">
					<div class="row d-flex justify-content-center" >
						<label for="kd">Masukan Kode Pemesanan yang akan di bayar </label>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<input class="form-control" type="text" name="kd_pesanan" id="kd"><br>
					<button onclick="myFunc()" class="btn btn-primary"> Cari </button>
				</div>
			</div><br>

			<div class="row card-deck d-flex justify-content-center">
				@forelse($data as $data)
					@include('component.kasir-que-list', ['data'=>$data])
				@empty
					@include('component.empty')
				@endforelse
			</div>
        	
		</div>
@include('template.footer')
</body>			