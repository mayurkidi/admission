@extends('layouts.main')
@section('content')

<!-- Container fluid -->
<input type="hidden" value="{{request()->id}}" name="cid" id="cid">
@if($application->isEmpty()==false)
<input type="hidden" value="{{$application[0]->applicationstatus}}" name="status" id="status">
@else
<input type="hidden" value="0" name="status" id="status">
@endif
@if($paymentstatus->isEmpty()==false)
<input type="hidden" value="{{$paymentstatus[0]}}" name="pstatus" id="pstatus">
@else
<input type="hidden" value="0" name="pstatus" id="pstatus">
@endif
<div class="pb-6 pt-6">
    <div class="container-fluid">
        <div id="courseForm" class="bs-stepper">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                    <!-- Stepper Button -->
                    <div class="bs-stepper-header shadow-sm" role="tablist">
                        <div class="step" data-target="#test-l-1">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1" aria-controls="test-l-1">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Campus Selection and Program</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-2">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2" aria-controls="test-l-2">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Personal Details</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-3">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3" aria-controls="test-l-3">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Academic Details</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-4">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4" aria-controls="test-l-4">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Payment</span>
                            </button>
                        </div>
                    </div>
                    <!-- Stepper content -->
                    <div class="bs-stepper-content mt-5">
                        <form action="{{route('app.store',['id'=>$_REQUEST['id']])}}" method="POST" enctype="multipart/form-data" class="shadow rounded p-5 form-campus">
                            @csrf
                            <!-- Content one -->
                            <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger1">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0"><strong class="text-danger"> Instruction </strong></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="text-dark">
                                                            fields marked with <span class="text-danger">*</span> need
                                                            to be completely filled.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            An online application number will be displayed, once you
                                                            successfully submit the online form by making an online
                                                            payment.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            This application form is common for all campuses.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            Please keep scanned copies handy of your Coloured
                                                            Photograph, Signature, 10th Marksheet & 12th Marksheet (If
                                                            passed) for uploading . Upload size is limited to 1xamo MB only.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            Allocation of Seat to a Course selected is subject to
                                                            availability of seats.
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Select Program</label>
                                                        <select class="selectpicker" id="course" name="course" data-width="100%" required>
                                                            <option selected disabled value="">Select Program</option>
                                                            @foreach ($programs as $key => $value)
                                                            <option @if(auth()->user()->course == $value )selected
                                                                @endif value="{{$value}}">{{$key}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Select Specialization</label>
                                                        <select class="selectpicker" id="specialization" name="specialization" data-width="100%" required>
                                                            @foreach ($courses as $key => $value)
                                                            <option @if(auth()->user()->specialization == $value )selected
                                                                @endif value="{{$value}}">{{$key}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="row">
                                    <!-- <div class="col-lg-6 text-center">
                                                <button type="button" class="btn btn-primary col-lg-6 form-campus-submit">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-6 offset-lg-6 text-center d-flex justify-content-around">
                                        <button type="button" id="addcourse" class="btn btn-primary col-lg-6">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger2">
                                <!-- Card -->
                                <div class="card mb-3 ">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0"><strong class="text-danger"> Personal Details </strong></h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label for="name" class="form-label">Name</label>
                                                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{auth()->user()->name}}" placeholder="Enter Name" value="{{auth()->user()->email}}" required />

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input id="email" readonly class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{auth()->user()->email}}" placeholder="Enter Email" required />

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="mobile" class="form-label">Mobile No.</label>
                                                <input id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" type="number" value="{{auth()->user()->mobile}}" placeholder="Enter Mobile No" required />

                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- <small>Write a 60 character course title.</small> -->
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <label for="dateofbirth" class="form-label">Date of Birth</label>
                                                <input id="dateofbirth" class="form-control @error('dateofbirth')  is-invalid @enderror" name="dateofbirth" type="date" value="{{auth()->user()->dateofbirth}}" required />

                                                @error('dateofbirth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Gender</label>
                                                <select class="selectpicker @error('gender') is-invalid @enderror" id="gender" name="gender" data-width="100%">
                                                    <option selected disabled value="">Select Gender</option>
                                                    <option @if(auth()->user()->gender == 'Male') selected @endif>Male
                                                    </option>
                                                    <option @if(auth()->user()->gender == 'Female')selected
                                                        @endif>Female</option>
                                                </select>

                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- <div class="col-lg-4">
                                                        <label class="form-label">Marital Staus</label>
                                                        <select class="selectpicker" data-width="100%">
                                                            <option value="">Select Marital Status</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Single">Single</option>
                                                        </select>
                                                    </div> -->
                                        </div>
                                        <div class="row mb-3">
                                            <!-- <div class="col-lg-4">
                                                        <label class="form-label">Nationality</label>
                                                        <select class="selectpicker" data-width="100%">
                                                            <option value="">Select Nationality</option>
                                                            <option value="Indian">Indian</option>
                                                            <option value="NRI">NRI</option>
                                                            <option value="Foreign">Foreign</option>
                                                        </select>
                                                    </div> -->
                                            <div class="col-lg-6">
                                                <label for="fathername" class="form-label">Father Name</label>
                                                <input id="fathername" class="form-control @error('fathername') is-invalid @enderror" type="text" name="fathername" value="{{auth()->user()->fathername}}" placeholder="Enter Father Name" />

                                                @error('fathername')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="fathermobile" class="form-label">Father Mobile Number.</label>
                                                <input id="fathermobile" class="form-control @error('fathermobile') is-invalid @enderror" type="number" name="fathermobile" value="{{auth()->user()->fathermobile}}" placeholder="Enter Father Mobile No." />

                                                @error('fathermobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0"><strong class="text-danger"> Address for Correspondence
                                            </strong></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">

                                            <div class="col-lg-6">
                                                <label class="form-label">Select State</label>
                                                <select class="state selectpicker @error('state') is-invalid @enderror" name="state" id="state" data-width="100%">
                                                    <option selected disabled value="">Select State</option>
                                                    @foreach ($states as $key => $value)
                                                    <option @if(auth()->user()->state == $value )selected
                                                        @endif value="{{$value}}">{{$key}}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Select City</label>
                                                <select class="selectpicker @error('city') is-invalid @enderror" name="city" id="city" data-width="100%">
                                                    @foreach ($cities as $key => $value)
                                                    <option @if(auth()->user()->city == $value )selected
                                                        @endif value="{{$value}}">{{$key}}</option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-8">
                                                <label for="address" class="form-label">Address.</label>
                                                <input id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{auth()->user()->address}}" type="text" placeholder="Enter Address Line 1" />

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-4">
                                                <label for="pincode" class="form-label">Pincode</label>
                                                <input id="pincode" name="pincode" class="form-control @error('pincode') is-invalid @enderror" type="number" value="{{auth()->user()->pincode}}" placeholder="Enter Pincode" />

                                                @error('pincode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- <small>Write a 60 character course title.</small> -->
                                        </div>

                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <button type="button" class="btn btn-primary col-lg-6" onclick="courseForm.previous()">
                                            Back
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-4 offset-lg-4 text-center">
                                        <button type="button" id="addcourse2" class="btn btn-primary col-lg-6">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Content two -->
                            <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger3">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0"><strong class="text-danger"> Academic Details </strong></h4>
                                    </div>
                                    <div class="card-body">
                                        @if($academic->isEmpty())
                                        <div class="row mb-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Leaving Certificate</label>
                                                    <input id="lc" class="form-control" type="file" name="leavingcertificate" id="lc" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Adharcard</label>
                                                    <input id="aadharcard" class="form-control" type="file" name="aadharcard" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">10th Marksheet</label>
                                                    <input id="marksheet10" class="form-control" type="file" name="marksheet10" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4" @if( request()->id == 3 ) hidden disabled @endif>
                                                    <label for="courseTitle" class="form-label">12th Marksheet</label>
                                                    <input @if( request()->id == 3 ) id="" disabled @endif id="marksheet12" class="form-control" type="file" name="marksheet12" />
                                                </div>
                                                <div class="col-lg-4" @if( request()->id == 1 || request()->id == 3 ) hidden disabled @endif>
                                                    <label for="courseTitle" class="form-label">Graduation Certificate</label>
                                                    <input @if( request()->id == 1 || request()->id == 3 ) disabled @endif id="marksheetgraduation" class="form-control" type="file" name="marksheetgraduation" />
                                                </div>
                                                <div class="col-lg-4" @if( request()->id == 1 || request()->id == 2 ) hidden disabled @endif >
                                                    <label for="courseTitle" class="form-label">Marksheet Diploma</label>
                                                    <input @if( request()->id == 1 || request()->id == 2 ) disabled @endif id="marksheetdiploma" class="form-control" type="file" name="marksheetdiploma" />
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="row mb-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-4" @if($academic->isEmpty()) disabled @endif>
                                                    <label for="courseTitle" class="form-label">Leaving Certificate</label>
                                                    <input id="lc" @if($academic[0]->leavingcertificate!=null) @endif class="form-control" type="file" name="leavingcertificate" value="{{$academic[0]->leavingcertificate}}" />
                                                    <span><a @if($academic[0]->leavingcertificate==null) hidden @endif id="lc" href="{{$academic[0]->leavingcertificate}}" download>Leaving Certificate (uploaded)</a></span>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Adharcard</label>
                                                    <input @if($academic[0]->aadharcard!=null) @endif id="aadharcard" class="form-control" type="file" name="aadharcard" value="{{$academic[0]->aadharcard}}" />
                                                    <span><a @if($academic[0]->aadharcard==null) hidden @endif id="lc" href="{{$academic[0]->aadharcard}}" download>Aadhar Card (uploaded)</a></span>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">10th Marksheet</label>
                                                    <input @if($academic[0]->marksheet10!=null) @endif id="marksheet10" class="form-control" type="file" name="marksheet10" value="{{$academic[0]->marksheet10}}" />
                                                    <span><a @if($academic[0]->marksheet10==null) hidden @endif id="lc" href="{{$academic[0]->marksheet10}}" download>Marksheet 10 (uploaded)</a></span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4" @if( request()->id == 3 ) hidden disabled @endif>
                                                    <label for="courseTitle" class="form-label">12th Marksheet</label>
                                                    <input @if($academic[0]->marksheet12!=null) @endif @if( request()->id == 3 ) id="" disabled @endif id="marksheet12" class="form-control" type="file" name="marksheet12" value="{{$academic[0]->marksheet12}}" />
                                                    <span><a @if($academic[0]->marksheet12==null) hidden @endif id="lc" href="{{$academic[0]->marksheet12}}" download>Marksheet 12 (uploaded)</a></span>
                                                </div>
                                                <div class="col-lg-4" @if( request()->id == 1 || request()->id == 3 ) hidden disabled @endif>
                                                    <label for="courseTitle" class="form-label">Graduation Certificate</label>
                                                    <input @if($academic[0]->marksheetgraduation!=null) @endif @if( request()->id == 1 || request()->id == 3 ) disabled @endif id="marksheetgraduation" class="form-control" type="file" name="marksheetgraduation" value="{{$academic[0]->marksheetgraduation}}" />
                                                    <span><a @if($academic[0]->marksheetgraduation==null) hidden @endif id="lc" href="{{$academic[0]->marksheetgraduation}}" download>Marksheet Graduation (uploaded)</a></span>
                                                </div>

                                                <div class="col-lg-4" @if( request()->id == 1 || request()->id == 2 ) hidden disabled @endif >
                                                    <label for="courseTitle" class="form-label">Marksheet Diploma</label>
                                                    <input @if($academic[0]->marksheetdiploma!=null) @endif @if( request()->id == 1 || request()->id == 2 ) disabled @endif id="marksheetdiploma" class="form-control" type="file" name="marksheetdiploma" value="{{$academic[0]->marksheetdiploma}}" />
                                                    <span><a @if($academic[0]->marksheetdiploma==null) hidden @endif id="lc" href="{{$academic[0]->marksheetdiploma}}" download>Marksheet Diploma (uploaded)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 text-right">
                                        <button type="button" class="btn btn-primary col-lg-3" onclick="courseForm.previous()">
                                            Back
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <button type="submit" id="addcourse3" class="btn btn-primary col-lg-3">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Content three -->
                            <!-- Content four -->
                            <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Enter Payment Screenshot</label>
                                                <input id="payment" class="form-control" type="file" name="payment" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 text-right">
                                        <button type="button" class="btn btn-primary col-lg-3" onclick="courseForm.previous()">
                                            Back
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <button type="submit" id="addcourse4" class="btn btn-primary col-lg-3">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var program_id=$("#specialization").val();
        var city_id=$("#city").val();
        var status = $("#status").val();
        var _id=$("#cid").val();
        var pstatus = $("#pstatus").val();
        if (pstatus == 0) {
            $("#test").removeAttr('href');
        }
        if (status == 1) {
            courseForm.to(4);
        }
        // START
        var courseid = $("#course").find(":selected").val();
        if (courseid) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "{{url('/getcourse')}}?course_id=" + courseid+"&_id="+_id,
                    success: function(res) {
                        if (res) {
                            $("#specialization").empty();
                            // $("#city").attr('disabled',false);
                            $("#specialization").append('<option selected disabled value="">Select Specialization</option>');
                            $.each(res, function(key, value) {
                                if(value.id==program_id)
                                    $("#specialization").append('<option value="' + value.id + '"selected >' + value.name + '</option>');
                                else
                                    $("#specialization").append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            $('#specialization').selectpicker('refresh');

                            // $("#state").append('<option value=' + id + '>' + name + '</option>'); // return empty
                            // alert(res.id);
                        }
                    },
                    error: function(res){
                        alert("Errro"+res);
                    }    
                });
                // alert(1);
            }
            var stateid = $("#state").find(":selected").val();
            // alert(stateid);
            if (stateid) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "{{url('/getcity')}}?state_id=" + stateid,
                    success: function(res) {
                        if (res) {

                            $("#city").empty();
                            // $("#city").attr('disabled',false);
                            $("#city").append('<option selected disabled value="">Select City</option>');
                            $.each(res, function(key, value) {
                                if(value.id==city_id)
                                    $("#city").append('<option value="' + value.id + '" selected>' + value.name + '</option>');
                                else
                                    $("#city").append('<option value="' + value.id + '">' + value.name + '</option>');

                            });
                            $('#city').selectpicker('refresh');

                            // $("#state").append('<option value=' + id + '>' + name + '</option>'); // return empty
                            // alert(res.id);
                        }

                    }
                });
            }
            // $("#specialization option[value='+program_id+']").attr("selected", "selected");
            
            // END
        // alert(status);
        $("#state").change(function() {
            var stateid = $("#state").find(":selected").val();
            // alert(stateid);
            if (stateid) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "{{url('/getcity')}}?state_id=" + stateid,
                    success: function(res) {
                        if (res) {

                            $("#city").empty();
                            // $("#city").attr('disabled',false);
                            $("#city").append('<option selected disabled value="">Select City</option>');
                            $.each(res, function(key, value) {
                                $("#city").append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            $('#city').selectpicker('refresh');

                            // $("#state").append('<option value=' + id + '>' + name + '</option>'); // return empty
                            // alert(res.id);
                        }

                    }
                });
            }

        });
        $("#course").change(function() {
            var courseid = $("#course").find(":selected").val();
            // alert(courseid);
            if (courseid) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "{{url('/getcourse')}}?course_id=" + courseid+"&_id="+_id,
                    success: function(res) {
                        if (res) {

                            $("#specialization").empty();
                            // $("#city").attr('disabled',false);
                            $("#specialization").append('<option selected disabled value="">Select Specialization</option>');
                            $.each(res, function(key, value) {
                                $("#specialization").append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            $('#specialization').selectpicker('refresh');

                            // $("#state").append('<option value=' + id + '>' + name + '</option>'); // return empty
                            // alert(res.id);
                        }
                        
                    }
                });
                // alert(1);
            }

        });
        $('#addcourse').click(function() {
            if ($('#course').val() == null) {
                alert("Course Cannot be Empty");
                return false;

            } else if ($('#specialization').val() == null) {
                alert("Specialization Cannot be Empty");
                return false;

            } else {
                courseForm.next();
            }
        });
        $('#addcourse2').click(function() {
            if ($('#name').val() == "") {
                alert("Name Cannot be Empty");
                return false;

            }
            if ($('#name').val() != "") {
                var regex = /^[a-zA-Z ]*$/;
                if (regex.test($('#name').val()) == false) {
                    alert("Invalid name !")
                    return false;
                }
            }
            if ($('#email').val() == "") {
                alert("Email Cannot be Empty");
                return false;

            }
            if ($('#email').val() != "") {
                var email = $('#email').val();
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (regex.test(email) == false) {
                    alert("Email address is not valid.");
                    return false;
                }
            }
            if ($('#mobile').val() == "") {
                alert("mobile Cannot be Empty");
                return false;

            }
            if ($('#mobile').val() != "") {
                if ($('#mobile').val().length != 10) {
                    alert("Mobile number must be 10 Digits !")
                    return false;
                }
            }
            if ($('#dateofbirth').val() == "") {
                alert("Date of Birth Cannot be Empty");
                return false;

            }
            if ($('#gender').val() == "") {
                alert("Gender Cannot be Empty");
                return false;

            }
            if ($('#fathername').val() == "") {
                alert("Father name Cannot be Empty");
                return false;

            }
            if ($('#fathername').val() != "") {
                var regex = /^[a-zA-Z ]*$/;
                if (regex.test($('#fathername').val()) == false) {
                    alert("Invalid Fathers Name !")
                    return false;
                }
            }
            if ($('#fathermobile').val() == "") {
                alert("Father mobile number Cannot be Empty");
                return false;

            }
            if ($('#fathermobile').val() != "") {
                if ($('#fathermobile').val().length != 10) {
                    alert("Fathers Mobile number must be 10 Digits !")
                    return false;
                }
            }
            if ($('#state').val() == null) {
                alert("State Cannot be Empty");
                return false;

            }
            if ($('#city').val() == null) {
                alert("City Cannot be Empty");
                return false;

            }
            if ($('#address').val() == "") {
                alert("Address Cannot be Empty");
                return false;

            }
            if ($('#pincode').val() == "") {
                alert("Pincode Cannot be Empty");
                return false;

            }
            if ($('#pincode').val() != "") {
                if ($('#pincode').val().length != 6) {
                    alert("Pincode must be 6 Digits !")
                    return false;
                }
            }
            if ($('#pincode').val() != "") {
                courseForm.next();
            }
        });

        $('#addcourse3').click(function() {

            if ($('#lc').val() == "" && status == 0) {
                alert("Leaving certificate file Cannot be Empty");
                return false;
            }
            if ($('#lc').val() != "") {
                var ext = $('#lc').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Leaving certificate file format is not allowed.");
                    return false;
                }
                if ($("#lc")[0].files[0].size >= 1000000) {
                    alert("Leaving certificates size is too big.");
                    return false
                }
            }
            if ($('#aadharcard').val() == "" && status == 0) {
                alert("Aadharcard file Cannot be Empty");
                return false;

            }
            if ($('#aadharcard').val() != "") {
                var ext = $('#aadharcard').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Aadhar card file format is not allowed.");
                    return false;
                }
                if ($("#aadharcard")[0].files[0].size >= 1000000) {
                    alert("Aadhar cards size is too big.");
                    return false
                }
            }

            if ($('#marksheet10').val() == "" && status == 0) {
                alert("10th Marksheet file Cannot be Empty");
                return false;

            }
            if ($('#marksheet10').val() != "") {
                var ext = $('#marksheet10').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("10th Marksheets file format is not allowed.");
                    return false;
                }
                if ($("#marksheet10")[0].files[0].size >= 1000000) {
                    alert("10th marksheets size is too big.");
                    return false
                }
            }
            if ($("#cid").val() == 1) {
                if ($('#marksheet12').val() == "" && status == 0) {
                    alert("12th Marksheet file Cannot be Empty");
                    return false;

                }
                if ($('#marksheet12').val() != "") {
                    var ext = $('#marksheet12').val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("12th Marksheets file format is not allowed.");
                        return false;
                    }
                    if ($("#marksheet12")[0].files[0].size >= 1000000) {
                        alert("12th marksheets size is too big.");
                        return false
                    }
                    courseForm.next();
                }
            }
            if ($("#cid").val() == 2) {
                if ($('#marksheet12').val() == "" && status == 0) {
                    alert("12th Marksheet file Cannot be Empty");
                    return false;

                }
                if ($('#marksheet12').val() != "") {
                    var ext = $('#marksheet12').val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("12th Marksheets file format is not allowed.");
                        return false;
                    }
                    if ($("#marksheet12")[0].files[0].size >= 1000000) {
                        alert("12th marksheets size is too big.");
                        return false
                    }
                }
                if ($('#marksheetgraduation').val() == "" && status == 0) {
                    alert("Graduation marksheet file Cannot be Empty");
                    return false;

                }
                if ($('#marksheetgraduation').val() != "") {
                    var ext = $('#marksheetgraduation').val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Graduation Marksheets file format is not allowed.");
                        return false;
                    }
                    if ($("#marksheetgraduation")[0].files[0].size >= 1000000) {
                        alert("Graduation marksheets size is too big.");
                        return false
                    }
                    courseForm.next();
                }
            }
            if ($("#cid").val() == 3) {
                if ($('#marksheetdiploma').val() == "" && status == 0) {
                    alert("Diploma marksheet file Cannot be Empty");
                    return false;

                }
                if ($('#marksheetdiploma').val() != "") {
                    var ext = $('#marksheetdiploma').val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Diploma Marksheets file format is not allowed.");
                        return false;
                    }
                    if ($("#marksheetdiploma")[0].files[0].size >= 1000000) {
                        alert("Diploma marksheets size is too big.");
                        return false
                    }
                }
                courseForm.next();
            }

        });
        $("#addcourse4").click(function() {
            if ($("#payment").val() == "") {
                alert("Payment screenshot cannot be empty");
                return false;
            }
            if ($('#payment').val() != "") {
                var ext = $('#payment').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("payment proofs file format is not allowed.");
                    return false;
                }
                if ($("#payment")[0].files[0].size >= 1000000) {
                    alert("Payments files size is too big.");
                    return false
                }
            }
        });

    });
</script>

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<!-- Scripts -->
<!-- Libs JS -->
@endsection