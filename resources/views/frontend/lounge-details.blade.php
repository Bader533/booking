@extends('frontend.parent')
@section('title', __('site.lounge'))
@section('css')
    <style>
        /* $font-family: Helvetica, Arial, sans-serif; */

        .rowInput {
            box-sizing: border-box;
            max-width: 788px;
            width: 100%;
            margin: 0 auto;
            background: #cfd1d0;
            padding: 10px;
            border-radius: 5px;
        }

        .flexbox {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;

            -webkit-flex-flow: row wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            font: 0/0 $font-family; // for IE10-9
        }

        .flex {
            flex: 1;
        }

        .input {
            box-sizing: border-box;
            display: inline-block;
            float: left;
            line-height: normal;
            margin: 0 10px 0 0;
            width: 100%;
            padding: 10px 8px;

            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .button {
            border-radius: 5px;
            box-sizing: border-box;
            display: inline-block;
            width: auto;
            float: left;
            margin: 0;
            padding: 5px 8px;
            border: 0;

            color: white;
            background: #50CD89;

            font-size: 16px;
            line-height: 1;
            text-decoration: none;
            /* font-weight: 700; */
            text-transform: uppercase;

            vertical-align: middle;
            overflow: hidden;

            &:active {
                outline: 0;
            }
        }

        /* .image-item {
                                                                                                width: 100%;
                                                                                                height: 100%;
                                                                                                object-fit: cover;
                                                                                            } */
        /* @media (min-width: 800px) { */
        @media screen and (min-width: 768px) {

            .scrollable-column {
                height: 500px;
                /* width: 100%; */
                overflow-y: scroll;
                overflow-x: hidden;
            }

            .card-body .row {
                height: 460px;
            }

            #image_col_4 {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

        }

        .no-gutters {
            height: 500px;
        }

        /* @media (min-width: 529px) { */
        @media screen and (max-width: 768px) {
            .image-container {
                padding: 0px 5px 0px 5px;
                display: inline-block;
                width: 300px;
                height: 200px;
                margin-right: 10px;
            }

            .scrollable-column {
                overflow-x: scroll;
                white-space: nowrap;
                height: 178px;
                width: 100%;
                /* width: 461px; */
                /* padding-bottom: 2px; */
            }

            .card-body .row {
                height: 300px;
            }
        }

        .div-with-space {
            margin-bottom: 25px;
            /* Adjust the value as needed */
        }
    </style>
@endsection
@section('header')

@endsection
@section('content')
    <div class="py-10">
        <!--begin::Container-->
        <div class="container mt-4">
            <div class="card">
                <div class="row no-gutters" style="background: #ebeded;">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <img id="image_col_4" src="{{ asset($lounge->images->first()->url) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 scrollable-column">
                        @foreach ($lounge->images as $image)
                            <div class="image-container">
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales"
                                    href="{{ asset($image->url) }}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset($image->url) }}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="div-with-space">
            <!-- Your content here -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row"
                        style="background-color: #EBEDED;padding: 10px;margin: 0px 10px;border-radius: 5px;">

                        <p style="direction: rtl;font-size: 18px;"><b>{{ __('site.price_based_date') }} :</b>
                            {{ $days * $lounge->night_price }}$</p>

                        <p style="direction: rtl;font-size: 18px;"><b>{{ __('site.count_night') }} :</b>
                            {{ $days }} {{ __('site.days') }}</p>
                        <a href="{{ route('booking.lounge', $lounge->slug) }}?date={{ $date }}"
                            class="btn btn-primary"
                            style="padding: 5px 25px;background-color: #50CD89">{{ __('site.booking') }}</a>
                    </div>
                </div>
                <div class="col-8">
                    <div style="direction: rtl;font-size: 18px;">
                        {!! $lounge->description !!}
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('js')
    <script>
        $("#kt_daterangepicker_1").daterangepicker();

        function search() {
            date = '{{ $date }}';
            slug = '{{ $lounge->slug }}';
            let newUrl = `/booking-lounge?slug=${slug}&date=${date}`;
            window.location.href = newUrl;
        }
    </script>
@endsection
