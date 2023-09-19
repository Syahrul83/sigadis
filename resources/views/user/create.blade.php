<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Home') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Home Page</li>
    </x-slot>

    <!-- Page Heading -->


    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">


        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                </div>

                <div class="card-body">



                    @if (empty ($posts))
                    {!! Form::open(array('route' => 'masterawal.store','method'=>'POST', 'class'=>'form-horizontal')) !!}
                        @csrf
                        @include ('user.form')
                    {!! Form::close() !!}
                    @else

                    {!! Form::model($posts, ['method' => 'PATCH','class'=>'form-horizontal','files'=>'true','route' => ['user.update', $posts->id]]) !!}
                        @csrf
                        @include ('user.form')
                    {!! Form::close() !!}

                    @endif



                </div>

            </div>

        </div>

    </div>


</x-app-layout>
