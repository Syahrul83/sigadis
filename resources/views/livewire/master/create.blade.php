<!-- Button trigger modal -->


  <!-- Modal -->
  <div wire:ignore.self class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Trafo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click.prevent="resetInputField()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form >

                <div class="form-group">
                    <label for="exampleInputEmail1">Id Ap2t</label>
                    <input wire:model.defer="id_ap2t" type="text" class="form-control"  placeholder=""  autocomplete="off" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ID/Nama <small class="text-danger"> Wajib</small></label>
                    <input wire:model.defer="id_nama" type="text" class="form-control"  autocomplete="off">
                    @error('id_nama') <span class="error text-danger">Wajib di isi /id Nama Sudah di gunakan</span> @enderror
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input wire:model.defer="alamat" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Lintang</label>
                    <input wire:model.defer="lintang" type="number" class="form-control" step="any" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bujur</label>
                    <input wire:model.defer="bujur" type="number" class="form-control" step="any" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Konstruksi</label>
                    <input wire:model.defer="konstruksi" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gardu Induk / Trafo</label>
                    <input wire:model.defer="trafo" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Penyulang</label>
                    <input wire:model.defer="penyulang" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Wilayah / Rayon</label>
                    <input wire:model.defer="rayon" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Merek</label>
                    <input wire:model.defer="merek" type="text" class="form-control"  autocomplete="off">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">No Serial Trafo</label>
                    <input wire:model.defer="ns_trafo" type="text" class="form-control"  autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input wire:model.defer="tahun" type="number" class="form-control"  autocomplete="off">
                </div>

                  <div class="form-group">
                    <label>Tipe Trafo OD / ID</label>
                    <select  wire:model="tipe" class="form-control">
                        <option value="">Pilih </option>
                      <option value="OD">OD</option>
                      <option value="ID">ID</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas Trafo <small class="text-danger"> Wajib</small></label>
                    <input wire:model.defer="kapasitas" type="number" class="form-control"  autocomplete="off">
                    @error('kapasitas') <span class="error text-danger">Wajib di isi </span> @enderror
                </div>

                  <div class="form-group">
                    <label>Jenis Pelayanan</label>
                    <select  wire:model="jenis_pel" class="form-control">
                        <option value="">Pilih </option>
                      <option value="UMUM">UMUM</option>
                      <option value="KHUSUS">KHUSUS</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Status Operasi</label>
                    <select  wire:model="status_op" class="form-control">
                        <option value="">Pilih </option>
                      <option value="OPERASI">OPERASI</option>
                      <option value="TIDAK">TIDAK</option>

                    </select>
                  </div>


                  <div class="form-group">
                    <label>Nama Bengkel Revisi Trafo</label>
                    <select  wire:model="revisi_travo" class="form-control">
                        <option value="">Pilih </option>
                      <option value="BARU">BARU</option>


                    </select>
                  </div>


        </div>
        <div class="modal-footer">
            <button type="button" id="hapus" data-dismiss="modal" aria-hidden="true" style="display: none">Cancel</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  wire:click.prevent="store()">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
