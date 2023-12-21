@extends('frontend.layouts.master')

@section('title','K ECOM || Return Policy')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{ route('return-policy') }}">Return Policy</a></li>
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
							<h1>Return Policy</h1>
						</div>
					</div>
					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Return Policy:</h3>
							<p>Welcome to K ECOM, where your satisfaction is our top priority. We appreciate your trust in us for your online shopping needs. Before finalizing your order, we encourage you to thoroughly review all the items in your cart to ensure they meet your expectations. Once an order is placed, please note that it cannot be canceled, returned, or refunded under any circumstances. All sales are final.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Our Commitment to Quality:</h3>
							<p>At K ECOM, we are committed to delivering top-notch products that meet the highest standards of quality. We carefully source and curate our inventory to provide you with a seamless shopping experience. To maintain this commitment, we ask our customers to carefully consider their purchase decisions before proceeding to checkout.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Verification of Items:</h3>
							<p>We understand that sometimes online shopping can be challenging, and we want to make sure you receive exactly what you expect. Take a moment to inspect and verify all items in your order before confirming your purchase. This simple step ensures that you are fully satisfied with your selection.</p>
                        </div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Customer Support:</h3>
							<p>For any questions, concerns, or assistance with your order, our friendly customer support team is here to help. You can reach out to us via email at support@kecomdistribution.com. Your satisfaction is our priority, and we are committed to ensuring you have a positive shopping experience with K ECOM.</p>
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
