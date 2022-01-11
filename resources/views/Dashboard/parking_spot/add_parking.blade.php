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
								<h4>Parking Spot</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Parking Spot</li>
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
							<p class="mb-30">Adding Parking Spot Details</p>
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
					<form method="POST" action="{{ route('post_parking_spot_information') }}" enctype="multipart/form-data">
						@csrf

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
              <label class="col-sm-12 col-md-2 col-form-label">Floor level</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="floor_level">
                  <option selected="">Choose...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="Under Ground">Under Ground</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Floor height</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="floor_height">
                  <option selected="">Choose...</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="17">17</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Vehicle type</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="vehicle_type">
                  <option selected="">Choose...</option>
                  <option value="Truck">Truck</option>
                  <option value="Motor bike">Motor bike</option>
                  <option value="Pickup">Pickup</option>
                  <option value="Privet car">Privet car</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
                <textarea rows="4" cols="50" name="description" class="form-control">
                  Enter text here...</textarea>
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
