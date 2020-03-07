<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    @include('menu')
    <div class="container-fluid pt-3">
        <div class="text-sm-left">
            <p><span class="fas fa-home"></span> Dashboard</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap pt-2 pb-4">Hai, {{Session::get('nama')}} !</h1>

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <p><b><i class="fa fa-info-circle"></i> Informasi</b></p>
            <p>Untuk lapor backlink yang bermasalah bisa buat <a href="https://app.databacklink.com/ticket/">tiket disini</a></p>
        </div>

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <p><b><i class="fa fa-info-circle"></i> Informasi</b></p>
            <p>Harap Mendaftarkan Akun Dengan Email Aktif Karena Anda Akan Mendapatkan Berita Terbaru Via Email Dari Kami</p>
        </div>

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <p><b><i class="fa fa-info-circle"></i> Informasi</b></p>
            <p>Join Channel Telegram untuk dapat informasi seputar SEO dan Digital Marketing : <a href="http://t.me/agungprst">@agungprst</a></p>
        </div>

        <div class="row mt-lg-5 mb-lg-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pt-lg-3">
                        <h4 class="card-title text-center">Informasi Membership Anda</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="card bg-light mb-4">
                            <p class="text-center pt-2">Please <a href="">define payout method</a> to get commission in our affiliate program</p>
                        </div>
                        <div class="card mb-4 card-item">
                            <div class="card-body">
                                <h5 class="text-center">Pembelian Aktif</h5>
                                <br/>
                                <p><b>KILLER Autoresponder</b> - Lifetime</p>
                                <p>Panduan Membuat Sistem Autoresponder (kupon diskon ada di Web: K-Responder)</p>
                            </div>
                        </div>
                        <div class="card mb-4 card-item">
                            <div class="card-body">
                                <h5 class="text-center">Akses Pembelian Anda</h5>
                                <br/>
                                <a href=""><p><b>KILLER Autoresponder - Access</b></p></a>
                                <a href=""><p><b>Bonus alFarisi</b></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p><span class="far fa-newspaper"></span> Berita Terbaru</p>
                        <div class="card mb-2 card-item">
                            <div class="card-body">
                                <p><span class="far fa-calendar-alt"></span> 20 Februari 2020, 17:12:00</p>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="card mb-2 card-item">
                            <div class="card-body">
                                <p><span class="far fa-calendar-alt"></span> 20 Februari 2020, 17:12:00</p>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="card mb-2 card-item">
                            <div class="card-body">
                                <p><span class="far fa-calendar-alt"></span> 20 Februari 2020, 17:12:00</p>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
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