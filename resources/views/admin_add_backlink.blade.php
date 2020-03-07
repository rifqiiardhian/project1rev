<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Backlink</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="{{ url('assets/chart/Chart.js')}}"></script>
</head>
<body>
@include('menu')
    <div class="container-fluid pt-3">
        <div class="text-sm-left">
            <p><span class="fas fa-line-chart"></span> Backlink</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap text-center pt-2 pb-4">Halaman Input Backlink</h1>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-add-user mt-4 mb-5">
                    <form action="{{ url('/a/backlink/save')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <h5>Silakan isi data dibawah ini</h5>
                        </div>
                        <div class="card-body p-4">
                            <div style="overflow-x:auto">
                                <table>
                                    <div class="form-group">
                                        <tr>
                                            <td style="width: 250px;"><label for="bahasa">Bahasa</label></td>
                                            <td>
                                                <select name="bahasa" class="form-control">
                                                    <option value="">Pilih Bahasa</option>
                                                    <option value="English">Bahasa Inggris</option>
                                                    <option value="Indonesia">Bahasa Indonesia</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="kategori">Kategori</label></td>
                                            <td><input type="text" class="form-control" name="kategori" id="kategori"  style="width: 500px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="nama_website">Nama Website</label></td>
                                            <td><input type="text" class="form-control" name="nama_website" id="nama_website"  style="width: 500px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="link">Link</label></td>
                                            <td><input type="text" class="form-control" name="link" id="link"  style="width: 500px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="DA">Domain Authority (DA)</label></td>
                                            <td><input type="number" class="form-control" name="DA" id="DA"  style="width: 100px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="PA">Page Authority (PA)</label></td>
                                            <td><input type="number" class="form-control" name="PA" id="PA"  style="width: 100px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="jenis">Jenis</label></td>
                                            <td><input type="text" class="form-control" name="jenis" id="jenis"  style="width: 500px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="tipe">Tipe</label></td>
                                            <td><input type="text" class="form-control" name="tipe" id="tipe"  style="width: 500px;" required/></td>
                                        </tr>
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <td><label for="syarat">Syarat / Cara</label></td>
                                            <td><textarea name="syarat" class="form-control" style="height: 120px;"></textarea></td>
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
                <a href="{{ url('/a/backlink')}}"><p class="text-center pb-4">KEMBALI KE HALAMAN BACKLINK</p></a>
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