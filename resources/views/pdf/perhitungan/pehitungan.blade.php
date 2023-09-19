<table class="table" width="100%" border="1">
    <thead>
        <tr>
            <td rowspan="4" >
                <div align="center" style="margin-top: 80px;">NO.</div>
            </td>
            <td rowspan="4" >
                <div align="center" style="margin-top: 80px;">ID/NAMA</div>
            </td>
            <td rowspan="4" >
                <div align="center" style="margin-top: 80px;">GARDU</div>
            </td>
            <td rowspan="4" >
                <div align="center" style="margin-top: 80px;">PENYULANG</div>
            </td>
            <td colspan="24">
                <div align="center">ANALISA PERHITUNGAN TRAFO</div>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <div class="center" align="center">JUMLAH<br />
                    JURUSAN</div>
            </td>
            <td rowspan="3" >
                <div align="center">I Nom<br />
                    Trafo</div>
            </td>
            <td colspan="2" rowspan="3">
                <div align="center">Umur<br />
                    Trafo</div>
            </td>
            <td colspan="8">
                <div align="center">BEBAN
                    JURUSAN</div>
            </td>
            <td colspan="6" rowspan="2">
                <div align="center">ANALISA DERATING TRAFO</div>
            </td>
            <td colspan="2" rowspan="2">
                <div align="center">I Max</div>
            </td>
            <td colspan="2" rowspan="2">
                <div align="center">I Rata²</div>
            </td>
            <td colspan="2" rowspan="2">
                <div align="center">I Unbalance</div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div align="center">SIANG</div>
            </td>
            <td colspan="4">
                <div align="center">MALAM</div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
            </td>
            <td>
                <div align="center">N</div>
            </td>
            <td>
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
            </td>
            <td>
                <div align="center">N</div>
            </td>
            <td>
                <div align="center">Irms</div>
            </td>
            <td>
                <div align="center">Ipeak</div>
            </td>
            <td>
                <div align="center">THDF</div>
            </td>
            <td>
                <div align="center">kVA Baru</div>
            </td>
            <td>
                <div align="center">Derating Trafo</div>
            </td>
            <td>
                <div align="center">Rp Derating</div>
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
            <td align="right">
                <div align="center">1</div>
            </td>
            <td align="right">
                <div align="center">2</div>
            </td>
            <td align="right">
                <div align="center">3</div>
            </td>
            <td align="right">
                <div align="center">4</div>
            </td>
            <td align="right">
                <div align="center">5</div>
            </td>
            <td align="right">
                <div align="center">6</div>
            </td>
            <td align="right">
                <div align="center">7</div>
            </td>
            <td align="right">
                <div align="center">8</div>
            </td>
            <td align="right">
                <div align="center">9</div>
            </td>
            <td align="right">
                <div align="center">10</div>
            </td>
            <td align="right">
                <div align="center">11</div>
            </td>
            <td align="right">
                <div align="center">12</div>
            </td>
            <td align="right">
                <div align="center">13</div>
            </td>
            <td align="right">
                <div align="center">14</div>
            </td>
            <td align="right">
                <div align="center">15</div>
            </td>
            <td align="right">
                <div align="center">16</div>
            </td>
            <td align="right">
                <div align="center">17</div>
            </td>
            <td align="right">
                <div align="center">18</div>
            </td>
            <td align="right">
                <div align="center">19</div>
            </td>
            <td align="right">
                <div align="center">20</div>
            </td>
            <td align="right">
                <div align="center">21</div>
            </td>
            <td align="right">
                <div align="center">22</div>
            </td>
            <td align="right">
                <div align="center">23</div>
            </td>
            <td align="right">
                <div align="center">24</div>
            </td>
            <td align="right">
                <div align="center">25</div>
            </td>
            <td align="right">
                <div align="center">26</div>
            </td>
            <td align="right">
                <div align="center">27</div>
            </td>
            <td align="right">
                <div align="center">28</div>
            </td>
        </tr>
    </thead>
    <tbody>

        <?php
$count =[];
    foreach ($posts as $x => $post) {
        $count[] = [$post->s_jrs1_r,$post->s_jrs2_r,$post->s_jrs3_r,$post->s_jrs4_r,$post->s_jrs5_r];

    }

?>

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
            <td align="right">
                <div align="center"></div> {{ count(array_filter($count[$i]))   }}
            </td>
            <?php $i_nom_trafo = ($post->Master->kapasitas*1000)/(400 * pow(3,0.5))??null ;?>
            <td align="right">
                <div align="center"></div>{{ koma(round($i_nom_trafo,2))??null  }}
            </td>
            <?php $now = \Carbon\Carbon::now()  ?>
            <td  align="right">
                <div  align="center">{{ $post->Master->tahun != '' ? $now->year - $post->Master->tahun : "-"  }}</div>
            </td>
        <td> Tahun</td>


            @php
            $s_r = $post->s_jrs1_r + $post->s_jrs2_r + $post->s_jrs3_r + $post->s_jrs4_r + $post->s_jrs5_r ;
            $s_s =$post->s_jrs1_s + $post->s_jrs2_s + $post->s_jrs3_s + $post->s_jrs4_s + $post->s_jrs5_s;
            $s_t =$post->s_jrs1_t + $post->s_jrs2_t + $post->s_jrs3_t + $post->s_jrs4_t + $post->s_jrs5_t;
            $s_n =$post->s_jrs1_n + $post->s_jrs2_n + $post->s_jrs3_n + $post->s_jrs4_n + $post->s_jrs5_n;
            $m_r = $post->m_jrs1_r + $post->m_jrs2_r + $post->m_jrs3_r + $post->m_jrs4_r + $post->m_jrs5_r;
            $m_s =$post->m_jrs1_s + $post->m_jrs2_s + $post->m_jrs3_s + $post->m_jrs4_s + $post->m_jrs5_s ;
            $m_t =$post->m_jrs1_t + $post->m_jrs2_t + $post->m_jrs3_t + $post->m_jrs4_t + $post->m_jrs5_t;
            $m_n = $post->m_jrs1_n + $post->m_jrs2_n + $post->m_jrs3_n + $post->m_jrs4_n + $post->m_jrs5_n;
            @endphp
            <td align="right">
                <div align="center"></div>{{ koma($s_r) }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($s_s)  }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($s_t)  }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($s_n)  }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($m_r) }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($m_s)  }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($m_t) }}
            </td>
            <td align="right">
                <div align="center"></div>{{ koma($m_n) }}
            </td>
            <?php $rata2= ($m_r + $m_s +$m_t)/3;
                                         $irms=round($rata2/2,2)??null ;
                                    ?>
            <td align="right">
                <div align="center"></div>{{ koma( $irms)}}
            </td>
            <?php $ipeak=round($rata2,2)??null;  ?>
            <td align="right">
                <div align="center"></div>{{ koma($ipeak) }}
            </td>
            <?php $thd = (1.414 * $irms/ ($ipeak ?: 1))*100 ?>
            <td align="right">
                <div align="center"></div>{{ $thdf = round($thd) }} %
            </td>
            <?php $kv= $post->Master->kapasitas * $thd / 100;
                                                                 $kva= round($post->Master->kapasitas * $thd / 100,2)
                                                                ?>
            <td align="right">
                <div align="center"></div>{{ koma($kva)}}
            </td>
            <?php $dtrafo= round($post->Master->kapasitas - $kv ,2); ?>
            <td align="right">
                <div align="center">{{ koma($dtrafo) }}</div>
            </td>
            <td align="right">
                <div align="center"></div>{{ rupiah(round($dtrafo * $awal->wbp)) }}
            </td>
            <?php $s_imax1 = (max($s_r,$s_s,$s_t)/($i_nom_trafo?: 1))*100;
                                                          $s_imax2 = (0.8 * max($s_r,$s_s,$s_t)/($i_nom_trafo?: 1))*100;
                                                          $m_imax1 = (max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                                                          $m_imax2 = (0.8 * max($m_r,$m_s,$m_t)/($i_nom_trafo?: 1))*100;
                                                          $s_irata1 = ((($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                                                          $s_irata2 = (0.8 * (($s_r+$s_s+$s_t)/3)/($i_nom_trafo?: 1))*100;
                                                          $m_irata1 = ((($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                                                          $m_irata2 = (0.8 * (($m_r+$m_s+$m_t)/3)/($i_nom_trafo?: 1))*100;
                                                    ?>
            <td align="right">
                <div align="center"></div>{!! $post->revisi_travo == null ? koma(round($s_imax1,2)) : koma(round($s_imax2,2)) !!}%
            </td>
            <td align="right">
                <div align="center"></div>{!! $post->revisi_travo == null ? koma(round($m_imax1,2)) : koma(round($m_imax2,2)) !!}%
            </td>
            <td align="right">
                <div align="center"></div>{!! $post->revisi_travo == null ? koma(round($s_irata1,2)) : koma(round($s_irata2,2)) !!}%
            </td>
            <td align="right">
                <div align="center"></div>{!! $post->revisi_travo == null ? koma(round($m_irata1,2)) : koma(round($m_irata2,2)) !!}%
            </td>
            <?php  $s_unbl =  ((abs($s_r/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1)+abs($s_s/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1)+abs($s_t/((($s_r+$s_s+$s_t)/(3 ?: 1)?: 1))-1))/(3 ?: 1))*100;
                       $m_unbl = ((abs($m_r/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1)+abs($m_s/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1)+abs($m_t/((($m_r+$m_s+$m_t)/(3 ?: 1)?: 1))-1))/(3 ?: 1))*100;
                ?>
            <td align="right">
                <div align="center">{{ koma(round($s_unbl,2)) }}</div>
            </td>
            <td align="right">
                <div align="center">{{ koma(round($m_unbl,2)) }}</div>
            </td>
        </tr>
        @php
        $no++;
        @endphp
        @endforeach

    </tbody>
</table>
