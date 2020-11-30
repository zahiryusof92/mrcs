@extends('layouts.frontend.app')

@section('content')
<div id="layerslider" class="fullsize" style="width:1200px;height:100vh;">
    <!-- First slide -->
    <div class="ls-slide"  data-ls="duration: 8000; transition2d: 5;bgsize:cover;bgposition:50% 50%;kenburnszoom:in;">
        <img src="{{ asset('assets/img/slides/slide_1.jpg') }}" class="ls-bg" alt="Slide background">
        <p style="font-size:80px; color:#fff;top:35%; left:0px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:50px; letter-spacing:2px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:0;offsetxout:-100;durationout:1000;">PROGRAM BANTUAN</p>
        <p style="font-size:90px; color:#fff;top:47%; left:0px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:50px; letter-spacing:2px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:50;offsetxout:-100;durationout:1000;">WANG TUNAI</p>
        <p style="font-size:100px; color:#fff;top:60%; left:0px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:50px; letter-spacing:2px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:100;offsetxout:-100;durationout:1000;">COVID-19</p>
        <p style="top:75%; left:0px; padding-left:50px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:100;offsetxout:-150;durationout:1000;">
            <a href="{{ route('questions.index') }}">
                <button class="btn btn-lg btn-default">{{ __('questions.button.register_now') }}</button>
            </a>
        </p>
    </div>

</div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
        "use strict";
        /*Layerslider settings*/
        $("#layerslider").layerSlider({
            type: 'fullsize',
            height: 700,
            skinsPath: 'assets/layerslider/skins/',
            maxRatio: 1,
            showCircleTimer: false,
            touchNav: true,
            showBarTimer: true,
            navStartStop: false,
            navPrevNext: false,
            hoverPrevNext: true,
            thumbnailNavigation: false,
            navButtons: true
        });
    });
</script>
@endpush