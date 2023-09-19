<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Home') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Home Page</li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Master Data UP3 Kaltim</h3>
              </div>

              @if(Auth::user()->level == 1)
              <div class="card-header ">
                <div class="row">
                    <div class="col-md-3">
                <a class="btn btn-primary" href="{{ route('masterawal.create') }}" >Tambah</a>
                    </div>

            {{-- @if ($message = Session::get('success'))
            <div class="col-md-6 mr-5   alert alert-success  alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
            @endif --}}
        </div>
        </div>
        @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>

                            <th>Nama UP3</th>

                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ( $posts as $post )
                        <tr  @if($loop->odd) class="table-info" @endif>
                            <td>{{ $i }}</td>

                            <th>{{ $post->ulp }}</th>

                            <td>
                                <a href="{{url('master?reg='.$post->id) }}" class="btn btn-warning btn-sm">Show</a>
                                <a href="{{route('masterawal.edit',$post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                @if($post->status == 1)
                                <a href="{{route('masterawal.aktif',$post->id) }}" class="btn btn-success btn-sm">AKTIF</a>
                                @else
                                <a href="{{route('masterawal.naktif',$post->id) }}" class="btn btn-secondary btn-sm">TIDAK AKTIF</a>
                               @endif

                               @if(Auth::user()->level == 1)

                               {!! Form::open(['method' => 'delete' ,'route' => ['masterawal.destroy', $post->id],'style'=>'display:inline','id'=>'confirm'] ) !!}
                               <button data-toggle="tooltip" title="Trash" onclick="return confirm('Sebelum Di Hapus Pastikan Data Master Ini Belum di Gunakkan  ?');"  class="btn btn-danger btn-sm show_confirm" type="submit">Hapus</button>
                               {!! Form::close() !!}
                               @endif

                            </td>

                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


</x-app-layout>

