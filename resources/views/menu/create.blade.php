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
								Tambah Menu / Paket Menu		
							</h1>	
							<p class="text-white link-nav"><a href="/pesan">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/menu"> Menus</a></p>
						</div>	
					</div>
				</div>
			</section><br>
		<!-- End banner Area -->
	
	<div class="container">		
		<form method="post" action="/menu" enctype="multipart/form-data">
			<!--<div class="input-group mb-3 col-md-6">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text" id="inputGroupFileAddon01">Pilih gambar</span>
			  	</div>
			  	<div class="custom-file">
			    	<input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
			    	<label class="custom-file-label" for="inputGroupFile01">Gambar</label>
			  	</div>
			</div>-->
			<div class="form-group">
			    <label for="exampleFormControlFile1">Pilih Gambar (max 2mb)</label>
			    <input type="file" name="gambar" class="form-control-file" required id="exampleFormControlFile1">
			</div>
			<div class="form-group">
					<label for="nama">Nama Menu/ Nama Paket</label>
					<input id="nama" type="text" name="nama_menu" class="form-control col-md-6" id=""><br>
					<label for="jenis">Jenis</label>
					<select id="jenis" name="jenis" class="form-control col-md-3">
					  	<option>Pilih</option>
					  	<option value="makanan">Makanan</option>
					  	<option value="minuman">Minuman</option>
					  	<option value="paket">Paket</option>
					</select>
			
				<label for="harga"> Harga Rp.</label>
				<input type="text" class="form-control col-md-3" id="harga" name="harga" id=""><br>
			
			    <label for="exampleFormControlTextarea1">Deskripsi Menu / Paket</label>
			    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			@csrf
			<button type="submit" class="btn btn-outline-danger">Tambah</button></a>
		</form>
	</div>

@include('template.script')
<script type="text/javascript">
    function previewImage(input) {
         
        if (input.files && input.files[0]) {
            var fileReader = new FileReader();
            var imageFile = input.files[0];
             
            if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
                fileReader.readAsDataURL(imageFile);
                 
                fileReader.onload = function (e) {
                    $('#preview-image').attr('src', e.target.result);
                }
            }
            else {
                alert("your file is not image");
            }
        }
    }
 
    $("[name='input-image']").change(function(){
        previewImage(this);
    });
</script>
@include('template.footer')
</body>
