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
                                                    <option selected>Select Country</option>
                                                    <option value="tanzania">Tanzania</option>
                                                    <option value="newCaledonia">New Caledonia</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="unitedKingdom">United Kingdom</option>
                                                    <option value="unitedStates">United States</option>
                                                    <option value="russia">Russia</option>
                                                    <option value="pakistan">Pakistan</option>
                                                    <option value="zambia">Zambia</option>
                                                    <option value="india">India</option>
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
                                                            @endforeach
                                                            @else
                                                            <li class="alert alert-danger">No Data Found</li>
                                                            @endif
                                                        </div>
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
                                                        <li class="alert alert-danger text-dark">No Data Found</li>
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
