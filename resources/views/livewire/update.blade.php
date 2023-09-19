<!-- Button trigger modal -->


  {{-- <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  enctype="multipart/form-data">
                <input name="ids" wire:model="id" type="hidden" >
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input name="firstname" wire:model="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                    @error('firstname') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input name="lastname" wire:model="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                    @error('lastname') <span class="error">{{ $message }}</span> @enderror
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input name="phone" type="number" wire:model="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">foto</label>
                    <input name="foto" type="file" wire:model="foto" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">update changes</button>
        </div>

      </div>
    </div>
  </div> --}}



  <div wire:ignore.self class="modal fade" class="modal fade" id="updateexampleModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Default Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  enctype="multipart/form-data">
                <input name="ids" wire:model="id" type="hidden" >
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input name="firstname" wire:model="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                    @error('firstname') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input name="lastname" wire:model="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                    @error('lastname') <span class="error">{{ $message }}</span> @enderror
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input name="phone" type="number" wire:model="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">foto</label>
                    <input name="foto" type="file" wire:model="foto" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click.prevent="update()">update changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
