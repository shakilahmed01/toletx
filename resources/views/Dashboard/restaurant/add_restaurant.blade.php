<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ToletX</title>

@include('Dashboard.css.css')
</head>
<body>
@include('Dashboard.preloader.preloader')

@include('Dashboard.header.header')

@include('Dashboard.menubar.menubar')

@include('Dashboard.menubar.leftsidemenu')

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Resort</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Resort</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Fillup the Input Fields</h4>
							<p class="mb-30">Adding Resort Details</p>
						</div>

					</div>
					@if ($message = Session::get('success'))
												<div class="alert alert-success alert-block">
														<button type="button" class="close" data-dismiss="alert">×</button>
																<strong>{{ $message }}</strong>
												</div>
												@endif

												@if (count($errors) > 0)
														<div class="alert alert-danger">
																<strong>Whoops!</strong> There were some problems with your input.
																<ul>
																		@foreach ($errors->all() as $error)
																				<li>{{ $error }}</li>
																		@endforeach
																</ul>
														</div>
												@endif
					<form method="POST" action="{{ route('post_restuarant_information') }}" enctype="multipart/form-data">
						@csrf

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Resort Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="resort_name" placeholder="Resort Name" type="text">
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Address</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="address" placeholder="Location" type="text">
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="price" placeholder="Price" type="numeric">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Room Size</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="room_size">
                  <option selected="">Choose...</option>
                  <option value="24sqr">24sqr</option>
                  <option value="36sqr">36sqr</option>
                  <option value="18sqr">18sqr</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Star Rating</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="star_rating">
                  <option selected="">Choose...</option>
                  <option value="5 star">5</option>
                  <option value="3 star">3</option>
                  <option value="2 star">2</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Room Type</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="room_type">
                  <option selected="">Choose...</option>
                  <option value="Master bed">Master bed</option>
                  <option value="Single bed">Single bed</option>
                  <option value="Classic">Classic</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label class="weight-600">Availibility</label>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="wifi" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Wifi</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="attached_toilet" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Attached Toilet</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="utilities" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Utilities</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="attached_varanda" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Attached Varanda</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="hot_water" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Hot Water</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="lift" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Lift/Elevator</label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="furnished" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Furnished</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="ac" class="custom-control-input" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">Ac</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="cable_tv" class="custom-control-input" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">Cable tv</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="laundry" class="custom-control-input" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">Laundry</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="parking" class="custom-control-input" id="customCheck11">
                    <label class="custom-control-label" for="customCheck11">Parking</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="dining" class="custom-control-input" id="customCheck12">
                    <label class="custom-control-label" for="customCheck12">Dining Facilities</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="sports" class="custom-control-input" id="customCheck13">
                    <label class="custom-control-label" for="customCheck13">Sports Facilities</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="gym" class="custom-control-input" id="customCheck14">
                    <label class="custom-control-label" for="customCheck14">Gym</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="spa" class="custom-control-input" id="customCheck15">
                    <label class="custom-control-label" for="customCheck15">Spa</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" name="swimmingpool" class="custom-control-input" id="customCheck16">
                    <label class="custom-control-label" for="customCheck16">Swimming Pool</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
							<label>Photo</label>
							<div class="custom-file">
								<input type="file" name="photo" value="" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>



					</form>

				</div>
				<!-- Default Basic Forms End -->



			<div class="collapse collapse-box" id="form-grid-form" >

			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://github.com/dropways" target="_blank">Codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('Dashboard/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('Dashboard/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>
