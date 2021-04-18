<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rekon Labura</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('resource/css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Rekon Labura</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-50">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-12 align-self-end">
                    @if (session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sukses') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <!-- <label for="" class="text-white">NIP</label> -->
                        <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukan NIP Anda">
                    </div>
                    <button class="btn btn-primary" onclick="location='/cari/'+nip.value">Cari</button>
                    <!-- <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Bootstrap Themes</h1> -->
                    <!-- <hr class="divider my-4" /> -->
                </div>

                <div class="col-lg-12 align-self-baseline mt-3">

                    @if($employee)
                    <div class="card">
                        <div class="card-body">


                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>

                                            <th>PNS ID</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Email</th>
                                            <th>Email Gov</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tr>

                                        <td>{{$employee->pns_id}}</td>
                                        <td>{{$employee->nip}}</td>
                                        <td>{{$employee->nama}}</td>
                                        <td>{{$employee->no_hp}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->email_gov}}</td>
                                        <td>
                                            <a href="{{route('home.edit',$employee->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
    </header>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('resouce/js/scripts.js') }}"></script>
</body>

</html>