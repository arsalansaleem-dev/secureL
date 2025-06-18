@extends('partials.app')
@section('content')

<div role="main" class="main">

	<div class="cta-banner py-5 text-white" style="background: url('{{ asset('assets/img/landing/build_bg.jpg') }}') no-repeat center center / cover;">
	  <div class="container">
	    <div class="row justify-content-center">
	      <div class="col-lg-8">

	        <div class="cta-box bg-primary bg-opacity-75 p-4 rounded shadow-lg">
	          <form class="simple_form new_public_search_record" id="new_public_search_record" data-remote="true" method="get" action="/search_instructor">
	            
	            <h2 class="text-center mb-3 text-white">Find a Driving Instructor</h2>
	            <p class="text-center mb-4 text-white-50">Check availability, pricing & bookings near you</p>

	            <div class="d-flex justify-content-center mb-3">
	              <div class="btn-group" role="group">
	                <input type="radio" class="btn-check" name="public_search_record[transmission]" id="auto" value="Auto" checked>
	                <label class="btn btn-outline-light" for="auto">Auto</label>

	                <input type="radio" class="btn-check" name="public_search_record[transmission]" id="manual" value="Manual">
	                <label class="btn btn-outline-light" for="manual">Manual</label>
	              </div>
	            </div>

	            <div class="mb-3">
	              <select class="form-select select2-name-field" id="public-search-record-suburb" name="public_search_record[suburb]" required>
	                <option value="">Enter your suburb</option>
	                <!-- Options dynamically populated -->
	              </select>
	            </div>

	            <div class="d-grid">
	              <button type="submit" class="btn btn-light fw-bold text-uppercase text-primary">Search</button>
	            </div>
	          </form>
	        </div>

	      </div>
	    </div>
	  </div>
	</div>

	
	<!-- steps to learn -->
	<div class="container py-5">
	  <div class="row align-items-start">
	    
	    <!-- Small Video Left -->
	    <div class="col-md-5 mb-4">
	      <div class="border rounded shadow-sm overflow-hidden" style="max-width: 100%; border-radius: 12px;">
	        <div class="ratio ratio-16x9">
	          <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="How We Work" allowfullscreen></iframe>
	        </div>
	      </div>
	    </div>

	    <!-- Steps Right -->
	    <div class="col-md-7">
	      <h3 class="fw-bold mb-4">How Secure Licence works</h3>

	      <div class="mb-4">
	        <h5 class="mb-1">1. Browse Our Trusted Driving Instructors</h5>
	        <p class="text-muted mb-0">Choose from a wide variety of instructors in your area. Check rating & reviews from real learners.</p>
	      </div>

	      <div class="mb-4">
	        <h5 class="mb-1">2. Book Lessons In Under 5 Mins</h5>
	        <p class="text-muted mb-0">Book online with instant confirmation. Easily manage your lesson schedule via our online dashboard.</p>
	      </div>

	      <div class="mb-4">
	        <h5 class="mb-1">3. Get Your Licence</h5>
	        <p class="text-muted mb-0">Let our trusted and verified instructors help you pass the test and gain independence.</p>
	      </div>
	     </div>
	    </div>
	  	<div class="col-lg-12 text-center">
			<a class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">Book driving lessons now  &gt;	</a>
		</div>
	</div>


	<!-- Driving test package -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<section class="section section-text-light section-background section-center border-top-0 h-200px h-lg-400px m-0" style="background-image: url('https://thumbs.dreamstime.com/b/tearing-up-l-plate-passing-driving-test-21534847.jpg');">
					<div class="container">
						<div class="row">
							<div class="col">

							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="col-lg-6 p-0">
				<section class="section section-default ps-4 pe-4 border-top-0 h-400px m-0 d-flex flex-column justify-content-center">
					<div class="row">
						<div class="col px-5">
						  <h3 class="fw-bold mb-4">Driving test package</h3>
						  <ul class="mb-0">
						    <li>Pick-up 1hr prior to test start time</li>
						    <li>45 min pre-test warm up</li>
						    <li>Use of instructor’s vehicle to sit the test</li>
						    <li>Drop-off after the test result is received</li>
						  </ul>
						  <a class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold mt-4">
						    Book Test Packages Now &gt;
						  </a>
						</div>

						
					</div>
				</section>
			</div>
		</div>
	</div>


	<!-- Book driving lessons with confidence -->
	<section style="padding: 0px; !important" class="section section-default border-0">
		<div class="container">
			<div class="row">
				<div class="col mt-5 mb-2">

					<h3 class="fw-bold mb-4">Book driving lessons with confidence</h3>
					<div class="row process my-5">
						<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
							<div class="process-step-circle">
								<strong class="process-step-circle-content"><i class="icons icon-user text-5 text-primary"></i></strong>
							</div>
							<div class="process-step-content">
								<h4 class="mb-1 text-5 font-weight-bold">Instructor ratings</h4>
								<p class="mb-0">Access peer reviews & find an instructor who has consistently provided a great learning experience.</p>
							</div>
						</div>
						<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
							<div class="process-step-circle">
								<strong class="process-step-circle-content"><i class="icons icon-layers text-5 text-primary"></i></strong>
							</div>
							<div class="process-step-content">
								<h4 class="mb-1 text-5 font-weight-bold">Accredited</h4>
								<p class="mb-0">We obtain up to date copies of relevant instructor accreditations & verify their working with children credentials.</p>
							</div>
						</div>
						<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
							<div class="process-step-circle">
								<strong class="process-step-circle-content"><i class="icons icon-screen-desktop text-5 text-primary"></i></strong>
							</div>
							<div class="process-step-content">
								<h4 class="mb-1 text-5 font-weight-bold">Vehicle safety</h4>
								<p class="mb-0">Gain access to instructor vehicle make, model, year & safety rating.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<!-- gift vouchers -->
	<section class="bg-light">
	  <div class="container">
	    <div class="row align-items-center">
	      
	      <!-- Image -->
	      <div class="col-md-6 mb-4 mb-md-0 text-center">
	        <img 
	          src="https://www.samanmal.lk/wp-content/uploads/2021/02/Samanmal_gift_vouchers.jpg"
	          alt="Gift Card Driving Lessons" 
	          class="img-fluid rounded shadow"
	          style="max-height: 500px;"
	        >
	      </div>

	      <!-- Content -->
	      <div class="col-md-6">
	        <h3 class="fw-bold mb-4">The Gift of Life long Skills</h3>
	        <div class="row mb-4">
	          
	          <div class="col-6 mb-3">
	            <div class="d-flex align-items-start">
	              <div class="me-3">
	                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0d6efd" class="bi bi-card-checklist" viewBox="0 0 16 16">
	                  <path d="M10.854 6.854a.5.5 0 0 0-.708-.708L9 7.293 8.354 6.646a.5.5 0 1 0-.708.708L8.293 8l-.647.646a.5.5 0 1 0 .708.708L9 8.707l.646.647a.5.5 0 0 0 .708-.708L9.707 8l.647-.646z"/>
	                  <path d="M14 4.5V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4.5H14zM14 3H2a1 1 0 0 0-1 1v.5h14V4a1 1 0 0 0-1-1z"/>
	                </svg>
	              </div>
	              <div>
	                <h5 class="mb-1">Pick a Voucher</h5>
	                <p class="mb-0">Choose the number of lessons you'd like to gift.</p>
	              </div>
	            </div>
	          </div>

	          <div class="col-6 mb-3">
	            <div class="d-flex align-items-start">
	              <div class="me-3">
	                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0d6efd" class="bi bi-gift" viewBox="0 0 16 16">
	                  <path d="M3 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 .5.5V7h-3V5.5zm4 0a.5.5 0 0 1 .5-.5H10a.5.5 0 0 1 .5.5V7h-3V5.5zm4 0a.5.5 0 0 1 .5-.5H14a.5.5 0 0 1 .5.5V7h-3V5.5z"/>
	                  <path d="M0 7h2v7a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7h2v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V7z"/>
	                  <path d="M8 4.5a1.5 1.5 0 1 0-3 0A1.5 1.5 0 0 0 8 4.5zM11 4.5a1.5 1.5 0 1 0-3 0A1.5 1.5 0 0 0 11 4.5z"/>
	                </svg>
	              </div>
	              <div>
	                <h5 class="mb-1">Send the Gift</h5>
	                <p class="mb-0">Enter recipient details and deliver instantly.</p>
	              </div>
	            </div>
	          </div>

	        </div>

	        <a href="{{ url('/driving-lessons/gift-voucher') }}" class="btn btn-primary btn-lg">
	          Buy a Gift Voucher
	          <i class="fas fa-angle-right ms-2"></i>
	        </a>
	      </div>
	    </div>
	  </div>
	</section>


	<!-- Ready for driving lessons? -->
	<section class="section">
		<div class="container">
			<div class="row pt-3">
				<div class="col">
					<h2 class="font-weight-semibold mb-0">Ready for driving lessons?</h2>
					<p class="lead font-weight-normal">Secure Licence connects learner drivers with the best driving schools</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="demo-medical-resources-detail.html" class="text-decoration-none">
						<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight d-block">
							<span class="thumb-info-side-image-wrapper">
								<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-2.jpg">
							</span>
							<span class="thumb-info-caption px-4 pb-3">
								<span class="thumb-info-caption-text p-xl">
									<h4 class="font-weight-semibold mb-1">Learner drivers</h4>
									<p class="text-3">Gain experience, prepare for your driving test and complete log book hours.</p>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="demo-medical-resources-detail.html" class="text-decoration-none">
						<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight d-block">
							<span class="thumb-info-side-image-wrapper">
								<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-3.jpg">
							</span>
							<span class="thumb-info-caption px-4 pb-3">
								<span class="thumb-info-caption-text p-xl">
									<h4 class="font-weight-semibold mb-1">Driving tests</h4>
									<p class="text-3">Book a test package which includes pick-up, a pre-test lesson, use of a car & drop off.</p>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="demo-medical-resources-detail.html" class="text-decoration-none">
						<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight d-block">
							<span class="thumb-info-side-image-wrapper">
								<img alt="" class="img-fluid" src="img/demos/medical/gallery/gallery-4.jpg">
							</span>
							<span class="thumb-info-caption px-4 pb-3">
								<span class="thumb-info-caption-text p-xl">
									<h4 class="font-weight-semibold mb-1">International conversions</h4>
									<p class="text-3">Convert your licence or simply build your confidence on Australian roads.</p>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="row pb-4">
				<div class="col-lg-12 text-center">
					<a class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">Book driving lessons now  >	</a>
				</div>
			</div>
		</div>
	</section>


	<!-- Top Frequently Asked Questions -->
	<div class="container" >
		<div class="col">
			<hr class="solid my-5">
			<h3 class="fw-bold mb-4">Top Frequently Asked Questions</h3>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="toggle toggle-primary" data-plugin-toggle="">
					<section class="toggle">
						<a class="toggle-title">How Much Do Driving Lessons Cost?</a>
						<div class="toggle-content" style="display: none;">
							<p>At Secure Licence, we have set driving lesson prices based on our extensive research of driving schools across Australia. Prices can vary depending on the suburb where you will be picked up and your preferred transmission type (automatic or manual).  Enter the information into our search tool to compare driving lesson prices. </p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">Do You Offer Any Special Lessons to Prepare for the Driving Test?</a>
						<div class="toggle-content">
							<p>The Secure Licence Test Package is available to all customers except those in ACT, SA or TAS. Some Secure Licence instructors require you book a lesson with them prior to booking a Test Package. Others will offer this as a standalone item. Find an instructor for a Test Package</p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">How Many Driving Lessons Do I Need?</a>
						<div class="toggle-content">
							<p>These are general guidelines — your actual needs may vary based on progress and comfort level.</p>
						</div>
					</section>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="toggle toggle-primary" data-plugin-toggle="">
					<section class="toggle">
						<a class="toggle-title">Can I Take Refresher Driving Lessons?</a>
						<div class="toggle-content" style="display: none;">
							<p>Of course! Many existing driver’s licence holders book driving lessons to refresh their skills or build up some more confidence, especially if they have spent some time not driving. We recommend about 3 to 5 hours of driving instruction in cases like this.</p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">Can I Change Instructors?</a>
						<div class="toggle-content">
							<p>Absolutely. At Secure Licence, we know that having a rapport with your driving instructor makes for a more comfortable – and therefore effective – learning experience. If you want to book a lesson with another driving instructor, just follow the same steps. From your dashboard select 'find another instructor' and then choose the instructor you'd like. Check their availability and book online. Take your driving lesson. It's that simple.</p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">Is Secure Licence a Driving School?</a>
						<div class="toggle-content">
							<p>Secure Licence is like a driving school only better, allowing you to access the services of a driving school with market leading convenience, choice and flexibility.

							Secure Licence has partnered with over 1,000 driving schools across Sydney, Melbourne, Brisbane and Perth to create a single destination for learner drivers to view, compare and book driving instructors online 24/7.</p>
						</div>
					</section>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="toggle toggle-primary" data-plugin-toggle="">
					<section class="toggle">
						<a class="toggle-title">Can I Book Driving Lessons to Learn How to Drive Manual?</a>
						<div class="toggle-content" style="display: none;">
							<p>Absolutely.  Driving a manual transmission vehicle is becoming less and less common, but it’s not yet a “lost art”. Whether you are learning manual to be more versatile or because it’s a more engaging (and fun) drive, we recommend booking 3 to 5 hours of driving instruction to start.</p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">Where does Secure Licence offer driving lessons?</a>
						<div class="toggle-content">
							<p>You can find instructors and book driving lessons across Australia.  Use the search box to find instructors in your postcode or browse instructors in:</p>
						</div>
					</section>
					<section class="toggle">
						<a class="toggle-title">Is Secure Licence a Driving School?</a>
						<div class="toggle-content">
							<p>Secure Licence is like a driving school only better, allowing you to access the services of a driving school with market leading convenience, choice and flexibility.

							Secure Licence has partnered with over 1,000 driving schools across Sydney, Melbourne, Brisbane and Perth to create a single destination for learner drivers to view, compare and book driving instructors online 24/7.</p>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>	

	<!-- Why choose Secure Licence?  -->
	<div style="background: #f4f4f4;" class="container pt-2">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-8 text-center">
				<div class="overflow-hidden mb-3">
					<h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">Why choose Secure Licence?</h3>
				</div>
				<p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">Unlike a typical driving school, Secure Licence is an Australian platform that allows learner drivers & parents to find, compare and book verified driving instructors online. The platform brings transparency, choice and efficiency to the selection of a driving instructor and the ongoing management of driving lessons.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row justify-content-center process custom-process-style-1 my-5">
					<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
						<div class="process-step-circle">
							<strong class="process-step-circle-content text-color-primary">1000+</strong>
						</div>
						<div class="process-step-content px-lg-4">
							<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">Driving Instructors</h4>
							<!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p> -->
						</div>
					</div>
					<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
						<div class="process-step-circle">
							<strong class="process-step-circle-content text-color-primary">3700+</strong>
						</div>
						<div class="process-step-content px-lg-4">
							<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">Suburbs Serviced</h4>
							<!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p> -->
						</div>
					</div>
					<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
						<div class="process-step-circle">
							<strong class="process-step-circle-content text-color-primary">#1</strong>
						</div>
						<div class="process-step-content px-lg-4">
							<h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">Online Bookings</h4>
							<!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p> -->
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- advantages of secure license -->
	<div class="container pb-5">
		<div class="row align-items-center py-5">
			<div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
				<div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0" style="animation-delay: 0ms;">
					<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Let’s Work Together</span></span>
				</div>
				<div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
					<h2 class="text-9 font-weight-semibold line-height-1 mb-4">The Secure Licence advantage</h2>
				</div>
				<div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
					<p>Unlike a typical driving school, Secure Licence is an Australian platform that allows learner drivers & parents to find, compare and book verified driving instructors online. The platform brings transparency, choice and efficiency to the selection of a driving instructor and the ongoing management of driving lessons.</p>
				</div>
			</div>
			<div class="col-lg-6 p-relative">
				<div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
					<div class="card card-default box-shadow-8 border-radius-2 bg-light">
						<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingOne">
							<h4 class="card-title m-0">
								<a class="accordion-toggle bg-transparent  text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsOne" aria-expanded="false" aria-controls="collapseWhyChooseUsOne">
									Book driving lessons online in under 60 seconds
								</a>
							</h4>
						</div>
						<div id="collapseWhyChooseUsOne" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingOne" data-bs-parent="#accordionWhyChooseUs" style="">
							<div class="card-body pt-0">
								<p class="mb-0">Booking driving lessons through Secure Licence is a quick and hassle free process that gives you all the choice and control. Why deal with traditional Driving Schools over the phone or by email when you can manage your driving instructor choice & book driving lessons yourself anywhere, and at any time through our secure online platform?</p>
							</div>
						</div>
					</div>
					<div class="card card-default box-shadow-8 border-radius-2 bg-light">
						<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingTwo">
							<h4 class="card-title m-0">
								<a class="accordion-toggle bg-transparent  text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsTwo" aria-expanded="false" aria-controls="collapseWhyChooseUsTwo">
									More control over your bookings
								</a>
							</h4>
						</div>
						<div id="collapseWhyChooseUsTwo" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingTwo" data-bs-parent="#accordionWhyChooseUs">
							<div class="card-body pt-0">
								<p class="mb-0">From the moment you enter your pickup suburb you have more control over your driving lesson compared to traditional driving schools. Choose, compare, and book your driving instructor and preferred vehicletransmission based on in-depth driving instructor profiles, including ratings and reviews from learners just like you. The best part? Bookings are made in real-time, so you can book your driving lesson instantly and at a convenient time.</p>
							</div>
						</div>
					</div>
					<div class="card card-default box-shadow-8 border-radius-2 bg-light">
						<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingThree">
							<h4 class="card-title m-0">
								<a class="accordion-toggle bg-transparent  text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsThree" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
									Your online dashboard
								</a>
							</h4>
						</div>
						<div id="collapseWhyChooseUsThree" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingThree" data-bs-parent="#accordionWhyChooseUs">
							<div class="card-body pt-0">
								<p class="mb-0">Manage your preferences, existing bookings & future driving lesson bookings from your secure online account. Reschedule bookings up to 24 hrs prior to the lesson start time - perfect for those with an unpredictable schedule! Want to try a different driving instructor? You can change your driving instructor at the push of a button, no questions asked.</p>
							</div>
						</div>
					</div>
					<div class="card card-default box-shadow-8 border-radius-2 bg-light">
						<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFour">
							<h4 class="card-title m-0">
								<a class="accordion-toggle bg-transparent  text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsFour" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
									The widest range of driving instructors
								</a>
							</h4>
						</div>
						<div id="collapseWhyChooseUsFour" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingFour" data-bs-parent="#accordionWhyChooseUs">
							<div class="card-body pt-0">
								<p class="mb-0">Secure Licence provides access to more than 1000+ fully qualified driving instructors across Sydney, Melbourne, Brisbane, Perth, Adelaide, Hobart, Gold Coast, Sunshine Coast, Newcastle, Central Coast, Geelong, Toowoomba, Wollongong, Cairns, Coffs Harbour, Bendigo, Canberra. All driving instructors available through Secure Licence are required to have a current, valid clearance for working with children, as well as having their vehicles equipped with dual control pedals for added safety. With a driving instructor booked through Secure Licence, you can be sure you’re in good hands.</p>
							</div>
						</div>
					</div>
					<div class="card card-default box-shadow-8 border-radius-2 bg-light">
						<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFive">
							<h4 class="card-title m-0">
								<a class="accordion-toggle bg-transparent  text-color-dark font-weight-semi-bold collapsed"
								   data-bs-toggle="collapse"
								   data-bs-target="#collapseWhyChooseUsFive"
								   aria-expanded="false"
								   aria-controls="collapseWhyChooseUsFive">
									Servicing YOUR area
								</a>
							</h4>
						</div>
						<div id="collapseWhyChooseUsFive"
						     class="collapse"
						     aria-labelledby="collapseWhyChooseUsHeadingFive"
						     data-bs-parent="#accordionWhyChooseUs">
							<div class="card-body pt-0">
								<p class="mb-0">
									Thanks to our comprehensive driving instructor service area coverage, you can choose your pickup location from anywhere in Sydney, Melbourne, Brisbane, Adelaide, Perth, Hobart, Gold Coast, Sunshine Coast, Newcastle, Central Coast, Geelong, Toowoomba, Wollongong, Cairns, Coffs Harbour, Bendigo, Canberra or the surrounding areas. Secure Licence now proudly services over 3700+ suburbs across NSW, VIC, QLD, SA, TAS, WA and ACT, and will continue to grow.
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

</div>

			
@endsection
