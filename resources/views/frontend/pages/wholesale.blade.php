@extends('frontend.layouts.master')

@section('title','E-SHOP || Whole Sale Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">WHOLESALE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>WHOLESALE</h4>
									<h3>Write About Your Comapany</h3>
								</div>
								
								<form class="form-contact form contact_form" method="post" action="{{route('wholesale.register.submit')}}" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Name<span>*</span></label>
												<input name="name" id="name" type="text" placeholder="Enter your name">
												@error('name')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" id="email" placeholder="Enter email address">
												@error('name')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Password<span>*</span></label>
												<input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
												@error('password')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Confirm Password<span>*</span></label>
												<input type="password" name="password_confirmation" placeholder="" required="required" value="{{old('password_confirmation')}}">
												@error('password_confirmation')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input id="phone" name="phone" type="number" placeholder="Enter your phone">
												@error('name')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Company<span>*</span></label>
												<input name="company" type="text" id="company" placeholder="Enter Company">
												@error('company')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Tax ID<span>*</span></label>
												<input name="tax_id" type="text" id="taxid" placeholder="Enter Tax Id">
												@error('tax_id')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Address</label><span>*</span></label>
												<input name="address" type="text" id="address" placeholder="Enter Address">
												@error('address')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Suite/Apt<span>*</span></label>
												<input name="apartment" type="text" id="apartment" placeholder="Enter Suite or Apartment">
												@error('apartment')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>City<span>*</span></label>
												<input name="city" type="text" id="city" placeholder="Enter City">
												@error('city')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Country<span>*</span></label>
												<input name="country" type="text" id="country" placeholder="Enter Country">
												@error('country')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>State<span>*</span></label>
												<input name="state" type="text" id="state" placeholder="Enter State">
												@error('state')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Zip<span>*</span></label>
												<input name="zip" type="text" id="zip" placeholder="Enter Zip">
												@error('zip')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Upload Document</label>
												<input name="documents" type="file" id="documents">
												@error('documents')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Upload EIN</label>
												<input name="ein" type="file" id="ein">
												@error('ein')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Comments<span>*</span></label>
												<textarea name="comments" id="comments" cols="30" rows="9" placeholder="Enter Comments"></textarea>
												@error('comments')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Register</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
    </div>
</section>
@endsection