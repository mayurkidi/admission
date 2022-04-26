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
      <meta name="description" content="Admission 2021. MM(DU), Mullana North India&rsquo;s Best Private University in Ambala, Haryana providing courses in MBBS, MD, MS, OTT, MLT, BPT, MPT, Nursing, B.Tech, M.Tech, B.Sc, M.Sc, BCA, MCA, BBA, MBA, B.Com, Diploma, HMCT, Pharm D, B.Pharma, M.Pharma, App">
      <link href="{{asset('img/logo.png')}}" type="image/x-icon" rel="icon">
      <link href="img/logo.png" type="image/x-icon" rel="shortcut icon">
      <link rel="stylesheet" href="css/form.css?1640168971">
      <link rel="stylesheet" href="css/bootstrap.min2.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/css-plugin-collections.css">
   </head>
   <body>
      <div class="kode_wrapper">
      <!-- ======= Hero Section ======= -->
      <section class="d-flex align-items-center mmdu-img" id="hero">
         <div class="container">
            <img class="mmdu-logo pd-bt-20" src="img/logo.png">
            <div class="row">
               <div class="col-lg-8 d-flex flex-column justify-content-center pt-lg-0" data-aos="fade-up" data-aos-delay="200"></div>
               <div class="col-lg-4 mmdu-adsnfrm" data-aos="zoom-in" data-aos-delay="200">
                  <div class="formContainer form-absolute block-class link-border form-position-right">
                     <!--  <div class="form-inner"><div class="form-clickOuter"><span class="form-click opacityprimary">Register Now</span></div>-->
                     <h2 class="text-center form-heading">Admissions Open</h2>
                     <!--register login panel--><!--register login panel--><!--register login panel-->
                     <div class="panel with-nav-tabs panel-default dynamic_theme_block">
                        <div class="panel-heading">
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Register</a></li>
                              <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Login                </a></li>
                           </ul>
                        </div>
                        <div class="tab-content">
                           <div class="panel-body">
                              <div class="tab-pane fade active in">
                                 <div class="desktop_withoutpopup">
                                    <form method="POST" action="{{ route('register') }}">
                                       @csrf
                                       <div class="form-custom">
                                          <div class="form-group label-floating Password reg_password_div">
                                             <div class="input password"><label class="control-label  widget_label" for="password">{{ __('Password') }} <span class="required">*</span></label>
                                                <input type="password" name="password" id="password" autocomplete="off" class="form-control widget_input registerJsClass @error('password') is-invalid @enderror" placeholder="Enter Password  *">
                                             </div>
                                             @error('password')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_name_div">
                                             <div class="input text"><label class="control-label widget_label" for="name">{{ __('Name') }}<span class="required">*</span></label>
                                                <input type="text" id="name" name="name" class="form-control widget_input @error('name') is-invalid @enderror" placeholder="Enter Name *" value="{{ old('name') }}">
                                             </div>
                                             @error('name')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_email_div Email_email">
                                             <div class="input text"><label class="control-label widget_label" for="email">{{ __('Email Address') }}<span class="required">*</span></label>
                                                <input type="text" id="email" name="email" autocomplete="email" class="form-control widget_input @error('email') is-invalid @enderror" placeholder="Enter Email Address *" value="{{ old('email') }}">
                                             </div>
                                             @error('email')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_name_div">
                                             <div class="input text"><label class="control-label widget_label" for="mobilenumber">Mobile Number <span class="required">*</span></label>
                                                <input type="text" name="name" id="Name" autocomplete="off" class="form-control widget_input"placeholder="Enter Mobile Number *" value="">
                                             </div>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_state_id_div StateId field-select">
                                             <select name="state" id="StateId" class="form-control select-arrow-cust widget_input" data-label="Select State *" data-none-selected-text="Select State">
                                                <option value="" selected="selected">Select State *</option>
                                                <option value="26909">Andaman and Nicobar</option>
                                                <option value="26920">Andhra Pradesh</option>
                                                <option value="27573">Arunachal Pradesh</option>
                                                <option value="33411">Uttarakhand</option>
                                                <option value="33506">West Bengal</option>
                                             </select>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_city_id_div CityId field-select">
                                             <select name="city" id="CityId" class="form-control select-arrow-cust widget_input" data-label="Select City *" data-none-selected-text="Select City">
                                                <option value="">Select City</option>
                                                <option value="Test">Test</option>
                                             </select>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="form-group label-floating reg_university_id_div UniversityId field-select">
                                             <select name="university" id="UniversityId" class="form-control select-arrow-cust widget_input" onchange="GetChildByMachineKey(this.value,'CourseId');" data-label="Select Institute *" data-none-selected-text="Select New Campus">
                                                <option value="" selected="selected">Select Institute *</option>
                                                <option value="196118">Mullana</option>
                                             </select>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating reg_course_id_div CourseId field-select">
                                             <select name="course" id="CourseId" class="form-control select-arrow-cust widget_input" onchange="GetChildByMachineKey(this.value,'SpecializationId');" data-label="Select Course *" data-none-selected-text="Select Course">
                                                <option value="" selected="selected">Select Course *</option>
                                                <option value="test" selected>test</option>
                                             </select>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group label-floating field-select  reg_specialization_id_div">
                                             <select name="specialization" id="SpecializationId" data-label="Select Specialisation *" class="form-control select-arrow-cust widget_input" data-none-selected-text="Select Specialisation">
                                                <option value="" selected="selected">Select Specialisation *</option>
                                                <option value="test" selected>test</option>
                                             </select>
                                             <span class="help-block"></span>
                                          </div>
                                          <div class="form-group agree-group col-md-12 m0">
                                             <div class="checkbox"><label><input type="hidden" name="Agree" value="0"><input type="checkbox" name="Agree" value="1" id="Agree" class="widget_input"><span class="agree-condition">I authorize MM (DU) to contact me with notifications/updates via E Mail/SMS/Whatsapp/Call, which overrides DND/NDNC registration *                                </span></label></div>
                                             <span class="help-block"></span>
                                          </div>
                                          <!-- 
                                             <link rel="stylesheet" href="css/college/bootstrap-datepicker.css?1640168969">
                                             </div>
                                             <div class="custom_college_text"></div> -->
                                          <button type="submit" class="btn btn-primary">
                                          {{ __('Register') }}
                                          </button>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      </div>
   </body>
</html>