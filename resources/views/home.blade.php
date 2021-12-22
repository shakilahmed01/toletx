@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('you are logged in!') }}

<!-- javascript auto popup dialog box using for get more user information -->
                <html>
                  <head>
                      <meta charset="utf-8">
                      <title>ToletX User Information</title>
                      <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
                      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                      <script>
                      $(function() {
                          $( "#dialog" ).dialog();
                      });
                      </script>
                  </head>
                  <body>
                    <div id="dialog" title="Fillup some more fields for secure your account">
                      <div class="card-body">
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
                          <form method="POST" action="{{ route('post_user_information') }}">
                              @csrf

                                  <div class="col-md-6">
                                      <input id="name" type="hidden" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->id }}" required autocomplete="name" autofocus>

                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>



                              <div class="row mb-3">
                                  <label for="ncard_number" class="col-md-4 col-form-label text-md-right">{{ __('National Identity card') }}</label>

                                  <div class="col-md-6">
                                      <input id="ncard_number" type="text" class="form-control @error('ncard_number') is-invalid @enderror" name="ncard_number" value="{{ old('ncard_number') }}" required autocomplete="ncard_number" autofocus>

                                      @error('ncard_number')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name">

                                      @error('father_name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="mother_name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}" required autocomplete="mother_name">

                                      @error('mother_name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                                      @error('address')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                  <div class="col-md-6">
                                      <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                      @error('date_of_birth')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="p_identity" class="col-md-4 col-form-label text-md-right">{{ __('Personal Identification') }}</label>

                                  <div class="col-md-6">
                                      <input id="p_identity" type="text" class="form-control @error('p_identity') is-invalid @enderror" name="p_identity" value="{{ old('p_identity') }}" required autocomplete="p_identity" autofocus>

                                      @error('p_identity')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>


                              <div class="row mb-3">
                                  <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                  <div class="col-md-6">
                                    <select id="gender" name="gender">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Others">Others</option>
                                    </select>

                                      @error('gender')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Submit') }}
                                      </button>
                                  </div>
                              </div>
                          </form>

          </div>
                    </div>
                  </body>
                </html>
<!--end popup dialog box  -->
            </div>
        </div>
    </div>
</div>
@endsection
