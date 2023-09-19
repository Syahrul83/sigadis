<?php

foreach ($posts as $key => $post) {
            $s_r =
                $post->s_jrs1_r +
                $post->s_jrs2_r +
                $post->s_jrs3_r +
                $post->s_jrs4_r +
                $post->s_jrs5_r;
            $s_s =
                $post->s_jrs1_s +
                $post->s_jrs2_s +
                $post->s_jrs3_s +
                $post->s_jrs4_s +
                $post->s_jrs5_s;
            $s_t =
                $post->s_jrs1_t +
                $post->s_jrs2_t +
                $post->s_jrs3_t +
                $post->s_jrs4_t +
                $post->s_jrs5_t;
            $s_n =
                $post->s_jrs1_n +
                $post->s_jrs2_n +
                $post->s_jrs3_n +
                $post->s_jrs4_n +
                $post->s_jrs5_n;
            $m_r =
                $post->m_jrs1_r +
                $post->m_jrs2_r +
                $post->m_jrs3_r +
                $post->m_jrs4_r +
                $post->m_jrs5_r;
            $m_s =
                $post->m_jrs1_s +
                $post->m_jrs2_s +
                $post->m_jrs3_s +
                $post->m_jrs4_s +
                $post->m_jrs5_s;
            $m_t =
                $post->m_jrs1_t +
                $post->m_jrs2_t +
                $post->m_jrs3_t +
                $post->m_jrs4_t +
                $post->m_jrs5_t;
            $m_n =
                $post->m_jrs1_n +
                $post->m_jrs2_n +
                $post->m_jrs3_n +
                $post->m_jrs4_n +
                $post->m_jrs5_n;
            $i_nom_trafo =
                ($post->Master->kapasitas * 1000) / (400 * pow(3, 0.5)) ?? null;

            if ($post->revisi_travo == null) {
                $s_imax = (max($s_r, $s_s, $s_t) / ($i_nom_trafo?: 1)) * 100;
            } else {
                $s_imax = ((0.8 * max($s_r, $s_s, $s_t)) / ($i_nom_trafo?: 1)) * 100;
            }
            $s_imax_hitung[][$post->Master->kapasitas] = $s_imax;

            $kapasitas[] = $post->Master->kapasitas;

//IMAX
            if($post->revisi_travo == null ){
                    $m_imax = (max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                }else {
                    $m_imax = (0.8 * max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                }
                $m_imax_hitung[][$post->Master->kapasitas] = $m_imax;


//IRATA
                if($post->revisi_travo == null ){
                    $s_irata = ((($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                }else {
                    $s_irata = (0.8 * (($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                }
                $s_irata_hitung[][$post->Master->kapasitas] = $s_irata;

                if($post->revisi_travo == null ){
                    $m_irata = ((($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                }else {
                    $m_irata = (0.8 * (($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                }
                $m_irata_hitung[][$post->Master->kapasitas] = $m_irata;


        }



   function hasil($hitung,$a,$b)
    {

       $tess=[];
       if(1 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                   if ($val < 40) {
                  $tess[] = $val;
                    }
                }
            }
        }

    }
    if(2 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                   if ($val >= 40 && $val <= 80) {
                  $tess[] = $val;
                    }
                }
            }
        }
    }
    if(3 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                   if ($val >= 80 && $val <= 100) {
                  $tess[] = $val;
                    }
                }
            }
        }
    }


    if(4 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                   if ($val > 100) {
                  $tess[] = $val;
                    }
                }
            }
        }

    }



        return count($tess)??0;



   }


   function hasil2($hitung,$imax,$a,$b)
    {

       $tess=[];
       if(1 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                if ($val < 40) {
                  $tess[] = $val;
                    }
                }
            }
        }

    }

    //tesss

    if(2 == $b){
$imx=[];
$irata=[];
        foreach ( $imax as $k => $vl) {

           foreach ($vl as $ik => $vls) {
               if ( $ik == $a) {
              //  if ($vls >= 40 && $vls <= 80){
                    $imx[][] = $vls;
               //     }
                }
            }
        }

       // dd($imx);

       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {

              //     if ($val >= 40 && $val <= 80) {

                    $irata[][1] = $val;
               //     }
            }
            }
        }

        //dd( $imx);
        //dd( $irata);
       // $tess = array_merge( $irata, $imx);
       //  dd( $tess);

       $out = array();
foreach ( $irata as $key => $value){
    $out[] = array_merge($value, $imx[$key] );
}
//dd($out);

         foreach ($out as $key => $merger) {
               if(  $merger[0] >= 40 &&   $merger[1] <= 80){

                $tess[] =  $merger[0] ;
              }

         }
//dd($tesis);

    }


    if(3 == $b){
    $imx=[];
    $irata=[];
        foreach ( $imax as $k => $vl) {

           foreach ($vl as $ik => $vls) {
               if ( $ik == $a) {
                    $imx[][] = $vls;

                }
            }
        }


       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                    $irata[][1] = $val;
                 }
            }
        }



        $out = array();
        foreach ( $irata as $key => $value){
        $out[] = array_merge($value, $imx[$key] );
            }


         foreach ($out as $key => $merger) {
               if(  $merger[0] >= 80 &&   $merger[1] <= 100){
                $tess[] =  $merger[0] ;
              }

         }

    }



    if(4 == $b){
       foreach ( $hitung as $key => $value) {
           $ko[] = $key;
           foreach ($value as $i => $val) {
               if ($i == $a) {
                   if ($val > 100) {
                  $tess[] = $val;
                    }
                }
            }
        }

    }



        return count($tess)??0;



   }


?>

<h5>I MAX</h5>

    <table border="1" cellspacing="2" cellpadding="2">
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

       <table border="1" cellspacing="2" cellpadding="2">
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
</div>

<div style='page-break-before:always'>
<div class="row">
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


<div style='page-break-before:always'>

                <?php
                    foreach ($posts as $key => $post) {
                        $merek[]=$post->Master->merek;
                    }
                    $ar = array_replace($merek,array_fill_keys(array_keys($merek, null),''));
                    //dd( $merek);
                   $merek = array_count_values($ar);
                    ?>

                       <h3> MERK TRAFO </h3>
                <table width="70%" border="1" cellspacing="1" cellpadding="1">
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


            <!-- /.card-body-->

<br> <br>
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

</div>


<div style='page-break-before:always'>
                <h3 >

                  DAYA TRAFO
                </h3>



                <?php
                    foreach ($posts as $key => $post) {
                        $daya[]=$post->Master->kapasitas;
                    }

                   // dd($daya);
                    $ar = array_replace($daya,array_fill_keys(array_keys($daya, null),'0'));
                    //dd( $merek);
                   $daya = array_count_values($ar);
                    ?>




<table width="70%" border="1" cellspacing="1" cellpadding="1">
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
                            $label1[]=$i;
                            $data12[]=$val;
                       @endphp
                        @endforeach
                         <tr>
                             <td>Total</td>
                             <td>{{ array_sum($tot) }}</td>
                             <td>UNIT</td>
                            </tr>
                    </tbody>
                </table>

             <br> <br>
<div class="row">
    <div class="col-md-7">

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
    $jsd = json_encode($data12);
@endphp


<script>
    const labe = @json($label1);

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

</div>




<div style='page-break-before:always'>



    <h3>
                  UMUR TRAFO
                </h3>



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




<table width="70%" border="1" cellspacing="1" cellpadding="1">
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

             <br> <br>
<div class="row">
    <div class="col-md-7">

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
</div>









<div style='page-break-before:always'>

<h3>
    PEMBEBANAN
  </h3>
                <?php




            foreach ( $posts as $i => $post ){

            $s_r = $post->s_jrs1_r + $post->s_jrs2_r + $post->s_jrs3_r + $post->s_jrs4_r + $post->s_jrs5_r ;
            $s_s =$post->s_jrs1_s + $post->s_jrs2_s + $post->s_jrs3_s + $post->s_jrs4_s + $post->s_jrs5_s;
            $s_t =$post->s_jrs1_t + $post->s_jrs2_t + $post->s_jrs3_t + $post->s_jrs4_t + $post->s_jrs5_t;
            $s_n =$post->s_jrs1_n + $post->s_jrs2_n + $post->s_jrs3_n + $post->s_jrs4_n + $post->s_jrs5_n;
            $m_r = $post->m_jrs1_r + $post->m_jrs2_r + $post->m_jrs3_r + $post->m_jrs4_r + $post->m_jrs5_r;
            $m_s =$post->m_jrs1_s + $post->m_jrs2_s + $post->m_jrs3_s + $post->m_jrs4_s + $post->m_jrs5_s ;
            $m_t =$post->m_jrs1_t + $post->m_jrs2_t + $post->m_jrs3_t + $post->m_jrs4_t + $post->m_jrs5_t;
            $m_n = $post->m_jrs1_n + $post->m_jrs2_n + $post->m_jrs3_n + $post->m_jrs4_n + $post->m_jrs5_n;
            $i_nom_trafo = ($post->Master->kapasitas*1000)/(400 * pow(3,0.5))??null;

            if($post->revisi_travo == null ){
                    $s_imax = (max($s_r,$s_s,$s_t)/($i_nom_trafo?: 1))*100;
                }else {
                    $s_imax = (0.8 * max($s_r,$s_s,$s_t)/($i_nom_trafo?: 1))*100;
                }

                if($post->revisi_travo == null ){
                    $m_imax = (max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                }else {
                    $m_imax = (0.8 * max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                }

                if($post->revisi_travo == null ){
                    $s_irata = ((($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                }else {
                    $s_irata = (0.8 * (($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                }

                if($post->revisi_travo == null ){
                    $m_irata = ((($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                }else {
                    $m_irata = (0.8 * (($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                }
                 $s_unbl =  ((abs($s_r/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1)+abs($s_s/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1)+abs($s_t/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1))/(3 ?: 1))*100;
                 $m_unbl = ((abs($m_r/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1)+abs($m_s/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1)+abs($m_t/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1))/(3 ?: 1))*100;

               //status siang
                 if(  $s_imax >= 100)  {

                    $s_stat = "OVERBLAST";
                    $s_class = "bg-black color-palette";
                }elseif ($s_imax > 80) {

                    if($s_irata <= 80){
                        $s_stat = "UNBALANCE";
                        $s_class = "bg-danger disabled color-palette";
                    }else {
                        $s_stat = "OVERLOAD";
                        $s_class = "bg-danger color-palette";
                    }


                }else {
                    if ( $s_unbl > 25) {
                        $s_stat = "UNBALANCE";
                        $s_class = "bg-danger disabled color-palette";
                    } elseif($s_imax < 40) {
                        $s_stat = "UNDERLOAD";
                        $s_class = "bg-warning color-palette";
                    }else {
                        $s_stat = "NORMAL";
                        $s_class = "bg-success color-palette";
                    }

                }
                 //status siang

                //status malam

                if(  $m_imax >= 100)  {

                    $m_stat = "OVERBLAST";
                    $m_class = "bg-black color-palette";
                    }elseif ($m_imax > 80) {

                    if($m_irata <= 80){
                        $m_stat = "UNBALANCE";
                        $m_class = "bg-danger disabled color-palette";
                    }else {
                        $m_stat = "OVERLOAD";
                        $m_class = "bg-danger color-palette";
                    }


                    }else {
                    if ( $m_unbl > 25) {
                        $m_stat = "UNBALANCE";
                        $m_class = "bg-danger disabled color-palette";
                    } elseif($m_imax < 40) {
                        $m_stat = "UNDERLOAD";
                        $m_class = "bg-warning color-palette";
                    }else {
                        $m_stat = "NORMAL";
                        $m_class = "bg-success color-palette";
                    }

                    }
                //status malam

                //rekap pembebanan trafo

                    if (max($s_imax,$m_imax)>=100) {
                        $r_stat = "OVERBLAST";
                        $r_class = "bg-black color-palette";
                    }elseif (max($s_imax,$m_imax)>80) {
                        if (max($s_irata,$m_irata)<=80) {
                            $r_stat = "UNBALANCE";
                            $r_class = "bg-danger disabled color-palette";
                        } else {
                            $r_stat = "OVERLOAD";
                            $r_class = "bg-danger color-palette";
                        }

                    }else {
                        if (max($s_unbl,$m_unbl)>25) {
                            $r_stat = "UNBALANCE";
                            $r_class = "bg-danger disabled color-palette";
                        } elseif(max($s_imax,$m_imax)<40) {
                            $r_stat = "UNDERLOAD";
                            $r_class = "bg-warning color-palette";
                        }else {
                            $r_stat = "NORMAL";
                            $r_class = "bg-success color-palette";
                        }

                    }

                    //keterangan

                    if ($r_stat ==  "NORMAL") {
                        $kes = "Lakukan pengukuran dan pemeliharaan secara berkala";
                    } else {
                        if ($r_stat ==  "UNBALANCE") {
                            $kes = "Lakukan pemerataan beban per jurusan / Lakukan pecah antar jurusan";
                        } elseif($r_stat ==  "UNDERLOAD") {
                            $kes = "Lakukan penambahan beban optimal / mutasi trafo dengan kapasitas lebih kecil";
                        }  elseif($r_stat ==  "OVERLOAD") {
                            $kes = "Lakukan uprating Trafo / rencanakan pasang Trafo sisip";
                        }else {
                            $kes =  "SEGERA LAKUKAN UPRATING / SEGERA PASANG GARDU SISIP";
                        }

                    }






                   $post->Master->id_nama??null;


                 $post->Master->trafo??null;


                $post->Master->penyulang??null;
                $s_stat;

                 $m_stat;

                $r_tot_beban[] = $r_stat;

                 $kes;

                }


                $um1=[];
                $um2=[];
                $um3=[];
                $um4=[];
                $um5=[];
                  $beban= $r_tot_beban;

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


<table width="70%" border="1" cellspacing="1" cellpadding="1">
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

            <br> <br>
            <!-- /.card-body-->

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

</div>
