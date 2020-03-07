<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIC</title>
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
            <p><span class="fas fa-user-friends"></span> Person in Charge (PIC)</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap text-center pt-2 pb-4">Halaman Tambah Akun</h1>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-add-user mt-4 mb-5">
                    <form action="{{ url('/pic/save')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <h5>Silakan isi data dibawah ini</h5>
                        </div>
                        <div class="card-body p-4">
                            <div style="overflow-x:auto">
                                <table>
                                    <div class="form-group">
                                        <tr>
                                            <td style="width: 250px;"><label for="username">Username</label></td>
                                            <td><input type="text" class="form-control" name="username" id="username" style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="nama_lengkap">Nama Lengkap</label></td>
                                            <td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"  style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="email">Email</label></td>
                                            <td><input type="email" class="form-control" name="email" id="email"  style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="telepon">Telepon</label></td>
                                            <td><input type="text" class="form-control" name="telepon" id="telepon"  style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="password">Input Password</label></td>
                                            <td><input type="password" class="form-control" name="password" id="password"  style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="konfirm_password">Konfirmasi Password</label></td>
                                            <td><input type="password" class="form-control" name="konfirm_password" id="konfirm_password"  style="width: 500px;" required/>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="hak_akses">Hak Akses</label></td>
                                            <td>
                                                
                                                <select class="form-control" name="hak_akses" id="hak_akses"  style="width: 500px;" required>
                                                    <option value="">Pilih Hak Akses</option>
                                                    @foreach($dataAkses as $data)
                                                        <option value="{{ $data->id }}">{{ $data->hak_akses }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="status">Status</label></td>
                                            <td>
                                                <input type="radio" class="form-control-md" name="status" id="status" value="1"> Aktif &nbsp;&nbsp;
                                                <input type="radio" class="form-control-md" name="status" id="status" value="0"> Tidak Aktif
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="level">Level</label></td>
                                            <td>
                                                <input type="radio" class="form-control-md" name="level" id="level" value="0"> Admin &nbsp;&nbsp;
                                                <input type="radio" class="form-control-md" name="level" id="level" value="1"> Member
                                            </td>
                                        </tr>
                                    </div>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="reset" class="btn btn-danger">CANCEL</button>
                            <button type="submit" class="btn btn-success">SAVE</button>
                        </div>
                    </form>
                </div>
                <a href="{{ url('/pic')}}"><p class="text-center pb-4">KEMBALI KE HALAMAN AKUN</p></a>
            </div>
            <div class="col-md-2"></div>
        </div>

        
    </div>
</body>

<footer>   
    <p class="text-center">Copyright &copy;2020 Created by Rifqi Ardhian. All Right Reserved</p>
</footer>

<script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>

<script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
</html>