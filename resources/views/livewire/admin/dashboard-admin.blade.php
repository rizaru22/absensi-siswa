<div>
   <div class="row">
    <div class="col-lg-12">
        <h1> Selamat Datang {{ Auth::user()->username }}</h1>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
    </div>
   </div>
</div>
