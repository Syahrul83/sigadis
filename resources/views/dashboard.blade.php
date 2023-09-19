<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Dashboard') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </x-slot>


    <div class="row">
        <div class="col-md-6">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Banyak Trafo Per UP3

                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="piechart_3d" style="width: 100%;"></div>
                </div>
            </div>
            <!-- /.card-body-->

        </div>

        <div class="col-md-6">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Total Per Merek Tarfo
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="donutchart" style="width: 100%;"></div>
                </div>
                <!-- /.card-body-->

            </div>
        </div>
    </div>


    @push('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var groups = <?php echo $groups; ?> ;
        console.log(groups);
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(groups);

            var options = {
               is3D: true
            , };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }

    </script>



    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChar);
      function drawChar() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php foreach($tot_merek as $key => $val) {
              $merek = $val->merek == '' ?"UNKNOW":$val->merek;
             echo     "['".$merek."',".$val->total."],";
                 }   ?>

        ]);

        var options = {

          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


    @endpush

</x-app-layout>
