@extends('layouts.front')
@section('content')

    <div class="ui layout" id="top">
        <div class="hero-search-full-page low-sq next-sq">
            <div class="sq-slick hero-big slide-up-sq left-sq" data-mobile-arrows="false" data-tablet-arrows="false"
                data-mobile-dots="true" data-fade="true" data-speed="500" data-ease="linear">
                <div class="">
                    <div class="caption-content">
                        <h1>Easy and fast <br>Rent your favourite car.</h1>
                        <p>Browse to our wide range of available cars and quickly rent your favourite one, in just few clicks.</p>
                    </div>
                    <div class="caption-outside">
                        <a class="button-sq link-sq" href=''>
                            <i class="icon big icon-slim-arrow-right"></i>
                            <span>read more</span>
                        </a>
                    </div>
                    <div class="video-wrapper">
                        <iframe
                            src="https://www.youtube.com/embed/BDCU5OFXZ2c?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&start=15&mute=1"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui grid container">
            <div class="row">
                <div class="ui twelve wide mobile twelve wide tablet twelve wide computer column">
                    <div class="typo-section-header-sq d-flex justify-content-between align-items-center">
                        <h2 class="text-align-center-sq mt-4 mb-4">Available Vehicles</h2>
                    </div>
                </div>
                @php
                  $array = [
                            ['image' => '1.jpg', 'brand' => 'Toyota'],
                            ['image' => '2.jpg', 'brand' => 'Honda'],
                            ['image' => '3.jpg', 'brand' => 'Tesla'],
                            ['image' => '4.jpg', 'brand' => 'Lamborgini'],
                            // More vehicles...
                        ];
                @endphp
                @foreach($array as $vehicle)
                <div class="ui twelve wide mobile six wide tablet four wide computer column">
                    <div class="property-item caption-sq shadow-sq small-sq">
                        <div class="property-item-inner">
                            <div class="price-tag-sq">200 <span>/ Day</span></div>
                            <a class="image-sq">
                                <div class="image-wrapper">
                                    <span class="image-inner">
                                        <img src="{{ asset('assets/images/'.$vehicle['image']) }}" alt="" class="">
                                    </span>
                                </div>
                            </a>
                            <div class="brand-name">
                                {{ $vehicle['brand'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="ui full modal" data-for="modal01">
        <div class="modal-full-background">
            <img src="{{ asset('assets/front/images/modal/modal_background_001.jpg') }}" alt="">
        </div>
        <i class="icon icon-close close-modal"></i>
        <div class="header center">Sign Up Now</div>
        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq modal-ui-trigger" data-trigger-for="modal02">Already a member?</div>
                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal02">
                    Log In
                    <i class="icon icon-person-lock-2"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
