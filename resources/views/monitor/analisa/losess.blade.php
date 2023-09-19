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

<div wire:ignore class="card-body">
    <div class="card-header">
        <div class="row">
            <h5>LOSSES / SUSUT TEKNIK TRAFO</h5>
        </div>
    </div>

    <table id="example2" class="table table-bordered table-head-fixed text-nowrap h6">
        <thead>
            <tr>
                <td rowspan="6" width="68">
                    <div align="center">No.</div>
                </td>
                <td rowspan="6" width="68">
                    <div align="center">IDE/NAMA</div>
                </td>
                <td rowspan="6" width="68">
                    <div align="center">TRAFO</div>
                </td>
                <td rowspan="6" width="90">
                    <div align="center">PENYULANG</div>
                </td>
                <td colspan="10" width="680">
                    <div align="center">LOSSES / SUSUT TEKNIK TRAFO</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2" width="136">
                    <div align="center">Losses Netral<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" width="136">
                    <div align="center">Losses Ground<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" width="136">
                    <div align="center">Total Losses<br />
                        TRAFO (Watt)</div>
                </td>
                <td colspan="2" rowspan="2" width="136">
                    <div align="center">Total Losses<br />
                        TRAFO 1 Hari (kWH)</div>
                </td>
                <td width="68">
                    <div align="center">1 Tahun =</div>
                </td>
                <td width="68"> <?php  $tahun = ($tot_siang_mlm*30)*12;  ?>
                    <div align="center">{{ rupiah($tahun) }}</div>
                </td>
            </tr>
            <tr>
                <td width="68">
                    <div align="center">1 Bulan =</div>
                </td>
                <td width="68">  <?php  $bulan = $tot_siang_mlm*30;  ?>
                    <div align="center">{{ rupiah($bulan) }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" width="136">  
                                       
                    <div align="center">{{ koma($tot_n) }}</div>
                </td>
                <td colspan="2" width="136">                             
                    <div align="center"> {{ koma($tot_lground)}} </div>
                </td>
                <td colspan="2" width="136">                             
                    <div align="center">{{ koma( $tot_lost_t) }} </div>
                </td>
                <td colspan="2" width="136">                             
                    <div align="center">{{ koma($tot_tot_lkwh) }}</div>
                </td>
                <td width="68">
                    <div align="center">1 Hari =</div>
                </td>
                <td width="68"> 
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
                <td width="68">            
                    <div align="center">{{ koma(array_sum($s_los_n)) }} </div>
                </td>
                <td width="68">            
                    <div align="center">{{ koma(array_sum($m_los_n)) }} </div>
                </td>
                <td width="68">   
                             
                    <div align="center">{{ koma(array_sum($s_lground)) }} </div>
                </td>
                <td width="68">            
                    <div align="center">{{ koma(array_sum($m_lground)) }} </div>
                </td>
                <td width="68">            
                    <div align="center">{{ koma(array_sum($s_tot_lost)) }} </div>
                </td>
                <td width="68">            
                    <div align="center">{{ koma(array_sum($m_tot_lost)) }}</div>
                </td>
                <td width="68">            
                    <div align="center"> {{ koma(array_sum($s_tot_lkwh)) }}
                    </div>
                </td>
                <td width="68">            
                    <div align="center"> {{ koma(array_sum($m_tot_lkwh)) }}</div>
                </td>
                <td width="68"> 
                    <div align="center"> {{ rupiah(array_sum($siang)) }}</div>
                </td>
                <td width="68"> 
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
</div>
