
                  <table width="100%" border="1">
                      <thead>
                        <tr >
                      <td rowspan="4"><div align="center">NO</div></td>
                      <td colspan="6"><div align="center">GARDU</div></td>
                      <td rowspan="4"><div align="center">GARDU INDUK /<br />
                      TRAFO</div></td>
                      <td rowspan="4"><div align="center">PENYULANG</div></td>
                      <td rowspan="4"><div align="center">KEYPOINT</div></td>
                      <td rowspan="4"><div align="center">MERK<br />
                      TRAFO</div></td>
                      <td rowspan="4"><div align="center">NO SERI<br />
                      TRAFO</div></td>
                      <td rowspan="4"><div align="center">TAHUN</div></td>
                      <td rowspan="4"><div align="center">TIPE<br />
                        TRAFO<br />
                      ( OD / ID )*</div></td>
                      <td rowspan="4"><div align="center">KAPASITAS<br />
                        TRAFO<br />
                      ( kVA ) </div></td>
                      <td colspan="2"><div align="center">LAYANAN OPERASI</div></td>
                      <td rowspan="4"><div align="center">NAMA BENGKEL <br>REVISI TRAFO</div></td>
                    </tr>
                    <tr >
                      <td rowspan="3"><div align="center">ID<br />
                      (AP2T)</div></td>
                      <td rowspan="3"><div align="center">ID /<br />
                      NAMA</div></td>
                      <td rowspan="3"><div align="center">ALAMAT</div></td>
                      <td colspan="2"><div align="center">KOORDINAT</div></td>
                      <td rowspan="3"><div align="center">KONSTRUKSI</div></td>
                      <td rowspan="3"><div align="center">JENIS PELAYANAN</div></td>
                      <td rowspan="3"><div align="center">STATUS OPERASI</div></td>
                    </tr>
                    <tr >
                      <td><div align="center">Latitude</div></td>
                      <td><div align="center">Longtitude</div></td>
                    </tr>
                    <tr >
                      <td><div align="center">Lintang</div></td>
                      <td><div align="center">Bujur</div></td>
                    </tr>
                    <tr >
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>


                    </tr>
                      </thead>
                      <tbody>
                          @foreach ( $posts as $post)
                    <tr>
                      <td><b>{{ $loop->index + 1 }}</b></td>
                      <td>{{ $post->id_ap2t??'-' }}</td>
                      <td>{{ $post->Master->id_nama??'-' }}</td>
                      <td>{{ $post->Master->alamat??'-' }}</td>
                      <td>{{ $post->Master->lintang??'-' }}</td>
                      <td>{{ $post->Master->bujur??'-' }}</td>
                      <td>{{ $post->Master->konstruksi??'-' }}</td>
                      <td>{{ $post->Master->trafo??'-' }}</td>
                      <td>{{ $post->Master->penyulang??'-' }}</td>
                      <td>{{ $post->Master->rayon??'-' }}</td>
                      <td>{{ $post->Master->merek??'-' }}</td>
                      <td>{{ $post->Master->ns_trafo??'-' }}</td>
                      <td>{{ $post->Master->tahun??'-' }}</td>
                      <td>{{ $post->Master->tipe??'-' }}</td>
                      <td>{{ $post->Master->kapasitas??'-' }}</td>
                      <td>{{ $post->jenis_pel??'-' }}</td>
                      <td>{{ $post->status_op??'-' }}</td>
                      <td>{{ $post->revisi_travo??'-' }} </td>

                    </tr>
                    @endforeach
                      </tbody>
                  </table>

                  <br> <br>

{{-- form trafo --}}
<?php
foreach( $posts as $pos){

    $jrs5[] = $pos->s_jrs5_r??null;

}
?>
<table style='page-break-before:always'>
                        <thead>
                            <tr >
                              <td rowspan="6"><div style="margin-top: 80px;" align="center">NO</div></td>
                              <td rowspan="6"><div style="margin-top: 80px;" align="center">ID/NAMA</div></td>
                              <td rowspan="6"><div style="margin-top: 80px;" align="center">GARDU</div></td>
                              <td rowspan="6"><div style="margin-top: 80px;" align="center">PENYULANG</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td colspan="48"><div align="center">PENGUKURAN SIANG </div></td>
                              @else
                              <td colspan="41"><div align="center">PENGUKURAN SIANG</div></td>
                              @endif
                            </tr>
                            <tr >
                              <td colspan="7" rowspan="3"><div align="center">TEGANGAN (Volt)</div></td>
                              <td colspan="2"><div align="center">PENTANAHAN</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td colspan="35"><div align="center">ARUS (Ampere)</div></td>
                              @else
                              <td colspan="28"><div align="center">ARUS (Ampere)</div></td>
                              @endif

                              <td colspan="4" rowspan="2"><div align="center">WAKTU PENGUKURAN SIANG</div></td>
                            </tr>
                            <tr >
                              <td rowspan="3"><div align="center">TAHANAN GROUND</div></td>
                              <td rowspan="3"><div align="center">ARUS GROUND</div></td>
                              <td colspan="7" rowspan="2"><div align="center">JURUSAN 1</div></td>
                              <td colspan="7" rowspan="2"><div align="center">JURUSAN 2</div></td>
                              <td colspan="7" rowspan="2"><div align="center">JURUSAN 3</div></td>
                              <td colspan="7" rowspan="2"><div align="center">JURUSAN 4</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td colspan="7" rowspan="2"><div align="center">JURUSAN 5</div></td>
                              @endif
                            </tr>
                            <tr >
                              <td rowspan="3"><div align="center">TGL</div></td>
                              <td rowspan="3"><div align="center">JAM</div></td>
                              <td rowspan="3"><div align="center">NAMA PETUGAS</div></td>

                            </tr>
                            <tr >
                              <td colspan="3"><div align="center">ANTAR FASA</div></td>
                              <td colspan="3"><div align="center">FASA TANAH</div></td>
                              <td rowspan="2"><div align="center">TAP</div></td>
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                            @endif
                            </tr>
                            <tr >
                              <td><div align="center">R-S</div></td>
                              <td><div align="center">R-T</div></td>
                              <td><div align="center">S-T</div></td>
                              <td><div align="center">R-N</div></td>
                              <td><div align="center">S-N</div></td>
                              <td><div align="center">T-N</div></td>
                              <td><div align="center">OHM</div></td>
                              <td><div align="center">AMP</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">N</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">N</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">N</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">N</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              <td><div align="center">N</div></td>
                              <td><div align="center">R</div></td>
                              <td><div align="center">S</div></td>
                              <td><div align="center">T</div></td>
                              @endif
                            </tr>
                            <tr >
                              <td><div align="center">1</div></td>

                              <td><div align="center">2</div></td>
                              <td><div align="center">3</div></td>
                              <td><div align="center">4</div></td>
                              <td><div align="center">5</div></td>
                              <td><div align="center">6</div></td>
                              <td><div align="center">7</div></td>
                              <td><div align="center">8</div></td>
                              <td><div align="center">9</div></td>
                              <td><div align="center">10</div></td>
                              <td><div align="center">11</div></td>
                              <td><div align="center">12</div></td>
                              <td><div align="center">13</div></td>
                              <td><div align="center">14</div></td>
                              <td><div align="center">15</div></td>
                              <td><div align="center">16</div></td>
                              <td><div align="center">17</div></td>
                              <td><div align="center">18</div></td>
                              <td><div align="center">19</div></td>
                              <td><div align="center">20</div></td>
                              <td><div align="center">21</div></td>
                              <td><div align="center">22</div></td>
                              <td><div align="center">23</div></td>
                              <td><div align="center">24</div></td>
                              <td><div align="center">25</div></td>
                              <td><div align="center">26</div></td>
                              <td><div align="center">27</div></td>
                              <td><div align="center">28</div></td>
                              <td><div align="center">29</div></td>
                              <td><div align="center">30</div></td>
                              <td><div align="center">31</div></td>
                              <td><div align="center">32</div></td>
                              <td><div align="center">33</div></td>
                              <td><div align="center">34</div></td>
                              <td><div align="center">35</div></td>
                              <td><div align="center">36</div></td>
                              <td><div align="center">37</div></td>
                              <td><div align="center">38</div></td>
                              <td><div align="center">39</div></td>
                              <td><div align="center">40</div></td>
                              <td><div align="center">41</div></td>
                              @if( array_sum($jrs5) != 0)
                              <td><div align="center">45</div></td>
                              <td><div align="center">46</div></td>
                              <td><div align="center">47</div></td>
                              <td><div align="center">48</div></td>
                              <td><div align="center">49</div></td>
                              <td><div align="center">50</div></td>
                              <td><div align="center">51</div></td>
                              <td><div align="center">52</div></td>
                              <td><div align="center">53</div></td>
                              <td><div align="center">54</div></td>
                              @else
                              <td><div align="center">42</div></td>
                              <td><div align="center">43</div></td>
                              <td><div align="center">44</div></td>
                              @endif
                            </tr>
                            <thead>
                                <tbody>
                            @foreach ( $posts as $post)

                            <tr>
                                <td><div align="center"></div><b>{{ $loop->index + 1 }}</b></td>

                                <td><div align="center">{{ $post->Master->id_nama??'-' }}</div></td>
                                <td><div align="center">{{ $post->Master->trafo??'-' }}</div></td>
                                <td><div align="center">{{ $post->Master->penyulang??'-' }}</div></td>
                                <td><div align="center"></div>{{ $post->s_rs??'-' }}  </td>
                                <td><div align="center"></div>{{ $post->s_rt??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_st??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_rn??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_n??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_tn??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_tap??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_tahanan??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_ground??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs1_r??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs1_s??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs1_t??'-' }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs1_n??'-' }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse1_r??'-' }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse1_s??'-' }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse1_t??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs2_r??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs2_s??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs2_t??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs2_n??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse2_r??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse2_s??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse2_t??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs3_r??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs3_s??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs3_t??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs3_n??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse3_r??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse3_s??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse3_t??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs4_r??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs4_s??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs4_t??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs4_n??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse4_r??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse4_s??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse4_t??'-'  }}</td>
                                @if(array_sum($jrs5) != 0 )
                                <td><div align="center"></div>{{ $post->s_jrs5_r??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs5_s??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs5_t??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_jrs5_n??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse5_r??'-'  }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse5_s??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_fuse5_t??'-'   }}</td>
                                @endif
                                <td><div align="center"></div>{{ tgl_singkat($post->tgl)??'-' }}</td>
                                <td><div align="center"></div>{{ $post->s_jam??'-'   }}</td>
                                <td><div align="center"></div>{{ $post->s_petugas??'-'  }}</td>

                              </tr>

                        </tbody>
                            @endforeach
                          </table>


<br> <br>
                         {{-- form_malam --}}

                         <?php
foreach( $posts as $pos){

    $jrs5[] = $pos->m_jrs5_r??null;

}
?>

                         <table style='page-break-before:always'>
                                                <thead>
                                                    <tr >
                                                      <td rowspan="6"><div style="margin-top: 100px;" align="center">NO</div></td>

                                                      <td rowspan="6"><div style="margin-top: 100px;"  align="center">ID/NAMA</div></td>
                                                      <td rowspan="6"><div style="margin-top: 100px;"  align="center">GARDU</div></td>
                                                      <td rowspan="6"><div style="margin-top: 100px;"  align="center">PENYULANG</div></td>
                                                      @if( array_sum($jrs5) != 0)
                                                      <td colspan="47"><div align="center">PENGUKURAN MALAM</div></td>
                                                      @else
                                                      <td colspan="40"><div align="center">PENGUKURAN MALAM</div></td>
                                                      @endif

                                                      <td rowspan="6"><div style="margin-top: 100px;"  align="center">PELANGGAN/ DAERAH PASOK /DAERAH PADAM</div></td>
                                                      <td rowspan="6"><div style="margin-top: 100px;"   align="center">KETERANGAN / TAMBAHAN</div></td>

                                                    </tr>
                                                    <tr >
                                                      <td colspan="7" rowspan="3"><div align="center">TEGANGAN (Volt)</div></td>
                                                      <td colspan="2"><div align="center">PENTANAHAN</div></td>
                                                      @if( array_sum($jrs5) != 0)
                                                      <td colspan="35"><div align="center">ARUS (Ampere)</div></td>
                                                      @else
                                                      <td colspan="28"><div align="center">ARUS (Ampere)</div></td>
                                                      @endif

                                                      <td colspan="3" rowspan="2"><div align="center">WAKTU PENGUKURAN MALAM</div></td>
                                                    </tr>
                                                    <tr >
                                                      <td rowspan="3"><div align="center">TAHANAN GROUND</div></td>
                                                      <td rowspan="3"><div align="center">ARUS GROUND</div></td>
                                                      <td colspan="7" rowspan="2"><div align="center">JURUSAN 1</div></td>
                                                      <td colspan="7" rowspan="2"><div align="center">JURUSAN 2</div></td>
                                                      <td colspan="7" rowspan="2"><div align="center">JURUSAN 3</div></td>
                                                      <td colspan="7" rowspan="2"><div align="center">JURUSAN 4</div></td>
                                                      @if( array_sum($jrs5) != 0)
                                                      <td colspan="7" rowspan="2"><div align="center">JURUSAN 5</div></td>
                                                      @endif
                                                    </tr>
                                                    <tr >
                                                      <td rowspan="3"><div align="center">TGL</div></td>
                                                      <td rowspan="3"><div align="center">JAM</div></td>
                                                      <td rowspan="3"><div align="center">NAMA PETUGAS</div></td>

                                                    </tr>
                                                    <tr >
                                                      <td colspan="3"><div align="center">ANTAR FASA</div></td>
                                                      <td colspan="3"><div align="center">FASA TANAH</div></td>
                                                      <td rowspan="2"><div align="center">TAP</div></td>
                                                      <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                                                      <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                                                      <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                                                      <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                                                      <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                                                      <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                                                      <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                                                      <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                                                      @if( array_sum($jrs5) != 0)
                              <td colspan="4"><div align="center">BEBAN JURUSAN</div></td>
                              <td colspan="3"><div align="center">NH FUSE TERPANSANG</div></td>
                            @endif
                                                    </tr>
                                                    <tr >
                                                      <td><div align="center">R-S</div></td>
                                                      <td><div align="center">R-T</div></td>
                                                      <td><div align="center">S-T</div></td>
                                                      <td><div align="center">R-N</div></td>
                                                      <td><div align="center">S-N</div></td>
                                                      <td><div align="center">T-N</div></td>
                                                      <td><div align="center">OHM</div></td>
                                                      <td><div align="center">AMP</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">N</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">N</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">N</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      <td><div align="center">N</div></td>
                                                      <td><div align="center">R</div></td>
                                                      <td><div align="center">S</div></td>
                                                      <td><div align="center">T</div></td>
                                                      @if( array_sum($jrs5) != 0)
                                                        <td><div align="center">R</div></td>
                                                        <td><div align="center">S</div></td>
                                                        <td><div align="center">T</div></td>
                                                        <td><div align="center">N</div></td>
                                                        <td><div align="center">R</div></td>
                                                        <td><div align="center">S</div></td>
                                                        <td><div align="center">T</div></td>
                                                        @endif
                                                    </tr>
                                                    <tr >
                                                      <td><div align="center">1</div></td>

                                                      <td><div align="center">2</div></td>
                                                      <td><div align="center">3</div></td>
                                                      <td><div align="center">4</div></td>
                                                      <td><div align="center">5</div></td>
                                                      <td><div align="center">6</div></td>
                                                      <td><div align="center">7</div></td>
                                                      <td><div align="center">8</div></td>
                                                      <td><div align="center">9</div></td>
                                                      <td><div align="center">10</div></td>
                                                      <td><div align="center">11</div></td>
                                                      <td><div align="center">12</div></td>
                                                      <td><div align="center">13</div></td>
                                                      <td><div align="center">14</div></td>
                                                      <td><div align="center">15</div></td>
                                                      <td><div align="center">16</div></td>
                                                      <td><div align="center">17</div></td>
                                                      <td><div align="center">18</div></td>
                                                      <td><div align="center">19</div></td>
                                                      <td><div align="center">20</div></td>
                                                      <td><div align="center">21</div></td>
                                                      <td><div align="center">22</div></td>
                                                      <td><div align="center">23</div></td>
                                                      <td><div align="center">24</div></td>
                                                      <td><div align="center">25</div></td>
                                                      <td><div align="center">26</div></td>
                                                      <td><div align="center">27</div></td>
                                                      <td><div align="center">28</div></td>
                                                      <td><div align="center">29</div></td>
                                                      <td><div align="center">30</div></td>
                                                      <td><div align="center">31</div></td>
                                                      <td><div align="center">32</div></td>
                                                      <td><div align="center">33</div></td>
                                                      <td><div align="center">34</div></td>
                                                      <td><div align="center">35</div></td>
                                                      <td><div align="center">36</div></td>
                                                      <td><div align="center">37</div></td>
                                                      <td><div align="center">38</div></td>
                                                      <td><div align="center">49</div></td>
                                                      <td><div align="center">40</div></td>
                                                      <td><div align="center">41</div></td>
                                                      @if( array_sum($jrs5) != 0)
                                                                <td><div align="center">42</div></td>
                                                                <td><div align="center">43</div></td>
                                                                <td><div align="center">44</div></td>
                                                                <td><div align="center">45</div></td>
                                                                <td><div align="center">46</div></td>
                                                                <td><div align="center">47</div></td>
                                                                <td><div align="center">58</div></td>
                                                                <td><div align="center">59</div></td>
                                                                    <td><div align="center">60</div></td>
                                                                    <td><div align="center">61</div></td>
                                                                    <td><div align="center">62</div></td>
                                                                    <td><div align="center">63</div></td>
                                                        @else
                                                      <td><div align="center">42</div></td>
                                                      <td><div align="center">43</div></td>
                                                      <td><div align="center">44</div></td>
                                                      <td><div align="center">45</div></td>
                                                      <td><div align="center">46</div></td>
                                                        @endif
                                                    </tr>
                                                </thead>
                                                        <tbody>
                                                    @foreach ( $posts as $post)


                                                    <tr >
                                                        <td><div align="center"></div><b>{{ $loop->index + 1 }}</b></td>

                                                        <td><div align="center">{{ $post->Master->id_nama??'-' }}</div></td>
                                                        <td><div align="center">{{ $post->Master->trafo??'-' }}</div></td>
                                                        <td><div align="center">{{ $post->Master->penyulang??'-' }}</div></td>
                                                        <td><div align="center"></div>{{ $post->m_rs??'-' }}  </td>
                                                        <td><div align="center"></div>{{ $post->m_rt??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_st??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_rn??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_n??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_tn??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_tap??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_tahanan??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_ground??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs1_r??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs1_s??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs1_t??'-' }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs1_n??'-' }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse1_r??'-' }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse1_s??'-' }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse1_t??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs2_r??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs2_s??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs2_t??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs2_n??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse2_r??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse2_s??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse2_t??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs3_r??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs3_s??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs3_t??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs3_n??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse3_r??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse3_s??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse3_t??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs4_r??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs4_s??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs4_t??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs4_n??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse4_r??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse4_s??'-'??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse4_t??'-'  }}</td>
                                                        @if(  array_sum($jrs5) != 0 )
                                                        <td><div align="center"></div>{{ $post->m_jrs5_r??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs5_s??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs5_t??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jrs5_n??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse5_r??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse5_s??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_fuse5_t??'-'   }}</td>
                                                        @endif
                                                        <td><div align="center"></div>{{ tgl_singkat($post->tgl)??'-' }}</td>
                                                        <td><div align="center"></div>{{ $post->m_jam??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_petugas??'-'  }}</td>
                                                        <td><div align="center"></div>{{ $post->m_pelanggan??'-'   }}</td>
                                                        <td><div align="center"></div>{{ $post->m_ket??'-'  }}</td>

                                                      </tr>

                                                    @endforeach
                                                </tbody>
                                                  </table>

