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
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Pengelola Akun</h1>

        <div class="btn-group mb-2" role="group" aria-label="user-group">
            <button type="button" class="btn btn-group-item btn-light"><span class="far fa-copy"></span> Copy</button>
            <button type="button" class="btn btn-group-item btn-light"><span class="far fa-file-alt"></span> Excel</button>
            <button type="button" class="btn btn-group-item btn-light"><span class="fas fa-align-justify"></span> Column</button>
            <a href="{{ url('/pic/add')}}"><button type="button" href="" class="btn btn-user-add btn-info"><span class="fas fa-plus"></span> Tambah</button></a>
        </div>

        <div style="overflow-x:auto">
            <table class="tbl-user mb-5" border="1">
                <tr class="row-head-user text-center">
                    <td>ID</td>
                    <td>Email Pengguna</td>
                    <td>Nama Pengguna</td>
                    <td>Hak Akses</td>
                    <td>Level</td>
                    <td>Status</td>
                    <td>Aksi</td>
                </tr>    
                <?php $no = 1 ?>
                @foreach($dataUser as $data)              
                <tr class="row-content-user text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>
                        {{ $data->hak_akses }}
                    </td>
                    <td>
                        @if($data->level == 0)
                            Admin
                        @elseif($data->level == 1)
                            Member
                        @endif
                    </td>
                    <td>
                        @if($data->status == 1)
                            <button type="button" class="btn btn-success btn-sm">Aktif</button>
                        @else
                            <button type="button" class="btn btn-danger btn-sm">Tidak Aktif</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('pic/edit/' .$data->id)}}"><button type="button" class="btn btn-user-edit btn-warning btn-sm"><span class="fas fa-pencil-alt"></span></button></a>
                        <a href="{{ url('pic/delete/' .$data->id)}}"><button type="button" class="btn btn-user-delete btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

<footer>   
    <p class="text-center">Copyright &copy;2020 Created by Rifqi Ardhian. All Right Reserved</p>
</footer>

<script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>

<script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
</html>