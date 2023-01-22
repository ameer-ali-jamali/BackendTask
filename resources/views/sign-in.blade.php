@extends('main')
@section('title', 'WorkWise Html Template')

@section('content')

<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="images/cm-logo.png" alt="">
                                <p>Workwise, is a global freelancing platform and social networking where
                                    businesses and independent professionals connect and collaborate remotely
                                </p>
                            </div>
                            <img src="images/cm-main-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                            </ul>
                            {{-- Login  --}}
                            <div class="sign_in_sec current" id="tab-1">
                                <h3>Sign in</h3>
                                <form action="{{ URL::to('/login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="name" placeholder="Username">
                                                <i class="la la-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="password" name="password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="checky-sec">
                                                <div class="fgt-sec">
                                                    <input type="checkbox" name="cc" id="c1">
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <small>Remember me</small>
                                                </div>
                                                <a href="#" title="">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit" name="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="login-resources">
                                <h4>Login Via Social Account</h4>
                                <ul>
                                <li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
                                <li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
                                </ul>
                                </div> -->
                            </div>
                            <div class="sign_in_sec" id="tab-2">
                                <div class="signup-tab">
                                    <i class="fa fa-long-arrow-left"></i>
                                    <h2><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="2b414443454f444e6b4e534a465b474e05484446">[email&#160;protected]</a>
                                    </h2>
                                    <ul>
                                        <li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
                                        <li data-tab="tab-4"><a href="#" title="">Company</a></li>
                                    </ul>
                                </div>

                                {{-- User Registration Form --}}
                                <div class="dff-tab current" id="tab-3">
                                    <form action="{{ URL::to('/registerUser') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="fullName" placeholder="Full Name">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <i class="la la-globe"></i>
                                                    <select name="country">
                                                        <option value="#" disabled selected>Select Country</option>
                                                        <option value="afghanistan">Afghanistan</option>
                                                        <option value="alandIslands">Åland Islands</option>
                                                        <option value="albania">Albania</option>
                                                        <option value="algeria">Algeria</option>
                                                        <option value="americanSamoa">American Samoa</option>
                                                        <option value="andorra">Andorra</option>
                                                        <option value="angola">Angola</option>
                                                        <option value="anguilla">Anguilla</option>
                                                        <option value="antarctica">Antarctica</option>
                                                        <option value="antigua_and_Barbuda">Antigua and Barbuda</option>
                                                        <option value="argentina">Argentina</option>
                                                        <option value="armenia">Armenia</option>
                                                        <option value="aruba">Aruba</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="austria">Austria</option>
                                                        <option value="azerbaijan">Azerbaijan</option>
                                                        <option value="bahamas">Bahamas</option>
                                                        <option value="bahrain">Bahrain</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="barbados">Barbados</option>
                                                        <option value="belarus">Belarus</option>
                                                        <option value="belgium">Belgium</option>
                                                        <option value="belize">Belize</option>
                                                        <option value="benin">Benin</option>
                                                        <option value="bermuda">Bermuda</option>
                                                        <option value="bhutan">Bhutan</option>
                                                        <option value="bolivia">Bolivia</option>
                                                        <option value="bosnia_and_herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="botswana">Botswana</option>
                                                        <option value="bouvet_island">Bouvet Island</option>
                                                        <option value="brazil">Brazil</option>
                                                        <option value="british_Indian_Ocean_Territory">British Indian
                                                            Ocean
                                                            Territory</option>
                                                        <option value="brunei_Darussalam">Brunei Darussalam</option>
                                                        <option value="bulgaria">Bulgaria</option>
                                                        <option value="burkinaFaso">Burkina Faso</option>
                                                        <option value="burundi">Burundi</option>
                                                        <option value="cambodia">Cambodia</option>
                                                        <option value="cameroon">Cameroon</option>
                                                        <option value="canada">Canada</option>
                                                        <option value="capeVerde">Cape Verde</option>
                                                        <option value="caymanIslands">Cayman Islands</option>
                                                        <option value="central_African_Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="chad">Chad</option>
                                                        <option value="chile">Chile</option>
                                                        <option value="china">China</option>
                                                        <option value="christmas_island">Christmas Island</option>
                                                        <option value="cocos_(keeling)_islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="colombia">Colombia</option>
                                                        <option value="comoros">Comoros</option>
                                                        <option value="congo">Congo</option>
                                                        <option value="congo_the_democratic_republic_of_The">Congo, The
                                                            Democratic Republic of The</option>
                                                        <option value="cookIslands">Cook Islands</option>
                                                        <option value="costaRica">Costa Rica</option>
                                                        <option value="coteD'ivoire">Cote D'ivoire</option>
                                                        <option value="croatia">Croatia</option>
                                                        <option value="cuba">Cuba</option>
                                                        <option value="cyprus">Cyprus</option>
                                                        <option value="czechRepublic">Czech Republic</option>
                                                        <option value="denmark">Denmark</option>
                                                        <option value="djibouti">Djibouti</option>
                                                        <option value="dominica">Dominica</option>
                                                        <option value="dominicanRepublic">Dominican Republic</option>
                                                        <option value="ecuador">Ecuador</option>
                                                        <option value="egypt">Egypt</option>
                                                        <option value="el_Salvador">El Salvador</option>
                                                        <option value="equatorialGuinea">Equatorial Guinea</option>
                                                        <option value="eritrea">Eritrea</option>
                                                        <option value="estonia">Estonia</option>
                                                        <option value="ethiopia">Ethiopia</option>
                                                        <option value="falklandIslands(Malvinas)">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="faroeIslands">Faroe Islands</option>
                                                        <option value="fiji">Fiji</option>
                                                        <option value="finland">Finland</option>
                                                        <option value="france">France</option>
                                                        <option value="frenchGuiana">French Guiana</option>
                                                        <option value="frenchPolynesia">French Polynesia</option>
                                                        <option value="frenchSouthern_Territories">French Southern
                                                            Territories</option>
                                                        <option value="gabon">Gabon</option>
                                                        <option value="gambia">Gambia</option>
                                                        <option value="georgia">Georgia</option>
                                                        <option value="germany">Germany</option>
                                                        <option value="ghana">Ghana</option>
                                                        <option value="gibraltar">Gibraltar</option>
                                                        <option value="greece">Greece</option>
                                                        <option value="greenland">Greenland</option>
                                                        <option value="grenada">Grenada</option>
                                                        <option value="guadeloupe">Guadeloupe</option>
                                                        <option value="guam">Guam</option>
                                                        <option value="guatemala">Guatemala</option>
                                                        <option value="guernsey">Guernsey</option>
                                                        <option value="guinea">Guinea</option>
                                                        <option value="guinea-bissau">Guinea-bissau</option>
                                                        <option value="guyana">Guyana</option>
                                                        <option value="haiti">Haiti</option>
                                                        <option value="heardIslandandMcdonaldIslands">Heard Island and
                                                            Mcdonald Islands</option>
                                                        <option value="holy_See_(Vatican City State)">Holy See (Vatican
                                                            City
                                                            State)</option>
                                                        <option value="honduras">Honduras</option>
                                                        <option value="hongKong">Hong Kong</option>
                                                        <option value="hungary">Hungary</option>
                                                        <option value="iceland">Iceland</option>
                                                        <option value="india">India</option>
                                                        <option value="indonesia">Indonesia</option>
                                                        <option value="iran, Islamic Republic of">Iran, Islamic Republic
                                                            of
                                                        </option>
                                                        <option value="iraq">Iraq</option>
                                                        <option value="ireland">Ireland</option>
                                                        <option value="isle_of_Man">Isle of Man</option>
                                                        <option value="israel">Israel</option>
                                                        <option value="italy">Italy</option>
                                                        <option value="jamaica">Jamaica</option>
                                                        <option value="japan">Japan</option>
                                                        <option value="jersey">Jersey</option>
                                                        <option value="jordan">Jordan</option>
                                                        <option value="kazakhstan">Kazakhstan</option>
                                                        <option value="kenya">Kenya</option>
                                                        <option value="kiribati">Kiribati</option>
                                                        <option value="korea_democratic_people's_republic of">Korea,
                                                            Democratic People's Republic of</option>
                                                        <option value="korea_republic_of">Korea, Republic of</option>
                                                        <option value="kuwait">Kuwait</option>
                                                        <option value="kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="laoPeople's_democratic_republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="latvia">Latvia</option>
                                                        <option value="lebanon">Lebanon</option>
                                                        <option value="lesotho">Lesotho</option>
                                                        <option value="liberia">Liberia</option>
                                                        <option value="libyan_Arab_Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="liechtenstein">Liechtenstein</option>
                                                        <option value="lithuania">Lithuania</option>
                                                        <option value="luxembourg">Luxembourg</option>
                                                        <option value="macao">Macao</option>
                                                        <option value="macedonia_the_former_yugoslav_republic_of">
                                                            Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="madagascar">Madagascar</option>
                                                        <option value="malawi">Malawi</option>
                                                        <option value="malaysia">Malaysia</option>
                                                        <option value="maldives">Maldives</option>
                                                        <option value="mali">Mali</option>
                                                        <option value="malta">Malta</option>
                                                        <option value="marshall_islands">Marshall Islands</option>
                                                        <option value="martinique">Martinique</option>
                                                        <option value="mauritania">Mauritania</option>
                                                        <option value="mauritius">Mauritius</option>
                                                        <option value="mayotte">Mayotte</option>
                                                        <option value="mexico">Mexico</option>
                                                        <option value="micronesia_federated_states_of">Micronesia,
                                                            Federated States of</option>
                                                        <option value="moldova_republic_of">Moldova, Republic of
                                                        </option>
                                                        <option value="monaco">Monaco</option>
                                                        <option value="mongolia">Mongolia</option>
                                                        <option value="montenegro">Montenegro</option>
                                                        <option value="montserrat">Montserrat</option>
                                                        <option value="morocco">Morocco</option>
                                                        <option value="mozambique">Mozambique</option>
                                                        <option value="myanmar">Myanmar</option>
                                                        <option value="namibia">Namibia</option>
                                                        <option value="nauru">Nauru</option>
                                                        <option value="nepal">Nepal</option>
                                                        <option value="netherlands">Netherlands</option>
                                                        <option value="netherlands_Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="newCaledonia">New Caledonia</option>
                                                        <option value="newZealand">New Zealand</option>
                                                        <option value="nicaragua">Nicaragua</option>
                                                        <option value="niger">Niger</option>
                                                        <option value="nigeria">Nigeria</option>
                                                        <option value="niue">Niue</option>
                                                        <option value="norfolkIsland">Norfolk Island</option>
                                                        <option value="northern_mariana_islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="norway">Norway</option>
                                                        <option value="oman">Oman</option>
                                                        <option value="pakistan">Pakistan</option>
                                                        <option value="palau">Palau</option>
                                                        <option value="palestinian_Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
                                                        <option value="panama">Panama</option>
                                                        <option value="papua_new_guinea">Papua New Guinea</option>
                                                        <option value="paraguay">Paraguay</option>
                                                        <option value="peru">Peru</option>
                                                        <option value="philippines">Philippines</option>
                                                        <option value="pitcairn">Pitcairn</option>
                                                        <option value="poland">Poland</option>
                                                        <option value="portugal">Portugal</option>
                                                        <option value="puerto_rico">Puerto Rico</option>
                                                        <option value="qatar">Qatar</option>
                                                        <option value="reunion">Reunion</option>
                                                        <option value="romania">Romania</option>
                                                        <option value="russian_federation">Russian Federation</option>
                                                        <option value="rwanda">Rwanda</option>
                                                        <option value="saintHelena">Saint Helena</option>
                                                        <option value="saintKitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="saintLucia">Saint Lucia</option>
                                                        <option value="saint_pierre_and_miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="saintVincent_and_the_grenadines">Saint Vincent
                                                            and
                                                            The Grenadines</option>
                                                        <option value="samoa">Samoa</option>
                                                        <option value="sanMarino">San Marino</option>
                                                        <option value="saoTome_and_principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="saudiArabia">Saudi Arabia</option>
                                                        <option value="senegal">Senegal</option>
                                                        <option value="serbia">Serbia</option>
                                                        <option value="seychelles">Seychelles</option>
                                                        <option value="sierra_leone">Sierra Leone</option>
                                                        <option value="singapore">Singapore</option>
                                                        <option value="slovakia">Slovakia</option>
                                                        <option value="slovenia">Slovenia</option>
                                                        <option value="solomon_islands">Solomon Islands</option>
                                                        <option value="somalia">Somalia</option>
                                                        <option value="south_Africa">South Africa</option>
                                                        <option value="south_Georgia_and_The_South_Sandwich_Islands">
                                                            South
                                                            Georgia and The South Sandwich Islands</option>
                                                        <option value="spain">Spain</option>
                                                        <option value="sri_Lanka">Sri Lanka</option>
                                                        <option value="sudan">Sudan</option>
                                                        <option value="suriname">Suriname</option>
                                                        <option value="svalbard_and_jan_mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="swaziland">Swaziland</option>
                                                        <option value="sweden">Sweden</option>
                                                        <option value="switzerland">Switzerland</option>
                                                        <option value="syrian_arab_republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="taiwan">Taiwan</option>
                                                        <option value="tajikistan">Tajikistan</option>
                                                        <option value="tanzania_united_republic_of">Tanzania, United
                                                            Republic of</option>
                                                        <option value="thailand">Thailand</option>
                                                        <option value="timor-leste">Timor-leste</option>
                                                        <option value="togo">Togo</option>
                                                        <option value="tokelau">Tokelau</option>
                                                        <option value="tonga">Tonga</option>
                                                        <option value="trinidad_and_tobago">Trinidad and Tobago</option>
                                                        <option value="tunisia">Tunisia</option>
                                                        <option value="turkey">Turkey</option>
                                                        <option value="turkmenistan">Turkmenistan</option>
                                                        <option value="turks_and_caicos_islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="tuvalu">Tuvalu</option>
                                                        <option value="uganda">Uganda</option>
                                                        <option value="ukraine">Ukraine</option>
                                                        <option value="unitedArabEmirates">United Arab Emirates</option>
                                                        <option value="unitedKingdom">United Kingdom</option>
                                                        <option value="unitedStates">United States</option>
                                                        <option value="unitedStates_minor_outlying_islands">United
                                                            States
                                                            Minor Outlying Islands</option>
                                                        <option value="uruguay">Uruguay</option>
                                                        <option value="uzbekistan">Uzbekistan</option>
                                                        <option value="vanuatu">Vanuatu</option>
                                                        <option value="venezuela">Venezuela</option>
                                                        <option value="vietNam">Viet Nam</option>
                                                        <option value="virginIslands,british">Virgin Islands, British
                                                        </option>
                                                        <option value="virginIslands,U.S.">Virgin Islands, U.S.</option>
                                                        <option value="wallis_and_futuna">Wallis and Futuna</option>
                                                        <option value="westernSahara">Western Sahara</option>
                                                        <option value="yemen">Yemen</option>
                                                        <option value="zambia">Zambia</option>
                                                        <option value="zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <select name="category">
                                                        <option value="hourly">Hourly</option>
                                                        <option value="partTime">Part Time</option>
                                                        <option value="fullTime">Full Time</option>
                                                    </select>
                                                    <i class="la la-dropbox"></i>
                                                    <span><i class="fa fa-ellipsis-h"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password_confirmation"
                                                        placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="terms_Conditions" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms
                                                            & Conditions.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Get Started</button>
                                                <input type="submit" name="submit" id="#">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- Company Registration --}}
                                <div class="dff-tab" id="tab-4">
                                    <form action="{{ URL::to('/registerCompany') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="company_name" placeholder="Company Name">
                                                    <i class="la la-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <i class="la la-globe"></i>
                                                    <select name="company_country_name">
                                                        <option value="#" disabled selected>Select Country</option>
                                                        <option value="afghanistan">Afghanistan</option>
                                                        <option value="alandIslands">Åland Islands</option>
                                                        <option value="albania">Albania</option>
                                                        <option value="algeria">Algeria</option>
                                                        <option value="americanSamoa">American Samoa</option>
                                                        <option value="andorra">Andorra</option>
                                                        <option value="angola">Angola</option>
                                                        <option value="anguilla">Anguilla</option>
                                                        <option value="antarctica">Antarctica</option>
                                                        <option value="antigua_and_Barbuda">Antigua and Barbuda</option>
                                                        <option value="argentina">Argentina</option>
                                                        <option value="armenia">Armenia</option>
                                                        <option value="aruba">Aruba</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="austria">Austria</option>
                                                        <option value="azerbaijan">Azerbaijan</option>
                                                        <option value="bahamas">Bahamas</option>
                                                        <option value="bahrain">Bahrain</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="barbados">Barbados</option>
                                                        <option value="belarus">Belarus</option>
                                                        <option value="belgium">Belgium</option>
                                                        <option value="belize">Belize</option>
                                                        <option value="benin">Benin</option>
                                                        <option value="bermuda">Bermuda</option>
                                                        <option value="bhutan">Bhutan</option>
                                                        <option value="bolivia">Bolivia</option>
                                                        <option value="bosnia_and_herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="botswana">Botswana</option>
                                                        <option value="bouvet_island">Bouvet Island</option>
                                                        <option value="brazil">Brazil</option>
                                                        <option value="british_Indian_Ocean_Territory">British Indian
                                                            Ocean
                                                            Territory</option>
                                                        <option value="brunei_Darussalam">Brunei Darussalam</option>
                                                        <option value="bulgaria">Bulgaria</option>
                                                        <option value="burkinaFaso">Burkina Faso</option>
                                                        <option value="burundi">Burundi</option>
                                                        <option value="cambodia">Cambodia</option>
                                                        <option value="cameroon">Cameroon</option>
                                                        <option value="canada">Canada</option>
                                                        <option value="capeVerde">Cape Verde</option>
                                                        <option value="caymanIslands">Cayman Islands</option>
                                                        <option value="central_African_Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="chad">Chad</option>
                                                        <option value="chile">Chile</option>
                                                        <option value="china">China</option>
                                                        <option value="christmas_island">Christmas Island</option>
                                                        <option value="cocos_(keeling)_islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="colombia">Colombia</option>
                                                        <option value="comoros">Comoros</option>
                                                        <option value="congo">Congo</option>
                                                        <option value="congo_the_democratic_republic_of_The">Congo, The
                                                            Democratic Republic of The</option>
                                                        <option value="cookIslands">Cook Islands</option>
                                                        <option value="costaRica">Costa Rica</option>
                                                        <option value="coteD'ivoire">Cote D'ivoire</option>
                                                        <option value="croatia">Croatia</option>
                                                        <option value="cuba">Cuba</option>
                                                        <option value="cyprus">Cyprus</option>
                                                        <option value="czechRepublic">Czech Republic</option>
                                                        <option value="denmark">Denmark</option>
                                                        <option value="djibouti">Djibouti</option>
                                                        <option value="dominica">Dominica</option>
                                                        <option value="dominicanRepublic">Dominican Republic</option>
                                                        <option value="ecuador">Ecuador</option>
                                                        <option value="egypt">Egypt</option>
                                                        <option value="el_Salvador">El Salvador</option>
                                                        <option value="equatorialGuinea">Equatorial Guinea</option>
                                                        <option value="eritrea">Eritrea</option>
                                                        <option value="estonia">Estonia</option>
                                                        <option value="ethiopia">Ethiopia</option>
                                                        <option value="falklandIslands(Malvinas)">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="faroeIslands">Faroe Islands</option>
                                                        <option value="fiji">Fiji</option>
                                                        <option value="finland">Finland</option>
                                                        <option value="france">France</option>
                                                        <option value="frenchGuiana">French Guiana</option>
                                                        <option value="frenchPolynesia">French Polynesia</option>
                                                        <option value="frenchSouthern_Territories">French Southern
                                                            Territories</option>
                                                        <option value="gabon">Gabon</option>
                                                        <option value="gambia">Gambia</option>
                                                        <option value="georgia">Georgia</option>
                                                        <option value="germany">Germany</option>
                                                        <option value="ghana">Ghana</option>
                                                        <option value="gibraltar">Gibraltar</option>
                                                        <option value="greece">Greece</option>
                                                        <option value="greenland">Greenland</option>
                                                        <option value="grenada">Grenada</option>
                                                        <option value="guadeloupe">Guadeloupe</option>
                                                        <option value="guam">Guam</option>
                                                        <option value="guatemala">Guatemala</option>
                                                        <option value="guernsey">Guernsey</option>
                                                        <option value="guinea">Guinea</option>
                                                        <option value="guinea-bissau">Guinea-bissau</option>
                                                        <option value="guyana">Guyana</option>
                                                        <option value="haiti">Haiti</option>
                                                        <option value="heardIslandandMcdonaldIslands">Heard Island and
                                                            Mcdonald Islands</option>
                                                        <option value="holy_See_(Vatican City State)">Holy See (Vatican
                                                            City
                                                            State)</option>
                                                        <option value="honduras">Honduras</option>
                                                        <option value="hongKong">Hong Kong</option>
                                                        <option value="hungary">Hungary</option>
                                                        <option value="iceland">Iceland</option>
                                                        <option value="india">India</option>
                                                        <option value="indonesia">Indonesia</option>
                                                        <option value="iran, Islamic Republic of">Iran, Islamic Republic
                                                            of
                                                        </option>
                                                        <option value="iraq">Iraq</option>
                                                        <option value="ireland">Ireland</option>
                                                        <option value="isle_of_Man">Isle of Man</option>
                                                        <option value="israel">Israel</option>
                                                        <option value="italy">Italy</option>
                                                        <option value="jamaica">Jamaica</option>
                                                        <option value="japan">Japan</option>
                                                        <option value="jersey">Jersey</option>
                                                        <option value="jordan">Jordan</option>
                                                        <option value="kazakhstan">Kazakhstan</option>
                                                        <option value="kenya">Kenya</option>
                                                        <option value="kiribati">Kiribati</option>
                                                        <option value="korea_democratic_people's_republic of">Korea,
                                                            Democratic People's Republic of</option>
                                                        <option value="korea_republic_of">Korea, Republic of</option>
                                                        <option value="kuwait">Kuwait</option>
                                                        <option value="kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="laoPeople's_democratic_republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="latvia">Latvia</option>
                                                        <option value="lebanon">Lebanon</option>
                                                        <option value="lesotho">Lesotho</option>
                                                        <option value="liberia">Liberia</option>
                                                        <option value="libyan_Arab_Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="liechtenstein">Liechtenstein</option>
                                                        <option value="lithuania">Lithuania</option>
                                                        <option value="luxembourg">Luxembourg</option>
                                                        <option value="macao">Macao</option>
                                                        <option value="macedonia_the_former_yugoslav_republic_of">
                                                            Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="madagascar">Madagascar</option>
                                                        <option value="malawi">Malawi</option>
                                                        <option value="malaysia">Malaysia</option>
                                                        <option value="maldives">Maldives</option>
                                                        <option value="mali">Mali</option>
                                                        <option value="malta">Malta</option>
                                                        <option value="marshall_islands">Marshall Islands</option>
                                                        <option value="martinique">Martinique</option>
                                                        <option value="mauritania">Mauritania</option>
                                                        <option value="mauritius">Mauritius</option>
                                                        <option value="mayotte">Mayotte</option>
                                                        <option value="mexico">Mexico</option>
                                                        <option value="micronesia_federated_states_of">Micronesia,
                                                            Federated States of</option>
                                                        <option value="moldova_republic_of">Moldova, Republic of
                                                        </option>
                                                        <option value="monaco">Monaco</option>
                                                        <option value="mongolia">Mongolia</option>
                                                        <option value="montenegro">Montenegro</option>
                                                        <option value="montserrat">Montserrat</option>
                                                        <option value="morocco">Morocco</option>
                                                        <option value="mozambique">Mozambique</option>
                                                        <option value="myanmar">Myanmar</option>
                                                        <option value="namibia">Namibia</option>
                                                        <option value="nauru">Nauru</option>
                                                        <option value="nepal">Nepal</option>
                                                        <option value="netherlands">Netherlands</option>
                                                        <option value="netherlands_Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="newCaledonia">New Caledonia</option>
                                                        <option value="newZealand">New Zealand</option>
                                                        <option value="nicaragua">Nicaragua</option>
                                                        <option value="niger">Niger</option>
                                                        <option value="nigeria">Nigeria</option>
                                                        <option value="niue">Niue</option>
                                                        <option value="norfolkIsland">Norfolk Island</option>
                                                        <option value="northern_mariana_islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="norway">Norway</option>
                                                        <option value="oman">Oman</option>
                                                        <option value="pakistan">Pakistan</option>
                                                        <option value="palau">Palau</option>
                                                        <option value="palestinian_Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
                                                        <option value="panama">Panama</option>
                                                        <option value="papua_new_guinea">Papua New Guinea</option>
                                                        <option value="paraguay">Paraguay</option>
                                                        <option value="peru">Peru</option>
                                                        <option value="philippines">Philippines</option>
                                                        <option value="pitcairn">Pitcairn</option>
                                                        <option value="poland">Poland</option>
                                                        <option value="portugal">Portugal</option>
                                                        <option value="puerto_rico">Puerto Rico</option>
                                                        <option value="qatar">Qatar</option>
                                                        <option value="reunion">Reunion</option>
                                                        <option value="romania">Romania</option>
                                                        <option value="russian_federation">Russian Federation</option>
                                                        <option value="rwanda">Rwanda</option>
                                                        <option value="saintHelena">Saint Helena</option>
                                                        <option value="saintKitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="saintLucia">Saint Lucia</option>
                                                        <option value="saint_pierre_and_miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="saintVincent_and_the_grenadines">Saint Vincent
                                                            and
                                                            The Grenadines</option>
                                                        <option value="samoa">Samoa</option>
                                                        <option value="sanMarino">San Marino</option>
                                                        <option value="saoTome_and_principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="saudiArabia">Saudi Arabia</option>
                                                        <option value="senegal">Senegal</option>
                                                        <option value="serbia">Serbia</option>
                                                        <option value="seychelles">Seychelles</option>
                                                        <option value="sierra_leone">Sierra Leone</option>
                                                        <option value="singapore">Singapore</option>
                                                        <option value="slovakia">Slovakia</option>
                                                        <option value="slovenia">Slovenia</option>
                                                        <option value="solomon_islands">Solomon Islands</option>
                                                        <option value="somalia">Somalia</option>
                                                        <option value="south_Africa">South Africa</option>
                                                        <option value="south_Georgia_and_The_South_Sandwich_Islands">
                                                            South
                                                            Georgia and The South Sandwich Islands</option>
                                                        <option value="spain">Spain</option>
                                                        <option value="sri_Lanka">Sri Lanka</option>
                                                        <option value="sudan">Sudan</option>
                                                        <option value="suriname">Suriname</option>
                                                        <option value="svalbard_and_jan_mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="swaziland">Swaziland</option>
                                                        <option value="sweden">Sweden</option>
                                                        <option value="switzerland">Switzerland</option>
                                                        <option value="syrian_arab_republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="taiwan">Taiwan</option>
                                                        <option value="tajikistan">Tajikistan</option>
                                                        <option value="tanzania_united_republic_of">Tanzania, United
                                                            Republic of</option>
                                                        <option value="thailand">Thailand</option>
                                                        <option value="timor-leste">Timor-leste</option>
                                                        <option value="togo">Togo</option>
                                                        <option value="tokelau">Tokelau</option>
                                                        <option value="tonga">Tonga</option>
                                                        <option value="trinidad_and_tobago">Trinidad and Tobago</option>
                                                        <option value="tunisia">Tunisia</option>
                                                        <option value="turkey">Turkey</option>
                                                        <option value="turkmenistan">Turkmenistan</option>
                                                        <option value="turks_and_caicos_islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="tuvalu">Tuvalu</option>
                                                        <option value="uganda">Uganda</option>
                                                        <option value="ukraine">Ukraine</option>
                                                        <option value="unitedArabEmirates">United Arab Emirates</option>
                                                        <option value="unitedKingdom">United Kingdom</option>
                                                        <option value="unitedStates">United States</option>
                                                        <option value="unitedStates_minor_outlying_islands">United
                                                            States
                                                            Minor Outlying Islands</option>
                                                        <option value="uruguay">Uruguay</option>
                                                        <option value="uzbekistan">Uzbekistan</option>
                                                        <option value="vanuatu">Vanuatu</option>
                                                        <option value="venezuela">Venezuela</option>
                                                        <option value="vietNam">Viet Nam</option>
                                                        <option value="virginIslands,british">Virgin Islands, British
                                                        </option>
                                                        <option value="virginIslands,U.S.">Virgin Islands, U.S.</option>
                                                        <option value="wallis_and_futuna">Wallis and Futuna</option>
                                                        <option value="westernSahara">Western Sahara</option>
                                                        <option value="yemen">Yemen</option>
                                                        <option value="zambia">Zambia</option>
                                                        <option value="zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password_confirmation"
                                                        placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="terms_&_Conditions" id="c3">
                                                        <label for="c3">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to
                                                            the workwise Terms
                                                            & Conditions.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Get
                                                    Started</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footy-sec">
        <div class="container">
        <ul>
        <li><a href="help-center.html" title="">Help Center</a></li>
        <li><a href="about.html" title="">About</a></li>
        <li><a href="#" title="">Privacy Policy</a></li>
        <li><a href="#" title="">Community Guidelines</a></li>
        <li><a href="#" title="">Cookies Policy</a></li>
        <li><a href="#" title="">Career</a></li>
        <li><a href="forum.html" title="">Forum</a></li>
        <li><a href="#" title="">Language</a></li>
        <li><a href="#" title="">Copyright Policy</a></li>
        </ul>
        <p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
        </div>
        </div> -->
    </div>
</div>


@endsection
