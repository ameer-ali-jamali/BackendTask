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
                                                    <option value="afghanistan">Afghanistan</option>
                                                    <option value="alandIslands">Åland Islands</option>
                                                    <option value="albania">Albania</option>
                                                    <option value="algeria">Algeria</option>
                                                    <option value="americanSamoa">American Samoa</option>
                                                    <option value="andorra">Andorra</option>
                                                    <option value="angola">Angola</option>
                                                    <option value="anguilla">Anguilla</option>
                                                    <option value="antarctica">Antarctica</option>
                                                    <option value="antigua and Barbuda">Antigua and Barbuda</option>
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
                                                    <option value="bosnia and herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="botswana">Botswana</option>
                                                    <option value="bouvet island">Bouvet Island</option>
                                                    <option value="brazil">Brazil</option>
                                                    <option value="british Indian Ocean Territory">British Indian Ocean
                                                        Territory</option>
                                                    <option value="bruneiDarussalam">Brunei Darussalam</option>
                                                    <option value="bulgaria">Bulgaria</option>
                                                    <option value="burkinaFaso">Burkina Faso</option>
                                                    <option value="burundi">Burundi</option>
                                                    <option value="cambodia">Cambodia</option>
                                                    <option value="cameroon">Cameroon</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="capeVerde">Cape Verde</option>
                                                    <option value="caymanIslands">Cayman Islands</option>
                                                    <option value="centralAfricanRepublic">Central African Republic
                                                    </option>
                                                    <option value="chad">Chad</option>
                                                    <option value="chile">Chile</option>
                                                    <option value="china">China</option>
                                                    <option value="christmas Island">Christmas Island</option>
                                                    <option value="cocos(Keeling)Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="colombia">Colombia</option>
                                                    <option value="comoros">Comoros</option>
                                                    <option value="congo">Congo</option>
                                                    <option value="congo,The Democratic Republic of The">Congo, The
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
                                                    <option value="frenchSouthern Territories">French Southern
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
                                                    <option value="holy_See_(Vatican City State)">Holy See (Vatican City
                                                        State)</option>
                                                    <option value="honduras">Honduras</option>
                                                    <option value="hongKong">Hong Kong</option>
                                                    <option value="hungary">Hungary</option>
                                                    <option value="iceland">Iceland</option>
                                                    <option value="india">India</option>
                                                    <option value="indonesia">Indonesia</option>
                                                    <option value="iran, Islamic Republic of">Iran, Islamic Republic of
                                                    </option>
                                                    <option value="iraq">Iraq</option>
                                                    <option value="ireland">Ireland</option>
                                                    <option value="isle of Man">Isle of Man</option>
                                                    <option value="israel">Israel</option>
                                                    <option value="italy">Italy</option>
                                                    <option value="jamaica">Jamaica</option>
                                                    <option value="japan">Japan</option>
                                                    <option value="jersey">Jersey</option>
                                                    <option value="jordan">Jordan</option>
                                                    <option value="kazakhstan">Kazakhstan</option>
                                                    <option value="kenya">Kenya</option>
                                                    <option value="kiribati">Kiribati</option>
                                                    <option value="korea, Democratic People's Republic of">Korea,
                                                        Democratic People's Republic of</option>
                                                    <option value="korea, Republic of">Korea, Republic of</option>
                                                    <option value="kuwait">Kuwait</option>
                                                    <option value="kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao_People's Democratic Republic">Lao People's
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
                                                    <option value="macedonia, The Former Yugoslav Republic of">
                                                        Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="madagascar">Madagascar</option>
                                                    <option value="malawi">Malawi</option>
                                                    <option value="malaysia">Malaysia</option>
                                                    <option value="maldives">Maldives</option>
                                                    <option value="mali">Mali</option>
                                                    <option value="malta">Malta</option>
                                                    <option value="marshall Islands">Marshall Islands</option>
                                                    <option value="martinique">Martinique</option>
                                                    <option value="mauritania">Mauritania</option>
                                                    <option value="mauritius">Mauritius</option>
                                                    <option value="mayotte">Mayotte</option>
                                                    <option value="mexico">Mexico</option>
                                                    <option value="micronesia, Federated States of">Micronesia,
                                                        Federated States of</option>
                                                    <option value="moldova, Republic of">Moldova, Republic of</option>
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
                                                    <option value="netherlands_Antilles">Netherlands Antilles</option>
                                                    <option value="newCaledonia">New Caledonia</option>
                                                    <option value="newZealand">New Zealand</option>
                                                    <option value="nicaragua">Nicaragua</option>
                                                    <option value="niger">Niger</option>
                                                    <option value="nigeria">Nigeria</option>
                                                    <option value="niue">Niue</option>
                                                    <option value="norfolkIsland">Norfolk Island</option>
                                                    <option value="northern_mariana_islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="norway">Norway</option>
                                                    <option value="oman">Oman</option>
                                                    <option value="pakistan">Pakistan</option>
                                                    <option value="palau">Palau</option>
                                                    <option value="palestinian_Territory, Occupied">Palestinian
                                                        Territory, Occupied</option>
                                                    <option value="panama">Panama</option>
                                                    <option value="papua New Guinea">Papua New Guinea</option>
                                                    <option value="paraguay">Paraguay</option>
                                                    <option value="peru">Peru</option>
                                                    <option value="philippines">Philippines</option>
                                                    <option value="pitcairn">Pitcairn</option>
                                                    <option value="poland">Poland</option>
                                                    <option value="portugal">Portugal</option>
                                                    <option value="puerto Rico">Puerto Rico</option>
                                                    <option value="qatar">Qatar</option>
                                                    <option value="reunion">Reunion</option>
                                                    <option value="romania">Romania</option>
                                                    <option value="russianFederation">Russian Federation</option>
                                                    <option value="rwanda">Rwanda</option>
                                                    <option value="saintHelena">Saint Helena</option>
                                                    <option value="saintKitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="saintLucia">Saint Lucia</option>
                                                    <option value="saint_pierre_and_miquelon">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="saintVincent_and_the_grenadines">Saint Vincent and
                                                        The Grenadines</option>
                                                    <option value="samoa">Samoa</option>
                                                    <option value="sanMarino">San Marino</option>
                                                    <option value="saoTome_and_principe">Sao Tome and Principe</option>
                                                    <option value="saudiArabia">Saudi Arabia</option>
                                                    <option value="senegal">Senegal</option>
                                                    <option value="serbia">Serbia</option>
                                                    <option value="seychelles">Seychelles</option>
                                                    <option value="sierra Leone">Sierra Leone</option>
                                                    <option value="singapore">Singapore</option>
                                                    <option value="slovakia">Slovakia</option>
                                                    <option value="slovenia">Slovenia</option>
                                                    <option value="solomon Islands">Solomon Islands</option>
                                                    <option value="somalia">Somalia</option>
                                                    <option value="south_Africa">South Africa</option>
                                                    <option value="south_Georgia_and_The_South_Sandwich_Islands">South
                                                        Georgia and The South Sandwich Islands</option>
                                                    <option value="spain">Spain</option>
                                                    <option value="sri Lanka">Sri Lanka</option>
                                                    <option value="sudan">Sudan</option>
                                                    <option value="suriname">Suriname</option>
                                                    <option value="svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="swaziland">Swaziland</option>
                                                    <option value="sweden">Sweden</option>
                                                    <option value="switzerland">Switzerland</option>
                                                    <option value="syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="taiwan">Taiwan</option>
                                                    <option value="tajikistan">Tajikistan</option>
                                                    <option value="tanzania, United Republic of">Tanzania, United
                                                        Republic of</option>
                                                    <option value="thailand">Thailand</option>
                                                    <option value="timor-leste">Timor-leste</option>
                                                    <option value="togo">Togo</option>
                                                    <option value="tokelau">Tokelau</option>
                                                    <option value="tonga">Tonga</option>
                                                    <option value="trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="tunisia">Tunisia</option>
                                                    <option value="turkey">Turkey</option>
                                                    <option value="turkmenistan">Turkmenistan</option>
                                                    <option value="turks_and_caicos_islands">Turks and Caicos Islands
                                                    </option>
                                                    <option value="tuvalu">Tuvalu</option>
                                                    <option value="uganda">Uganda</option>
                                                    <option value="ukraine">Ukraine</option>
                                                    <option value="unitedArabEmirates">United Arab Emirates</option>
                                                    <option value="unitedKingdom">United Kingdom</option>
                                                    <option value="unitedStates">United States</option>
                                                    <option value="unitedStates_minor_outlying_islands">United States
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
