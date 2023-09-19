<!-- Button trigger modal -->


  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input name="ids" wire:model="id" type="hidden" >
                  <div class="form-group">
                    <label>Jenis Pelayanana</label>
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
                      <option value="">PILIH</option>
                      <option value="BARU">BARU</option>
                    </select>
                  </div>
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" id="hp" data-dismiss="modal" aria-hidden="true" style="display: none" wire:click.prevent="resetInputField()">Cancel</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
          <button type="button" class="btn btn-primary"  wire:click.prevent="update()">Save changes</button>
        </div>

      </div>
    </div>
  </div>
