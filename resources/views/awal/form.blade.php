
@isset($posts)
{!! Form::hidden('id', $posts->id) !!}
@endisset

    <div class="pl-lg-4">
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
                    <label class="form-control-label" for="ulp">Regional ULP<span class="small text-danger">*</span></label>

                    @if (isset($posts))
                    <br>
                    <b class="text-success"> >> {!! getData('masterawals','ulp',$posts->masterawal_id) !!} << </b>
                    {!! Form::hidden('masterawal_id', $posts->masterawal_id) !!}
                    @else
                    {!! Form::select('masterawal_id', $masterawal, null, ['class' => 'form-control', 'placeholder' => '-- Pilih Regional ULP --']) !!}
                    @endif

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

        @if (isset($posts))

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label class="form-control-label" for="name">Nilai COS<span class="small text-danger">*</span></label>
                        {!! Form::number('cos', null, array('placeholder' => 'COS','class' => 'form-control','step'=>'any','required')) !!}
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label class="form-control-label" for="name">WLBP Rp/Kwh<span class="small text-danger">*</span></label>
                        {!! Form::number('wbp', null, array('placeholder' => 'wbp','class' => 'form-control','step'=>'any','required')) !!}
                    </div>
                </div>
        </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label class="form-control-label" for="name"> WLBP1 Rp/Kwh<span class="small text-danger">*</span></label>
                        {!! Form::number('lwbp1', null, array('placeholder' => 'WLBP1 ','class' => 'form-control','step'=>'any','required')) !!}
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                        <label class="form-control-label" for="name">WLBP2 Rp/Kwh<span class="small text-danger">*</span></label>
                        {!! Form::number('lwbp2', null, array('placeholder' => 'WLBP2','class' => 'form-control','step'=>'any','required')) !!}
                    </div>
                </div>

            </div>

            @endif

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
