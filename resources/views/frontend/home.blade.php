@extends('frontend.parent')
@section('title', __('site.home'))
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

            .card-img {
                width: 100%;
                height: 100px;
                /* يمكنك تعديل الارتفاع حسب الحاجة */
                object-fit: cover;
            }
        }

        #header_content {
            min-height: 411px !important;
        }
    </style>
@endsection
@section('header')
    <div class="d-flex flex-column flex-center w-100 min-h-350px px-9" id="header_content">

        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-notification-bing fs-2hx text-danger me-4 mb-5 mb-sm-0"><span
                            class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="fw-semibold">{{ __('site.error') }}</h4>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <span>{{ $error }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-primary"><span class="path1"></span><span
                                class="path2"></span></i>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            @endforeach

        @endif
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
