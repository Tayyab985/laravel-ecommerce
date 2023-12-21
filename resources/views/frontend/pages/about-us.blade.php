@extends('frontend.layouts.master')

@section('title','K ECOM || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
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
							<h1>About US</h1>
						</div>
					</div>
					<div class="col-lg-12 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>About Us</h3>
							<p>Welcome to K ECOM, where your online shopping experience meets a world of quality and excellence. We're a team of passionate individuals dedicated to providing you with top-notch products and exceptional service.</p>
							<!-- <div class="button">
								<!-- <a href="{{route('blog')}}" class="btn">Our Blog</a> -->
								<!--<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div> -->
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Our Story:</h3>
							<p>K ECOM was born out of a shared vision to create an online marketplace that goes beyond transactions. We set out to build a platform where customers could discover unique and high-quality products while enjoying a seamless shopping journey.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Mission and Values:</h3>
							<p>Our mission is simple yet powerful: to empower our customers to make informed choices and bring joy into their lives through carefully curated products. We are committed to maintaining the highest standards of quality, integrity, and customer satisfaction in everything we do.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Quality Assurance:</h3>
							<p>We take pride in our rigorous selection process, ensuring that each product featured on our platform meets our stringent quality standards. From sourcing to delivery, we prioritize excellence to provide you with a shopping experience you can trust.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Customer-Centric Approach:</h3>
							<p>At the heart of our business is a deep appreciation for our customers. We understand that your satisfaction is the foundation of our success. Our dedicated customer support team is always ready to assist you, ensuring that every interaction with K ECOM is positive and memorable.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Community Engagement:</h3>
							<p>Beyond business, we believe in giving back to the community. K ECOM is committed to supporting social and environmental initiatives that make a positive impact. Together with our customers, we aim to contribute to a brighter and more sustainable future.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Join Us on the Journey:</h3>
							<p>Whether you're a first-time visitor or a returning customer, we invite you to join us on this exciting journey. Explore our diverse range of products, connect with our community, and experience the K ECOM difference.</p>
						</div>
					</div>

					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h3>Contact Information:</h3>
							<p>Have a question or just want to say hello? Reach out to us at support@kecomdistribution.com. We love hearing from you!</p>
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
