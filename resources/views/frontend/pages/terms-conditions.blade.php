@extends('frontend.layouts.master')

@section('title','K ECOM || Terms and Conditions')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{ route('terms-conditions') }}">Terms and Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12 mb-5">
						<div class="about-content">
							<h1>Terms and Conditions</h1>
						</div>
					</div>
					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Terms and Conditions</h3>
							<p>Welcome to K ECOM! By accessing and using our website, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before using our site.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Acceptance of Terms:</h3>
							<p>By using this website, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Use of the Website:</h3>
							<p>You agree to use this website for lawful purposes only and in a manner consistent with all applicable local, state, national, and international laws and regulations.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Products and Services:</h3>
							<p>Product descriptions, prices, and availability are subject to change without notice. We reserve the right to modify or discontinue products or services at any time.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Ordering and Payment:</h3>
							<p>When you place an order on our website, you agree to provide accurate and complete information. Payment is required at the time of purchase, and all transactions are subject to our payment.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Shipping:</h3>
							<p>We strive to process and dispatch all orders promptly. Our standard delivery time is within two to three weeks from the date of order confirmation. Please note that delivery times may vary based on your location and other external factors. We will make our best effort to keep you informed of any delays.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Changes to Terms:</h3>
							<p>We reserve the right to update or modify these terms and conditions at any time without prior notice. It is your responsibility to review these terms periodically for changes.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Contact Information:</h3>
							<p>For questions or concerns about these terms and conditions, please contact us at support@kecomdistribution.com</p>
                        </div>
					</div>
					
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<!-- <div class="col-lg-3 col-md-6 col-12">
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
				</div> -->
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
