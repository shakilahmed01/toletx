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
								<h4>Rooftop</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Rooftop</li>
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
							<p class="mb-30">Updating Rooftop Details</p>
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
					<form method="POST" action="{{ route('rooftop_update') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
              <input type="hidden" name="id" value="{{$list->id}}">

						</div>

            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Address</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$list->address}}" name="address" placeholder="Location" type="text">
							</div>
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="price" value="{{$list->price}}" placeholder="Price" type="numeric">
							</div>
						</div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Floor Area</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="" name="floor_area" value="{{$list->floor_area}}">
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label class="weight-600">Availibility</label>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="parking" value="{{$list->parking}}" class="form-control" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Parking</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="protection" value="{{$list->protection}}" class="form-control" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Protection</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="utilities" value="{{$list->utilities}}" class="form-control" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Utilities</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="lift" value="{{$list->lift}}" class="form-control" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Lift/Elevator</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="interior_condition" value="{{$list->interior_condition}}" class="form-control" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Interior Condition</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="shed" value="{{$list->shed}}" class="form-control" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Shed</label>
                  </div>


              </div>
            </div>
            <div class="form-group form-float">
                          <div class="card">

                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/rooftops') }}/{{ $list->photo }}" alt="">
                             </div>
                         </div>
                        </div>

						<button class="btn btn-primary" type="submit">Update</button>



					</form>

				</div>
				<!-- Default Basic Forms End -->



			<div class="collapse collapse-box" id="form-grid-form" >

			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">Codetree</a>
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
