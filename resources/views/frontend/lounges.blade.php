@extends('frontend.parent')
@section('title', __('site.lounge'))
@section('css')
    <style>
        $font-family: Helvetica, Arial, sans-serif;

        body {
            font-family: $font-family;
            font-size: 16px;
            line-height: 1.3;

            padding: 20px;
        }

        .row {
            box-sizing: border-box;
            max-width: 1000px;
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
            padding: 10px 36px;

            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }

        .click_details {
            border-radius: 5px;
            box-sizing: border-box;
            display: inline-block;
            width: auto;
            float: right;
            /* margin: 0px -52px; */
            padding: 10px 24px;
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

        .button {
            border-radius: 5px;
            box-sizing: border-box;
            display: inline-block;
            width: auto;
            float: left;
            margin: 0;
            padding: 5px 24px;
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

        #image-container {
            display: flex;
            /* Align images in a row */
            justify-content: center;
            /* Center the images horizontally */
        }

        .card-img {
            width: 274px;
            height: 184px;
            object-fit: cover;
            /* margin: 10px; */
            /* width: 100%; */
            /* height: 100px; */
            /* يمكنك تعديل الارتفاع حسب الحاجة */
            /* object-fit: cover; */
        }


        #header_content {
            min-height: 331px !important;
        }
    </style>
@endsection
@section('header')
    <div class="d-flex flex-column flex-center w-100 min-h-350px px-9" id="header_content">
        <!--begin::Heading-->
        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                {{ __('site.find_your_next_stay') }}
            </h1>
            <div class="row">
                <form class="flexbox">
                    @csrf
                    <input class="form-control form-control-solid input flex" placeholder="Pick date rage"
                        id="kt_daterangepicker_1" name="date" required />
                    <button type="button" onclick="search()" class="button">{{ __('site.search') }}</button>
                </form>
            </div>
        </div>
        <!--end::Heading-->
    </div>
@endsection
@section('content')
    <div class="py-10">
        <!--begin::Container-->
        <div class="container">
            @if (!$avalibleLounges->isEmpty())
                @foreach ($avalibleLounges as $lounge)
                    <div class="container mt-4">
                        <div class="card">
                            <div class="row no-gutters" id="rowwww" style="background: #ebeded;">
                                <div class="col-md-4" id="image-container">
                                    <img src="{{ asset($lounge->images->first()->url) }}" class="card-img" alt="Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" style="padding-left: 5px;padding-top: 5px;">

                                        <h5 class="card-title" style="font-size: 23px;font-weight: 400;float: left;">
                                            <a href="{{ route('lounge.details', $lounge->slug) }}?date={{ $date }}"
                                                style="color: black">
                                                {{ $lounge->name }} </a>
                                        </h5>
                                        <a href="{{ route('booking.lounge', $lounge->slug) }}?date={{ $date }}"
                                            class="click_details" style="">{{ __('site.booking') }}</a>

                                        <div class="row" style="background: #ebeded;">
                                            {{-- <div class="col-md-6"> --}}
                                            <p class="card-text">{{ $lounge->city }}, {{ $lounge->address }}</p>
                                            {{-- </div> --}}
                                        </div>
                                        <div class="row" style="background: #ebeded;">
                                            {{-- <div class="col-md-6"> --}}
                                            <p class="card-text">{{ $lounge->short_description }}
                                            </p>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>{{ __('site.no_data_found') }}</h3>
            @endif
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('js')
    <script>
        $("#kt_daterangepicker_1").daterangepicker();

        function search() {
            date = document.getElementById('kt_daterangepicker_1').value;

            let newUrl = '/search?date=' + date;
            window.location.href = newUrl;
        }
    </script>
@endsection
