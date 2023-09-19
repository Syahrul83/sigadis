<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')
    <section>






        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add New Student
                        </button></div>
                    <div class="col-sm-10 text-center">
                        <h5>
                            @if (session()->has('message'))
                            <div class="text-success">{{ session('message') }}</div>

                            @endif</h5>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


                <div class="form-group col-sm-5">

                    <input wire:model="search" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Search First Name">

                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th sortable direction="desc">No</th>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>




                        @forelse ($students as $student)
                        <tr>
                            <td>{{ ($students->currentpage()-1) * $students->perpage() + $loop->index + 1 }}</td>
                            <td>{{ $student->firstname }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td><img src="storage/{{ $student->foto }}" alt="{{ $student->foto }}" srcset="" width="50px"></td>
                            <td> <button wire:ignore type="button" class="btn btn-info" data-toggle="modal" data-target="#updateexampleModal" wire:click.prevent="edit({{ $student->id }})">
                                    edit
                                </button>

                                <button type="button" wire:click="deleteId({{ $student->id  }})" class="btn btn-danger" data-toggle="modal" data-target="#deleteexampleModal">Delete</button>
                            </td>
                        </tr>


                        @empty

                        <tr>
                            <td colspan="7" class="text-center"> Tidak Ada Data</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
                {{ $students->links() }}


            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.col -->



    </section>
</div>
