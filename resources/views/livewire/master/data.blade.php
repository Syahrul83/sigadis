<div>
    @include('livewire.master.create')
    @include('livewire.master.update')
    @include('livewire.master.delete')
<section>





                            <div class="card">
                                         <div class="card-header">
                                         <div class="row">
                                           <div class="col-sm-2"><button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#exampleModal">
                          Tambah Trafo
                          </button></div>
                                           {{-- <div class="col-sm-10 text-center"><h5 >
                                            @if (session()->has('message'))
                                            <div class="text-success">{{ session('message') }}</div>

                                          @endif</h5>
                                           </div> --}}
                                           </div>
                                         </div>
                                         <!-- /.card-header -->
                                         <div class="card-body">


                <div class="form-group col-sm-5">

                    <input wire:model.debounce..500ms="search" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Search Id Nama / Penyulang">

                  </div>
                  <div class="card-body table-responsive p-0" style="height: 800px;">
                  <table class="table table-bordered table-head-fixed text-nowrap h6" >
                      <thead>
                    <tr class="table-secondary" >
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
                      <td rowspan="4"><div align="center">NAMA BENGKEL </br> REVISI TRAFO</div></td>
                      <td rowspan="4"><div align="center">Aksi</div></td>
                    </tr>
                    <tr class="table-secondary" >
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
                    <tr class="table-secondary" >
                      <td><div align="center">Latitude</div></td>
                      <td><div align="center">Longtitude</div></td>
                    </tr>
                    <tr class="table-secondary" >
                      <td><div align="center">Lintang</div></td>
                      <td><div align="center">Bujur</div></td>
                    </tr>
                    <tr class="table-secondary" >
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
                      <td>19</td>

                    </tr>
                      </thead>
                      <tbody>
                          @foreach ( $posts as $post)
                    <tr wire:key="{{ $loop->index }}"  @if($loop->odd) class="table-info" @endif>

                      <td><b>{{ ($posts->currentpage()-1) * $posts->perpage() + $loop->index + 1 }}</b></td>
                      <td>{{ $post->id_ap2t }}</td>
                      <td>{{ $post->id_nama }}</td>
                      <td>{{ $post->alamat }}</td>
                      <td>{{ $post->lintang }}</td>
                      <td>{{ $post->bujur }}</td>
                      <td>{{ $post->konstruksi }}</td>
                      <td>{{ $post->trafo }}</td>
                      <td>{{ $post->penyulang }}</td>
                      <td>{{ $post->rayon }}</td>
                      <td>{{ $post->merek }}</td>
                      <td>{{ $post->ns_trafo }}</td>
                      <td>{{ $post->tahun }}</td>
                      <td>{{ $post->tipe }}</td>
                      <td>{{ $post->kapasitas }}</td>
                      <td>{{ $post->jenis_pel }}</td>
                      <td>{{ $post->status_op }}</td>
                      <td>{{ $post->revisi_travo }}</td>



                      <td><button  type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateexampleModal" wire:click="edit({{ $post->id }})">
                        edit
                          </button>

                          @if ($post->aktif == 1)
                          <button  type="button" class="btn btn-success btn-sm"  wire:click.prevent="tombol1({{ $post->id }})">
                            Aktif
                              </button>
                          @else

                          <button  type="button" class="btn btn-secondary btn-sm"  wire:click.prevent="tombol2({{ $post->id }})">
                            Tidak Aktif
                              </button>

                          @endif

                          @if(Auth::user()->level == 1)

                          <button type="button" wire:click="deleteId({{ $post->id  }})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteexampleModal">Delete</button></td>
                              @endif
                        </tr>
                    @endforeach
                      </tbody>
                  </table>

                </div>

                {{ $posts->links() }}

                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                <!-- /.col -->



</section>


</div>
