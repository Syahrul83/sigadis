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


//dd( hasil2($s_irata_hitung,$s_imax_hitung,50,2));

?>

<h4>Grafik dan Tabel Data</h4>


<div class="row">
    <div class="col-12 ">
        <div class="card card-primary card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-imax-tab" data-toggle="pill" href="#custom-tabs-one-imax" role="tab" aria-controls="custom-tabs-one-imax" aria-selected="true">I MAX & I RATA-RATA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-merek-tab" data-toggle="pill" href="#custom-tabs-one-merek" role="tab" aria-controls="custom-tabs-one-merek" aria-selected="false">MEREK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-daya-tab" data-toggle="pill" href="#custom-tabs-one-daya" role="tab" aria-controls="custom-tabs-one-daya" aria-selected="false">DAYA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-umur-tab" data-toggle="pill" href="#custom-tabs-one-umur" role="tab" aria-controls="custom-tabs-one-umur" aria-selected="false">UMUR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-umur-tab" data-toggle="pill" href="#custom-tabs-one-pembebanan" role="tab" aria-controls="custom-tabs-one-pembebanan" aria-selected="false">PEMBEBANAN</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
              <div class="tab-pane fade show active" id="custom-tabs-one-imax" role="tabpanel" aria-labelledby="custom-tabs-one-imax-tab">
                @include('monitor.analisa.grafik.imax')
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-merek" role="tabpanel" aria-labelledby="custom-tabs-one-merek-tab">
                @include('monitor.analisa.grafik.merek')
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-daya" role="tabpanel" aria-labelledby="custom-tabs-one-daya-tab">
                @include('monitor.analisa.grafik.daya')
            </div>
              <div class="tab-pane fade" id="custom-tabs-one-umur" role="tabpanel" aria-labelledby="custom-tabs-one-umur-tab">
                @include('monitor.analisa.grafik.umur')
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-pembebanan" role="tabpanel" aria-labelledby="custom-tabs-one-pembebanan-tab">
                @include('monitor.analisa.grafik.pembebanan')
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
  </div>

