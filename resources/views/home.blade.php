@extends("layout")

@section("content")

<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade">
								<img src="{{ URL::to('/') }}/pub/img/slides/slider-bg-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption tp-resizeme"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="right"
								    data-y="top"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="{{ URL::to('/') }}/pub/img/slides/slider-bg-2.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme"
									data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="left"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="{{ URL::to('/') }}/pub/img/slides/slider-bg-3.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7"
								    data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image" 
								    data-x="-500"
								    data-y="-700"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="{{ URL::to('/') }}/pub/img/slides/slide-parallax-porto-symbol.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-dark font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">We Provide Solution</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="{{ URL::to('/') }}/pub/img/slides/slide-blue-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-dark negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">Camiloplas Manufacturing</div>

								<div class="tp-caption font-weight-dark"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']"
									style="color: black;">The Best Manufacturing Solution for Your F&B Business</div>

							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="/pub/img/slides/slider-bg-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-170','-170','-170','-350']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">WE ARE THE BEST MANUFACTURER</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['170','170','170','350']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">THE BEST MANUFACTURER FOR YOUR F&B BUSINESS</div>

								<div class="tp-caption font-weight-light ws-normal text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['60','60','60','105']"
									data-width="['530','530','530','1100']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']"
									style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, CAMILOPLAS is a huge success in the one of best Plasitc Manufacturer</div>

							</li>
							<li class="slide-overlay slide-overlay-primary" data-transition="fade">
								<img src="/pub/img/slides/slider-bg-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-145','-145','-145','-320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-dark font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE ONLY BEST PLASTIC PRODUCTS, WE ARE</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['145','145','145','320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ URL::to('/') }}/pub/img/slides/slide-title-border.png" alt=""></div>

									<div class="tp-caption font-weight-extra-bold text-color-dark negative-ls-1"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">CAMILOPLAS</div>

								
								<div class="tp-caption font-weight-light text-color-dark"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['85','85','85','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']">The best choice for your F&B Business</div>

							</li>
						</ul>
					</div>
				</div>



<section class="section section-with-shape-divider overflow-hidden border-0 m-0" style="background-image: url(/pub/img/demos/industry-factory/backgrounds/background-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center 70px;">
					<div class="shape-divider shape-divider-bottom" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container custom-container-absolute-centered-x">
						<div class="row justify-content-end">
							<div class="col-auto position-relative">
								<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/hero-1.jpg" class="img-fluid box-shadow-4 position-relative bottom-10 right-0 d-none d-sm-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
							</div>
						</div>
					</div>
					<div class="container-fluid px-0 mb-5">
						<div class="row">
							<div class="col-sm-9 col-md-8 col-lg-7 col-xl-4 text-center text-sm-right z-index-0 px-5 px-sm-0 mt-5 mt-sm-0 pt-4 pt-sm-0">
								<div class="position-relative bg-color-grey p-5">
									<div class="spacer my-5 py-2 d-none d-sm-block"></div>
									<div class="overflow-hidden pt-sm-5 mt-sm-5">
										<h1 class="font-weight-semibold text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">PT CAMILOPLAS JAYA MAKMUR</h1>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-semibold text-6 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
											<strong class="font-weight-extra-bold custom-font-size-2">Plastic Manufacturer</strong>
										</h2>
									</div>
									<p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Pabrik Plastik Terbaik yang telah melayani
Industri Besar Indonesia</p>
									<a href="/about" class="btn custom-svg-btn-style-1 text-color-hover-primary mb-sm-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
										<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
											<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
										</svg>
										<t style="color:black" >GET STARTED </t>
									</a>
									<div class="custom-hero-sub-images-style-1 text-left">
										<div class="custom-hero-sub-images-shadow"></div>
										<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/hero-2.jpg" class="img-fluid appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="700" alt="" />
									</div>
									<div class="spacer py-2"></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4 my-5">
					<div class="row">
						<div class="col-lg-6">
							<div class="overflow-hidden mb-2">
								<h2 class="font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The Highest Quality</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">THE BEST PLASTIC MANUFACTURING</h3>
							</div>
							<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Pabrik Plastik Terbaik yang telah melayani Industri Besar Indonesia</p>
						</div>
						<div class="col-lg-6">
							<p class="pt-3 pb-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Camiloplas sudah berdiri selama 20 tahun dalam bidang manufakturing plackaging plastik dan sudah memiliki sertifikasi internasional dan nasional. Kami sudah memiliki sertifikasi internasional dan nasional (ISO).
…
Kami telah melayani konsumen dalam negeri dan luar negeri sebagai supplier utama mereka</p>
							<a href="/about" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none pl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="650">
								READ MORE 
								<svg class="ml-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
								</svg>
							</a>
						</div>
					</div>
				</div>

				<section class="section section-with-shape-divider border-0 z-index-2 pb-0 m-0" style="background-image: url(/pub/img/bg-product.jpg);" >
					<div class="shape-divider shape-divider-reverse-xy" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container pt-3 mt-5" >
						<div class="row justify-content-center mb-5" >
							<div class="col-lg-9 col-xl-8 text-center">
								<div class="overflow-hidden">
									<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">WHAT WE DO</h2>
								</div>
								<div class="overflow-hidden mb-3">
									<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" style="color:white;">A Selection Of Procedures We Serve</h3>
								</div>
								<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="color:white;">Berikut ini merupakan berbagai jenis produk yang kami sediakan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="owl-carousel stage-margin stage-margin-md nav-style-1 nav-svg-arrows-1 nav-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 20, 'stagePadding': 75}">
									<div>
										<a href="demo-industry-factory-services-detail.html" class="text-decoration-none">
											<div class="thumb-info custom-thumb-info-style-1 mb-3" style="background-image:url();">
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/icons/blister.png" class="img-fluid" alt="" />
												</div>
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/categories/category-1.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</a>
										<h4  class="text-center mb-0"><a  style="color:white;" href="demo-industry-factory-services-detail.html" class=" text-color-hover-primary text-decoration-none text-2">Blister</a></h4>
									</div>
									<div>
										<a href="demo-industry-factory-services-detail.html" class="text-decoration-none">
											<div class="thumb-info custom-thumb-info-style-1 mb-3">
											<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/icons/tray.png" class="img-fluid" alt="" />
												</div>
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/categories/category-2.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</a>
										<h4 class="text-center mb-0"><a href="demo-industry-factory-services-detail.html"style="color:white;"  class=" text-color-hover-primary text-decoration-none text-2">Tray</a></h4>
									</div>
									<div>
										<a href="demo-industry-factory-services-detail.html" class="text-decoration-none">
											<div class="thumb-info custom-thumb-info-style-1 mb-3">
											<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/icons/cup-bowl.png" class="img-fluid" alt="" />
												</div>
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/categories/category-3.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</a>
										<h4 class="text-center mb-0"><a href="demo-industry-factory-services-detail.html" style="color:white;" class="text-color-hover-primary text-decoration-none text-2">Cup Bowl</a></h4>
									</div>
									<div>
										<a href="demo-industry-factory-services-detail.html" class="text-decoration-none">
											<div class="thumb-info custom-thumb-info-style-1 mb-3">
											<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/icons/lid.png" class="img-fluid" alt="" />
												</div>
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/categories/category-4.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</a>
										<h4 class="text-center mb-0"><a href="demo-industry-factory-services-detail.html" style="color:white;" class=" text-color-hover-primary text-decoration-none text-2">Lid</a></h4>
									</div>
									<div>
										<a href="demo-industry-factory-services-detail.html" class="text-decoration-none">
											<div class="thumb-info custom-thumb-info-style-1 mb-3">
											<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/icons/bottle-jar.png" class="img-fluid" alt="" />
												</div>
												<div class="thumb-info-wrapper">
													<img src="{{ URL::to('/') }}/pub/img/demos/industry-factory/categories/category-5.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</a>
										<h4 class="text-center mb-0"><a href="demo-industry-factory-services-detail.html" style="color:white;" class=" text-color-hover-primary text-decoration-none text-2">Bottle Jar</a></h4>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="section custom-section-shape-background border-0 m-0">
					<div class="custom-shape-divider z-index-1" style="height: 129px;"></div>
					<div class="container position-relative z-index-3 mt-3 mb-5">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pr-lg-5 mb-4 mb-lg-0">
								<img src="img/demos/industry-factory/generic/generic-1.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
							</div>
							<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">SPECIAL SERVICES</h2>
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Other Industries</h3>
								<p class="custom-font-secondary custom-font-size-1 line-height-7 pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod.</p>
								<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
									<li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
									<li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
									<li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
									<li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nubh</li>
								</ul>
								<a href="demo-industry-factory-services-detail.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none pl-0">
									READ MORE 
									<svg class="ml-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-height-3 border-0 m-0" style="background-image: url(/pub/img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container py-3">
						<div class="row align-items-center justify-content-center text-center text-lg-left">
							<div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
								<h2 class="text-color-light font-weight-bold custom-positive-ls-5px mb-0">Custom Steel Pipe For Your Next Project</h2>
							</div>
							<div class="col-lg-3 text-lg-right">
								<a href="demo-industry-factory-contact.html" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-light text-color-light text-color-hover-dark">
									<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
										<polygon fill="transparent" stroke="#FFF" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
									</svg>
									GET A QUOTE
								</a>
							</div>
						</div>
					</div>
				</section> -->

				<div class="container pt-2">
					<div class="row justify-content-center pt-4 mt-5">
						<div class="col-lg-8 text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HOW WE WORK</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Top Working Process</h3>
							</div>
							<!-- <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p> -->
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="row justify-content-center process custom-process-style-1 my-5">
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">1</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">RAW MATERIALS</h4>
										<p class="mb-0">We understand the importance of high quality ingredient to produce the high quality product. We only use the best and highest quality of the raw material to produce your plastic packaging.</p>
									</div>
								</div>
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">2</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">EXTRUSION</h4>
										<p class="mb-0">the first step to make your plastic packaging is to take all the raw material we need and put into extruder machine. the machine will melt the raw material and shape them to become a plastic sheet. The plastic sheet will be rolled once it is finish.</p>
									</div>
								</div>
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">3</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">THERMOFORMING</h4>
										<p class="mb-0"> the thermoforming machine will heat up the plastic sheet and the pressed them to your desired shape. It will be cut and stacked before came out from the machine. the output from this process is your food graded plastic packaging with the best quality.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			
				<div class="container py-5 my-4">
					<div class="row align-items-center">
						<div class="col-lg-6 pr-lg-5 mb-4 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-1 box-shadow-3">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/1Gz77Mb_VFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="overflow-hidden">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">THE ADVANTAGE</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Our Facilities</h3>
							</div>
							<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Camiloplas membuat berbagai macam produk plastik seperti polystyrene, PET, PVC, dan lainnya.
</p>
							<!-- <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p> -->
						</div>
					</div>
				</div>

				<section class="section section-with-shape-divider border-0 m-0" style="background-color:#1e73be;">
					<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#1e73be" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container py-5 my-5">
						<div class="row">
							<div class="col">
								<div class="overflow-hidden">
									<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Certificate</h2>
								</div>
								<div class="overflow-hidden pb-3 mb-3">
									<h3 class="font-weight-bold text-transform-none text-9 pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">WE ARE ISO CERTIFIED</h3>
								</div>
							</div>
						</div>
						<div class="row mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<article>
									<div class="card border-0 border-radius-0 box-shadow-1">
										<div class="card-body p-4 z-index-1">
											<a href="demo-industry-factory-blog-post.html">
												<img class="card-img-top border-radius-0" src="{{ URL::to('/') }}/pub/img/sertifikat1.png" alt="Card Image">
											</a>
											<p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
												<time pubdate datetime="2020-01-10">10 Jan 2020</time> 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												3 Comments 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												John Doe
											</p>
											<div class="card-body p-0">
												<h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none" >Food Safety System Certification 22000</a></h4>
												<!-- <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p> -->
												<!-- <a href="demo-industry-factory-blog-post.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none pl-0">
													READ MORE 
													<svg class="ml-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
													</svg>
												</a> -->
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-lg-6">
								<article>
									<div class="card border-0 border-radius-0 box-shadow-1">
										<div class="card-body p-4 z-index-1">
											<a href="demo-industry-factory-blog-post.html">
												<img class="card-img-top border-radius-0" src="/pub/img/sertifikat2.png" alt="Card Image">
											</a>
											<p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
												<time pubdate datetime="2020-01-10">10 Jan 2020</time> 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												3 Comments 
												<span class="opacity-3 d-inline-block px-2">|</span> 
												John Doe
											</p>
											<div class="card-body p-0">
												<h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none">Design, Development, and Manufacture of Vacuum and Thermoforming Plastic for Food Industry</a></h4>
												<!-- <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
												<a href="demo-industry-factory-blog-post.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none pl-0">
													READ MORE 
													<svg class="ml-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
													</svg>
												</a> -->
											</div>
										</div>
									</div>
								</article>
							</div>									
						</div>
					</div>
				</section>

				<div class="container py-5 my-5"">
					<div class="row">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Contact Us</h2>
							<div class="row">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Address</h3>
											<div class="d-flex flex-column flex-md-row">
												<ul class="list list-unstyled pr-5 mb-md-0">
													<li class="mb-0"><strong class="text-color-dark custom-font-size-3">Factory</strong></li>
													<li class="mb-0">Jl. Aria Jaya Santika No. 18 RT 02 Kp Seglog Desa Pasir Bolang Tigaraksa Tangerang 15720</li>
													
												</ul>
											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row py-3 my-4">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-mail.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary position-relative bottom-5'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2">E-mail Address</h3>
											<ul class="list list-unstyled pr-5 mb-0">
												<li class="mb-0"><a href="mailto:email@domain.com" class="text-color-default text-color-hover-primary text-decoration-none">andreas@camiloplas.com</a></li>
												<li class="mb-0"><a href="mailto:email@domain.com" class="text-color-default text-color-hover-primary text-decoration-none">yonathan@camiloplas.com</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2">Phone Number</h3>
											<ul class="list list-unstyled pr-5 mb-0">
												<li class="mb-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary text-decoration-none">(800) 123-4567</a></li>
												<li class="mb-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary text-decoration-none">(800) 123-9876</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Send Us a Message</h2>
							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email Address" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" placeholder="Your Message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid text-color-light text-uppercase" data-loading-text="Loading...">
											<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
												<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
											</svg>
										<t style="color:black;">	Send Message</t>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

                @endsection

                @section("footer")

@endsection
