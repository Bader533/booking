@extends('dashboard.parent')

@section('css')

@endsection

@section('name')
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
        {{__('site.client')}}</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">{{__('site.home')}}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">{{__('site.client')}}</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">{{__('site.create')}}</li>
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
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::fname , lname , client kind-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{__('site.client_details')}}</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::fname , lname , client kind-->
                    <div class="card-body pt-0">
                        <!--begin::client_kind-->
                        <!--begin::Label-->
                        <label class="required form-label">{{__('site.client_kind')}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="client_kind" id="client_kind" class="form-control mb-2" />
                        <!--end::Input-->
                        <!--end::client_kind-->

                        <!--begin::client_kind-->
                        <!--begin::Label-->
                        <label class="required form-label">{{__('site.f_name')}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="f_name" id="f_name" class="form-control mb-2" />
                        <!--end::Input-->
                        <!--end::client_kind-->

                        <!--begin::client_kind-->
                        <!--begin::Label-->
                        <label class="required form-label">{{__('site.l_name')}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="l_name" id="l_name" class="form-control mb-2" />
                        <!--end::Input-->
                        <!--end::client_kind-->
                    </div>
                    <!--end::fname , lname , client kind-->
                </div>
                <!--end::fname , lname , client kind-->

                <!--begin::phone , nationality-->
                <div class="card card-flush py-4">
                    <!--begin::phone , nationality-->
                    <div class="card-body pt-0">
                        <!--begin::phone-->
                        <!--begin::Label-->
                        <label class="required form-label">{{__('site.phone')}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="phone" id="phone" class="form-control mb-2" />
                        <!--end::Input-->
                        <!--end::phone-->

                        <!--begin::nationality-->
                        <!--begin::Label-->
                        <label class="required form-label">{{__('site.nationality')}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="nationality" id="nationality" class="form-control mb-2" />
                        <!--end::Input-->
                        <!--end::nationality-->
                    </div>
                    <!--end::phone , nationality-->
                </div>
                <!--end::phone , nationality-->
            </div>
            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::id_kind , id_copy , visa_number-->
                            <div class="card card-flush py-4">
                                <br>
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::id_kind-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.id_kind')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="id_kind" id="id_kind" class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::id_kind-->

                                    <!--begin::id_copy-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.id_copy')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="id_copy" id="id_copy" class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::id_copy-->

                                    <!--begin::visa_number-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.visa_number')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="visa_number" id="visa_number"
                                            class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::visa_number-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::id_kind , id_copy , visa_number-->

                            <!--begin::sign_in , entry_time , duration , arrival_destination-->
                            <div class="card card-flush py-4">
                                <br>
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::sign_in-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.sign_in')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="date" name="sign_in" id="sign_in" class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::sign_in-->

                                    <!--begin::entry_time-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.entry_time')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="time" name="entry_time" id="entry_time"
                                            class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::entry_time-->

                                    <!--begin::duration-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.duration')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" name="duration" id="duration" class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::duration-->

                                    <!--begin::arrival_destination-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('site.arrival_destination')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="arrival_destination" id="arrival_destination"
                                            class="form-control mb-2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::arrival_destination-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::id_kind , id_copy , visa_number-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->


                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">{{__('site.cancel')}}</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <a onclick="store()" class="btn btn-primary">
                        <span class="indicator-label">{{__('site.save_change')}}</span>
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
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

<script>
    function store() {
        var formData = new FormData(document.getElementById('client-form'));

        axios.post('/client', formData)
        .then(function (response) {
            toastr.success(response.data.message);
            window.location.href = '/client';
        }).catch(function (error) {
            console.log(error);
            toastr.error(error.response.data.message)
        });
    }//end store client
</script>

@endsection