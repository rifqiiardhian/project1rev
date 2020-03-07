<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
            <p><span class="fas fa-user"></span> Profil</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap pt-2 pb-4">Profil Anda</h1>

        <div class="row mt-lg-3 mb-lg-5">
            @foreach($dataProfil as $data)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pt-4">
                        <p class="card-title"><span class="fas fa-user"></span> Ubah Profil</p>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ url('/profil/updateProfil')}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data->id }}"/>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="{{ $data->username }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon ( WhatsApp )</label>
                                <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $data->telepon }}"/>
                            </div>
                            <div class="form-group text-center pt-2">
                            <button class="btn-update-profil" type="submit">Ubah Profil</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pt-4">
                        <p class="card-title"><span class="fas fa-unlock-alt"></span> Ubah Kata Sandi</p>
                    </div>
                    <div class="card-body p-4">
                    <form action="" method="">
                            <div class="form-group">
                                <label for="pass_lama">Password Saat Ini</label>
                                <input type="password" class="form-control" name="pass_lama" id="pass-lama"/>
                            </div>
                            <div class="form-group">
                                <label for="pass_baru">Password Baru</label>
                                <input type="password" class="form-control" name="pass_baru" id="pass_baru"/>
                            </div>
                            <div class="form-group">
                                <label for="konfirm_pass">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" name="konfirm_pass" id="konfirm_pass"/>
                            </div>
                            <div class="form-group text-center pt-2">
                            <button class="btn-update-pass" type="submit">Ubah Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-lg-3 mb-lg-5">
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
                        <h4 class="text-center pb-2">Your Subscriptions</h4>
                        <div class="card mb-3">
                            <p class="p-2">
                                20/02/20 <b>#V4SN4</b> Local Bank or Paypal Rp.400.000
                                <ul>
                                    <li>KILLER Autoresponder</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card">
                            <p class="p-2">
                                20/02/20 <b>#V4SN4</b> Local Bank or Paypal Rp.400.000
                                <ul>
                                    <li>KILLER Autoresponder</li>
                                </ul>
                            </p>
                        </div>
                        <h4 class="text-center pt-3 pb-2">Histori Pembayaran</h4>
                        <div style="overflow-x:auto">
                            <table class="tbl-histori-pembayaran" border="1">
                                <tr class="row-head text-center">
                                    <td>DATE</th>
                                    <td>INVOICE</td>
                                    <td>PRODUCTS</td>
                                    <td>PAYMENT SYSTEM</td>
                                    <td>AMOUNT</td>
                                </tr>
                                <tr class="row-content">
                                    <td>20/02/20</td>
                                    <td>V4SN4/1</td>
                                    <td>KILLER Autoresponder</td>
                                    <td>Local Bank or Paypal</td>
                                    <td>Rp.400.000</td>
                                </tr>
                                <tr class="row-content">
                                    <td>20/02/20</td>
                                    <td>V4SN4/1</td>
                                    <td>KILLER Autoresponder</td>
                                    <td>Local Bank or Paypal</td>
                                    <td>Rp.400.000</td>
                                </tr>
                                <tr class="row-content">
                                    <td>20/02/20</td>
                                    <td>V4SN4/1</td>
                                    <td>KILLER Autoresponder</td>
                                    <td>Local Bank or Paypal</td>
                                    <td>Rp.400.000</td>
                                </tr>
                                <tr class="row-content">
                                    <td>20/02/20</td>
                                    <td>V4SN4/1</td>
                                    <td>KILLER Autoresponder</td>
                                    <td>Local Bank or Paypal</td>
                                    <td>Rp.400.000</td>
                                </tr>
                            </table>
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