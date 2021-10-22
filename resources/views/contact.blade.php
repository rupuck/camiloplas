@extends("layout")

@section("content")

<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold text-8 mb-0">Contact Us</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb breadcrumb-light d-block text-md-right text-4 mb-0">
									<li><a href="demo-industry-factory.html" class="text-decoration-none">Home</a></li>
									<li class="active">Contact</li>
								</ul>
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
