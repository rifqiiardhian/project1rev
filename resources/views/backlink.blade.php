<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backlink</title>
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
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Data Backlink</h1>

        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <select name="niche" class="form-control" style="width: 250px">
                    <option value="">Pilih Niche</option>
                    @foreach($dataNiche as $dataN)
                        <option value="{{ $dataN->kategori }}">{{ $dataN->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="bahasa" class="form-control" style="width: 250px" >
                    <option value="">Pilih Bahasa</option>
                    @foreach($dataBahasa as $dataB)
                        <option value="{{ $dataB->bahasa }}">{{ $dataB->bahasa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit">FILTER</button>
            </div>
        </form>

        <div style="overflow-x:auto">
            <table class="tbl-user mb-5" border="1">
                <tr class="row-head-user text-center">
                    <td>No</td>
                    <td>Judul Website</td>
                    <td>Jenis</td>
                    <td>Tipe</td>
                    <td>DA</td>
                    <td>PA</td>
                    <td>Syarat/Cara</td>
                </tr>    
               @php $no = 1 @endphp  
               @foreach($dataBacklink as $data)    
                <tr class="row-content-user text-center">
                    <td>{{ $no++ }}</td>
                    <td class="text-left">
                        <h6>{{ $data->nama_website }}</h6>
                        <p>URL: <a href="{{ $data->link }}">{{ $data->link }}</a></p>
                        <h6>Niche: <button class="btn btn-outline-secondary btn-sm">{{ $data->kategori }}</button></h6>
                        <h6>Bahasa: <button class="btn btn-outline-secondary btn-sm">{{ $data->bahasa }}</button></h6>
                    </td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->tipe }}</td>
                    <td>{{ $data->da }}</td>
                    <td>{{ $data->pa }}</td>
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