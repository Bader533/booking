@extends('dashboard.parent')

@section('css')
@endsection

@section('name')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('site.lounge') }}</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="" class="text-muted text-hover-primary">{{ __('site.home') }}</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">{{ __('site.lounge') }}</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">{{ $lounge->name }}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body pt-15">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column mb-5">
                                <!--begin::Avatar-->
                                {{-- <div class="symbol symbol-100px symbol-circle mb-7">
                                    <img src="#" alt="image" />
                                </div> --}}
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{ $lounge->name }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-5 fw-semibold text-muted mb-6">{{ __('site.lounge') }}</div>
                                <!--end::Position-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                                    href="#kt_customer_view_details" role="button" aria-expanded="false"
                                    aria-controls="kt_customer_view_details">{{ __('site.lounge_details') }}
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>

                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="{{ __('site.edit') }}">
                                    <a href="{{ route('lounge.edit', $lounge->slug) }}"
                                        class="btn btn-sm btn-light-primary">{{ __('site.edit') }}</a>
                                </span>

                            </div>
                            <!--end::Details toggle-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--begin::Details content-->
                            <div id="kt_customer_view_details" class="collapse show">
                                <div class="py-5 fs-6">
                                    <div class="fw-bold mt-5">{{ __('site.name') }}</div>
                                    <div class="text-gray-600">{{ $lounge->name }}</div>

                                    <div class="fw-bold mt-5">{{ __('site.city') }}</div>
                                    <div class="text-gray-600">{{ $lounge->city }}</div>

                                    <div class="fw-bold mt-5">{{ __('site.address') }}</div>
                                    <div class="text-gray-600">{{ $lounge->address }}</div>

                                    <div class="fw-bold mt-5">{{ __('site.night_price') }}</div>
                                    <div class="text-gray-600">{{ $lounge->night_price }}</div>
                                    <!--begin::Details item-->

                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">

                        <!--begin:::permission-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true"
                                data-bs-toggle="tab"
                                href="#kt_customer_view_overview_bookings">{{ __('site.bookings') }}</a>
                        </li>
                        <!--end:::permission-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">

                        <!--begin:::booking-->
                        <div class="tab-pane fade active show" id="kt_customer_view_overview_bookings" role="tabpanel">

                            <!--begin::Card-->
                            <div class="card pt-2 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>{{ __('site.bookings') }}</h2>
                                    </div>
                                    <!--end::Card title-->

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="table-responsive card-body pt-0">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th>{{ __('site.booking_number') }}</th>
                                                <th>{{ __('site.client') }}</th>
                                                <th>{{ __('site.count_night') }}</th>
                                                <th>{{ __('site.price') }}</th>
                                                <th>{{ __('site.pay_way') }}</th>
                                                <th>{{ __('site.date_booking') }}</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600" id="table_category">
                                            @if (!$bookings->isEmpty())
                                                @foreach ($bookings as $booking)
                                                    <tr>
                                                        <!--begin::booking_number =-->
                                                        <td>
                                                            <p class="text-gray-800 text-hover-primary mb-1">
                                                                {{ $booking->booking_number }}
                                                            </p>
                                                        </td>
                                                        <!--end::booking_number =-->

                                                        <!--begin::lounge =-->
                                                        <td>
                                                            <a href="{{ route('client.show', $booking->client->slug) }}"
                                                                class="text-gray-800 text-hover-primary mb-1">
                                                                {{ $booking->client->f_name }}
                                                                {{ $booking->client->l_name }}
                                                            </a>
                                                        </td>
                                                        <!--end::lounge =-->

                                                        <!--begin::count_night =-->
                                                        <td>
                                                            <p class="text-gray-800 text-hover-primary mb-1">
                                                                {{ $booking->count_night }}
                                                            </p>
                                                        </td>
                                                        <!--end::count_night =-->

                                                        <!--begin::count_night =-->
                                                        <td>
                                                            <p class="text-gray-800 text-hover-primary mb-1">
                                                                {{ $booking->price }}
                                                            </p>
                                                        </td>
                                                        <!--end::count_night =-->

                                                        <!--begin::pay way=-->
                                                        <td>
                                                            @if ($booking->pay_way == 1)
                                                                <span
                                                                    class="badge py-3 px-4 fs-7 badge-light-primary">{{ __('site.paid_from_website') }}</span>
                                                            @else
                                                                <span
                                                                    class="badge py-3 px-4 fs-7 badge-light-warning">{{ __('site.bank_transfer') }}</span>
                                                            @endif
                                                        </td>
                                                        <!--end::pay way=-->

                                                        <!--begin::Date=-->
                                                        <td data-bs-target="license">
                                                            <p class="text-gray-600 text-hover-primary mb-1">
                                                                {{ $booking->start_date }} - {{ $booking->end_date }}</p>
                                                        </td>
                                                        <!--end::Date=-->

                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" align="center">
                                                        {{ __('site.no_data_found') }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <div class="container">
                                        <div class="row">
                                            <div
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="kt_ecommerce_products_table_paginate">
                                                    {{ $bookings->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end:::booking-->

                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('js')
@endsection
