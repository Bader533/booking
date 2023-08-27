@extends('dashboard.parent')

@section('css')
    <style>
        .container {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
            position: relative;
            max-height: 200px;
            height: auto;
            overflow-y: auto;
            margin-top: 10px;
        }

        .container .image {
            width: 85px;
            height: 85px;
            border-radius: 5px;
            box-shadow: 0 05px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-right: 15px;
            position: relative;
            margin-bottom: 8px;
        }

        .container .image:nth-child(4n) {
            margin-top: 0;
        }

        .container .image img {
            width: 100%;
            height: 100%;
        }

        .container .image span {
            position: absolute;
            top: -2px;
            right: 9px;
            font-size: 20px;
            cursor: pointer;
        }

        .container .image span:hover {
            opacity: 0.8;
        }
    </style>
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
                <a href="#" class="text-muted text-hover-primary">{{ __('site.home') }}</a>
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
            <li class="breadcrumb-item text-muted">{{ __('site.create') }}</li>
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
                    <!--begin::night_price , night-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('site.lounge_details') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::night_price , night-->
                        <div class="card-body pt-0">
                            <!--begin::night-->
                            <!--begin::Label-->
                            {{-- <label class="required form-label">{{ __('site.night') }}</label> --}}
                            <!--end::Label-->
                            <!--begin::Input-->
                            {{-- <input name="night" id="night" class="form-control mb-2" /> --}}
                            <!--end::Input-->
                            <!--end::night-->

                            <!--begin::night_price-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.night_price') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="night_price" id="night_price" class="form-control mb-2" />
                            <!--end::Input-->
                            <!--end::night_price-->
                        </div>
                        <!--end::night_price , night-->
                    </div>
                    <!--end::night_price , night -->

                </div>
                <!--end::Aside column-->

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::name , city , address-->
                                <div class="card card-flush py-4">
                                    <br>
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::name-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.name') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" id="name" class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::name-->

                                        <!--begin::city-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.city') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="city" id="city" class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::city-->

                                        <!--begin::address-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.address') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="address" id="address" class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::address-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::name , city , address-->

                                <!--begin::description , short_description-->
                                <div class="card card-flush py-4">
                                    <br>
                                    <div class="card-body pt-0">
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">{{ __('site.short_description') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <input type="text" name="short_description" id="short_description"
                                                class="form-control mb-2" />

                                            <!--end::Editor-->
                                        </div>
                                    </div>
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">{{ __('site.description') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="description" name="kt_ecommerce_add_product_description"
                                                class="min-h-200px mb-2">
                                            </div>
                                            <!--end::Editor-->
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::description , short_description-->

                                <!--begin::Media-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>

                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click
                                                            to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                            files</span>
                                                    </div>
                                                    <input name="images[]" type="file" class="file" multiple hidden />
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->

                                        <div class="container">
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->
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
                        <a onclick="store()" class="btn btn-primary">
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
        var quill = new Quill('#description', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Type your text here...',
            theme: 'snow' // or 'bubble'
        });

        let files = [];
        form = document.querySelector("form");
        container = document.querySelector(".container");
        text = document.querySelector(".inner");
        browse = document.querySelector(".dz-message");
        input = document.querySelector(".file");
        let images = [];

        browse.addEventListener("click", () => input.click());

        input.addEventListener("change", () => {
            let file = input.files;
            for (let i = 0; i < file.length; i++) {
                if (files.every((e) => e.name != file[i].name)) files.push(file[i]);
                images.push(file[i]);
            }
            // form.reset();
            showImages();
        });

        const showImages = () => {
            let images = "";
            files.forEach((e, i) => {
                images += `<div class="image">
                    <img src="${URL.createObjectURL(e)}" alt="image">
                    <span onclick="delImage(${i})"><i class='fa fa-trash' style='color: red;font-size:16px'></i></span>
                </div>`;
            });
            container.innerHTML = images;
        };

        const delImage = (index) => {
            delete files[index];
            images.splice(index);
            console.log(index);
            showImages();
        };

        function store() {
            var formData = new FormData();

            formData.append('name', document.getElementById('name').value);
            formData.append('city', document.getElementById('city').value);
            formData.append('address', document.getElementById('address').value);
            // formData.append('night', document.getElementById('night').value);
            formData.append('night', 1);
            formData.append('night_price', document.getElementById('night_price').value);
            formData.append('short_description', document.getElementById('short_description').value);

            var description = document.querySelector('#description .ql-editor').innerHTML;

            formData.append('description', description);

            for (const image of images) {
                formData.append("images[]", image);
            }

            axios.post('/lounge', formData)
                .then(function(response) {
                    toastr.success(response.data.message);
                    window.location.href = '/lounge';
                })
                .catch(function(error) {
                    console.log(error);
                    toastr.error(error.response.data.message);
                });
        }
    </script>
@endsection
