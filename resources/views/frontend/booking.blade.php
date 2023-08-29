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
                        {{-- <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
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
                        </div> --}}
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
                                    <select class="form-select form-select-solid" name="client_kind" id="client_kind"
                                        data-control="select2" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="visitor">{{ __('site.visitor') }}</option>
                                        <option value="resident">{{ __('site.resident') }}</option>
                                        <option value="citizen">{{ __('site.citizen') }}</option>
                                        <option value="a_gulf_citizen">{{ __('site.a_gulf_citizen') }}</option>
                                    </select>
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
                                    <select name="nationality" id="nationality" aria-label="Select a Country"
                                        data-control="select2" data-placeholder="Select a Country..."
                                        class="form-select form-select-solid fw-bold">
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
                                        <option value="Uzbekistan">Uzbekistan</option>
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
                                    <select class="form-select form-select-solid" name="id_kind" id="id_kind"
                                        data-control="select2" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="national_id">{{ __('site.national_id') }}</option>
                                        <option value="iqama">{{ __('site.iqama') }}</option>
                                        <option value="passport">{{ __('site.passport') }}</option>
                                    </select>
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
                            {{-- <div class="flex-column" data-kt-stepper-element="content">
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
                            </div> --}}
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
                    arrival_destination: document.getElementById('arrival_destination').value,
                })
                .then(function(response) {
                    toastr.success(response.data.message);
                    // window.location.href = '/';
                    location.reload();
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
