<?php
foreach ($posts as $key => $post) {
             $s_n =$post->s_jrs1_n + $post->s_jrs2_n + $post->s_jrs3_n + $post->s_jrs4_n + $post->s_jrs5_n;

             $s_los_n[]=pow($s_n,2)*0.6842*0.9*0.5;
             $m_n = $post->m_jrs1_n + $post->m_jrs2_n + $post->m_jrs3_n + $post->m_jrs4_n + $post->m_jrs5_n;

             $m_los_n[]=pow($m_n,2)*0.6842*0.9*0.5;

             $s_lground[] = pow($post->s_tahanan,2) * $post->s_ground*0.9;
             $m_lground[] = pow($post->m_tahanan,2) * $post->m_ground*0.9;

             $s_tot_lost =  $s_los_n +  $s_lground ;
             $m_tot_lost =  $m_los_n +  $m_lground ;


//total kwh loss
          $m_los_n1=pow($m_n,2)*0.6842*0.9*0.5;
          $s_los_n1=pow($s_n,2)*0.6842*0.9*0.5;
          $s_lground1 = pow($post->s_tahanan,2) * $post->s_ground*0.9;
          $m_lground1 = pow($post->m_tahanan,2) * $post->m_ground*0.9;
          $s_tot_lost1 =  $s_los_n1 +  $s_lground1 ;
          $m_tot_lost1 =  $m_los_n1 +  $m_lground1 ;

           $s_tot_lkwh[] = ($s_tot_lost1 /1000)*19;
           $m_tot_lkwh[] = ($m_tot_lost1 /1000)*5;

           $s_tot_lkwh1 = ($s_tot_lost1 /1000)*19;
           $m_tot_lkwh1 = ($m_tot_lost1 /1000)*5;


           $siang[] = $s_tot_lkwh1*(($awal->lwbp1 + $awal->lwbp2)/2);
           $malam[] = $m_tot_lkwh1*$awal->wbp;
}


?>

<?php       $tot_n = array_sum($s_los_n) +  array_sum($m_los_n);
                      $tot_lground = array_sum($s_lground) +  array_sum($m_lground);
                      $tot_lost_t = array_sum($s_tot_lost) + array_sum($m_tot_lost);
                      $tot_tot_lkwh = array_sum($s_tot_lkwh) + array_sum($m_tot_lkwh);
                      $tot_siang_mlm = array_sum($siang) + array_sum($malam);
                    ?>        



<table width="100%" border="1" cellspacing="1">
        <thead>
            <tr>
                <td rowspan="6" >
                    <div align="center">No.</div>
                </td>
                <td rowspan="6" >
                    <div align="center">IDE/NAMA</div>
                </td>
                <td rowspan="6" >
                    <div align="center">TRAFO</div>
                </td>
                <td rowspan="6">
                    <div align="center">PENYULANG</div>
                </td>
                <td colspan="10">
                    <div align="center">LOSSES / SUSUT TEKNIK TRAFO</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2" >
                    <div align="center">Losses Netral<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" >
                    <div align="center">Losses Ground<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" >
                    <div align="center">Total Losses<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" >
                    <div align="center">Total Losses<br />
                        TRAFO 1 Hari (kWH)</div>
                </td>
                <td >
                    <div align="center">1 Tahun =</div>
                </td>
                <td > <?php  $tahun = ($tot_siang_mlm*30)*12;  ?>
                    <div align="center">{{ rupiah($tahun) }}</div>
                </td>
            </tr>
            <tr>
                <td >
                    <div align="center">1 Bulan =</div>
                </td>
                <td >  <?php  $bulan = $tot_siang_mlm*30;  ?>
                    <div align="center">{{ rupiah($bulan) }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" >  
                                       
                    <div align="center">{{ koma($tot_n) }}</div>
                </td>
                <td colspan="2" >                             
                    <div align="center"> {{ koma($tot_lground)}} </div>
                </td>
                <td colspan="2" >                             
                    <div align="center">{{ koma( $tot_lost_t) }} </div>
                </td>
                <td colspan="2" >                             
                    <div align="center">{{ koma($tot_tot_lkwh) }}</div>
                </td>
                <td >
                    <div align="center">1 Hari =</div>
                </td>
                <td > 
                    <div align="center">{{ rupiah($tot_siang_mlm) }} </div>
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
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
                <td>
                    <div align="center">SIANG</div>
                </td>
                <td>
                    <div align="center">MALAM</div>
                </td>
            </tr>

            <tr>
                <td >            
                    <div align="center">{{ koma(array_sum($s_los_n)) }} </div>
                </td>
                <td >            
                    <div align="center">{{ koma(array_sum($m_los_n)) }} </div>
                </td>
                <td >   
                             
                    <div align="center">{{ koma(array_sum($s_lground)) }} </div>
                </td>
                <td >            
                    <div align="center">{{ koma(array_sum($m_lground)) }} </div>
                </td>
                <td >            
                    <div align="center">{{ koma(array_sum($s_tot_lost)) }} </div>
                </td>
                <td >            
                    <div align="center">{{ koma(array_sum($m_tot_lost)) }}</div>
                </td>
                <td >            
                    <div align="center"> {{ koma(array_sum($s_tot_lkwh)) }}
                    </div>
                </td>
                <td >            
                    <div align="center"> {{ koma(array_sum($m_tot_lkwh)) }}</div>
                </td>
                <td > 
                    <div align="center"> {{ rupiah(array_sum($siang)) }}</div>
                </td>
                <td > 
                    <div align="center">{{ rupiah(array_sum($malam)) }} </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">1</div>
                </td>
                <td>
                    <div align="center">2</div>
                </td>
                <td>
                    <div align="center">3</div>
                </td>
                <td>
                    <div align="center">4</div>
                </td>
                <td>
                    <div align="center">5</div>
                </td>
                <td>
                    <div align="center">6</div>
                </td>
                <td>
                    <div align="center">7</div>
                </td>
                <td>
                    <div align="center">8</div>
                </td>
                <td>
                    <div align="center">9</div>
                </td>
                <td>
                    <div align="center">10</div>
                </td>
                <td>
                    <div align="center">11</div>
                </td>
                <td>
                    <div align="center">12</div>
                </td>
                <td>
                    <div align="center">13</div>
                </td>
                <td>
                    <div align="center">14</div>
                </td>
            </tr>
            <thead>
            <tbody>

                @php
                $no = 1 ;
                @endphp
                @foreach ( $posts as $i => $post )
                <tr>
                    <td align="right">
                        <div align="center">{{ $no }}</div>
                    </td>
                    <td align="right">
                        <div align="center"></div>{{ $post->Master->id_nama??null }}
                    </td>
                    <td align="right">
                        <div align="center"></div>{{ $post->Master->trafo??null }}
                    </td>
                    <td align="right">
                        <div align="center"></div>{{ $post->Master->penyulang??null }}
                    </td>

                    <?php    $s_n =$post->s_jrs1_n + $post->s_jrs2_n + $post->s_jrs3_n + $post->s_jrs4_n + $post->s_jrs5_n;
             $s_los_n=pow($s_n,2)*0.6842*0.9*0.5;
             $m_n = $post->m_jrs1_n + $post->m_jrs2_n + $post->m_jrs3_n + $post->m_jrs4_n + $post->m_jrs5_n;
             $m_los_n=pow($m_n,2)*0.6842*0.9*0.5;
      ?>
                    <td>
                        <div align="center"></div>{{ koma($s_los_n) }}
                    </td>
                    <td>
                        <div align="center"></div>{{ koma($m_los_n) }}
                    </td>
                    <?php
          $s_lground = pow($post->s_tahanan,2) * $post->s_ground*0.9;
          $m_lground = pow($post->m_tahanan,2) * $post->m_ground*0.9;
      ?>
                    <td>
                        <div align="center">{{ koma($s_lground) }}</div>
                    </td>
                    <td>
                        <div align="center">{{ koma($m_lground) }}</div>
                    </td>
                    <?php
          $s_tot_lost =  $s_los_n +  $s_lground ;
          $m_tot_lost =  $m_los_n +  $m_lground ;
      ?>
                    <td>
                        <div align="center">{{ koma($s_tot_lost) }}</div>
                    </td>
                    <td>
                        <div align="center"></div>{{ koma( $m_tot_lost) }}
                    </td>

                    <?php
                   $s_tot_lkwh = ($s_tot_lost/1000)*19;
                   $m_tot_lkwh = ($m_tot_lost/1000)*5;
                ?>
                    <td>
                        <div align="center">{{ koma($s_tot_lkwh) }}</div>
                    </td>
                    <td>
                        <div align="center">{{ koma($m_tot_lkwh) }}</div>
                    </td>
                    <?php
                         $siang = $s_tot_lkwh*(($awal->lwbp1 + $awal->lwbp2)/2);
                         $malam = $m_tot_lkwh*$awal->wbp;
                    ?>
                    <td>
                        <div align="center">{{ rupiah($siang) }}</div>
                    </td>
                    <td>
                        <div align="center">{{ rupiah($malam) }}</div>
                    </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
            </tbody>
    </table>



{{-- pembebanan --}}


<table width="100%" border="1" style='page-break-before:always'>
        <thead>
            <tr>
                <td rowspan="2">
                    <div align="center">No.</div>
                </td>
                <td rowspan="2">
                    <div align="center">IDE/NAMA</div>
                </td>
                <td rowspan="2">
                    <div align="center">TRAFO</div>
                </td>
                <td rowspan="2">
                    <div align="center">PENYULANG</div>
                </td>
                <td colspan="4">
                    <div align="center"> ANALISA KONDISI PEMBEBANAN TRAFO </div>
                </td>
            </tr>
            <tr>
                <td >
                    <div align="center" >Siang</div>
                </td>
                <td >
                    <div align="center" >MALAM</div>
                </td>
                <td >
                    <div align="center" >REKAP</div>
                </td>
                <td >
                    <div align="center" >KESIMPULAN</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">1</div>
                </td>
                <td>
                    <div align="center">2</div>
                </td>
                <td>
                    <div align="center">3</div>
                </td>
                <td>
                    <div align="center">4</div>
                </td>
                <td>
                    <div align="center">5</div>
                </td>
                <td>
                    <div align="center">6</div>
                </td>
                <td>
                    <div align="center">7</div>
                </td>
                <td>
                    <div align="center">8</div>
                </td>
            </tr>
        </thead>
        <body>

            @php
            $no = 1 ;
            @endphp
            @foreach ( $posts as $i => $post )
            <?php
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



                   ?>

            <tr>
                <td align="right">
                    <div align="center"></div>{{ $no }}
                </td>
                <td align="right">
                    <div align="center"></div>{{ $post->Master->id_nama??null }}
                </td>
                <td align="right">
                    <div align="center"></div>{{ $post->Master->trafo??null }}
                </td>
                <td align="right">
                    <div align="center"></div>{{ $post->Master->penyulang??null }}
                </td>
                <td align="right">
                    <div align="center" class="{{   $s_class  }}">{{ $s_stat }}</div>
                </td>
                <td align="right">
                    <div align="center" class="{{   $m_class  }}">{{ $m_stat }}</div>
                </td>
                <td align="right">
                    <div align="center" class="{{   $r_class  }}">{{ $r_tot_beban[] = $r_stat }}</div>
                </td>
                <td align="right">
                    <div align="center">{{ $kes  }}</div>
                </td>
            </tr>
            @php
            $no++;

            @endphp
            @endforeach
            </tbody>
    </table>


<?php
//Config::set('r_tot_beban', $r_tot_beban);
$GLOBALS['glb'] = $r_tot_beban;
?>
