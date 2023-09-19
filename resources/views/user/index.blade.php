<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Home') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Home User</li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Tabel</h3>
              </div>

              <div class="card-header ">
                <div class="row">
                    @if(Auth::user()->level == 1)

                    <div class="col-md-3">
                        <a class="btn btn-primary" href="{{ url('/register') }}" >Tambah</a>
                    </div>
                    @endif

            {{-- @if ($message = Session::get('success'))
            <div class="col-md-6 mr-5   alert alert-success  alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
            @endif --}}
        </div>
        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>

                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ( $posts as $post )
                        <tr>

                            <td>{{ $i }}</td>

                            <th>{{ $post->name }}</th>
                            <th>{{ $post->email }}</th>
                            <th>{{ Level($post->level) }}</th>

                            <td>

                                <a href="{{route('user.edit',$post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                @if(Auth::user()->level == 1)
                                {!! Form::open(['method' => 'delete' ,'route' => ['user.destroy', $post->id],'style'=>'display:inline','id'=>'confirm'] ) !!}
                                <button data-toggle="tooltip" title="Trash" onclick="return confirm('Sebelum Di Hapus Pastikan Userya telah benar  ?');"  class="btn btn-danger btn-sm show_confirm" type="submit">Hapus</button>
                                {!! Form::close() !!}</td>
                                @endif


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

