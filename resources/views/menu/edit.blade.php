<head>@include('template.head')</head>

<header id="header">
	@include('template.header')
</header>
<body>
		<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Edit Menu		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="menu.html"> Menus</a></p>
						</div>	
					</div>
				</div>
			</section><br>
		<!-- End banner Area -->
	
	<div class="container">		
		<form method="post" action="/menu/{{$data->id_menu}}" enctype="multipart/form-data">
			<div class="input-group mb-3 col-md-6">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text" id="inputGroupFileAddon01">Pilih gambar</span>
			  	</div>
			  	<div class="custom-file">
			    	<input type="file" value="{{$data->gambar}}" name="gambar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
			    	<label class="custom-file-label" for="inputGroupFile01">Gambar</label>
			  	</div>
			</div>
			<div class="form-group">
					<label for="nama">Nama Menu / Paket</label>
					<input id="nama" type="text" value="{{$data->nama_menu}}" name="nama_menu" class="form-control col-md-6" id=""><br>
					<label for="jenis">Jenis</label>
					<select id="jenis" name="jenis" class="form-control col-md-3">
					  	<option>Pilih</option>

					  	<option value="makanan" <?php if ($data->jenis=='makanan'): echo "SELECTED"; ?>	
					  	<?php endif ?>>Makanan</option>

					  	<option value="minuman" <?php if ($data->jenis=='minuman'): echo "SELECTED"; ?>	
					  	<?php endif ?>>Minuman</option>

					  	<option value="paket" <?php if ($data->jenis=='paket'): echo "SELECTED"; ?>	
					  	<?php endif ?>>Paket</option>
					</select>
			
				<label for="harga"> Harga Rp.</label>
				<input type="text" value="{{$data->harga}}" class="form-control col-md-3" id="harga" name="harga" id=""><br>
			
			    <label for="exampleFormControlTextarea1">Deskripsi Menu / Paket</label>
			    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->keterangan}}
			    </textarea>
			</div>
			@csrf
			<input type="hidden" name="_method" value="put" id="">
			<button type="submit" class="btn btn-outline-danger">Ubah</button></a>
		</form>
	</div>

@include('template.script')
@include('template.footer')
</body>


