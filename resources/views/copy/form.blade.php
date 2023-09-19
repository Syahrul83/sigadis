

{!! Form::hidden('uuids', $id) !!}
{!! Form::hidden('masterawal_id', $reg->masterawal_id) !!}



        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    <label class="form-control-label" for="name">Judul Monitoring<span class="small text-danger">*</span></label>


                    {!! Form::text('judul', null, array('placeholder' => 'judul monitoring','class' => 'form-control','required')) !!}
                </div>
            </div>

        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                <label class="form-control-label" for="ulp">Copy Regional ULP<span class="small text-danger">*</span></label>
                    <br>
               <b class="text-success"> >> {!! getData('masterawals','ulp',$reg->masterawal_id) !!} << </b>
            </div>
        </div>

    </div>


<div class="row">
    <div class="col-lg-6">
        <div class="form-group focused">
            <label class="form-control-label" for="name">Bulan<span class="small text-danger">*</span></label>

            {!! Form::text('bulan', null, array('placeholder' => 'Bulan','class' => 'form-control','required')) !!}
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group focused">
            <label class="form-control-label" for="name">Tahun<span class="small text-danger">*</span></label>
            {!! Form::number('tahun', null, array('placeholder' => 'tahun','class' => 'form-control', 'min'=>'1900', 'max'=>'2099' ,'step'=>'1','required')) !!}
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
