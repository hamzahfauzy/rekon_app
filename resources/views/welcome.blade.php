<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rekon Labura</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset ('resource/assets/img/logo.png') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('resource/css/styles.css')}}" rel="stylesheet" />

    <style>
        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #00B4CC;
            border-right: none;
            padding: 5px;
            /* height: 20px; */
            border-radius: 5px 0 0 5px;
            outline: none;
            /* color: #9DBFAF; */
        }

        .searchTerm:focus {
            color: #00B4CC;
        }

        .searchButton {
            width: 50px;
            height: 50px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }

        /*Resize the wrap to see the search bar change!*/
        /* .wrap {
            width: 30%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        } */
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">

            <a class="navbar-brand js-scroll-trigger" href="#page-top">Rekonsiliasi Labura</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-50">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <img src="{{asset('resource/assets/img/logo.png')}}" alt="" class="mb-3" width="150px">
                    <h4 class="text-white">Aplikasi Sistem Informasi Rekonsiliasi Data Pegawai</h4>
                    <h4 class="text-white">Kabupaten Labuhanbatu Utara</h4>
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
                    <div class="form-group mt-4">
                        <div class="wrap">
                            <div class="search">
                                <input type="text" name="nip" id="nip" class="searchTerm" placeholder="Masukan NIP">
                                <button class="searchButton" onclick="location='/cari/'+nip.value">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-white mt-2" style="font-size: 13px;">Note : Silahkan dilengkapi atau diubah jika terdapat ketidaksesuaian data di bawah ini.</p>
                        <!-- <label for="" class="text-white">NIP</label> -->
                        <!-- <div class="row">
                            <div class="col-10">
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukan NIP Anda" style="border-radius: 5px;">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary" onclick="location='/cari/'+nip.value" style="border-radius: 5px;"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div> -->
                    </div>
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

                                            <!-- <th>PNS ID</th> -->
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No. Handphone</th>
                                            <th>Ubah</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tr>

                                        <!-- <td>{{$employee->pns_id}}</td> -->
                                        <td>{{$employee->nip}}</td>
                                        <td>{{$employee->nama}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->no_hp}}</td>
                                        <!-- <td>{{$employee->email_gov}}</td> -->
                                        <td>
                                            <a href="{{route('home.edit',$employee->id)}}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Ubah</a>

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
    <!-- <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div>
        </div>
    </footer> -->
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