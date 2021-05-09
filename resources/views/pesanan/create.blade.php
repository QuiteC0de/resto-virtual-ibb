<head>@include('template.head')</head>
<body>
<header id="header">
	@include('template.header')

</header>
<body>
@include('template.script')
	<script>
		@if(Session::get('pesan')=='berhasil')	
				swal("Selamat!", "Password Berhasil Diubah", "success")
		@elseif(Session::get('pesan')=='gagal')
				swal("Password Salah" ,  "Password Gagal di ubah!" ,  "error")
		@elseif(Session::get('pesan'))
				swal("Selamat!", "{{Session::get('pesan')}}", "success")
		@elseif(Session::get('add')=='success')
				swal("","Di tambahkan Ke keranjang!", "success");
		@elseif($errors->has('jumlah'))	
				swal("X", "{{$errors->first('jumlah')}}", "error");
		@endif
	</script>

		<!-- start banner Area -->
			<section id="home" class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h1 class="text-white">Ikan Bakar Banyumas?</h1>
							<p class="text-white">
								Ikannya Gurih, Sambalnya Nagih !!
							</p>
							<a href="#menu" class="primary-btn text-uppercase">Cek Menu Kita</a>
						</div>
					</div>
				</div>					
			</section>
		<!-- End banner Area -->

		<!-- Start home-about Area -->
			<section class="home-about-area section-gap" id="about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Tentang Kami</h1>
							<p>
								Ikan bakar banyumas Adalah Sebuah Restoran Yang menjual Beraneka ragam olahan hidangan ikan, seperti gurame dll yang disajikan dengan sambal special.
								Selain Ikan, Kamipun menyediakan Menu lain seperti ayam bakar/ goreng special banyumas
							</p>
							<a href="#menu" class="primary-btn">Lihat Semua Menu</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
		<!-- End home-about Area -->			
			
		<!-- Start menu-area Area -->
            <section class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Menu Yang Kami Sajikan</h1>
								<p>Jangan lupa pilih jenis ikannya di etalase depan ya..!!</p>
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

                        	@forelse($pesan as $data)
								@include('component.menu-card', ['data'=>$data])
							@empty
								@include('component.empty')
							@endforelse
                        </div>
                    </div>
                    
                </div>
            </section>
        <!-- End menu-area Area -->

        <!-- Start contact-page Area -->
			<section class="contact-page-area section-gap" id="kontak">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Jl Soekarno hatta 590, Bandung</h5>
									<p>
										Metro Indah Mall Blok H-36
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>0813-8619-4926</h5>
									<p>Setiap Senin -Sabtu Pukul 11am - 9 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>ikan.banyumas@gmail.com</h5>
									<p>Kirim Saran & Kritik yg membangun kapan saja!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

@include('template.footer')
</body>