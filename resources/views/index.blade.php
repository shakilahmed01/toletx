<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToletX</title>
</head>
<body>

</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Font Awesome CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!--Custom CSS for header  -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets/assets/css/header.css')}}">

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <title>Hello, world!</title>
  </head>
  <body>
          <!-- Header Start -->
    <header class="mt-4">
        <div class="container-fluid">
            <div class="row main-search">
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                  </form>
            </div>
            <div class="row">
                <div class="col-md-7 mx-4">
                    <div class="row mt-2">
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/1.room.png')}}" alt="" class="img-fluid">
                            <span> Room</span>
                        </div>
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/2.apartment.png')}}" alt="" class="img-fluid">
                            <span> Apartment</span>
                        </div>
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/3.parking.png')}}" alt="" class="img-fluid">
                            <span> Parking Spot</span>
                        </div>
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/4.hotel.png')}}" alt="" class="img-fluid">
                            <span> Hotel</span>
                        </div>
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/5.hostel.png')}}" alt="" class="img-fluid">
                            <span> Hostel</span>
                        </div>
                        <div class="col-md-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/6.office.png')}}" alt="" class="img-fluid">
                            <span> Office</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/7.land.png')}}" alt="" class="img-fluid">
                            <span> Land</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/8.community center.png')}}" alt="" class="img-fluid">
                            <span> Community Center</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/9.shooting-spot.png')}}" alt="" class="img-fluid">
                            <span> Shooting Spot</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/10.shop.png')}}" alt="" class="img-fluid">
                            <span> Shop</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/11.factory.png')}}" alt="" class="img-fluid">
                            <span> Factory</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/12.warehouse.png')}}" alt="" class="img-fluid">
                            <span> Warehouse</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/13.pond.png')}}" alt="" class="img-fluid">
                            <span> Pond</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/14.swimming-pool.png')}}" alt="" class="img-fluid">
                            <span> Swimming Pool</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/15.bilboard.png')}}" alt="" class="img-fluid">
                            <span> Bilboard</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/16.rooftop.png')}}" alt="" class="img-fluid">
                            <span> Rooftop</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/17.restaurant.png')}}" alt="" class="img-fluid">
                            <span> Restaurant</span>
                        </div>
                        <div class="col-sm-2 col-small mx-2">
                            <img src="{{asset('Dashboard/assets/img/header/18.gallery.png')}}" alt="" class="img-fluid">
                            <span> Gallery</span>
                        </div>
                    </div>
                    </div>

                <div class="col-md-4">
                    <div class="justify-content-center">
                        <img src="{{asset('Dashboard/assets/img/header/toletX-v1.png')}}" alt="" srcset="">
                    <p id="slogan">We Have the best place for any bugdet</p>
                    </div>
                    <div class="row">
                        <div class="dropdown">
                            <button class="btn btn-custom btn-custom-color dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-display="static" >
                              Login/Register
                            </button>
                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                                <form class="px-4 py-3">
                                  <div class="mb-3">
                                    <!-- <label for="exampleDropdownFormEmail1" class="form-label">Email/Phone</label> -->
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email/Phone">
                                  </div>
                                  <div class="mb-3">
                                    <!-- <label for="exampleDropdownFormPassword1" class="form-label">Password</label> -->
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                  </div>

                                  <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Don't have any acoount? Register</a>
                              </div>
                            <!-- <ul class="dropdown-menu dropdown-from" aria-labelledby="dropdownMenuButton1">
                               <div class="mx-2">
                                    <h2 class="text-center">Login</h2>
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="staticEmail">
                                        </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword">
                                            </div>
                                        </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <button class="w-20 btn btn-md btn-primary float-left" type="submit">Login</button>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <button class="w-20 btn btn-md btn-primary float-left" type="submit">Register</button>
                                            </div>
                                        </div>

                                    </div>
                               </div>
                            </ul> -->
                          </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Section Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6  ">
                    <a class="btn btn-custom-color mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left slide-control"></i>
                    </a>
                    <a class="btn btn-custom-color mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right slide-control"></i>
                    </a>
                </div>
                <div class="col-8">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="{{asset('Dashboard/assets/img/Avaz Twist Tower.jpg')}}">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="{{asset('Dashboard/assets/img/Cayan_Tower.jpg')}}">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="{{asset('Dashboard/assets/img/F&F_Tower_7103.jfif')}}">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End -->



    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

  </body>
</html>
