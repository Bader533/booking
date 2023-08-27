@extends('dashboard.parent')

@section('css')
@endsection

@section('name')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('site.booking') }}</h1>
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
            <li class="breadcrumb-item text-muted">{{ __('site.booking') }}</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">{{ __('site.edit') }}</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">{{ $booking->client->f_name }}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Form-->
            <form id="client-form" class="form d-flex flex-column flex-lg-row">
                <!--begin::Aside column-->
                {{-- <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::count_night , price-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('site.booking_details') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <!--begin::count_night-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.count_night') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="count_night" id="count_night" value="{{ $booking->count_night }}"
                                class="form-control mb-2" />
                            <!--end::Input-->
                            <!--end::count_night-->

                            <!--begin::price-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.price') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="price" id="price" value="{{ $booking->price }}" class="form-control mb-2" />
                            <!--end::Input-->
                            <!--end::price-->
                        </div>

                    </div>
                    <!--end::count_night , price-->
                </div> --}}
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::lounge , client , pay_way-->
                                <div class="card card-flush py-4">
                                    <br>
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::client_id-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.lounge') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                                data-placeholder="Select an option" id="lounge_id">
                                                <option></option>
                                                @foreach ($lounges as $lounge)
                                                    <option value="{{ $lounge->id }}"
                                                        @if ($lounge->id == $booking->lounge_id) selected @endif>
                                                        {{ $lounge->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Datepicker-->
                                            <div id="lounge_idError" class="invalid-feedback"></div>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::client_id-->

                                        <!--begin::client_id-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.client') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                                data-placeholder="Select an option" id="client_id">
                                                <option></option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}"
                                                        @if ($client->id == $booking->client_id) selected @endif>
                                                        {{ $client->f_name . ' ' . $client->l_name }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Datepicker-->
                                            <div id="client_idError" class="invalid-feedback"></div>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::client_id-->

                                        <!--begin::pay_way-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.pay_way') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                                data-placeholder="Select an option" id="pay_way">
                                                <option></option>
                                                <option value="1" @if ($booking->pay_way == 1) selected @endif>
                                                    {{ __('site.paid_from_website') }}</option>
                                                <option value="0" @if ($booking->pay_way == 0) selected @endif>
                                                    {{ __('site.bank_transfer') }}</option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Datepicker-->
                                            <div id="pay_wayError" class="invalid-feedback"></div>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::pay_way-->

                                        <!--begin::date-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.duration_of_stay') }}</label>
                                            <!--end::Label-->
                                            <input class="form-control form-control-solid input flex"
                                                placeholder="Pick date rage" id="kt_daterangepicker_1"
                                                value="{{ $booking->start_date }} - {{ $booking->end_date }}" />
                                            <!--begin::Datepicker-->
                                            <div id="dateError" class="invalid-feedback"></div>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::date-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::lounge , client , pay_way-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">{{ __('site.cancel') }}</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a onclick="update()" class="btn btn-primary">
                            <span class="indicator-label">{{ __('site.save_change') }}</span>
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('js')
    <script>
        $("#kt_daterangepicker_1").daterangepicker();

        function update() {
            axios.put('/booking/{{ $booking->id }}', {
                    // count_night: document.getElementById('count_night').value,
                    // price: document.getElementById('price').value,
                    pay_way: document.getElementById('pay_way').value,
                    client_id: document.getElementById('client_id').value,
                    lounge_id: document.getElementById('lounge_id').value,
                    date: document.getElementById('kt_daterangepicker_1').value,
                })
                .then(function(response) {
                    toastr.success(response.data.message);
                    window.location.href = '/booking';
                }).catch(function(error) {
                    console.log(error);
                    toastr.error(error.response.data.message)
                });
        } //end store client
    </script>
@endsection
