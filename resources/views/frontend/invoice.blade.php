@extends('frontend.parent')
@section('title', __('site.invoice'))
@section('css')
    @if (app()->getLocale() == 'ar')
        <style>
            #invoice_booking {
                direction: rtl;
            }
        </style>
    @else
        <style>
            #invoice_booking {
                direction: ltr;
            }
        </style>
    @endif
@endsection
@section('header')

@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Engage widget 10-->
                    <div class="card card-flush h-md-100" style="background-color: #F4F7F9">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                            style="background-position: 100% 50%; background-image:url('{{ asset('assets/media/stock/900x600/42.png') }}')">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                    <span class="me-2" style="color: #00C818">{{ __('site.booking_done_successfully') }}
                                        <br />
                                        <span id="invoice_booking" class="position-relative d-inline-block text-danger">
                                            <a style="color: rgb(111, 110, 110)"> {{ __('site.booking_date') }} :
                                                {{ $booking->start_date }} - {{ $booking->end_date }}</a>
                                        </span>
                                        <br />
                                        <span id="invoice_booking" class="position-relative d-inline-block text-danger">
                                            <a style="color: rgb(111, 110, 110)">{{ __('site.booking_price') }} :
                                                {{ $booking->price }} $</a>
                                        </span>
                                        <br />
                                        <span id="invoice_booking" class="position-relative d-inline-block text-danger">
                                            <a style="color: rgb(111, 110, 110)">{{ __('site.booking_number') }} :
                                                {{ $booking->booking_number }}</a>
                                        </span>
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->
                                {{-- <div class="text-center">
                                    <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                </div> --}}
                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->
                            <img class="mx-auto h-150px h-lg-200px theme-light-show"
                                src="assets/media/illustrations/misc/upgrade.svg" alt="" />
                            <img class="mx-auto h-150px h-lg-200px theme-dark-show"
                                src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
@section('js')
@endsection
