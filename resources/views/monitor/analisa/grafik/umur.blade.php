
<div class="row">

    <div class="col-md-8">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                  UMUR TRAFO
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



                $um1=[];
                $um2=[];
                $um3=[];
                $um4=[];
                $um5=[];
                    foreach ($posts as $key => $post) {
                        $um=$post->Master->tahun??0;
                        $umur=date('Y')-$um;

                        if ($umur <=5 ) {
                            $um1[] = $umur;
                        }

                        if ($umur > 5 AND $umur <= 10 ) {
                            $um2[] = $umur;
                        }

                        if ($umur > 10 AND $umur <= 15 ) {
                            $um3[] = $umur;
                        }

                        if ($umur > 15 AND $umur <= 25 ) {
                            $um4[] = $umur;
                        }

                        if ($umur > 25 ) {
                            $um5[] = $umur;
                        }

                    }

                    ?>




                <table class="table table-bordered table-head-fixed text-nowrap h6">
                    <head>
                        <tr>
                            <th>UMUR TRAFO</th><th>JUMLAH</th><th>SATUAN</th>
                        </tr>
                    </head>
                    <tbody>
                        <tr>
                           <td>< 5 TAHUN</td>
                           <td>{{ $a1= count($um1) }}</td>
                           <td>UNIT</td>
                       </tr>
                       <tr>
                        <td>5-10  Tahun</td>
                        <td>{{ $a2=count($um2) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td>10-15 Tahun</td>
                        <td>{{ $a3=count($um3) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td>15-25 Tahun</td>
                        <td>{{ $a4=count($um4) }}</td>
                        <td>UNIT</td>
                    </tr>
                    <tr>
                        <td>> 25 Tahun</td>
                        <td>{{ $um5[0] != date('Y') ? $a5=count($um5) : $a5 = 0 }} </td>
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
                    UMUR TRAFO
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
                <canvas id="umur"></canvas>
              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>



<script>
    const labelu = [
      '< 5 TAHUN',
      '5-10  Tahun',
      '10-15 Tahun',
      '15-25 Tahun',
      '> 25 Tahun',

    ];

    const datau = {
      labels: labelu,
      datasets: [{
        label: 'JUMLAH UMUR TRAFO ',
        backgroundColor: 'green',
        borderColor: 'rgb(255, 99, 132)',
        data: [{{ $a1 }}, {{ $a2 }}, {{ $a3 }}, {{ $a4 }}, {{ $a5 }}],
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const configu = {
      type: 'bar',
      data: datau,
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
          },

        }
      }
    };
  </script>
  <script>
       Chart.register(ChartDataLabels);
    const myChartu = new Chart(
      document.getElementById('umur').getContext('2d'),
      configu
    );
  </script>

