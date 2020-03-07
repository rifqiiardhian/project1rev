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
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Input Backlink</h1>

        @if ($sukses = Session::get('Sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

        <form action="{{ url('/a/backlink/import') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group input-excel mb-5">
                <input type="file" name="file_excel" class="file-excel" required/>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-upload-excel btn-user-add btn-info"><span class="fas fa-arrow-up"></span> Upload</button></<button>
                </div>
            </div>
        </form>

        <div class="btn-group mb-2" role="group" aria-label="user-group">
            <a href=""><button type="button" class="btn btn-group-item btn-light"><span class="far fa-copy"></span> Copy</button></a>
            <a href=""><button type="button" class="btn btn-group-item btn-light"><span class="far fa-file-alt"></span> Excel</button></a>
            <a href=""><button type="button" class="btn btn-group-item btn-light"><span class="fas fa-align-justify"></span> Column</button></a>
            <a href="{{ url('a/backlink/add')}}"><button type="button" href="" class="btn btn-user-add btn-info"><span class="fas fa-plus"></span> Tambah</button></a>
        </div>

        <div style="overflow-x:auto">
            <table class="tbl-user mb-5" border="1">
                <tr class="row-head-user text-center">
                    <td>No</td>
                    <td>Bahasa</td>
                    <td>Kategori</td>
                    <td>Nama Website</td>
                    <td>Link</td>
                    <td>DA</td>
                    <td>PA</td>
                    <td>Jenis</td>
                    <td>Tipe</td>
                    <td>Syarat/Cara</td>
                </tr>    
               @php $no = 1 @endphp  
               @foreach($dataBacklink as $data)    
                <tr class="row-content-user text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->bahasa }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->nama_website }}</td>
                    <td>{{ $data->link }}</td>
                    <td>{{ $data->da }}</td>
                    <td>{{ $data->pa }}</td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->tipe }}</td>
                    <td>
                    <button type="button" class="btn btn-backlink btn-secondary btn-sm" data-toggle="modal" data-target="#modalSyarat{{ $data->id }}">Lihat Disini</button>
                    </td>
                </tr>
                <div class="modal fade" id="modalSyarat{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modalSyaratLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modalSyaratLabel">Cara Backlink di {{ $data->link }}</h6>
                            </div>
                            <div class="modal-body">
                                <p>{{ $data->syarat }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-backlink btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </table>
        </div>

        
    </div>
</body>

<footer>   
    <p class="text-center">Copyright &copy;2020 Created by Rifqi Ardhian. All Right Reserved</p>
</footer>

<script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>

<script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></s
<script src="{{ url('assets/dashboard/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('assets/dashboard/js/bootstrap.min.js')}}"></script>
</html>