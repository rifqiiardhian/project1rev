<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Bantuan</title>
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
            <p><span class="fas fa-line-chart"></span> Help</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Tiket Bantuan</h1>

        <div class="card card-ticket mb-5">
            <div class="card-body text-center">
                <div class="card bg-light mb-4">
                    <p class="text-notice text-left pl-2 pt-2 pr-2">Kami menjawab ticket setiap hari Senin - Jumat Jam 10.00 - 17.00 WIB. Anda bisa menghubungi kami kapan saja secara langsung jika anda memiliki pertanyaan mendesak.</p>
                </div>
                <h5>Submit New Ticket (Return)</h5>
                <form action="" method="">
                    <div class="form-group text-left">
                        <tr>
                            <td><label><b>Category of question</b></label>&nbsp;&nbsp;</td>
                            <td><input type="radio" name="category" value=""> General</td>
                        </tr>
                    </div>
                    <div class="form-group text-left">
                        <label><b>Subject</b></label>
                        <input type="text" class="form-control ticket-subject" name="subject"/>
                    </div>
                    <div class="form-group text-left">
                        <label><b>Message</b></label>
                        <textarea name="message" class="form-control ticket-message" style="height: 200px"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Add Attachment</h6>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-save-ticket" value="SAVE"/>
                    </div>
                </form>
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