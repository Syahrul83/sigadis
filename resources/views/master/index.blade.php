<x-app-layout>
    <x-slot name="header">
        <?php $ulp=getData('masterawals','id',request()->get('reg')); ?>
        <h5 class="m-0 text-success">{{ __('DATA MASTER') }} : <b> {{ getData('masterawals','ulp',$ulp) }}</b></h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Data Master </li>
    </x-slot>


@if(Auth::user()->level == 1)

<div class="row">
  <div class="col-md-5">
      <form method="post" action="/upload-content" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="reg" value="{{ request()->get('reg') }}" >
                  <label>Pilih file CSV</label>
                  <div class="form-group">
                      <input type="file" name="file" id="input" required="required" accept=".csv" />
                  </div>
                  <button type="submit" class="btn btn-danger">Import</button>
      </form>
  </div>

  <div class="col-md-3">
    <label>File Form Contoh Data Trafo  </label>
    <a href="/downloadFile" class="btn btn-success">Download Contoh Excel</a>

  </div>
</div>
@endif

</br>

    @php
          $reg= 2;

    @endphp

    {{-- <livewire:master.data :reg="$reg"> --}}

        <livewire:master.data>

</x-app-layout>
<script>
const input = document.getElementById('input')

input.addEventListener('change', (event) => {
  const target = event.target
  	if (target.files && target.files[0]) {

      /*Maximum allowed size in bytes
        5MB Example
        Change first operand(multiplier) for your needs*/
      const maxAllowedSize = 0.5 * 1024 * 1024;
      if (target.files[0].size > maxAllowedSize) {
        alert("Maxsimal File Ukuran 2 MB");
      	// Here you can ask your users to load correct file
       	target.value = ''
      }
  }
})
</script>
