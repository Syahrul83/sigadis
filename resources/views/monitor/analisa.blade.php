<div class="card card-primary card-outline">

    <div class="card-body">
        <h4></h4>
        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Analisa Trafo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Losses Trafo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Analisa Pembebanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Analisa Siang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-trafo" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Analisa Malam</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-grafik" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Grafik</a>
            </li>
        </ul>
        <div class="tab-content" id="custom-content-below-tabContent">

            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                {{-- pertama --}}
                @include('monitor.analisa.perhitungan')
                {{-- end pertama --}}
            </div>



            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                {{-- kedua --}}
                @include('monitor.analisa.losess')
                {{-- endkedua --}}
            </div>

            {{-- ketiga --}}
            <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                @include('monitor.analisa.pembebanan')
            </div>
            {{-- end ketiga --}}
            {{-- ke empat --}}
            <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                @include('monitor.analisa.analisisSiang')
            </div>
            {{-- end ke empat --}}

            {{-- ke empat --}}
            <div class="tab-pane fade" id="custom-content-below-trafo" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                @include('monitor.analisa.analisisMlm')
            </div>
            {{-- end ke empat --}}
            {{-- keelima --}}
            <div class="tab-pane fade" id="custom-content-below-grafik" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                @include('monitor.analisa.grafik')
            </div>
            {{-- end ke lima --}}

        </div>


    </div>
    <!-- /.card -->
</div>
