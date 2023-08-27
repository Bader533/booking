{{-- //////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
////////////////////////////////////////////////////// --}}

@extends('frontend.parent')
@section('title', __('site.lounge'))
@section('css')
    <style>
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
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                    <!--begin::Nav-->
                    <div class="stepper-nav flex-center flex-wrap mb-10">
                        <!--begin::Step 1-->
                        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 1
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 2
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 3
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        {{-- <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 4
                                    </h3>

                                    <div class="stepper-desc">
                                        Description
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->
                        </div> --}}
                        <!--end::Step 4-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="flex-column current" data-kt-stepper-element="content">
                                <!--begin::client_kind-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.client_kind') }}</label>

                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="client_kind" id="client_kind" />
                                    <!--end::Input-->
                                </div>
                                <!--end::client_kind-->

                                <!--begin::f_name-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.f_name') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="f_name" id="f_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::f_name-->

                                <!--begin::l_name-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.l_name') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="l_name" id="l_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::l_name-->

                                <!--begin::phone-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.phone') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="phone" id="phone" />
                                    <!--end::Input-->
                                </div>
                                <!--end::phone-->

                                <!--begin::nationality-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.nationality') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="nationality" id="nationality" />
                                    <!--end::Input-->
                                </div>
                                <!--end::nationality-->
                            </div>
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::id_kind-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.id_kind') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="id_kind"
                                        id="id_kind" />
                                    <!--end::Input-->
                                </div>
                                <!--end::id_kind-->

                                <!--begin::id_copy-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.id_copy') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="id_copy" id="id_copy"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::id_copy-->

                                <!--begin::visa_number-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.visa_number') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="visa_number" id="visa_number"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::visa_number-->

                                <!--begin::arrival_destination-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.arrival_destination') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="arrival_destination" id="arrival_destination"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::arrival_destination-->
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 3-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::sign_in-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.sign_in') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="sign_in"
                                        id="sign_in" />
                                    <!--end::Input-->
                                </div>
                                <!--end::sign_in-->

                                <!--begin::entry_time-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.entry_time') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="time" name="entry_time" id="entry_time"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::entry_time-->

                                <!--begin::duration-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.duration') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="number" name="duration" id="duration"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::duration-->

                                <!--begin::arrival_destination-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.arrival_destination') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="arrival_destination" id="arrival_destination"
                                        class="form-control form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::arrival_destination-->
                            </div>
                            <!--begin::Step 3-->

                            <!--begin::Step 4-->
                            {{-- <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::count_night-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{ __('site.count_night') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" name="count_night"
                                        id="count_night" />
                                    <!--end::Input-->
                                </div>
                                <!--end::count_night-->
                            </div> --}}
                            <!--begin::Step 4-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary"
                                    data-kt-stepper-action="previous">
                                    Back
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-primary" onclick="bookingLounge()"
                                    data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Continue
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('js')
    <script>
        $("#kt_daterangepicker_1").daterangepicker();

        function bookingLounge() {
            axios.post('/booking-lounge/{{ $lounge->slug }}', {
                    date: '{{ $date }}',
                    lounge_id: '{{ $lounge->id }}',
                    f_name: document.getElementById('f_name').value,
                    l_name: document.getElementById('l_name').value,
                    client_kind: document.getElementById('client_kind').value,
                    phone: document.getElementById('phone').value,
                    nationality: document.getElementById('nationality').value,
                    id_kind: document.getElementById('id_kind').value,
                    id_copy: document.getElementById('id_copy').value,
                    visa_number: document.getElementById('visa_number').value,
                    sign_in: document.getElementById('sign_in').value,
                    entry_time: document.getElementById('entry_time').value,
                    duration: document.getElementById('duration').value,
                    arrival_destination: document.getElementById('arrival_destination').value,
                })
                .then(function(response) {
                    toastr.success(response.data.message);
                    // window.location.href = '/';
                }).catch(function(error) {
                    console.log(error);
                    toastr.error(error.response.data.message)
                });
        } //end store client

        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle navigation click
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });

        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
@endsection
