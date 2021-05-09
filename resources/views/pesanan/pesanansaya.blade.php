<head>
	@include('template.head')
</head>
<body>
<header id="header">
    @include('template.header')
</header>
@include('template.script')
        <!-- start banner Area -->
        <script>
        	swal({
			  icon: "success",
			  button: false;
			  timer : 1000;
			});
        </script>
            <section class="about-banner relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Pesanan Saya              
                            </h1>   
                            <p class="text-white link-nav">Silahkan screenshot page ini untuk pembayaran nanti</p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->

        <div class="container">
	        <div class="row">
	        	<div class="col-md-12 d-flex justify-content-center">
	                        <h3> Kode Pemesanan  :<b>{{$kd_pesan}}</b></h3><br>
	                        
	            </div>
	        	<div class="col-md-12 d-flex justify-content-center">
	            	<h4 class="price">Nama pemesan : <b>{{$user}}</b></h4>
	        	</div>
			</div>
			<!--<div class="row">{!! QrCode::size(100)->generate('$kd_pesan'); !!}	</div>	-->
			<div class="row">
	        	<div class="col-md-8">
					<table class="table table-hover" >
						<thead >
							<tr>
								<th>Menu</th>
						        <th>Jumlah</th>
						        <th>Harga</th>
						    </tr>
					    </thead>
					    @foreach ($items as $data )
							<tr>
							    <td>{{$data->name}}</td>
							    <td>{{$data->quantity}}</td>
							    <td>{{$data->price}}</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="col-md-4">
					<table class="table">
						<tr">
							<td>makanan yg di beli </td>
							<td>{{$totalbrg}}</td>
						</tr>
						<tr>
							<td>Total Bayar </td>
							<td>Rp. {{$totalbyr}}</td>
						</tr>
					</table>		
				</div>
			</div>		
		</div>
@include('template.footer')
</body> 