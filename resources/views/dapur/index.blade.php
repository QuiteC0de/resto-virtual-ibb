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
			<div class="row mb-3">
			@forelse ($menu as $data)
				@include('component.dapur-task-list')
			@empty
				@include('component.empty')
			@endforelse
			</div>
        </div>

@include('template.script')
@include('template.footer')
</body> 