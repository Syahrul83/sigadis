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
                        <h3 class="card-title">Judul Monitoring</h3>
                    </div>

                    <div class="card-header ">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn btn-primary" href="{{ route('awal.create') }}">Tambah</a>
                            </div>

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
                    <table id="example0" class="table table-bordered table-hover">
                        <thead>
                            <tr class="table-secondary">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Regional UP3</th>
                                <th>Bulan </th>
                                <th>Tahun</th>
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
                                <th>{{ $post->judul }}</th>
                                <th>{!! getData('masterawals','ulp',$post->masterawal_id) !!}</th>
                                <th>{{ $post->bulan }}</th>
                                <th>{{ $post->tahun }}</th>


                                <td>
                                    @if(Auth::user()->level == 0 or Auth::user()->level  == 1 )
                                    <a href="{{url('monitor1?reg='.$post->uuid) }}" class="btn btn-warning btn-sm">Show</a>
                                    <a href="{{url('/lap_analisa?reg='.$post->uuid) }}" class="btn btn-secondary btn-sm">Analisa</a>
                                    <a href="{{route('awal.copy',$post->uuid) }}" class="btn btn-success btn-sm">Copy</a>
                                    <a href="{{route('awal.edit',$post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    {!! Form::open(['method' => 'delete','onsubmit' => 'return confirm("Periksa Data Yang Benar sebelum Menghapus");','route' => ['awal.destroy', $post->id],'style'=>'display:inline'] ) !!}
                                    <button data-toggle="tooltip" title="Trash" class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    {!! Form::close() !!}</td>
                                    @else
                                    <a href="{{url('/lap_analisa?reg='.$post->uuid) }}" class="btn btn-secondary btn-sm">Analisa</a>
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
