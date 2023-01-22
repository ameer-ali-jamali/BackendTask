<!DOCTYPE html>
<html>

    <!-- Mirrored from gambolthemes.net/workwise-new/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:39 GMT -->

    <head>
        <meta charset="UTF-8">
        <title>WorkWise Html Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.range.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>
    <style>
        .nav-pills.tabs-my .nav-link.active,
        .nav-pills.tabs-my .show>.nav-link {
            background: #e44d3a;
            color: #fff;
        }

        .nav-pills.tabs-my .nav-link {
            color: #e44d3a;
        }
    </style>

    <body oncontextmenu="return false;">
        <div class="wrapper">
            <header>
                <div class="container">
                    <div class="header-data">
                        <div class="logo">
                            <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="search-bar">
                            <!-- <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form> -->
                        </div>
                        <nav>
                            <ul>
                                <li>
                                    <a href="jobs.html" title="">
                                        <span><img src="images/icon5.png" alt=""></span>
                                        Jobs
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="menu-btn">
                            <a href="#" title=""><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="user-account">
                            <div class="user-info">
                                <img src="images/resources/user.png" alt="">
                                <a href="#" title="">{{ Auth::user()->name }}</a>
                                <i class="la la-sort-down"></i>
                            </div>
                            <div class="user-account-settingss">
                                <h3 class="tc"><a href="/logout" title="">Logout</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="search-sec">
                <div class="container">
                    <!-- <div class="search-box">
                    <form>
                        <input type="text" name="search" placeholder="Search keywords">
                        <button type="submit">Search</button>
                    </form>
                </div> -->
                </div>
            </div>
            <main>
                <div class="main-section">
                    <div class="container">
                        <div class="main-section-data">
                            <div class="row">

                                {{-- Filter --}}
                                <div class="col-lg-3">
                                    <div class="filter-secs">
                                        <div class="filter-heading">
                                            <h3>Filters</h3>
                                            <a href="/jobs" title="">Clear all filters</a>
                                        </div>
                                        <div class="paddy">
                                            <div class="filter-dd">
                                                <div class="filter-ttl">
                                                    <h3>Skills</h3>
                                                </div>
                                                <input class="form-control form-control-sm" type="input"
                                                    name="search-skills" id="searchSkills" placeholder="Search skills">
                                            </div>
                                            <div class="filter-dd">
                                                <div class="filter-ttl">
                                                    <h3>Availabilty</h3>
                                                </div>
                                                <ul class="avail-checks">
                                                    <li>
                                                        <input type="radio" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small id="hourly">Hourly</small>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="cc" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small id="partTime">Part Time</small>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="cc" id="c3">
                                                        <label for="c3">
                                                            <span></span>
                                                        </label>
                                                        <small id="fullTime">Full Time</small>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="filter-dd">
                                                <div class="filter-ttl">
                                                    <h3>Job Type</h3>
                                                </div>
                                                <select class="form-control form-control-sm">
                                                    <option>Hourly</option>
                                                    <option>Part Time</option>
                                                    <option>Full Time</option>
                                                </select>
                                            </div>
                                            <div class="filter-dd">
                                                <div class="filter-ttl">
                                                    <h3>Pay Rate / Hr ($)</h3>
                                                </div>
                                                <div class="rg-slider">
                                                    <input class="rn-slider slider-input" type="hidden" value="5,50" />
                                                </div>
                                                <div class="rg-limit">
                                                    <h4>1</h4>
                                                    <h4>100+</h4>
                                                </div>
                                            </div>
                                            <div class="filter-dd">
                                                <div class="filter-ttl">
                                                    <h3>Countries</h3>
                                                </div>
                                                <select class="form-control form-control-sm filtterByCountry"
                                                    name="countries">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
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
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                                        Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The
                                                        Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
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
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                        (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                        Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                        State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                    </option>
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
                                                    <option value="Korea, Democratic People's Republic of">Korea,
                                                        Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                                        Macedonia, The Former Yugoslav Republic of</option>
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
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated States of</option>
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
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian
                                                        Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                                        The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South
                                                        Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United
                                                        Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States
                                                        Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British
                                                    </option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <input class="btn btn-block text-white" type="submit" id="filterPosts"
                                                value="Filter" style="background-color: #e44d3a;">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-9">
                                    <div class="main-ws-sec">
                                        <div class="posts-section">
                                            <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                                        aria-selected="true">My Post</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                        aria-selected="false">All Post</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">

                                                {{-- My Posts --}}
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                    aria-labelledby="pills-home-tab">
                                                    <div class="posty">

                                                        @if ($userPosts->count())
                                                        @foreach ($userPosts as $userPost)
                                                        <div class="fillterSkillsFromPosts">
                                                            <div class="post-bar">
                                                                <div class="post_topbar">
                                                                    <div class="usy-dt">
                                                                        <img src="images/resources/us-pc2.png" alt="">
                                                                        <div class="usy-name">
                                                                            <h3>{{ Auth::user()->name }}</h3>
                                                                            <span><img src="images/clock.png"
                                                                                    alt="">{{ $userPost->timeStamp }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ed-opts">
                                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                                class="la la-ellipsis-v"></i></a>
                                                                        <ul class="ed-options">
                                                                            <li><a href="#" title="">Edit Post</a></li>
                                                                            <li><a href="#" title="">Unsaved</a></li>
                                                                            <li><a href="#" title="">Unbid</a></li>
                                                                            <li><a href="#" title="">Close</a></li>
                                                                            <li><a href="#" title="">Hide</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="epi-sec">
                                                                    <ul class="descp">
                                                                        <li><img src="images/icon8.png"
                                                                                alt=""><span>Epic
                                                                                Coder</span>
                                                                        </li>
                                                                        <li><img src="images/icon9.png" alt=""><span
                                                                                class="filterCountry">{{ Auth::user()->country }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="job_descp">
                                                                    <h3>{{ $userPost->title }}</h3>
                                                                    <ul class="job-dt">
                                                                        <li><a href="#"
                                                                                title="">{{ $userPost->time }}</a>
                                                                        </li>
                                                                        <li><span>{{ $userPost->price }} /
                                                                                {{ $userPost->hr }}</span></li>
                                                                    </ul>
                                                                    <p>
                                                                        {{ $userPost->description }}
                                                                        <a href="#" title="">view more</a>
                                                                    </p>
                                                                    <ul class="skill-tags">
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $userPost->first_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $userPost->second_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $userPost->third_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $userPost->fourth_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $userPost->fifth_skill }}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="job-status-bar">
                                                                    <ul class="like-com">
                                                                        <li>
                                                                            <a href="#" class="active"><i
                                                                                    class="fas fa-heart"></i> Like</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <h1>No
                                                            Data Found</h1>
                                                        @endif
                                                    </div>
                                                </div>

                                                {{-- All Posts --}}
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                    aria-labelledby="pills-profile-tab">

                                                    <div class="container">
                                                        @if ($allPosts->count())
                                                        @foreach ($allPosts as $allPost)
                                                        <div class="fillterSkillsFromPosts">
                                                            <div class="post-bar">
                                                                <div class="post_topbar">
                                                                    <div class="usy-dt">
                                                                        <img src="images/resources/us-pic.png" alt="">
                                                                        <div class="usy-name">
                                                                            <h3>{{ "User Id "." ".$allPost->userId }}
                                                                            </h3>
                                                                            <span><img src="images/clock.png"
                                                                                    alt="">{{ $allPost->timeStamp }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ed-opts">
                                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                                class="la la-ellipsis-v"></i></a>
                                                                        <ul class="ed-options">
                                                                            <li><a href="#" title="">Edit Post</a>
                                                                            </li>
                                                                            <li><a href="#" title="">Unsaved</a>
                                                                            </li>
                                                                            <li><a href="#" title="">Unbid</a></li>
                                                                            <li><a href="#" title="">Close</a></li>
                                                                            <li><a href="#" title="">Hide</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="epi-sec">
                                                                    <ul class="descp">
                                                                        <li><img src="images/icon8.png"
                                                                                alt=""><span>Epic
                                                                                Coder</span></li>
                                                                        <li><img src="images/icon9.png"
                                                                                alt=""><span>{{ $allPost->country }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="job_descp">
                                                                    <h3>{{ $allPost->title }}</h3>
                                                                    <ul class="job-dt">
                                                                        <li><a href="#"
                                                                                title="">{{ $allPost->time }}</a>
                                                                        </li>
                                                                        <li><span>{{ $allPost->price }}
                                                                                {{ $allPost->hr }}</span></li>
                                                                    </ul>
                                                                    <p>
                                                                        {{ $allPost->description }}
                                                                        <a href="#" title="">view more</a>
                                                                    </p>



                                                                    <ul class="skill-tags">
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $allPost->first_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $allPost->second_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $allPost->third_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $allPost->fourth_skill }}</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                title="">{{ $allPost->fifth_skill }}</a>
                                                                        </li>
                                                                    </ul>


                                                                </div>
                                                                <div class="job-status-bar">
                                                                    <ul class="like-com">
                                                                        <li>
                                                                            <a href="#" class="active"><i
                                                                                    class="fas fa-heart"></i>
                                                                                Like</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <h1 class="alert" style="text-align: center">No Data Found</h1>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                <div class="right-sidebar">
                                    <div class="widget widget-about">
                                        <img src="images/wd-logo.png" alt="">
                                        <h3>Track Time on Workwise</h3>
                                        <span>Pay only for the Hours worked</span>
                                        <div class="sign_link">
                                            <h3><a href="sign-in.html" title="">Sign up</a></h3>
                                            <a href="#" title="">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Top Jobs</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior UI / UX Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Junior Seo Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior PHP Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Developer Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Most Viewed This Week</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior UI / UX Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Junior Seo Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        <footer>
            <div class="footy-sec mn no-margin">
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
                    <p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
                    <img class="fl-rgt" src="images/logo2.png" alt="">
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.range-min.js"></script>
        <script type="text/javascript" src="lib/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/helper.js"></script>
    </body>

    <!-- Mirrored from gambolthemes.net/workwise-new/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:39 GMT -->

</html>
