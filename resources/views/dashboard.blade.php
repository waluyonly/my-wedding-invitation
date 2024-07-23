@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="row row-cols-1">
                    <div class="overflow-hidden d-slider1 ">
                        <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-01"
                                            class="text-center circle-progress-01 circle-progress circle-progress-secondary"
                                            data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Hard</p>
                                            <h4 class="counter">214</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-02"
                                            class="text-center circle-progress-01 circle-progress circle-progress-info"
                                            data-min-value="0" data-max-value="100" data-value="20" data-type="percent">
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Soft (Waluyo)</p>
                                            <h4 class="counter">32</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-03"
                                            class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                            data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">Soft (Sitronella)</p>
                                            <h4 class="counter">130</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
