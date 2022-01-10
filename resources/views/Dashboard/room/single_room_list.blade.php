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
								<h4>Room</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Room</li>
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
							<p class="mb-30">Updating Room Details</p>
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
					<form method="POST" action="{{ route('room_update') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
              <input type="hidden" name="id" value="{{$list->id}}">
							<label class="col-sm-12 col-md-2 col-form-label">Hotel Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" value="{{$list->hotel_name}}" name="hotel_name" placeholder="Hotel Name">
							</div>
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
              <label class="col-sm-12 col-md-2 col-form-label">Room Size</label>
              <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" placeholder="Guest Count" name="room_size" value="{{$list->room_size}}">
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label class="weight-600">Availibility</label>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="wifi" value="{{$list->wifi}}" class="form-control" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Wifi</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="attached_toilet" value="{{$list->attached_toilet}}" class="form-control" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Attached toilet</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="utilities" value="{{$list->utilities}}" class="form-control" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Utilities</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="lift" value="{{$list->lift}}" class="form-control" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Lift/Elevator</label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="furnished" value="{{$list->furnished}}" class="form-control" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Furnished</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="hot_water" value="{{$list->hot_water}}" class="form-control" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Hot Water</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="ac" value="{{$list->ac}}" class="form-control" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Ac </label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="laundry" value="{{$list->laundry}}" class="form-control" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">Laundry </label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="cable_tv" value="{{$list->cable_tv}}" class="form-control" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">Cable Tv </label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="attached_varanda" value="{{$list->attached_varanda}}" class="form-control" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">Attached Varanda</label>
                  </div>
									<div class="custom-control custom-checkbox mb-5">
                    <input type="text" name="parking" value="{{$list->parking}}" class="form-control" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">Parking</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group form-float">
                          <div class="card">

                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/rooms') }}/{{ $list->photo }}" alt="">
                             </div>
                         </div>
                        </div>

						<button class="btn btn-primary" type="submit">Submit</button>



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
