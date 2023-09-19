
<?php
foreach( $posts as $pos){

    $jrs5[] = $pos->s_jrs5_r??null;

}
?>


@if(array_sum($jrs5) == null)


<table width="100%" border="1">

    <thead>

        <tr>
            <td rowspan="6">
                <div align="center">No.</div>
            </td>
            <td  rowspan="6">
                <div align="center">IDE/NAMA</div>
            </td>
            <td rowspan="6">
                <div align="center">TRAFO</div>
            </td>
            <td  rowspan="6">
                <div align="center">PENYULANG</div>
            </td>
            <td colspan="34">
                <div align="center">ANALISA SIANG</div>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="3">
                <div align="center">TEGANGAN ( Volt )</div>
            </td>
            <td colspan="28">
                <div align="center">KONDISI GARDU</div>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div align="center">JURUSAN 1</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 2</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 3</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 4</div>
            </td>
            {{-- <td colspan="7">
                <div align="center">JURUSAN 5</div>
            </td> --}}
        </tr>
        <tr>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            {{-- <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td> --}}
        </tr>
        <tr>
            <td colspan="3"> 
                <div align="center">ANTAR FASA </div>
            </td>
            <td colspan="3"> 
                <div align="center">FASA TANAH </div>
            </td>
        </tr>
        <tr>
            <td> 
                <div align="center">R - S </div>
            </td>
            <td> 
                <div align="center">R - T </div>
            </td>
            <td> 
                <div align="center">S - T </div>
            </td>
            <td> 
                <div align="center">R - N </div>
            </td>
            <td> 
                <div align="center">S - N </div>
            </td>
            <td> 
                <div align="center">T - N </div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
            </td>
            {{-- <td>
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
            </td> --}}
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
                <div align="center" >5</div>
            </td>
            <td>
                <div align="center" >6</div>
            </td>
            <td>
                <div align="center" >7</div>
            </td>
            <td>
                <div align="center" >8</div>
            </td>
            <td>
                <div align="center" >9</div>
            </td>
            <td>
                <div align="center" >10</div>
            </td>
            <td>
                <div align="center" >11</div>
            </td>
            <td>
                <div align="center" >12</div>
            </td>
            <td>
                <div align="center" >13</div>
            </td>
            <td>
                <div align="center" >14</div>
            </td>
            <td>
                <div align="center" >15</div>
            </td>
            <td>
                <div align="center" >16</div>
            </td>
            <td>
                <div align="center" >17</div>
            </td>
            <td>
                <div align="center" >18</div>
            </td>
            <td>
                <div align="center" >19</div>
            </td>
            <td>
                <div align="center" >20</div>
            </td>
            <td>
                <div align="center" >21</div>
            </td>
            <td>
                <div align="center" >22</div>
            </td>
            <td>
                <div align="center" >23</div>
            </td>
            <td>
                <div align="center" >24</div>
            </td>
            <td>
                <div align="center" >25</div>
            </td>
            <td>
                <div align="center" >26</div>
            </td>
            <td>
                <div align="center" >27</div>
            </td>
            <td>
                <div align="center" >28</div>
            </td>
            <td>
                <div align="center" >29</div>
            </td>
            <td>
                <div align="center" >30</div>
            </td>
            <td>
                <div align="center" >31</div>
            </td>
            <td>
                <div align="center" >32</div>
            </td>
            <td>
                <div align="center" >33</div>
            </td>
            <td>
                <div align="center" >34</div>
            </td>
            <td>
                <div align="center" >35</div>
            </td>
            <td>
                <div align="center" >36</div>
            </td>
            <td>
                <div align="center" >37</div>
            </td>
            <td>
                <div align="center" >38</div>
            </td>
            {{-- <td>
                <div align="center" >39</div>
            </td>
            <td>
                <div align="center" >40</div>
            </td>
            <td>
                <div align="center" >41</div>
            </td>
            <td>
                <div align="center" >42</div>
            </td>
            <td>
                <div align="center" >43</div>
            </td>
            <td>
                <div align="center" >44</div>
            </td>
            <td>
                <div align="center" >45</div>
            </td> --}}
        </tr>
    </thead>
    <tbody>


        @php
        $no=1;
        @endphp
        @foreach ( $posts as $post)

        <?php
        $s_rs_class = null;
        if ($post->s_rs == null) {
             $s_rs = "-";
        } else {
         if ($post->s_rs >= (400+20)) {
            $s_rs = "OVER";
            $s_rs_class = "bg-danger color-palette";
         } elseif($post->s_rs <=(400-40)) {
            $s_rs = "UNDER";
            $s_rs_class = "bg-warning color-palette";
         }else {
            $s_rs = "NORMAL";
            $s_rs_class = "bg-success color-palette";
         }

        }

        $s_rt_class = null;
        if ($post->s_rt == null) {
             $s_rt = "-";
        } else {
         if ($post->s_rt >= (400+20)) {
            $s_rt = "OVER";
            $s_rt_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(400-40)) {
            $s_rt = "UNDER";
            $s_rt_class = "bg-warning color-palette";
         }else {
            $s_rt = "NORMAL";
            $s_rt_class = "bg-success color-palette";
         }

        }

        $s_st_class=null;
        if ($post->s_st == null) {
             $s_st = "-";
        } else {
         if ($post->s_st >= (400+20)) {
            $s_st = "OVER";
            $s_st_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(400-40)) {
            $s_st = "UNDER";
            $s_st_class = "bg-warning color-palette";
         }else {
            $s_st = "NORMAL";
            $s_st_class = "bg-success color-palette";
         }

        }

        $s_rn_class = null;
        if ($post->s_rn == null) {
             $s_rn = "-";
        } else {
         if ($post->s_rn >= (220+11)) {
            $s_rn = "OVER";
            $s_rn_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(220-22)) {
            $s_rn = "UNDER";
            $s_rn_class = "bg-warning color-palette";
         }else {
            $s_rn = "NORMAL";
            $s_rn_class = "bg-success color-palette";
         }

        }

        $s_sn_class = null;
        if ($post->s_n == null) {
             $s_n = "-";
        } else {
         if ($post->s_n >= (220+11)) {
            $s_n = "OVER";
            $s_sn_class = "bg-danger color-palette";
         } elseif($post->s_n <=(220-22)) {
            $s_n = "UNDER";
            $s_sn_class = "bg-warning color-palette";
         }else {
            $s_n = "NORMAL";
            $s_sn_class = "bg-success color-palette";
         }

        }


        $s_tn_class = null;
        if ($post->s_tn == null) {
             $s_tn = "-";
        } else {
         if ($post->s_tn >= (220+11)) {
            $s_tn = "OVER";
            $s_tn_class = "bg-danger color-palette";
         } elseif($post->s_tn <=(220-22)) {
            $s_tn = "UNDER";
            $s_tn_class = "bg-warning color-palette";
         }else {
            $s_tn = "NORMAL";
            $s_tn_class = "bg-success color-palette";
         }

        }




    ?>

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

            <td>
                <div align="center" class="{{ $s_rs_class }}">{{ $s_rs }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_rt_class }}">{{ $s_rt }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_st_class }}">{{ $s_st }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_rn_class }}">{{ $s_rn }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_sn_class }}">{{ $s_n }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_tn_class }}">{{ $s_tn }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_r);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_s);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_netral = netral($post->s_jrs1_n,$post->s_jrs1_r,$post->s_jrs1_s,$post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_netral[0]  }}">{{ $s_netral[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_r,$post->s_jrs1_r);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_s,$post->s_jrs1_s);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_t,$post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_r);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_s);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_netral2 = netral($post->s_jrs2_n,$post->s_jrs2_r,$post->s_jrs2_s,$post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_netral2[0]  }}">{{ $s_netral2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_r,$post->s_jrs2_r);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_s,$post->s_jrs2_s);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_t,$post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_r);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_s);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_netral3 = netral($post->s_jrs3_n,$post->s_jrs3_r,$post->s_jrs3_s,$post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_netral3[0]  }}">{{ $s_netral3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_r,$post->s_jrs3_r);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_s,$post->s_jrs3_s);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_t,$post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_r);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_s);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_netral4 = netral($post->s_jrs4_n,$post->s_jrs4_r,$post->s_jrs4_s,$post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_netral4[0]  }}">{{ $s_netral4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_r,$post->s_jrs4_r);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_s,$post->s_jrs4_s);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_t,$post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            {{-- <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_r);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_s);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_netral5 = netral($post->s_jrs5_n,$post->s_jrs5_r,$post->s_jrs5_s,$post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_netral5[0]  }}">{{ $s_netral5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_r,$post->s_jrs5_r);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_s,$post->s_jrs5_s);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_t,$post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td> --}}
        </tr>

        @php
        $no++;
        @endphp
        @endforeach
    </tbody>
</table>

<br>


<table width="100%" border="1" style='page-break-before:always'>

    <thead>
        <tr>
            <td rowspan="6">
                <div align="center">No.</div>
            </td>
            <td  rowspan="6">
                <div align="center">IDE/NAMA</div>
            </td>
            <td rowspan="6">
                <div align="center">TRAFO</div>
            </td>
            <td  rowspan="6">
                <div align="center">PENYULANG</div>
            </td>
            <td colspan="34">
                <div align="center">ANALISA MALAM</div>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="3">
                <div align="center">TEGANGAN ( Volt )</div>
            </td>
            <td colspan="28">
                <div align="center">KONDISI GARDU</div>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div align="center">JURUSAN 1</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 2</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 3</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 4</div>
            </td>
            {{-- <td colspan="7">
                <div align="center">JURUSAN 5</div>
            </td> --}}
        </tr>
        <tr>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            {{-- <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td> --}}
        </tr>
        <tr>
            <td colspan="3"> 
                <div align="center">ANTAR FASA </div>
            </td>
            <td colspan="3"> 
                <div align="center">FASA TANAH </div>
            </td>
        </tr>
        <tr>
            <td> 
                <div align="center">R - S </div>
            </td>
            <td> 
                <div align="center">R - T </div>
            </td>
            <td> 
                <div align="center">S - T </div>
            </td>
            <td> 
                <div align="center">R - N </div>
            </td>
            <td> 
                <div align="center">S - N </div>
            </td>
            <td> 
                <div align="center">T - N </div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
            </td>
            {{-- <td>
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
            </td> --}}
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
                <div align="center" >5</div>
            </td>
            <td>
                <div align="center" >6</div>
            </td>
            <td>
                <div align="center" >7</div>
            </td>
            <td>
                <div align="center" >8</div>
            </td>
            <td>
                <div align="center" >9</div>
            </td>
            <td>
                <div align="center" >10</div>
            </td>
            <td>
                <div align="center" >11</div>
            </td>
            <td>
                <div align="center" >12</div>
            </td>
            <td>
                <div align="center" >13</div>
            </td>
            <td>
                <div align="center" >14</div>
            </td>
            <td>
                <div align="center" >15</div>
            </td>
            <td>
                <div align="center" >16</div>
            </td>
            <td>
                <div align="center" >17</div>
            </td>
            <td>
                <div align="center" >18</div>
            </td>
            <td>
                <div align="center" >19</div>
            </td>
            <td>
                <div align="center" >20</div>
            </td>
            <td>
                <div align="center" >21</div>
            </td>
            <td>
                <div align="center" >22</div>
            </td>
            <td>
                <div align="center" >23</div>
            </td>
            <td>
                <div align="center" >24</div>
            </td>
            <td>
                <div align="center" >25</div>
            </td>
            <td>
                <div align="center" >26</div>
            </td>
            <td>
                <div align="center" >27</div>
            </td>
            <td>
                <div align="center" >28</div>
            </td>
            <td>
                <div align="center" >29</div>
            </td>
            <td>
                <div align="center" >30</div>
            </td>
            <td>
                <div align="center" >31</div>
            </td>
            <td>
                <div align="center" >32</div>
            </td>
            <td>
                <div align="center" >33</div>
            </td>
            <td>
                <div align="center" >34</div>
            </td>
            <td>
                <div align="center" >35</div>
            </td>
            <td>
                <div align="center" >36</div>
            </td>
            <td>
                <div align="center" >37</div>
            </td>
            <td>
                <div align="center" >38</div>
            </td>
            {{-- <td>
                <div align="center" >39</div>
            </td>
            <td>
                <div align="center" >40</div>
            </td>
            <td>
                <div align="center" >41</div>
            </td>
            <td>
                <div align="center" >42</div>
            </td>
            <td>
                <div align="center" >43</div>
            </td>
            <td>
                <div align="center" >44</div>
            </td>
            <td>
                <div align="center" >45</div>
            </td> --}}
        </tr>
    </thead>
    <tbody>


        @php
        $no=1;
        @endphp
        @foreach ( $posts as $post)

        <?php
        $m_rm_class =null;
        if ($post->m_rs == null) {
             $m_rs = "-";
        } else {
         if ($post->m_rs >= (400+20)) {
            $m_rs = "OVER";
            $m_rm_class = "bg-danger color-palette";
         } elseif($post->m_rs <=(400-40)) {
            $m_rs = "UNDER";
            $m_rm_class = "bg-warning color-palette";
         }else {
            $m_rs = "NORMAL";
            $m_rm_class = "bg-success color-palette";
         }

        }
        $m_rt_class = null;
        if ($post->m_rt == null) {
             $m_rt = "-";
        } else {
         if ($post->m_rt >= (400+20)) {
            $m_rt = "OVER";
            $m_rt_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(400-40)) {
            $m_rt = "UNDER";
            $m_rt_class = "bg-warning color-palette";
         }else {
            $m_rt = "NORMAL";
            $m_rt_class = "bg-success color-palette";
         }

        }

        $m_st_class = null;
        if ($post->m_st == null) {
             $m_st = "-";
        } else {
         if ($post->m_st >= (400+20)) {
            $m_st = "OVER";
            $m_st_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(400-40)) {
            $m_st = "UNDER";
            $m_st_class = "bg-warning color-palette";
         }else {
            $m_st = "NORMAL";
            $m_st_class = "bg-success color-palette";
         }

        }

        $m_rn_class = null;
        if ($post->m_rn == null) {
             $m_rn = "-";
        } else {
         if ($post->m_rn >= (220+11)) {
            $m_rn = "OVER";
            $m_rn_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(220-22)) {
            $m_rn = "UNDER";
            $m_rn_class = "bg-warning color-palette";
         }else {
            $m_rn = "NORMAL";
            $m_rn_class = "bg-success color-palette";
         }

        }

        $m_sn_class = null;
        if ($post->m_n == null) {
             $m_n = "-";
        } else {
         if ($post->m_n >= (220+11)) {
            $m_n = "OVER";
            $m_sn_class = "bg-danger color-palette";
         } elseif($post->m_n <=(220-22)) {
            $m_n = "UNDER";
            $m_sn_class = "bg-warning color-palette";
         }else {
            $m_n = "NORMAL";
            $m_sn_class = "bg-success color-palette";
         }

        }

        $m_tn_class = null;
        if ($post->m_tn == null) {
             $m_tn = "-";
        } else {
         if ($post->m_tn >= (220+11)) {
            $m_tn = "OVER";
            $m_tn_class = "bg-danger color-palette";
         } elseif($post->m_tn <=(220-22)) {
            $m_tn = "UNDER";
            $m_tn_class = "bg-warning color-palette";
         }else {
            $m_tn = "NORMAL";
            $m_tn_class = "bg-success color-palette";
         }

        }




    ?>

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

            <td>
                <div align="center" class="{{ $m_rm_class }}">{{ $m_rs }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_rt_class }}">{{ $m_rt }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_st_class }}">{{ $m_st }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_rn_class }}">{{ $m_rn }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_sn_class }}">{{ $m_n }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_tn_class }}">{{ $m_tn }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_r);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_s);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_netral = Mnetral($post->m_jrs1_n,$post->m_jrs1_r,$post->m_jrs1_s,$post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_netral[0]  }}">{{ $m_netral[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_r,$post->m_jrs1_r);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_s,$post->m_jrs1_s);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_t,$post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_r);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_s);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_netral2 = Mnetral($post->m_jrs2_n,$post->m_jrs2_r,$post->m_jrs2_s,$post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_netral2[0]  }}">{{ $m_netral2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_r,$post->m_jrs2_r);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_s,$post->m_jrs2_s);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_t,$post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_r);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_s);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_netral3 = Mnetral($post->m_jrs3_n,$post->m_jrs3_r,$post->m_jrs3_s,$post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_netral3[0]  }}">{{ $m_netral3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_r,$post->m_jrs3_r);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_s,$post->m_jrs3_s);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_t,$post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_r);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_s);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_netral4 = Mnetral($post->m_jrs4_n,$post->m_jrs4_r,$post->m_jrs4_s,$post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_netral4[0]  }}">{{ $m_netral4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_r,$post->m_jrs4_r);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_s,$post->m_jrs4_s);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_t,$post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            {{-- <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_r);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_s);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_netral5 = Mnetral($post->m_jrs5_n,$post->m_jrs5_r,$post->m_jrs5_s,$post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_netral5[0]  }}">{{ $m_netral5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_r,$post->m_jrs5_r);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_s,$post->m_jrs5_s);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_t,$post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td> --}}
        </tr>

        @php
        $no++;
        @endphp
        @endforeach
    </tbody>
</table>


@else


<table class="tbl" width="100%" border="1">
    <thead>

        <tr>
            <td rowspan="6">
                <div align="center">No.</div>
            </td>
            <td  rowspan="6">
                <div align="center">IDE/NAMA</div>
            </td>
            <td rowspan="6">
                <div align="center">TRAFO</div>
            </td>
            <td  rowspan="6">
                <div align="center">PENYULANG</div>
            </td>
            <td colspan="41">
                <div align="center">ANALISA SIANG</div>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="3">
                <div align="center">TEGANGAN ( Volt )</div>
            </td>
            <td colspan="35">
                <div align="center">KONDISI GARDU</div>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div align="center">JURUSAN 1</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 2</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 3</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 4</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 5</div>
            </td>
        </tr>
        <tr>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
        </tr>
        <tr>
            <td colspan="3"> 
                <div align="center">ANTAR FASA </div>
            </td>
            <td colspan="3"> 
                <div align="center">FASA TANAH </div>
            </td>
        </tr>
        <tr>
            <td> 
                <div align="center">R - S </div>
            </td>
            <td> 
                <div align="center">R - T </div>
            </td>
            <td> 
                <div align="center">S - T </div>
            </td>
            <td> 
                <div align="center">R - N </div>
            </td>
            <td> 
                <div align="center">S - N </div>
            </td>
            <td> 
                <div align="center">T - N </div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center" >5</div>
            </td>
            <td>
                <div align="center" >6</div>
            </td>
            <td>
                <div align="center" >7</div>
            </td>
            <td>
                <div align="center" >8</div>
            </td>
            <td>
                <div align="center" >9</div>
            </td>
            <td>
                <div align="center" >10</div>
            </td>
            <td>
                <div align="center" >11</div>
            </td>
            <td>
                <div align="center" >12</div>
            </td>
            <td>
                <div align="center" >13</div>
            </td>
            <td>
                <div align="center" >14</div>
            </td>
            <td>
                <div align="center" >15</div>
            </td>
            <td>
                <div align="center" >16</div>
            </td>
            <td>
                <div align="center" >17</div>
            </td>
            <td>
                <div align="center" >18</div>
            </td>
            <td>
                <div align="center" >19</div>
            </td>
            <td>
                <div align="center" >20</div>
            </td>
            <td>
                <div align="center" >21</div>
            </td>
            <td>
                <div align="center" >22</div>
            </td>
            <td>
                <div align="center" >23</div>
            </td>
            <td>
                <div align="center" >24</div>
            </td>
            <td>
                <div align="center" >25</div>
            </td>
            <td>
                <div align="center" >26</div>
            </td>
            <td>
                <div align="center" >27</div>
            </td>
            <td>
                <div align="center" >28</div>
            </td>
            <td>
                <div align="center" >29</div>
            </td>
            <td>
                <div align="center" >30</div>
            </td>
            <td>
                <div align="center" >31</div>
            </td>
            <td>
                <div align="center" >32</div>
            </td>
            <td>
                <div align="center" >33</div>
            </td>
            <td>
                <div align="center" >34</div>
            </td>
            <td>
                <div align="center" >35</div>
            </td>
            <td>
                <div align="center" >36</div>
            </td>
            <td>
                <div align="center" >37</div>
            </td>
            <td>
                <div align="center" >38</div>
            </td>
            <td>
                <div align="center" >39</div>
            </td>
            <td>
                <div align="center" >40</div>
            </td>
            <td>
                <div align="center" >41</div>
            </td>
            <td>
                <div align="center" >42</div>
            </td>
            <td>
                <div align="center" >43</div>
            </td>
            <td>
                <div align="center" >44</div>
            </td>
            <td>
                <div align="center" >45</div>
            </td>
        </tr>
    </thead>
    <tbody>


        @php
        $no=1;
        @endphp
        @foreach ( $posts as $post)

        <?php
        $s_rs_class = null;
        if ($post->s_rs == null) {
             $s_rs = "-";
        } else {
         if ($post->s_rs >= (400+20)) {
            $s_rs = "OVER";
            $s_rs_class = "bg-danger color-palette";
         } elseif($post->s_rs <=(400-40)) {
            $s_rs = "UNDER";
            $s_rs_class = "bg-warning color-palette";
         }else {
            $s_rs = "NORMAL";
            $s_rs_class = "bg-success color-palette";
         }

        }

        $s_rt_class = null;
        if ($post->s_rt == null) {
             $s_rt = "-";
        } else {
         if ($post->s_rt >= (400+20)) {
            $s_rt = "OVER";
            $s_rt_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(400-40)) {
            $s_rt = "UNDER";
            $s_rt_class = "bg-warning color-palette";
         }else {
            $s_rt = "NORMAL";
            $s_rt_class = "bg-success color-palette";
         }

        }

        $s_st_class=null;
        if ($post->s_st == null) {
             $s_st = "-";
        } else {
         if ($post->s_st >= (400+20)) {
            $s_st = "OVER";
            $s_st_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(400-40)) {
            $s_st = "UNDER";
            $s_st_class = "bg-warning color-palette";
         }else {
            $s_st = "NORMAL";
            $s_st_class = "bg-success color-palette";
         }

        }

        $s_rn_class = null;
        if ($post->s_rn == null) {
             $s_rn = "-";
        } else {
         if ($post->s_rn >= (220+11)) {
            $s_rn = "OVER";
            $s_rn_class = "bg-danger color-palette";
         } elseif($post->s_rt <=(220-22)) {
            $s_rn = "UNDER";
            $s_rn_class = "bg-warning color-palette";
         }else {
            $s_rn = "NORMAL";
            $s_rn_class = "bg-success color-palette";
         }

        }

        $s_sn_class = null;
        if ($post->s_n == null) {
             $s_n = "-";
        } else {
         if ($post->s_n >= (220+11)) {
            $s_n = "OVER";
            $s_sn_class = "bg-danger color-palette";
         } elseif($post->s_n <=(220-22)) {
            $s_n = "UNDER";
            $s_sn_class = "bg-warning color-palette";
         }else {
            $s_n = "NORMAL";
            $s_sn_class = "bg-success color-palette";
         }

        }


        $s_tn_class = null;
        if ($post->s_tn == null) {
             $s_tn = "-";
        } else {
         if ($post->s_tn >= (220+11)) {
            $s_tn = "OVER";
            $s_tn_class = "bg-danger color-palette";
         } elseif($post->s_tn <=(220-22)) {
            $s_tn = "UNDER";
            $s_tn_class = "bg-warning color-palette";
         }else {
            $s_tn = "NORMAL";
            $s_tn_class = "bg-success color-palette";
         }

        }




    ?>

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

            <td>
                <div align="center" class="{{ $s_rs_class }}">{{ $s_rs }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_rt_class }}">{{ $s_rt }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_st_class }}">{{ $s_st }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_rn_class }}">{{ $s_rn }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_sn_class }}">{{ $s_n }}</div>
            </td>
            <td>
                <div align="center" class="{{ $s_tn_class }}">{{ $s_tn }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_r);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_s);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs1 = jrs($post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_jrs1[0]  }}">{{ $s_jrs1[1] }}</div>
            </td>
            <td>
                <?php $s_netral = netral($post->s_jrs1_n,$post->s_jrs1_r,$post->s_jrs1_s,$post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_netral[0]  }}">{{ $s_netral[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_r,$post->s_jrs1_r);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_s,$post->s_jrs1_s);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_f1 = fuse($post->s_fuse1_t,$post->s_jrs1_t);   ?>
                <div align="center" class="{{ $s_f1[0]  }}">{{ $s_f1[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_r);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_s);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs2 = jrs($post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_jrs2[0]  }}">{{ $s_jrs2[1] }}</div>
            </td>
            <td>
                <?php $s_netral2 = netral($post->s_jrs2_n,$post->s_jrs2_r,$post->s_jrs2_s,$post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_netral2[0]  }}">{{ $s_netral2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_r,$post->s_jrs2_r);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_s,$post->s_jrs2_s);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_f2 = fuse($post->s_fuse2_t,$post->s_jrs2_t);   ?>
                <div align="center" class="{{ $s_f2[0]  }}">{{ $s_f2[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_r);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_s);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs3 = jrs($post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_jrs3[0]  }}">{{ $s_jrs3[1] }}</div>
            </td>
            <td>
                <?php $s_netral3 = netral($post->s_jrs3_n,$post->s_jrs3_r,$post->s_jrs3_s,$post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_netral3[0]  }}">{{ $s_netral3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_r,$post->s_jrs3_r);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_s,$post->s_jrs3_s);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_f3 = fuse($post->s_fuse3_t,$post->s_jrs3_t);   ?>
                <div align="center" class="{{ $s_f3[0]  }}">{{ $s_f3[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_r);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_s);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_jrs4 = jrs($post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_jrs4[0]  }}">{{ $s_jrs4[1] }}</div>
            </td>
            <td>
                <?php $s_netral4 = netral($post->s_jrs4_n,$post->s_jrs4_r,$post->s_jrs4_s,$post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_netral4[0]  }}">{{ $s_netral4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_r,$post->s_jrs4_r);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_s,$post->s_jrs4_s);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            <td>
                <?php $s_f4 = fuse($post->s_fuse4_t,$post->s_jrs4_t);   ?>
                <div align="center" class="{{ $s_f4[0]  }}">{{ $s_f4[1] }}</div>
            </td>
            <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_r);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_s);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_jrs5 = jrs($post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_jrs5[0]  }}">{{ $s_jrs5[1] }}</div>
            </td>
            <td>
                <?php $s_netral5 = netral($post->s_jrs5_n,$post->s_jrs5_r,$post->s_jrs5_s,$post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_netral5[0]  }}">{{ $s_netral5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_r,$post->s_jrs5_r);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_s,$post->s_jrs5_s);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td>
            <td>
                <?php $s_f5 = fuse($post->s_fuse5_t,$post->s_jrs5_t);   ?>
                <div align="center" class="{{ $s_f5[0]  }}">{{ $s_f5[1] }}</div>
            </td>
        </tr>

        @php
        $no++;
        @endphp
        @endforeach
    </tbody>
</table>

{{-- analisa malam --}}

<table class="tbl" width="100%" style='page-break-before:always'>
    <thead>


        <tr>
            <td rowspan="6">
                <div align="center">No.</div>
            </td>
            <td  rowspan="6">
                <div align="center">IDE/NAMA</div>
            </td>
            <td rowspan="6">
                <div align="center">TRAFO</div>
            </td>
            <td  rowspan="6">
                <div align="center">PENYULANG</div>
            </td>
            <td colspan="41">
                <div align="center">ANALISA MALAM</div>
            </td>
        </tr>
        <tr>
            <td colspan="6" rowspan="3">
                <div align="center">TEGANGAN ( Volt )</div>
            </td>
            <td colspan="35">
                <div align="center">KONDISI GARDU</div>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div align="center">JURUSAN 1</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 2</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 3</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 4</div>
            </td>
            <td colspan="7">
                <div align="center">JURUSAN 5</div>
            </td>
        </tr>
        <tr>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
            <td colspan="4" rowspan="2">
                <div align="center">BEBAN<br />
                    JURUSAN</div>
            </td>
            <td colspan="3" rowspan="2">
                <div align="center">NH Fuse<br />
                    Terpasang</div>
            </td>
        </tr>
        <tr>
            <td colspan="3"> 
                <div align="center">ANTAR FASA </div>
            </td>
            <td colspan="3"> 
                <div align="center">FASA TANAH </div>
            </td>
        </tr>
        <tr>
            <td> 
                <div align="center">R - S </div>
            </td>
            <td> 
                <div align="center">R - T </div>
            </td>
            <td> 
                <div align="center">S - T </div>
            </td>
            <td> 
                <div align="center">R - N </div>
            </td>
            <td> 
                <div align="center">S - N </div>
            </td>
            <td> 
                <div align="center">T - N </div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center">R</div>
            </td>
            <td>
                <div align="center">S</div>
            </td>
            <td>
                <div align="center">T</div>
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
                <div align="center" >5</div>
            </td>
            <td>
                <div align="center" >6</div>
            </td>
            <td>
                <div align="center" >7</div>
            </td>
            <td>
                <div align="center" >8</div>
            </td>
            <td>
                <div align="center" >9</div>
            </td>
            <td>
                <div align="center" >10</div>
            </td>
            <td>
                <div align="center" >11</div>
            </td>
            <td>
                <div align="center" >12</div>
            </td>
            <td>
                <div align="center" >13</div>
            </td>
            <td>
                <div align="center" >14</div>
            </td>
            <td>
                <div align="center" >15</div>
            </td>
            <td>
                <div align="center" >16</div>
            </td>
            <td>
                <div align="center" >17</div>
            </td>
            <td>
                <div align="center" >18</div>
            </td>
            <td>
                <div align="center" >19</div>
            </td>
            <td>
                <div align="center" >20</div>
            </td>
            <td>
                <div align="center" >21</div>
            </td>
            <td>
                <div align="center" >22</div>
            </td>
            <td>
                <div align="center" >23</div>
            </td>
            <td>
                <div align="center" >24</div>
            </td>
            <td>
                <div align="center" >25</div>
            </td>
            <td>
                <div align="center" >26</div>
            </td>
            <td>
                <div align="center" >27</div>
            </td>
            <td>
                <div align="center" >28</div>
            </td>
            <td>
                <div align="center" >29</div>
            </td>
            <td>
                <div align="center" >30</div>
            </td>
            <td>
                <div align="center" >31</div>
            </td>
            <td>
                <div align="center" >32</div>
            </td>
            <td>
                <div align="center" >33</div>
            </td>
            <td>
                <div align="center" >34</div>
            </td>
            <td>
                <div align="center" >35</div>
            </td>
            <td>
                <div align="center" >36</div>
            </td>
            <td>
                <div align="center" >37</div>
            </td>
            <td>
                <div align="center" >38</div>
            </td>
            <td>
                <div align="center" >39</div>
            </td>
            <td>
                <div align="center" >40</div>
            </td>
            <td>
                <div align="center" >41</div>
            </td>
            <td>
                <div align="center" >42</div>
            </td>
            <td>
                <div align="center" >43</div>
            </td>
            <td>
                <div align="center" >44</div>
            </td>
            <td>
                <div align="center" >45</div>
            </td>
        </tr>
    </thead>
    <tbody>


        @php
        $no=1;
        @endphp
        @foreach ( $posts as $post)

        <?php
        $m_rm_class =null;
        if ($post->m_rs == null) {
             $m_rs = "-";
        } else {
         if ($post->m_rs >= (400+20)) {
            $m_rs = "OVER";
            $m_rm_class = "bg-danger color-palette";
         } elseif($post->m_rs <=(400-40)) {
            $m_rs = "UNDER";
            $m_rm_class = "bg-warning color-palette";
         }else {
            $m_rs = "NORMAL";
            $m_rm_class = "bg-success color-palette";
         }

        }
        $m_rt_class = null;
        if ($post->m_rt == null) {
             $m_rt = "-";
        } else {
         if ($post->m_rt >= (400+20)) {
            $m_rt = "OVER";
            $m_rt_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(400-40)) {
            $m_rt = "UNDER";
            $m_rt_class = "bg-warning color-palette";
         }else {
            $m_rt = "NORMAL";
            $m_rt_class = "bg-success color-palette";
         }

        }

        $m_st_class = null;
        if ($post->m_st == null) {
             $m_st = "-";
        } else {
         if ($post->m_st >= (400+20)) {
            $m_st = "OVER";
            $m_st_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(400-40)) {
            $m_st = "UNDER";
            $m_st_class = "bg-warning color-palette";
         }else {
            $m_st = "NORMAL";
            $m_st_class = "bg-success color-palette";
         }

        }

        $m_rn_class = null;
        if ($post->m_rn == null) {
             $m_rn = "-";
        } else {
         if ($post->m_rn >= (220+11)) {
            $m_rn = "OVER";
            $m_rn_class = "bg-danger color-palette";
         } elseif($post->m_rt <=(220-22)) {
            $m_rn = "UNDER";
            $m_rn_class = "bg-warning color-palette";
         }else {
            $m_rn = "NORMAL";
            $m_rn_class = "bg-success color-palette";
         }

        }

        $m_sn_class = null;
        if ($post->m_n == null) {
             $m_n = "-";
        } else {
         if ($post->m_n >= (220+11)) {
            $m_n = "OVER";
            $m_sn_class = "bg-danger color-palette";
         } elseif($post->m_n <=(220-22)) {
            $m_n = "UNDER";
            $m_sn_class = "bg-warning color-palette";
         }else {
            $m_n = "NORMAL";
            $m_sn_class = "bg-success color-palette";
         }

        }

        $m_tn_class = null;
        if ($post->m_tn == null) {
             $m_tn = "-";
        } else {
         if ($post->m_tn >= (220+11)) {
            $m_tn = "OVER";
            $m_tn_class = "bg-danger color-palette";
         } elseif($post->m_tn <=(220-22)) {
            $m_tn = "UNDER";
            $m_tn_class = "bg-warning color-palette";
         }else {
            $m_tn = "NORMAL";
            $m_tn_class = "bg-success color-palette";
         }

        }




    ?>

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

            <td>
                <div align="center" class="{{ $m_rm_class }}">{{ $m_rs }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_rt_class }}">{{ $m_rt }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_st_class }}">{{ $m_st }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_rn_class }}">{{ $m_rn }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_sn_class }}">{{ $m_n }}</div>
            </td>
            <td>
                <div align="center" class="{{ $m_tn_class }}">{{ $m_tn }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_r);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_s);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs1 = jrs($post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_jrs1[0]  }}">{{ $m_jrs1[1] }}</div>
            </td>
            <td>
                <?php $m_netral = Mnetral($post->m_jrs1_n,$post->m_jrs1_r,$post->m_jrs1_s,$post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_netral[0]  }}">{{ $m_netral[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_r,$post->m_jrs1_r);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_s,$post->m_jrs1_s);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_f1 = fuse($post->m_fuse1_t,$post->m_jrs1_t);   ?>
                <div align="center" class="{{ $m_f1[0]  }}">{{ $m_f1[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_r);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_s);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs2 = jrs($post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_jrs2[0]  }}">{{ $m_jrs2[1] }}</div>
            </td>
            <td>
                <?php $m_netral2 = Mnetral($post->m_jrs2_n,$post->m_jrs2_r,$post->m_jrs2_s,$post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_netral2[0]  }}">{{ $m_netral2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_r,$post->m_jrs2_r);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_s,$post->m_jrs2_s);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_f2 = fuse($post->m_fuse2_t,$post->m_jrs2_t);   ?>
                <div align="center" class="{{ $m_f2[0]  }}">{{ $m_f2[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_r);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_s);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs3 = jrs($post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_jrs3[0]  }}">{{ $m_jrs3[1] }}</div>
            </td>
            <td>
                <?php $m_netral3 = Mnetral($post->m_jrs3_n,$post->m_jrs3_r,$post->m_jrs3_s,$post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_netral3[0]  }}">{{ $m_netral3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_r,$post->m_jrs3_r);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_s,$post->m_jrs3_s);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_f3 = fuse($post->m_fuse3_t,$post->m_jrs3_t);   ?>
                <div align="center" class="{{ $m_f3[0]  }}">{{ $m_f3[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_r);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_s);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_jrs4 = jrs($post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_jrs4[0]  }}">{{ $m_jrs4[1] }}</div>
            </td>
            <td>
                <?php $m_netral4 = Mnetral($post->m_jrs4_n,$post->m_jrs4_r,$post->m_jrs4_s,$post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_netral4[0]  }}">{{ $m_netral4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_r,$post->m_jrs4_r);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_s,$post->m_jrs4_s);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            <td>
                <?php $m_f4 = fuse($post->m_fuse4_t,$post->m_jrs4_t);   ?>
                <div align="center" class="{{ $m_f4[0]  }}">{{ $m_f4[1] }}</div>
            </td>
            <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_r);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_s);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_jrs5 = jrs($post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_jrs5[0]  }}">{{ $m_jrs5[1] }}</div>
            </td>
            <td>
                <?php $m_netral5 = Mnetral($post->m_jrs5_n,$post->m_jrs5_r,$post->m_jrs5_s,$post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_netral5[0]  }}">{{ $m_netral5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_r,$post->m_jrs5_r);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_s,$post->m_jrs5_s);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td>
            <td>
                <?php $m_f5 = fuse($post->m_fuse5_t,$post->m_jrs5_t);   ?>
                <div align="center" class="{{ $m_f5[0]  }}">{{ $m_f5[1] }}</div>
            </td>
        </tr>

        @php
        $no++;
        @endphp
        @endforeach
    </tbody>
</table>

@endif
