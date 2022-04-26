@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Prefetch DNS for external assets -->
    <link rel="dns-prefetch" href="https://cdn.npfs.co">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//www.googleadservices.com">
    <link rel="dns-prefetch" href="//connect.facebook.net">
    <link rel="dns-prefetch" href="//www.facebook.com">
    <link rel="dns-prefetch" href="//www.google.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RKU RK University | Online Registration Form For Admission</title>
    <meta name="description"
        content="Admission 2021. MM(DU), Mullana North India&rsquo;s Best Private University in Ambala, Haryana providing courses in MBBS, MD, MS, OTT, MLT, BPT, MPT, Nursing, B.Tech, M.Tech, B.Sc, M.Sc, BCA, MCA, BBA, MBA, B.Com, Diploma, HMCT, Pharm D, B.Pharma, M.Pharma, App">
    <link href="{{asset('img/logo.png')}}" type="image/x-icon" rel="icon">
    <link href="{{asset('img/logo.png')}}" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="{{asset('css/form.css?1640168971')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min2.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{asset('css/css-plugin-collections.css')}}">
</head>

<body>
    <div class="kode_wrapper mt-3">
        <!-- ======= Hero Section ======= -->
        <section class="d-flex align-items-center mmdu-img" id="hero">
            <div class="container">
                <img class="mmdu-logo pd-bt-20" src="{{asset('img/logo.png')}}">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-between pt-lg-0" data-aos="fade-up"
                        data-aos-delay="200"></div>
                    <div class="col-lg-6 mmdu-adsnfrm" data-aos="zoom-in" data-aos-delay="200">
                        <div class="formContainer form-absolute block-class link-border form-position-right">
                            <!--  <div class="form-inner"><div class="form-clickOuter"><span class="form-click opacityprimary">Register Now</span></div>-->
                            <h2 class="text-center form-heading">Admissions Open</h2>
                            <!--register login panel-->
                            <div class="panel with-nav-tabs panel-default dynamic_theme_block">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1default" data-toggle="tab"
                                                aria-expanded="true">Register</a></li>
                                        <li class=""><a href="#tab2default" data-toggle="tab"
                                                aria-expanded="false">Login </a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1default">
                                            <div class="desktop_withoutpopup">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-custom">
                                                        <div
                                                            class="form-group label-floating Password reg_password_div">
                                                            <div class="input password"><label
                                                                    class="control-label  widget_label"
                                                                    for="password">{{ __('Password') }} <span
                                                                        class="required">*</span></label>
                                                                <input type="password" name="password" id="password"
                                                                    autocomplete="off"
                                                                    class="form-control widget_input registerJsClass @error('password') is-invalid @enderror"
                                                                    placeholder="Enter Password  *">
                                                                    @if ($errors->has('password'))
                                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                                    @endif
                                                            </div>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="form-group label-floating reg_name_div">
                                                            <div class="input text"><label
                                                                    class="control-label widget_label"
                                                                    for="name">{{ __('Name') }}<span
                                                                        class="required">*</span></label>
                                                                <input type="text" id="name" name="name"
                                                                    class="form-control widget_input @error('name') is-invalid @enderror"
                                                                    placeholder="Enter Name *"
                                                                    value="{{ old('name') }}">
                                                                    @if ($errors->has('name'))
                                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                    @endif
                                                            </div>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div
                                                            class="form-group label-floating reg_email_div Email_email">
                                                            <div class="input text"><label
                                                                    class="control-label widget_label"
                                                                    for="email">{{ __('Email Address') }}<span
                                                                        class="required">*</span></label>
                                                                <input type="text" id="email" name="email"
                                                                    autocomplete="email"
                                                                    class="form-control widget_input @error('email') is-invalid @enderror"
                                                                    placeholder="Enter Email Address *"
                                                                    value="{{ old('email') }}">
                                                                    @if ($errors->has('email'))
                                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                                    @endif
                                                            </div>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="form-group label-floating reg_name_div">
                                                            <div class="input text"><label
                                                                    class="control-label widget_label"
                                                                    for="mobilenumber">Mobile Number <span
                                                                        class="required">*</span></label>
                                                                <input type="number" name="mobile" id="mobile"
                                                                    autocomplete="off" class="form-control widget_input"
                                                                    placeholder="Enter Mobile Number *" value="{{ old('mobile') }}">
                                                                    @if ($errors->has('mobile'))
                                                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                                    @endif
                                                            </div>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div
                                                            class="form-group label-floating reg_state_id_div StateId field-select">
                                                            <select name="state" id="StateId"
                                                                class="form-control select-arrow-cust widget_input"
                                                                data-label="Select State *"
                                                                data-none-selected-text="Select State">
                                                                <option value="" selected="selected">Select State *
                                                                </option>
                                                                <option value="26909">Andaman and Nicobar</option>
                                                                <option value="26920">Andhra Pradesh</option>
                                                                <option value="27573">Arunachal Pradesh</option>
                                                                <option value="33411">Uttarakhand</option>
                                                                <option value="33506">West Bengal</option>
                                                            </select>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div
                                                            class="form-group label-floating reg_city_id_div CityId field-select">
                                                            <select name="city" id="CityId"
                                                                class="form-control select-arrow-cust widget_input"
                                                                data-label="Select City *"
                                                                data-none-selected-text="Select City">
                                                                <option value="">Select City</option>
                                                                <option value="Test">Test</option>
                                                                <option value="Rajkot">Rajkot</option>
                                                                <option value="Ahemedabad">Ahemedabad</option>
                                                            </select>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div
                                                            class="form-group label-floating reg_university_id_div UniversityId field-select">
                                                            <select name="institute" id="UniversityId"
                                                                class="form-control select-arrow-cust widget_input"
                                                                data-label="Select Institute *"
                                                                data-none-selected-text="Select New Campus">
                                                                <option value="" selected="selected">Select Institute *
                                                                </option>
                                                                <option value="196118">Mullana</option>
                                                            </select>
                                                            @if ($errors->has('institute'))
                                                                <span class="text-danger">{{ $errors->first('institute') }}</span>
                                                            @endif
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div
                                                            class="form-group label-floating reg_course_id_div CourseId field-select">
                                                            <select name="course" id="CourseId"
                                                                class="form-control select-arrow-cust widget_input"
                                                                data-label="Select Course *"
                                                                data-none-selected-text="Select Course">
                                                                <option value="" selected="selected">Select Course *
                                                                </option>
                                                                <option value="test" selected>test</option>
                                                                 <option value="Agriculture">Agriculture</option>
                                                                <option value="Basic Science">Basic Science</option>
                                                                <option value="Business Management">Business Management</option>
                                                                <option value="Computer Application">Computer Application</option>
                                                                <option value="Engineering">Engineering</option>
                                                                <option value="Hotel Management">Hotel Management</option>
                                                                <option value="Law">Law</option>
                                                                <option value="Nursing">Nursing</option>
                                                                <option value="Paramedical Science">Paramedical Science</option>
                                                                <option value="Pharmacy">Pharmacy</option>
                                                                <option value="Physiotherapy">Physiotherapy</option>
                                                            </select>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div
                                                            class="form-group label-floating field-select  reg_specialization_id_div">
                                                            <select name="specialization" id="SpecializationId"
                                                                data-label="Select Specialisation *"
                                                                class="form-control select-arrow-cust widget_input"
                                                                data-none-selected-text="Select Specialisation">
                                                                <option value="" selected="selected">Select
                                                                    Specialisation *</option>
                                                                <option value="test" selected>test</option>
                                                            </select>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="form-group agree-group col-md-12 m0">
                                                            <div class="checkbox"><label><input type="hidden"
                                                                        name="Agree" value="0"><input type="checkbox"
                                                                        name="Agree" value="1" id="Agree"
                                                                        class="widget_input"><span
                                                                        class="agree-condition">I authorize MM (DU) to
                                                                        contact me with notifications/updates via E
                                                                        Mail/SMS/Whatsapp/Call, which overrides DND/NDNC
                                                                        registration * </span></label></div>
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <!-- 
                                             <link rel="stylesheet" href="css/college/bootstrap-datepicker.css?1640168969">
                                             </div>
                                             <div class="custom_college_text"></div> -->
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                            <div id="login_form_without_popup">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group label-floating"><label class="control-label"
                                                            for="loginEmail">{{ __('Email Address') }} <span
                                                                class="required">*</span></label><input type="text"
                                                            name="email" id="loginEmail" maxlength="50"
                                                            class="placeholder form-control @error('email') is-invalid @enderror"
                                                            autocomplete="off" value="{{ old('email') }}">
                                                            @if ($errors->has('email'))
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        <span class="help-block"></span>
                                                    </div>
                                                    <div class="form-group label-floating"><label class="control-label"
                                                            for="loginPassword">{{ __('Password') }}<span
                                                                class="required">*</span></label><input type="password"
                                                            name="password" id="loginPassword" maxlength="15"
                                                            class="placeholder form-control @error('password') is-invalid @enderror"
                                                            autocomplete="off" value="">
                                                            @if ($errors->has('password'))
                                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                            @endif
                                                        <span class="help-block"></span>
                                                    </div>
                                                    <div class="form-group  agree-group">
                                                        <div class="checkbox"><label><input type="hidden" name="Agree"
                                                                    value="0"><input type="checkbox" name="remember"
                                                                    value="1" id="remember"
                                                                    {{ old('remember') ? 'checked' : '' }}><span
                                                                    class="agree-condition">Check to remember your login
                                                                    details</span></label></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                                <div class="form-group agree-group col-md-12 text-center fpass"><a
                                                        href="javascript:void(0);"
                                                        onclick="$('#login_form_without_popup').hide(); $('#forgot_pwd_form_without_popup').fadeIn();">Forgot
                                                        Password?</a></div>
                                                </form>
                                            </div>
                                            <div id="forgot_pwd_form_without_popup" style="display: none;">
                                                <form method="post" accept-charset="utf-8" id="forgotForm" action="/">
                                                    <div style="display:none;"><input type="hidden" name="_method"
                                                            value="POST"><input type="hidden" name="_csrfToken"
                                                            value="053932a4fdb8fc19c6eb9ae05bf8978699436b50"></div>
                                                    <div class="form-group label-floating"><label class="control-label"
                                                            for="forgetEmail">Enter Your Registered Email ID <span
                                                                class="required">*</span></label><input type="email"
                                                            name="Email" id="forgetEmail" maxlength="50"
                                                            class="form-control asdfgh"><span class="help-block"></span>
                                                    </div>
                                                    <button type="button" id="forgotBtn"
                                                        class="btn btn-default btn-npf btn-register">Submit</button>
                                                </form>
                                                <div class="form-group agree-group col-md-12 text-center fpass"><a
                                                        href="javascript:void(0);"
                                                        onclick="$('#forgot_pwd_form_without_popup').hide(); $('#login_form_without_popup').fadeIn();$('#ForgotOtpTabContainer').hide();">Login
                                                        Now</a></div>
                                            </div>
                                            <div class="forgetf" id="ForgotOtpTabContainer" style="display:none;">
                                                <!--<div>-->
                                                <form method="post" accept-charset="utf-8" id="forgotOtpForm"
                                                    role="form" action="/">
                                                    <div style="display:none;"><input type="hidden" name="_method"
                                                            value="POST"><input type="hidden" name="_csrfToken"
                                                            value="053932a4fdb8fc19c6eb9ae05bf8978699436b50"></div>
                                                    <p class="verify-your-identity">For your security, we need to verify
                                                        your identity. we have sent an OTP on registered email id and
                                                        mobile number. Please enter the OTP below and proceed for
                                                        password change.</p>
                                                    <div class="form-group label-floating"><input type="text"
                                                            name="forget_otp" placeholder="Enter OTP"
                                                            class="form-control" id="otpcode"><span
                                                            class="help-block"></span></div>
                                                    <div class="text-right" id="resent" style="display: none"><a
                                                            href="javascript:void(0);" id="resendVerifyCodeBtn"
                                                            onclick="resendVerifyCode();"
                                                            class="resentForgetPassword"><span
                                                                class="glyphicon glyphicon-refresh"
                                                                aria-hidden="true"></span>&nbsp;Resend</a></div>
                                                    <span id="clockdivForget" class="otptimer"></span><button
                                                        type="button" id="forgotVerifyCode"
                                                        class="btn btn-default btn-npf btn-login">Submit</button><input
                                                        type="hidden" value="" id="hashValue" name="hashValue">
                                                    <div id="afterCodeVerify" class="afterCodeVerify"
                                                        style="display: none;">
                                                        <div class="form-group label-floating"><input type="password"
                                                                name="forgot_new_password"
                                                                placeholder="Enter New Password" class="form-control"
                                                                maxlength="15" id="forgot-new-password"><span
                                                                class="help-block"></span></div>
                                                        <div class="form-group label-floating"><input type="password"
                                                                name="forgot_confirm_password"
                                                                placeholder="Re-Enter Password" class="form-control"
                                                                maxlength="15" id="forgot-confirm-password"><span
                                                                class="help-block"></span></div>
                                                    </div>
                                                </form>
                                                <button type="button" id="forgotOtpBtn"
                                                    class="btn btn-default btn-npf btn-login">Submit</button>
                                                <div class="form-group agree-group col-md-12 text-center fpass"><a
                                                        href="javascript:void(0);"
                                                        onclick="$('#forgot_pwd_form_without_popup').hide(); $('#login_form_without_popup').fadeIn();$('#ForgotOtpTabContainer').hide();">Login
                                                        Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end register login panel-->
                            <!--End form section -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="slider-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12 mt-5">
         <a data-fancybox href="https://www.youtube.com/embed/EJisAItv8bo&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0"><img src="{{asset('img/lifeatrku.jpg')}}" class="desktop-view" style="width: 100%;" /><img src="{{asset('img/lifeatrku_mobile.jpg')}}" class="mobile-view" style="width: 100%;" /></a>
         </div>
      </div>
   </div>
</section>
<section class="pd-60 bg-1">
            <div class="container">
               <!-- Three columns of text below the carousel -->
               <div class="row">
                  <div class="col-md-12 hdg">
                     <h2>Make you aspirations come true with the dream companies <span>@RKU</span></h2>
                      <div class="row">
                        <section class="testimonial">
   <div class="container-fluid">
      <a href="https://www.youtube.com/watch?v=bk3thLI3kCg&list=PLzP3jwPwsawa2EPST9mchSyd6qPzb5xB-" target="_blank" >
      <img src="{{asset('img/2.png')}}" class="desktop"></img></a>
      <a href="https://www.youtube.com/watch?v=bk3thLI3kCg&list=PLzP3jwPwsawa2EPST9mchSyd6qPzb5xB-" target="_blank" >
      <img src="{{asset('img/2_mobile.jpg')}}" class="mobile"></img></a>
   </div>
</section>
                     </div>
                  </div>
               </div>
               <!-- /.row --><!-- /END THE FEATURETTES -->
            </div>
         </section>
         <div class="container-fluid">       
      <div class="col-md-12 hdg">
         <h2 class="sub-title text-center">Awards &amp; <span>Recognition</span></h2>          
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/Award_Logo1.png')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/Award_Logo2.png')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/Award_Logo4.png')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </div>
   <section class="pdg-1">
            <div class="container">
               <!-- Three columns of text below the carousel -->
               <div class="row" style="--bs-gutter-x: 1.5rem; --bs-gutter-y: 0;">
                  <div class="col-md-7"><img src="{{asset('img/round-graph.jpg')}}" width="100%"></div>
                  <div class="col-md-5">
                     <div class="row">
                        <div class="col-lg-6 pbg-1">
                           <h1>90%</h1>
                           <p>PLACEMENT</p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-6 pbg-2">
                           <p>STUDENTS FROM</p>
                           <h1>18+</h1>
                           <p>COUNTRIES</p>
                        </div>
                        <!-- /.col-lg-4 -->
                     </div>
                     <div class="row">
                        <div class="col-lg-6 pbg-2 flex-column order-2 order-lg-1">
                           <h1>250+</h1>
                           <p>International Students</p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-6 pbg-1 flex-column order-1 order-lg-2">
                           <h1>7.0<span style="font-size: 24px;">LPA</span></h1>
                           <p>HIGHEST PACKAGE<br>OFFERED IN ENGINEERING</p>
                        </div>
                        <!-- /.col-lg-4 -->
                     </div>
                     <div class="row">
                        <div class="col-lg-6 pbg-1">
                           <h1>7.20<span style="font-size: 24px;">LPA</span></h1>
                           <p>HIGHEST PACKAGE<br>OFFERED IN MANAGEMENT</p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-6 pbg-2">
                           <h1>208<span style="font-size: 24px;">+</span></h1>
                           <p>Companies Visited</p>
                        </div>
                        <!-- /.col-lg-4 -->
                     </div>
                  </div>
               </div>
               <!-- /.row --><!-- /END THE FEATURETTES -->
            </div>
         </section>
          <section class="pd-60">
            <div class="container">
               <!-- Three columns of text below the carousel -->
               <div class="row">
                  <div class="col-md-12 hdg">
                     <h2><span>175+</span>Campus drives for 2022 Batch so far<br><span>Many </span>ongoing drives !</h2>
                     <div class="row"><img src="{{asset('img/campus_drive.png')}}" width="100%"></div>
                  </div>
               </div>
               <!-- /.row --><!-- /END THE FEATURETTES -->
            </div>
         </section>


         <!-- style tag -->
         <style type="text/css">.tt>img {
            max-width: 10%;
            margin: 0 auto;
            }
            .owl-nav {
            display: none;
            }
         </style>


<footer>
           
<div class="newFooter">
   
   <div class="container">
      <img src="img/logo.png" class="footerImg"></img>
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="mb-5"> <strong>RKU Main Campus: </strong></p>
            <p>RK University, Bhavnagar Highway,<br>Kasturbadham, Rajkot - 360020, <br> Gujarat, India.</p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="mb-5"> <strong>RKU City Campus: </strong></p>
            <p>2<sup>nd</sup> Ring Road, Near Kalawad Road,<br>Mota Mawa, Rajkot - 360005, <br>Gujarat, India.</p>
         </div>
      </div>
      <div class="row ">
         <div class="col-sm-12 col-xs-12">
            <a href="#" class="footerbtn">Apply Now</a>
            <a href="#" class="footerbtn" id="expertcallbtn" >Get Expert Call</a>
         </div>
      </div>
      <div class="row mt-20">
         <div class="col-sm-12 col-xs-12">
            <p><strong>Helpline:</strong> +91 97124 89122 / +91 99257 14450&nbsp; | <strong>Reception:</strong> +91-9909952030/31&nbsp; <strong><br> Email:</strong> inquiry@rku.ac.in</p>
         </div>
      </div>
   </div>
   
</div>
<div class="newFooter2 container-fluid">
   <p>Copyright &copy; RK University 2022</p>
</div>
         </footer>
    </div>
    <!-- End Hero -->
    <script src="{{asset('js/jquery1.12.4.min.js?1546583265')}}"></script>
      <script src="{{asset('js/popper.min.js?1645250273')}}"></script>
      <script src="{{asset('js/bootstrap.min2.js?1645255950')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/common.js?1645258301')}}"></script>
      <script src="{{asset('js/anonymous_user.js?1648132643')}}"></script>
      <script src="{{asset('js/mobile_otp.js?1645721309')}}"></script>
      <script src="{{asset('js/theme.js?1640168978')}}"></script>
      <script src="{{asset('js/college/bootstrap-datepicker.js?1640168975')}}"></script>
      <script src="{{asset('js/college/bootstrap-datepicker.js?1640168975')}}"></script>
</body>

</html>