
@isset($posts)
{!! Form::hidden('id', $posts->id) !!}
@endisset

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">Daerah UP3<span class="small text-danger">*</span></label>
                    {!! Form::text('ulp', null, array('placeholder' => 'Daerah UP3','class' => 'form-control','required')) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">Nilai COS<span class="small text-danger">*</span></label>
                    {!! Form::number('cos', null, array('placeholder' => 'COS','class' => 'form-control','step'=>'any','required')) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">WLBP Rp/Kwh<span class="small text-danger">*</span></label>
                    {!! Form::number('wbp', null, array('placeholder' => 'wbp','class' => 'form-control','step'=>'any','required')) !!}
                </div>
            </div>

        </div>
    </div>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name"> WLBP1 Rp/Kwh<span class="small text-danger">*</span></label>
                    {!! Form::number('lwbp1', null, array('placeholder' => 'WLBP1 ','class' => 'form-control','step'=>'any','required')) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">WLBP2 Rp/Kwh<span class="small text-danger">*</span></label>
                    {!! Form::number('lwbp2', null, array('placeholder' => 'WLBP2','class' => 'form-control','step'=>'any','required')) !!}
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
