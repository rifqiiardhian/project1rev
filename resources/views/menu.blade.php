<div class="topnav" id="myTopnav">
    <a href="{{ url('/dashboard')}}">Home</a>
    <a href="{{ url('/profil')}}">Profil</a>
    @if(Session::get('level') == 0) 
        <a href="{{ url('/pic')}}">Akun</a>
        <a href="{{ url('/statistik')}}">Statistik</a>
        <a href="{{ url('/a/backlink')}}">Backlink</a>
    @else
        <a href="{{ url('/backlink')}}">Backlink</a>
    @endif
    <a href="{{ url('/rekomendasi')}}">Rekomendasi Produk</a>
    <a href="{{ url('/tiket-bantuan')}}">Tiket Bantuan</a>
    <a href="{{ url('/logout')}}">Logout</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
    <!-- <a href="{{ url('/dashboard')}}"><p>HOME</p></a>
    <a href=""><p>PROFIL</p></a>
    @if(Session::get('level') == 0) 
        <a href=""><p>AKUN</p></a>
        <a href=""><p>STATISTIK</p></a>
        <a href=""><p>BACKLINK</p></a>
    @else
        <a href=""><p>BACKLINK</p></a>
    @endif
    <a href=""><p>REKOMENDASI PRODUK</p></a>
    <a href=""><p>TIKET BANTUAN</p></a>
    <a href="{{ url('/logout')}}"><p>LOGOUT</p></a> -->