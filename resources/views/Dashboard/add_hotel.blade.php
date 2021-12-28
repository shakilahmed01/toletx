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
								<h4>Hotel</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Hotel</li>
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
							<p class="mb-30">Adding hotel Details</p>
						</div>

					</div>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Hotel Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Hotel Name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Location</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Location" type="text">
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Price" type="numeric">
							</div>
						</div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Guest Count</label>
              <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                  <option selected="">Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label class="weight-600">Availibility</label>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Wifi</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Bathroom</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">CCTV</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Lift/Elevator</label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Furnished</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Security</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Parking</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
							<label>Photo</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>



					</form>

				</div>
				<!-- Default Basic Forms End -->



			<div class="collapse collapse-box" id="form-grid-form" >

			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
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
