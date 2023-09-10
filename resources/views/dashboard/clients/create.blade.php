@extends('dashboard.parent')

@section('css')
@endsection

@section('name')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('site.client') }}</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">{{ __('site.home') }}</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">{{ __('site.client') }}</li>
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
                    <!--begin::fname , lname , client kind-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('site.client_details') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::fname , lname , client kind-->
                        <div class="card-body pt-0">
                            <!--begin::client_kind-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.client_kind') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            {{-- <input name="client_kind" id="client_kind" class="form-control mb-2" /> --}}
                            <select class="form-select form-select-solid" name="client_kind" id="client_kind"
                                data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option value="visitor">{{ __('site.visitor') }}</option>
                                <option value="resident">{{ __('site.resident') }}</option>
                                <option value="citizen">{{ __('site.citizen') }}</option>
                                <option value="a_gulf_citizen">{{ __('site.a_gulf_citizen') }}</option>
                            </select><br>
                            <!--end::Input-->
                            <!--end::client_kind-->

                            <!--begin::client_kind-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.f_name') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="f_name" id="f_name" class="form-control mb-2" />
                            <!--end::Input-->
                            <!--end::client_kind-->

                            <!--begin::client_kind-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.l_name') }}</label>
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
                            <label class="required form-label">{{ __('site.phone') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="phone" id="phone" class="form-control mb-2" />
                            <!--end::Input-->
                            <!--end::phone-->

                            <!--begin::nationality-->
                            <!--begin::Label-->
                            <label class="required form-label">{{ __('site.nationality') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            {{-- <input name="nationality" id="nationality" class="form-control mb-2" /> --}}
                            <select name="nationality" id="nationality" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Select a Country..." class="form-select form-select-solid fw-bold">
                                <option value="">Select a Country...</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                </option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                </option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                </option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaçao">Curaçao</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                </option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                    Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                </option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                </option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States" selected="selected">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">
                                    Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of
                                </option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands">Virgin Islands</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>

                            </select>
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
                                {{-- <div class="card card-flush py-4">
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
                            </div> --}}
                                <!--end::id_kind , id_copy , visa_number-->

                                <!--begin::sign_in , entry_time , duration , arrival_destination-->
                                <div class="card card-flush py-4">
                                    <br>
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::sign_in-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.sign_in') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" name="sign_in" id="sign_in"
                                                class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::sign_in-->

                                        <!--begin::entry_time-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.entry_time') }}</label>
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
                                            <label class="required form-label">{{ __('site.duration') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="duration" id="duration"
                                                class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::duration-->

                                        <!--begin::arrival_destination-->
                                        {{-- <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('site.arrival_destination') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="arrival_destination" id="arrival_destination"
                                                class="form-control mb-2" />
                                            <!--end::Input-->
                                        </div> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

    <script>
        function store() {
            var formData = new FormData(document.getElementById('client-form'));

            axios.post('/client', formData)
                .then(function(response) {
                    toastr.success(response.data.message);
                    window.location.href = '/client';
                }).catch(function(error) {
                    console.log(error);
                    toastr.error(error.response.data.message)
                });
        } //end store client
    </script>
@endsection
