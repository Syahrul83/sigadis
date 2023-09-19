
<div class="row">

    <div class="col-md-8">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                   MEREK TRAFO
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
                        $merek[]=$post->Master->merek;
                    }
                    $ar = array_replace($merek,array_fill_keys(array_keys($merek, null),''));
                    //dd( $merek);
                   $merek = array_count_values($ar);
                    ?>




                <table class="table table-bordered table-head-fixed text-nowrap h6">
                    <head>
                        <tr>
                            <th>MEREK</th><th>JUMLAH</th><th>SATUAN</th>
                        </tr>
                    </head>
                    <tbody>

                        @foreach ( $merek as $i =>$val )

                        <tr>
                           <td> @if($i == NULL)
                               {{ $i=" UNKNOW" }}
                           @else
                           {{ $i }}
                           @endif

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
@php
  // dd(json($datal));
@endphp
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
                    MEREK TRAFO
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
                <canvas id="Merek"></canvas>
              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>


{{-- <canvas id="chartJSContainer" width="600" height="400"></canvas> --}}

@php
    $jsd = json_encode($data1);

@endphp


{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>





<script>
    const merek =  @json($label);

    const dataM = {
      labels: merek,
      datasets: [{
        label: 'JUMLAH MEREK TRAFO',
        backgroundColor: 'blue',
        borderColor: 'rgb(255, 99, 132)',
        data:  {{ $jsd }},
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const configM = {
      type: 'bar',
      data: dataM,
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

    const myChartM = new Chart(
      document.getElementById('Merek').getContext('2d'),
      configM
    );
  </script>


 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>
<script>


    Chart.register(ChartDataLabels);

    var options = {
      type: 'bar',
      data: {
        labels:  @json($label),
        datasets: [{
          label: 'JUMLAH MEREK TRAFO',
          data:  {{ $jsd }},
          borderWidth: 1,
          backgroundColor: 'green',
          datalabels: {
              anchor: 'end',
              align: 'end',}
        }]
      },
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
    }

    var ctx = document.getElementById('chartJSContainer').getContext('2d');
    new Chart(ctx, options);


</script> --}}


