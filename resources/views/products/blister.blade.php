@extends("layout")

@section("content")

<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold text-8 mb-0">Products</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb breadcrumb-light d-block text-md-right text-4 mb-0">
									<li><a href="demo-industry-factory.html" class="text-decoration-none">Home</a></li>
									<li class="active">Products</li>
									<li class="active">Blister</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-with-shape-divider border-0 pb-2 pb-lg-5 m-0">
					<div class="shape-divider shape-divider-bottom" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container pt-3 pb-5 mb-5">
						<div class="row mb-lg-4">
							<div class="col">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Our Product</h2>
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Blister</h3>
								<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Contoh dari produk blister yang kami produksi</p>
							</div>
						</div>
						<div class="row justify-content-center">
						<img src="{{ URL::to('/') }}/pub/img//1product/blister/bli 001.jpg" style="width: 250px; margin: 25px; height: auto;" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 002.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 003.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 004.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 005.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 006.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 007.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
						<img src="{{ URL::to('/') }}/pub/img/1product/blister/bli 008.jpg" style="width: 250px; margin: 25px; height: auto;"class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />

						</div>
					</div>
				</section>

				




@endsection

@section("footer")

@endsection
