<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Produk</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
@include('menu')
    <div class="container-fluid pt-3">
        <div class="text-sm-left">
            <p><span class="fas fa-line-chart"></span> Products Recommendation</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Rekomendasi Produk</h1>

        <div class="row mt-2 mb-5">
            <div class="col-md-3">
                <div class="card card-rekom">
                    <img src="{{ url('assets/images/1.jpeg') }}" class="img img-fluid">
                    <div class="card-body p-2">
                        <h6 class="rekom-title"><b>Perfex - Powerful Open Source CRM</b></h6>
                        <p class="rekom-subtitle">by MSTdev in Project Management Tools</p>
                        <h6>$59</h6>
                        <div class="row">
                            <div class="col-6">
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span> (821)
                                <p class="rekom-subtitle">9k  Sales</p>
                            </div>
                            <div class="col-6">
                                <span><button class="btn btn-outline-secondary btn-rekom">Preview</button></span>
                                <span><button class="btn btn-outline-success btn-rekom"><i class="fas fa-shopping-cart"></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-rekom">
                    <img src="{{ url('assets/images/2.jpg') }}" class="img img-fluid">
                    <div class="card-body p-2">
                        <h6 class="rekom-title"><b>Perfex - Powerful Open Source CRM</b></h6>
                        <p class="rekom-subtitle">by MSTdev in Project Management Tools</p>
                        <h6>$59</h6>
                        <div class="row">
                            <div class="col-6">
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span> (821)
                                <p class="rekom-subtitle">9k  Sales</p>
                            </div>
                            <div class="col-6">
                                <span><button class="btn btn-outline-secondary btn-rekom">Preview</button></span>
                                <span><button class="btn btn-outline-success btn-rekom"><i class="fas fa-shopping-cart"></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-rekom">
                    <img src="{{ url('assets/images/bumi.jpeg') }}" class="img img-fluid">
                    <div class="card-body p-2">
                        <h6 class="rekom-title"><b>Perfex - Powerful Open Source CRM</b></h6>
                        <p class="rekom-subtitle">by MSTdev in Project Management Tools</p>
                        <h6>$59</h6>
                        <div class="row">
                            <div class="col-6">
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span> (821)
                                <p class="rekom-subtitle">9k  Sales</p>
                            </div>
                            <div class="col-6">
                                <span><button class="btn btn-outline-secondary btn-rekom">Preview</button></span>
                                <span><button class="btn btn-outline-success btn-rekom"><i class="fas fa-shopping-cart"></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-rekom">
                    <img src="{{ url('assets/images/jepang.jpg') }}" class="img img-fluid">
                    <div class="card-body p-2">
                        <h6 class="rekom-title"><b>Perfex - Powerful Open Source CRM</b></h6>
                        <p class="rekom-subtitle">by MSTdev in Project Management Tools</p>
                        <h6>$59</h6>
                        <div class="row">
                            <div class="col-6">
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings checked" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span>
                                <span class="fa fa-star ratings" style="font-size: 13px"></span> (821)
                                <p class="rekom-subtitle">9k  Sales</p>
                            </div>
                            <div class="col-6">
                                <span><button class="btn btn-outline-secondary btn-rekom">Preview</button></span>
                                <span><button class="btn btn-outline-success btn-rekom"><i class="fas fa-shopping-cart"></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<footer>   
    <p class="text-center">Copyright &copy;2020 Created by Rifqi Ardhian. All Right Reserved</p>
</footer>

<script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>

<script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
</html>
