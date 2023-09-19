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
                <input name="masterawal_id" wire:model="masterawal_id" type="hidden" >

                <div class="form-group">
                    <label>Pilih Data Trafo</label>
                    <select  wire:model="master_id" class="form-control" required>
                        <option value="">Pilih </option>

                        @foreach ( $masters as $key => $value )
                        <option value="{{ $key }}">{{ $value }}
                            @endforeach
                    </select>
                    @error('master_id') <span class="error text-danger">Data Trafo Harus di pilih</span> @enderror
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
