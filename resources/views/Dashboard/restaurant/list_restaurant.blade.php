
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>toletx</title>

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
								<h4>Resort Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Resort</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" id="datetime" href="#" role="button" data-toggle="dropdown">

								</a>
                <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                </script>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">List Table</h4>

						</div>

					</div>
					<table id="tblStocks" class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">Resort Name</th>
                <th scope="col">Address</th>
                <th scope="col">Asking Rent/Cost + Service Charge</th>
                <th scope="col">Room Size</th>
                <th scope="col">Room Type</th>
                <th scope="col">Utilities</th>
                <th scope="col">Attached Toilet</th>
                <th scope="col">Attached Varanda </th>
								<th scope="col">Hot water</th>
                <th scope="col">AC</th>
								<th scope="col">Furnished</th>
								<th scope="col">WiFi</th>
								<th scope="col">Cable TV</th>
								<th scope="col">Laundry</th>
                <th scope="col">Dining Facilities</th>
                <th scope="col">Sports Facilities</th>
                <th scope="col">Gym</th>
								<th scope="col">Spa</th>
                <th scope="col">Parking</th>
                <th scope="col">Swimming Pool</th>
                <th scope="col">Stair/Lift</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
              @foreach($lists as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>

                <td>{{$list->resort_name}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->room_size}}</td>
                <td>{{$list->room_type}}</td>
                <td>{{$list->utilities}}</td>
                <td>{{$list->attached_toilet}}</td>
                <td>{{$list->attached_varanda}}</td>
                <td>{{$list->hot_water}}</td>
                <td>{{$list->ac}}</td>
                <td>{{$list->furnished}}</td>
								<td>{{$list->wifi}}</td>
								<td>{{$list->cable_tv}}</td>
								<td>{{$list->laundry}}</td>
                <td>{{$list->dining}}</td>
                <td>{{$list->sports}}</td>
                <td>{{$list->gym}}</td>
                <td>{{$list->spa}}</td>
                <td>{{$list->parking}}</td>
                <td>{{$list->swimmingpool}}</td>
                <td>{{$list->lift}}</td>


                <td>
                <img src="{{ asset('uploads/restaurants') }}/{{ $list->photo }}" alt="">
                </td>
                <td>
                  <a href="{{ url('/restuarant/edit/') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
                  <hr>
                  <a href="{{ url('restuarant/delete') }}/{{ $list->id }}" onclick="confirmAction()" class=" btn-sm btn-danger">Delete</a>

                </td>
              </tr>
          @endforeach

						</tbody>
					</table>

      	</div>
				<!-- basic table  End -->

				<!-- Trashed basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Trashed Table</h4>

						</div>

					</div>
					<table id="tblStocks"  class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">Resort Name</th>
                <th scope="col">Address</th>
                <th scope="col">Asking Rent/Cost + Service Charge</th>
                <th scope="col">Room Size</th>
                <th scope="col">Room Type</th>
                <th scope="col">Utilities</th>
                <th scope="col">Attached Toilet</th>
                <th scope="col">Attached Varanda </th>
								<th scope="col">Hot water</th>
                <th scope="col">AC</th>
								<th scope="col">Furnished</th>
								<th scope="col">WiFi</th>
								<th scope="col">Cable TV</th>
								<th scope="col">Laundry</th>
                <th scope="col">Dining Facilities</th>
                <th scope="col">Sports Facilities</th>
                <th scope="col">Gym</th>
								<th scope="col">Spa</th>
                <th scope="col">Parking</th>
                <th scope="col">Swimming Pool</th>
                <th scope="col">Stair/Lift</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($trashed_lists as $trashed_list)
							<tr>
								<th scope="row">{{$trashed_list->id}}</th>
                <td>{{$trashed_list->resort_name}}</td>
                <td>{{$trashed_list->address}}</td>
                <td>{{$trashed_list->price}}</td>
                <td>{{$trashed_list->room_size}}</td>
                <td>{{$trashed_list->room_type}}</td>
                <td>{{$trashed_list->utilities}}</td>
                <td>{{$trashed_list->attached_toilet}}</td>
                <td>{{$trashed_list->attached_varanda}}</td>
                <td>{{$trashed_list->hot_water}}</td>
                <td>{{$trashed_list->ac}}</td>
                <td>{{$trashed_list->furnished}}</td>
								<td>{{$trashed_list->wifi}}</td>
								<td>{{$trashed_list->cable_tv}}</td>
								<td>{{$trashed_list->laundry}}</td>
                <td>{{$trashed_list->dining}}</td>
                <td>{{$trashed_list->sports}}</td>
                <td>{{$trashed_list->gym}}</td>
                <td>{{$trashed_list->spa}}</td>
                <td>{{$trashed_list->parking}}</td>
                <td>{{$trashed_list->swimmingpool}}</td>
                <td>{{$trashed_list->lift}}</td>

								<td>
								<img src="{{ asset('uploads/restaurants') }}/{{ $trashed_list->photo }}" alt="">
								</td>
								<td>

									<a href="{{ url('restuarant/restore') }}/{{ $trashed_list->id }}" class=" btn-sm btn-success">Restore</a>
								</td>
							</tr>
					@endforeach

						</tbody>
					</table>

				</div>
				<!-- basic table  End -->

					<div class="collapse collapse-box" id="contextual-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="contextual-table-code">

							</code></pre>
						</div>
					</div>
				</div>
				<!-- Contextual classes End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
@include('Dashboard.js.js')
</body>
</html>
