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

            <div class="subheader" id="about"></div>
            
            <div class="row">
                <div class="col-lg-8">
                    <h2>Welcome to Quote</h2>
                    <p class="lead">An mei sadipscing dissentiet, eos ea partem viderer facilisi. Brute nostrud democritum in vis, nam ei erat zril mediocrem. No postea diceret vix. Mei eu scripta dolorum voluptatibus, id omnes repudiare pri.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box_feat" id="icon_1">
                                <span></span>
                                <h3>Responsive site design</h3>
                                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box_feat" id="icon_2">
                                <span></span>
                                <h3>Web site check</h3>
                                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box_feat" id="icon_3">
                                <h3>Email campaigns</h3>
                                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box_feat" id="icon_4">
                                <h3>Seo optimization</h3>
                                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about_info">
                                <i class="pe-7s-news-paper"></i>
                                <h4>A brief about Quote<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about_info">
                                <i class="pe-7s-light"></i>
                                <h4>Mission<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->  
                </div>
                <!-- /col -->

                <aside class="col-lg-4">
                    <div class="more_padding_left">
                        <div class="widget" id="review">
                            <h4>reviews</h4>
                            <div class="owl-carousel owl-theme add_bottom_30">
                                <div class="item">
                                    <blockquote class="testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down">
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="img-thumbnail img-thumbnail-small">
                                            <img src="{{ asset('assets/img/avatar1.jpg') }}" alt="">
                                        </div>
                                        <p>
                                            <strong>Mark Smith</strong><span>October 2016</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- /item -->
                                <div class="item">
                                    <blockquote class="testimonial">
                                        <p>
                                            Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down">
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="img-thumbnail img-thumbnail-small">
                                            <img src="{{ asset('assets/img/avatar2.jpg') }}" alt="">
                                        </div>
                                        <p>
                                            <strong>Mark Smith</strong><span>September 2016</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- /item -->
                                <div class="item">
                                    <blockquote class="testimonial">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down">
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="img-thumbnail img-thumbnail-small">
                                            <img src="{{ asset('assets/img/avatar3.jpg') }}" alt="">
                                        </div>
                                        <p>
                                            <strong>Mark Smith</strong><span>July 2016</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- /item -->
                            </div>
                            <!-- /carousel -->
                        </div>
                        <!-- /reviews -->
                        <div class="widget" id="gallery">
                            <h4>gallery</h4>
                            <ul class="magnific-gallery">
                                <li>
                                    <a href="{{ asset('assets/img/gallery/large_1.jpg') }}" title="image title">
                                        <figure><img src="{{ asset('assets/img/gallery/thumb_1.jpg') }}" alt="thumb"></figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/img/gallery//large_2.jpg') }}" title="image title">
                                        <figure><img src="{{ asset('assets/img/gallery/thumb_2.jpg') }}" alt="thumb"></figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/img/gallery/large_3.jpg') }}" title="image title">
                                        <figure><img src="{{ asset('assets/img/gallery/thumb_3.jpg') }}" alt="thumb"></figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/img/gallery/large_4.jpg') }}" title="image title">
                                        <figure><img src="{{ asset('assets/img/gallery/thumb_2.jpg') }}" alt="thumb"></figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/img/gallery/large_5.jpg') }}" title="image title">
                                        <figure><img src="{{ asset('assets/img/gallery/thumb_3.jpg') }}" alt="thumb"></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /gallery -->
                        <div class="widget" id="follow">
                            <h4>follow us</h4>
                            <ul>
                                <li><a href="javascript:void(0);"><i class="icon-facebook"></i>Facebook</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-twitter"></i>Twitter</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-google"></i>Google plus</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-instagram"></i>Instagram</a></li>
                            </ul>
                        </div>
                        <!-- /follow -->
                    </div>
                    <!-- /more padding left -->
                </aside>
            </div>
            <!-- /row -->

        </div>
        <!-- /container-fluid -->
    </div>
    <!-- /wrapper_in -->
</div>
<!-- /main_container -->
@endsection