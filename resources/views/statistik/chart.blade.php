<head>@include('template.head')</head>
<body>
@include('template.script')
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
                                Data Statistik      
                            </h1>   
                            <p class="text-white link-nav">Data keuntungan dan lain lain dapat dilihat disini</p>
                        </div>  
                    </div>
                </div>
            </section><br>
        <!-- End banner Area -->

        <!--start chart area-->
	        <div class="container">
	        	<div class="row">

	        		<div class="col-md-12 sm-4">
	        			<h3>Keuntungan Hari Ini <br><b> RP. {{$rp}}</b> </h3>
	        			<canvas id="myChart2">
			        	</canvas>
	        		</div>
	        	</div><br>

	        	<div class="row">
	        		<div class="col-md-12 sm-4">
	        			<h3>Grafik Keuntungan Selama Setahun</h3>
			        	<canvas id="myChart">
			        	</canvas>
	        		</div>
	        	</div>
	        	
	        </div>
        <!--end chart area-->
		
        <script type="text/javascript">
        	var ctx = document.getElementById("myChart").getContext("2d");
        	var chart = new Chart(ctx, {
			    // The type of chart we want to create
			    type: 'line',

			    // The data for our dataset
			    data: {
					
			        labels: [
						<?php
							$month = [
								"",
								"Jan",
								"Feb",
								"Mar",
								"Apr",
								"Mei",
								"Jun",
								"Jul",
								"Agu",
								"Sep",
								"Okt",
								"Nov",
								"Des",
							];

							foreach($chart as $data){
				        		echo '"'.$month[$data->bulan].'"'.',';
			        		}
						?>
			        ],
			        datasets: [{
			            label: "Keuntungan Diperoleh: Rp.",
			            backgroundColor: [
						    "#096ff5",
						    ],
						hoverBackgroundColor: [
						      "#86ee4f",
						    ],
			            data: [
							<?php
								foreach($chart as $data){
									echo $data->jumlah.',';
								}
							?>
			            ],
			        }]
			    },

			    // Configuration options go here
			    options: {}
			});
        </script>

        <script type="text/javascript">
        	var ctx = document.getElementById("myChart2").getContext("2d");
        	var chart = new Chart(ctx, {
			    // The type of chart we want to create
			    type: 'pie',

			    // The data for our dataset
			    data: {
			        labels: [
			        	<?php 
			        		foreach ($untung as $label) {
			        			echo '"'.$label->nama_menu.'",';
			        		}
			        	 ?>
			        ],
			        datasets: [{
			            label: "Keuntungan Diperoleh Hari Ini",
			            backgroundColor: [
						    "#41fbca",
						    "#e56e14",
						    "#1c0bdc",
						    "#a4b319",
						    "#c6066a",
						    "#ebcd79",
						    "#86ee4f",
						    "#36b419",
						    "#0bdbff",
						    "#4b652d",
						    "#f08ce0",
						    "#57645b",
						    "#4920d3",
						    "#9df78f",
						    "#6dbd2d",
						    "#a2e2fd",
						    "#35499a",
						    "#4d37d1",
						    "#a7eae7",
						    ],
						hoverBackgroundColor: [
						      "#41fbca",
						      "#e56e14",
						      "#1c0bdc",
						      "#a4b319",
						      "#c6066a",
						      "#ebcd79",
						      "#86ee4f",
						      "#36b419",
						      "#0bdbff",
						      "#4b652d",
						      "#f08ce0",
						      "#57645b",
						      "#4920d3",
						      "#9df78f",
						      "#6dbd2d",
						      "#a2e2fd",
						      "#35499a",
						      "#4d37d1",
						      "#a7eae7",
						    ],
			            data: [
			            	<?php  
				        	foreach($untung as $jml){
				        		echo $jml->jml.',';
			        		}
		        		?>
			            ],
			        }]
			    },

			    // Configuration options go here
			    options: {}
			});
        </script>
@include('template.footer')
</body> 