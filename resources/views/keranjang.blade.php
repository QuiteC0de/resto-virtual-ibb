<head>@include('template.head')</head>
<body>
<header id="header">
    @include('template.header')
    <style>
    .scrolldiv {
        height:450px;
        overflow-y: scroll;
        margin-bottom: 30px;
    }
    </style>
</header>
    @include('template.script')
    <script>
		@if($errors->has('jenis'))	
				swal("X", "{{$errors->first('jenis')}}", "error");
		@endif
	</script>
        <!-- start banner Area -->
            <section class="about-banner relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Keranjang Pesanan               
                            </h1>   
                            <p class="text-white link-nav"><a href="/pesan">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/cart"> Keranjang</a></p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->

            <div class="container">
                <div class="row ">
                    <div class="col-md-12 d-flex justify-content-center">
                        <a href="/pesan#menu"><button class="genric-btn primary circle">Tambah Menu Lainnya</button></a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="scrolldiv col-md-8" >
                        <ul class="list-group">
                            @forelse($item as $data)
                                @include('component.cart-item-list', ['data'=>$data])
                            @empty
                                @include('component.empty')
                            @endforelse
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Menu Di Pesan
                                <span class="badge badge-primary badge-pill">{{$jumlah}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total item
                                <span class="badge badge-primary badge-pill">{{$totalbrg}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Harga total
                                <span class="badge badge-success badge-pill">Rp. {{$totalbyr}}</span>
                            </li>
                            <li class="list-group-item">
                                <form method="post" action="/pesan">
                                    @csrf
                                        <label for="jenis">Pilih Tempat (Di bungkus atau Posisi Meja)</label>
                                        <select class="form-control col-md-12" name="jenis" id="jenis" required>
                                            <option disabled selected>Pilih</option>
                                            <option value="Dibungkus">Di Bungkus</option>
                                            <option value="meja 1">Meja 1</option>
                                            <option value="meja 2">Meja 2</option>
                                            <option value="meja 3">Meja 3</option>
                                            <option value="meja 4">Meja 4</option>
                                        </select><br>
                                    <button class="genric-btn primary circle" type="submit" >Pesan Sekarang<span class="lnr lnr-arrow-right"></span></button> 
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
@include('template.footer')
</body> 