<x-app-layout>
    <x-slot name="header">
        <?php $ulp=getMonitor('monitors','masterawal_id',request()->get('reg')); ?>
        <h5 class="m-0 text-success">{{ __('UP3') }} : <b> {{ getData('masterawals','ulp',$ulp) }} </b></h5>
    </x-slot>

    <x-slot name="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home </a></li>
        <li class="breadcrumb-item active">Home Page </li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

            <ul class="nav nav-tabs">
                <li class="nav-item">

                    <a class="nav-link {{ Request::segment(1)  == 'monitor1' ? 'active' : '' }}" href="{{url('monitor1?reg='.Request::get('reg')) }}">Data Trafo </a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == 'monitor2' ? 'active' : '' }}" href="{{url('monitor2?reg='.Request::get('reg')) }}">Form Siang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{  Request::segment(1)  == 'monitor3' ? 'active' : '' }}" href="{{url('monitor3?reg='.Request::get('reg')) }}">Form Malam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  Request::segment(1)  == 'monitor4' ? 'active' : '' }}" href="{{url('monitor4?reg='.Request::get('reg')) }}">Analisa</a>
                    </li>
            </ul>
            </div>


        @if (Request::segment(1)  == 'monitor1')
        <livewire:trafo.trafo>
        @elseif (Request::segment(1)  == 'monitor2')
        <livewire:siang.siang>
        @elseif (Request::segment(1)  == 'monitor3')
        <livewire:mlm.mlm>
         @elseif (Request::segment(1)  == 'monitor4')
        @include('monitor.analisa')
        @endif


          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


</x-app-layout>

