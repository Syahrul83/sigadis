
@isset($posts)
{!! Form::hidden('id', $posts->id) !!}
@endisset

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">Email<span class="small text-danger">*</span></label>
                    {!! Form::text('email', null, array('placeholder' => 'Daerah ULP','class' => 'form-control','required')) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">Nama<span class="small text-danger">*</span></label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','step'=>'any','required')) !!}
                </div>
            </div>

        </div>
    </div>

    @if (Auth::user()->level == 1)

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="level">Level<span class="small text-danger">*</span></label>

                    {!! Form::select('level',['' => 'pilih','0'=>'User','1'=>'Admin','2'=>'Manager'],$posts->level,['class'=>'form-control','required']) !!}
                </div>
            </div>

        </div>
    </div>
    @else



                    {!! Form::hidden('level', null, array('placeholder' => 'Name','class' => 'form-control')) !!}



    @endif



    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name"> Password<span class="small text-danger">*</span></label>
                    <input type="text" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" >
                </div>
            </div>

        </div>
    </div>



    <!-- Button -->
    <div class="pl-lg-4">
        <div class="row">
            <div class="col text-left">
                <a href="{{ URL::previous() }}" type="submit" class="btn btn-warning">back</a>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>




