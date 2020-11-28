@extends('layouts.frontend.app')

@section('content')
<div id="main_container" class="visible">

    <div id="header_in">
        <div id="logo_in">
            <h1><a href="{{ url('/') }}" title="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</a></h1>
        </div>
    </div>

    <div class="wrapper_in">
        <div class="container-fluid">

            <div class="subheader" id="services"></div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="box_contact">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Address</h4>
                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                        <p>11 Fifth Ave - New York, 45 001238 - USA</p>
                        <a href="https://www.google.com/maps/dir//11+5th+Ave,+New+York,+NY+10003,+Stati+Uniti/@40.7322935,-73.9981148,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c25990b3af8bb9:0x854ae1d3553155!2m2!1d-73.9959261!2d40.7322935!3e0" class="btn_1" target="_blank">Get directions</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_contact">
                        <i class="pe-7s-mail-open-file"></i>
                        <h4>Email and website</h4>
                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                        <p>
                            <strong>Email:</strong> <a href="javascript:void(0);">support@domain.com</a><br>
                            <strong>Website:</strong> <a href="javascript:void(0);">www.quote.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_contact">
                        <i class="pe-7s-call"></i>
                        <h4>Telephone</h4>
                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                        <p>
                            <strong>Tel:</strong> <a href="javascript:void(0);">+44 543 53433</a><br>
                            <strong>Fax:</strong> <a href="javascript:void(0);">+44 543 5322</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / row-->

        </div>
        <!-- /container-fluid -->
    </div>
    <!-- /wrapper_in -->
</div>
<!-- /main_container -->
@endsection