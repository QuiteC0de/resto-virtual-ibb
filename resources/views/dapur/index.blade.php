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
                                Dapur               
                            </h1>   
                            <p class="text-white link-nav">List Pesanan yang harus di kerjakan</p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->

        <div class="container">
        	@if(count($menu) == 0)
				@include('component.empty')
	        @else
	        	<div class="table-responsive-sm">
		        	<table class="table">
		        		<thead class="thead-dark">
		        			<tr class="col-md-12">
		        				<th>Kode</th>
		        				<th>Menu</th>
		        				<th>Jumlah</th>
		        				<th>Posisi</th>
		        				<th>deskripsi</th>
		        				<th></th>
		        			</tr>
		        		</thead>
					@foreach ($menu as $menu)
		        		<tr>
		        			<td>{{$menu->kd_pesanan}}</td>
		        			<td>{{$menu->nama_menu}}</td>
		        			<td>{{$menu->jml_menu}}</td>
		        			<td>{{$menu->jenis_pesan}}</td>
		        			<td>{{$menu->ket}}</td>
		        			<td>
		        				<form action="/dapur/{{$menu->id_pesanan}}" method="post">
									@csrf
									<input type="hidden" name="_method" value="put">
									<input type="hidden" name="kd" value="{{$menu->kd_pesanan}}">
									<button class="btn btn-outline-danger" type="submit">Kerjakan</button>	
								</form>	
		        			</td>
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>
	        @endif
        </div>

@include('template.script')
@include('template.footer')
</body> 