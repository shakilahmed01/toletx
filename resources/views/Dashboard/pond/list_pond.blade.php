
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
								<h4>Warehouse Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Warehouse</li>
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
                <th scope="col">Address</th>
                <th scope="col">Purposes</th>
                <th scope="col">Asking Rent/Cost + Service Charge</th>
                <th scope="col">Water Level</th>
                <th scope="col">Pond Area</th>
                <th scope="col">Road Width</th>
                <th scope="col">Drainage System</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
              @foreach($lists as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->address}}</td>
                <td>{{$list->purpose}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->water_level}}</td>
                <td>{{$list->pond_area}}</td>
                <td>{{$list->road_width}}</td>
                <td>{{$list->drainage_system}}</td>

                <td>
                <img src="{{ asset('uploads/ponds') }}/{{ $list->photo }}" alt="">
                </td>
                <td>
                  <a href="{{ url('/pond/edit/') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
                  <hr>
                  <a href="{{ url('pond/delete') }}/{{ $list->id }}" onclick="confirmAction()" class=" btn-sm btn-danger">Delete</a>

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
                <th scope="col">Address</th>
                <th scope="col">Purposes</th>
                <th scope="col">Asking Rent/Cost + Service Charge</th>
                <th scope="col">Water Level</th>
                <th scope="col">Pond Area</th>
                <th scope="col">Road Width</th>
                <th scope="col">Drainage System</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($trashed_lists as $trashed_list)
							<tr>
								<th scope="row">{{$trashed_list->id}}</th>
                <td>{{$trashed_list->address}}</td>
                <td>{{$trashed_list->purpose}}</td>
                <td>{{$trashed_list->price}}</td>
                <td>{{$trashed_list->water_level}}</td>
                <td>{{$trashed_list->pond_area}}</td>
                <td>{{$trashed_list->road_width}}</td>
                <td>{{$trashed_list->drainage_system}}</td>

								<td>
								<img src="{{ asset('uploads/ponds') }}/{{ $trashed_list->photo }}" alt="">
								</td>
								<td>

									<a href="{{ url('pond/restore') }}/{{ $trashed_list->id }}" class=" btn-sm btn-success">Restore</a>
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
