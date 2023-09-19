<x-app-layout>
    <x-slot name="header">
        <?php $ulp=getMonitor('monitors','masterawal_id',request()->get('reg')); ?>
        <h5  class="m-0 text-success">{{ __('UP3') }} : <b> {{ getData('masterawals','ulp',$ulp) }} </b></h5>
    </x-slot>

    <x-slot name="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home </a></li>
        <li class="breadcrumb-item active">Home Page </li>
    </x-slot>



<style>
.dropbtn {
  background-color: #007bff;
  color: white;
  padding: 8px 9px 9px 9px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #007bff;}
</style>


    <div class="container-fluid">
<div class="row">
<div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">PDF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a target="_blank" class="nav-item nav-link active" href="/data-trafo?reg={{request()->get('reg')}}">Data Trafo & form  </span></a>
            <a target="_blank" class="nav-item nav-link " href="/pdf1?reg={{request()->get('reg')}}">Analisa Trafo </span></a>
            <a target="_blank" class="nav-item nav-link" href="/pdf2?reg={{request()->get('reg')}}">Analisa Loses Trafo & Pembebanan</a>
            {{-- <a target="_blank" class="nav-item nav-link" href="/pdf3?reg={{request()->get('reg')}}">Analisa Pembebanan</a> --}}
            <a target="_blank" class="nav-item nav-link" href="/pdf4?reg={{request()->get('reg')}}">Analisa Siang & Malam</a>
            {{-- <a target="_blank" class="nav-item nav-link" href="/pdf5?reg={{request()->get('reg')}}">Analisa Malam</a> --}}
            <a target="_blank" class="nav-item nav-link" href="/grafik?reg={{request()->get('reg')}}">Grafik</a>

            {{-- <div class="dropdown">
                <button class="dropbtn">Grafik</button>
                <div class="dropdown-content">
                  <a  target="_blank" href="/grafik?reg={{request()->get('reg')}}">I Max & Rata-Rata</a>
                  <a href="#">Merek</a>
                  <a href="#">Daya</a>
                  <a href="#">Umur</a>
                  <a href="#">Pembebanan</a>
                </div>
              </div> --}}
          </div>
        </div>
      </nav>

</div>
</div>


        <div class="row">
          <div class="col-12">
            <div class="card">


        @include('monitor.analisa')


          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


</x-app-layout>

