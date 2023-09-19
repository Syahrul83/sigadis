
<h5>I MAX</h5>
<div class="card-body table-responsive p-0" style="height: 500px;">
    <table class="table table-bordered table-head-fixed text-nowrap h6">
        <thead>
            <tr>

                <td rowspan="2" width="136">
                    <div align="center">KAPASITAS</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">&lt; 40%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">40% - 80%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">80% - 100% </div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">&gt; 100%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">TOTAL</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
            </tr>
        </thead>

        <tbody>
            @php




            @endphp
            <?php  asort($kapasitas); ?>
            @foreach ( array_unique($kapasitas) as $kps )
            <?php $kola[] = $kps; ?>
            <tr>
                <td>{{ $kp[]=$kps }}</td>
                <td>{{ $s_ip=hasil($s_imax_hitung,$kps,1) }}</td>
                <td>{{ $m_ip=hasil($m_imax_hitung,$kps,1) }}</td>
                <td>{{ max(hasil($s_imax_hitung,$kps,1),hasil($m_imax_hitung,$kps,1))  }}</td>
                <td>{{ $s_ipm=hasil($s_imax_hitung,$kps,2) }}</td>
                <td>{{ $m_ipm=hasil($m_imax_hitung,$kps,2) }}</td>
                <td>{{ max(hasil($s_imax_hitung,$kps,2), hasil($m_imax_hitung,$kps,2))  }}</td>
                <td>{{ $s_ipe=hasil($s_imax_hitung,$kps,3) }}</td>
                <td>{{ $m_ipe=hasil($m_imax_hitung,$kps,3) }}</td>
                <td>{{ max(hasil($s_imax_hitung,$kps,3), hasil($m_imax_hitung,$kps,3))  }}</td>
                <td>{{ $s_ie=hasil($s_imax_hitung,$kps,4) }}</td>
                <td>{{ $m_ie=hasil($m_imax_hitung,$kps,4) }}</td>
                <td>{{ max(hasil($s_imax_hitung,$kps,4),hasil($m_imax_hitung,$kps,4))  }}</td>
                <td>{{ $s_tot_i=$s_ip + $s_ipm + $s_ipe + $s_ie }}</td>
                <td>{{$m_tot_i= $m_ip + $m_ipm + $m_ipe + $m_ie }}</td>
                <td>{{ max($s_tot_i,$m_tot_i) }}</td>
            </tr>

            <?php
            $s_ip1[]=hasil($s_imax_hitung,$kps,1) ;
             $m_ip1[]=hasil($m_imax_hitung,$kps,1) ;
            $r_ip1[]= max(hasil($s_imax_hitung,$kps,1),hasil($m_imax_hitung,$kps,1))  ;
             $s_ipm1[]=hasil($s_imax_hitung,$kps,2) ;
             $m_ipm1[]=hasil($m_imax_hitung,$kps,2) ;
            $r_ipm1[] = max(hasil($s_imax_hitung,$kps,2), hasil($m_imax_hitung,$kps,2))  ;
             $s_ipe1[]=hasil($s_imax_hitung,$kps,3) ;
             $m_ipe1[]=hasil($m_imax_hitung,$kps,3) ;
            $r_ipe1[]= max(hasil($s_imax_hitung,$kps,3), hasil($m_imax_hitung,$kps,3))  ;
             $s_ie1[]=hasil($s_imax_hitung,$kps,4) ;
             $m_ie1[]=hasil($m_imax_hitung,$kps,4) ;
             $r_ie1[] = max(hasil($s_imax_hitung,$kps,4),hasil($m_imax_hitung,$kps,4))  ;
             $s_tot_i1[]=$s_ip + $s_ipm + $s_ipe + $s_ie ;
            $m_tot_i1[]= $m_ip + $m_ipm + $m_ipe + $m_ie ;
            $r_tot1[]= max($s_tot_i,$m_tot_i) ;

        ?>
            @endforeach

        </tbody>
        <tfoot>

            <tr>
                <th>TOTAL</th>
                <th>{{ array_sum($s_ip1) }}</th>
                <th>{{ array_sum($m_ip1) }}</th>
                <th>{{ array_sum($r_ip1)}}</th>
                <th>{{ array_sum($s_ipm1)}}</th>
                <th>{{ array_sum($m_ipm1)}}</th>
                <th>{{ array_sum($r_ipm1)}}</th>
                <th>{{ array_sum($s_ipe1) }}</th>
                <th>{{ array_sum($m_ipe1) }}</th>
                <th>{{array_sum($r_ipe1) }}</th>
                <th>{{ array_sum($s_ie1) }}</th>
                <th>{{ array_sum($m_ie1) }}</th>
                <th>{{ array_sum($r_ie1)}}</th>
                <th>{{ array_sum($s_tot_i1) }}</th>
                <th>{{array_sum($m_tot_i1) }}</th>
                <th>{{ array_sum($r_tot1)}}</th>
            </tr>
        </tfoot>

    </table>
</div>

<h5>I RATA -RATA</h5>
<div class="card-body table-responsive p-0" style="height: 500px;">
    <table class="table table-bordered table-head-fixed text-nowrap h6">
        <thead>
            <tr>

                <td rowspan="2" width="136">
                    <div align="center">KAPASITAS</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">&lt; 40%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">40% - 80%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">80% - 100% </div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">&gt; 100%</div>
                </td>
                <td colspan="3" width="204">
                    <div align="center">TOTAL</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">REKAP</div>
                </td>
            </tr>
        </thead>

        <tbody>
            @foreach ( array_unique($kapasitas) as $kps )

            <tr>
                <td>{{ $kps }}</td>
                <td>{{ $s_ip=hasil($s_irata_hitung,$kps,1) }}</td>
                <td>{{ $m_ip=hasil($m_irata_hitung,$kps,1) }}</td>
                <td>{{ max(hasil($s_irata_hitung,$kps,1),hasil($m_irata_hitung,$kps,1))  }}</td>
                <td>{{ $s_ipm=hasil2($s_irata_hitung,$s_imax_hitung,$kps,2) }}</td>
                <td>{{ $m_ipm=hasil2($m_irata_hitung,$m_imax_hitung,$kps,2) }}</td>
                <td>{{ max(hasil2($s_irata_hitung,$s_imax_hitung,$kps,2), hasil2($m_irata_hitung,$m_imax_hitung,$kps,2))  }}</td>
                <td>{{ $s_ipe=hasil2($s_irata_hitung,$s_imax_hitung,$kps,3) }}</td>
                <td>{{ $m_ipe=hasil2($m_irata_hitung,$m_imax_hitung,$kps,3) }}</td>
                <td>{{ max(hasil2($s_irata_hitung,$s_imax_hitung,$kps,3), hasil2($m_irata_hitung,$m_imax_hitung,$kps,3))  }}</td>
                <td>{{ $s_ie=hasil($s_irata_hitung,$kps,4) }}</td>
                <td>{{ $m_ie=hasil($m_irata_hitung,$kps,4) }}</td>
                <td>{{ max(hasil($s_irata_hitung,$kps,4),hasil($m_irata_hitung,$kps,4))  }}</td>
                <td>{{ $s_tot_i=$s_ip + $s_ipm + $s_ipe + $s_ie }}</td>
                <td>{{$m_tot_i= $m_ip + $m_ipm + $m_ipe + $m_ie }}</td>
                <td>{{ max($s_tot_i,$m_tot_i) }}</td>
            </tr>

            <?php
            $s_ip2[]=hasil($s_irata_hitung,$kps,1) ;
             $m_ip2[]=hasil($m_irata_hitung,$kps,1) ;
            $r_ip2[]= max(hasil($s_irata_hitung,$kps,1),hasil($m_irata_hitung,$kps,1))  ;
             $s_ipm2[]=hasil2($s_irata_hitung,$s_imax_hitung,$kps,2) ;
             $m_ipm2[]=hasil2($m_irata_hitung,$m_imax_hitung,$kps,2) ;
            $r_ipm2[] = max(hasil2($s_irata_hitung,$s_imax_hitung,$kps,2), hasil2($m_irata_hitung,$m_imax_hitung,$kps,2));
             $s_ipe2[]=hasil2($s_irata_hitung,$s_imax_hitung,$kps,3) ;
             $m_ipe2[]=hasil2($m_irata_hitung,$m_imax_hitung,$kps,3) ;
            $r_ipe2[]= max(hasil2($s_irata_hitung,$s_imax_hitung,$kps,3), hasil2($m_irata_hitung,$m_imax_hitung,$kps,3));
             $s_ie2[]=hasil($s_irata_hitung,$kps,4) ;
             $m_ie2[]=hasil($m_irata_hitung,$kps,4) ;
             $r_ie2[] = max(hasil($s_irata_hitung,$kps,4),hasil($m_irata_hitung,$kps,4))  ;
             $s_tot_i2[]=$s_ip + $s_ipm + $s_ipe + $s_ie ;
            $m_tot_i2[]= $m_ip + $m_ipm + $m_ipe + $m_ie ;
            $r_tot2[]= max($s_tot_i,$m_tot_i) ;

        ?>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
                <th>TOTAL</th>
                <th>{{ array_sum($s_ip2) }}</th>
                <th>{{ array_sum($m_ip2) }}</th>
                <th>{{ array_sum($r_ip2)}}</th>
                <th>{{ array_sum($s_ipm2)}}</th>
                <th>{{ array_sum($m_ipm2)}}</th>
                <th>{{ array_sum($r_ipm2)}}</th>
                <th>{{ array_sum($s_ipe2) }}</th>
                <th>{{ array_sum($m_ipe2) }}</th>
                <th>{{array_sum($r_ipe2) }}</th>
                <th>{{ array_sum($s_ie2) }}</th>
                <th>{{ array_sum($m_ie2) }}</th>
                <th>{{ array_sum($r_ie2)}}</th>
                <th>{{ array_sum($s_tot_i2) }}</th>
                <th>{{array_sum($m_tot_i2) }}</th>
                <th>{{ array_sum($r_tot2)}}</th>
            </tr>

        </tfoot>

    </table>

</div>

<br><br>
<div class="row">

<div class="col-md-6">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                UNDERLOAD < 40 %
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
            <canvas id="myChart"></canvas>
          </div>

        <!-- /.card-body-->

    </div>
</div>




<div class="col-md-6">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                OVERLOAD 80% - 100%
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
            <canvas id="myChart1"></canvas>
          </div>

        <!-- /.card-body-->

    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    OVERBLAST > 100 %
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
                <canvas id="myChart2"></canvas>
              </div>

            <!-- /.card-body-->

        </div>
    </div>
</div>

<?php
//dd( json_encode($s_ie) );

 ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0-rc"></script>
<script>
    const labels = {!! json_encode($kp)!!};

    const data = {
      labels: labels,
      datasets: [{
        label: 'JUMLAH UNDERLOAD ',
        backgroundColor: 'blue',
        borderColor: 'rgb(255, 99, 132)',
        data: {{  json_encode($r_ip1) }},
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const config = {
      type: 'bar',
      data: data,
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
    const myChart = new Chart(
      document.getElementById('myChart').getContext('2d'),
      config
    );
  </script>


<script>
    const label1 ={!! json_encode($kp)!!};

    const data1 = {
      labels: label1,
      datasets: [{
        label: 'JUMLAH OVERLOAD',
        backgroundColor: 'orange',
        borderColor: 'rgb(255, 99, 132)',
        data: {{ json_encode($r_ipe1) }},
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const config1 = {
      type: 'bar',
      data: data1,
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
    const myChart1 = new Chart(
      document.getElementById('myChart1').getContext('2d'),
      config1
    );
  </script>

<script>
    const label2 = {!! json_encode($kp)!!};

    const data2 = {
      labels: label2,
      datasets: [{
        label: 'JUMLAH OVERBLAST',
        backgroundColor: 'red',
        borderColor: 'rgb(255, 99, 132)',
        data:  {{ json_encode($r_ie1) }},
        datalabels: {
            anchor: 'end',
              align: 'end',}
      }]
    };

    const config2 = {
      type: 'bar',
      data: data2,
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
    const myChart2 = new Chart(
      document.getElementById('myChart2').getContext('2d'),
      config2
    );
  </script>


