
<div class="row">

    <div class="col-md-8">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                  PEMBEBANAN
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
            <div>

                <?php
//dd($GLOBALS['glb']);
                $um1=[];
                $um2=[];
                $um3=[];
                $um4=[];
                $um5=[];
                  $beban=  $GLOBALS['glb'];
              //dd($beban);
                    foreach ($beban as $key => $post) {

                        $bbn=$post;

                        if ($bbn == 'UNDERLOAD' ) {
                            $um1[] = $bbn;
                        }

                        if ($bbn == 'NORMAL' ) {

                            $um2[] = $bbn;
                        }

                        if ($bbn == 'UNBALANCE' ) {

                            $um3[] = $bbn;
                        }

                        if ($bbn == 'OVERLOAD' ) {

                            $um4[] = $bbn;
                        }

                        if ($bbn == 'OVERBLAST' ) {

                            $um5[] = $bbn;
                        }

                    }

                  //  dd( $um3);
                    ?>




                <table class="table table-bordered table-head-fixed text-nowrap h6">
                    <head>
                        <tr>
                            <th>PEMBEBANAN</th><th>JUMLAH</th><th>SATUAN</th>
                        </tr>
                    </head>
                    <tbody>
                        <tr>
                           <td>UNDERLOAD</td>
                           <td>{{ $a1= count($um1) }}</td>
                           <td>UNIT</td>
                       </tr>
                       <tr>
                        <td> NORMAL</td>
                        <td>{{ $a2=count($um2) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td>UNBALANCE</td>
                        <td>{{ $a3=count($um3) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td> OVERLOAD </td>
                        <td>{{ $a4=count($um4) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td> OVERBLAST </td>
                        <td>{{ $a5=count($um5) }}</td>
                        <td>UNIT</td>
                    </tr>

                         <tr>
                             <td>Total</td>
                             <td>{{ $a1+$a2+$a3+$a4+$a5 }}</td>
                             <td>UNIT</td>
                            </tr>
                    </tbody>
                </table>

              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    JUMLAH PEMBEBANAN
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
            <div>
                <canvas id="myChartP"></canvas>
              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>

<script>
    const labelP = [
      'UNDERLOAD',
      'NORMAL',
      'UNBALANCE',
      'OVERLOAD',
      'OVERBLAST',

    ];

    const dataP = {
      labels: labelP,
      datasets: [{
        label: 'JUMLAH PEMBEBANAN',
        backgroundColor: 'orange',
        borderColor: 'rgb(255, 99, 132)',
        data: [{{ $a1 }}, {{ $a2 }}, {{ $a3 }}, {{ $a4 }}, {{ $a5 }}],
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const configP = {
      type: 'bar',
      data: dataP,
      options: {
        plugins: {
          datalabels: {
            backgroundColor: function(context) {
              return context.dataset.backgroundColor;
            },
            borderColor: 'white',
            borderRadius: 5,
            borderWidth: 2,
            color: 'white',
            font: {
              weight: 'bold'
            },
            padding: 5,
          }
        }
      }
    };
  </script>
  <script>
      Chart.register(ChartDataLabels);
    const myChartP = new Chart(
      document.getElementById('myChartP').getContext('2d'),
      configP
    );
  </script>

