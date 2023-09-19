
<div class="row">

    <div class="col-md-8">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                  DAYA TRAFO
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
                    foreach ($posts as $key => $post) {
                        $daya[]=$post->Master->kapasitas;
                    }

                   //dd($daya);
                    $ar = array_replace($daya,array_fill_keys(array_keys($daya, null),'0'));
                    //dd( $ar);
                   $daya = array_count_values($ar);
                 //  dd($daya);
                    ?>




                <table class="table table-bordered table-head-fixed text-nowrap h6">
                    <head>
                        <tr>
                            <th>DAYA</th><th>JUMLAH</th><th>SATUAN</th>
                        </tr>
                    </head>
                    <tbody>

                         <?php  ksort($daya)  ?>
                        @foreach ( $daya as $i =>$val )

                        <tr>
                           <td>
                           {{ $i }}


                            </td>
                           <td>{{ $tot[]=$val }}</td>
                           <td>UNIT</td>
                       </tr>
                       @php
                            $label[]=$i;
                            $data1[]=$val;
                       @endphp
                        @endforeach
                         <tr>
                             <td>Total</td>
                             <td>{{ array_sum($tot) }}</td>
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
    <div class="col-md-12">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    DAYA TRAFO
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
                <canvas id="Daya"></canvas>
              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>
@php
    $jsd = json_encode($data1);
@endphp
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>

<script>
    const labe = @json($label);

    const dataD = {
      labels: labe,
      datasets: [{
        label: 'Jumlah Daya Trafo',
        backgroundColor: 'blue',
        borderColor: 'rgb(255, 99, 132)',
        data: {{  $jsd }},
        datalabels: {
            anchor: 'end',
              align: 'end',}

      }]
    };

    const configD = {
      type: 'bar',
      data: dataD,
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
    const myChartD = new Chart(
      document.getElementById('Daya').getContext('2d'),
      configD
    );
  </script>

