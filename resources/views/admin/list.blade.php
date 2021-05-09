<head>@include('template.head')
</head>
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
                                Admin             
                            </h1>   
                            <p class="text-white link-nav">List Admin Yang terdaftar</p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->

        <div class="container">
        	<div class="table-responsive-sm">
				<table class="table">
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th></th>
					</tr>
				@foreach($data as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>
							<form action="/admin/{{$data->id}}" method="post">
								@csrf
	                                <input type="hidden" name="hps" value="" id="">
	                                <input type="hidden" name="_method" value="delete" id="">
	                                <button type="submit" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                        </form>
						</td>
					</tr>
				@endforeach
				</table>
			</div>
		</div>
@include('template.script')
@include('template.footer')
</body>			