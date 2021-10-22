@extends("layout")

@section("content")

<section class="page-header page-header-modern page-header-background page-header-background-sm m-0" style="background-image: url(img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold text-8 mb-0">Career</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb breadcrumb-light d-block text-md-right text-4 mb-0">
									<li><a href="demo-industry-factory.html" class="text-decoration-none">Home</a></li>
									<li class="active">Career</li>
								</ul>
							</div>
						</div>
					</div>
				</section>		
		
				<div class="container py-5 my-5"">
					
					<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Find Your Oportunity</h2>
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
									<select name="fromwhere" id="fromwhere" maxlength="100" class="form-control" name="name" placeholder="Dari mana anda mengetahui" required>
									<option disabled selected value> -- Dari mana anda mengetahui kami? -- </option>
	
									<option value="Kerabat/Saudara">Kerabat/Saudara</option>
										<option value="Mesin Pencari Internet">Mesin Pencari Internet</option>
										<option value="Iklan Online / Offline">Iklan Online / Offline</option>
										<option value="Lainnya">Lainnya</option>
										</select>

									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" value="" data-msg-required="Mohon mengisi kemampuan anda"  maxlength="100" class="form-control" name="email" placeholder="Apa Saja Kemampuan Anda?" required>
									</div>
								</div>
								Jelaskan secara singkat tentang anda, kami akan hubungi anda jika sesuai dengan kriteria yang kami cari

								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Mohon mengisi tentang diri anda." rows="6" class="form-control" name="message" placeholder="Deskripsi tentang anda" required></textarea>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid text-color-light text-uppercase" data-loading-text="Loading...">
											<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
												<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
											</svg>
										<t style="color:black;">	Submit</t>
										</button>
									</div>
								</div>
							</form>
				
				</div>

                @endsection

                @section("footer")

@endsection
