@extends('layouts.main')

@section('content')

<!-- Container fluid -->
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
                        <form action="{{route('app.store')}}" method="POST" enctype="multipart/form-data" class="shadow rounded p-5 form-campus">
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
                                                            fields marked with <span class="text-danger">*</span> need to be completely filled.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            An online application number will be displayed, once you successfully submit the online form by making an online payment.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            This application form is common for all campuses.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            Please keep scanned copies handy of your Coloured Photograph, Signature, 10th Marksheet & 12th Marksheet (If passed) for uploading . Upload size is limited to 2 MB only.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark">
                                                            Allocation of Seat to a Course selected is subject to availability of seats.
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Select Program</label>
                                                        <select class="selectpicker" name="course" data-width="100%">
                                                            <option value="">Select Program</option>
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
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Select Specialization</label>
                                                        <select class="selectpicker" name="specialization" data-width="100%">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
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
                                        <button type="button" class="btn btn-primary col-lg-6" onclick="courseForm.next()">
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
                                                <label for="courseTitle" class="form-label">Name</label>
                                                <input id="courseTitle" class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{auth()->user()->name}}" placeholder="Enter Name" value="" {{auth()->user()->email}}"" />

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Email</label>
                                                <input id="courseTitle" class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{auth()->user()->email}}" placeholder="Enter Email" />

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Mobile No.</label>
                                                <input id="courseTitle" class="form-control @error('mobile') is-invalid @enderror" name="mobile" type="text" value="{{auth()->user()->mobile}}" placeholder="Enter Mobile No" />

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
                                                <label for="courseTitle" class="form-label">Date of Birth</label>
                                                <input id="courseTitle" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" type="date" />

                                                @error('dateofbirth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Gender</label>
                                                <select class="selectpicker @error('gender') is-invalid @enderror" name="gender" data-width="100%">
                                                    <option value="">Select Gender</option>
                                                    <option @if(auth()->user()->gender == 'Male')selected @endif>Male</option>
                                                    <option @if(auth()->user()->gender == 'Female')selected @endif>Female</option>
                                                    <option @if(auth()->user()->gender == 'Transgender')selected @endif>Transgender</option>
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
                                                <label for="courseTitle" class="form-label">Father Name</label>
                                                <input id="courseTitle" class="form-control @error('fathername') is-invalid @enderror" type="text" name="fathername" placeholder="Enter Father Name" />

                                                @error('fathername')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="courseTitle" class="form-label">Father No.</label>
                                                <input id="courseTitle" class="form-control @error('fathermobile') is-invalid @enderror" type="text" name="fathermobile" placeholder="Enter Father Mobile No." />

                                                @error('fathermobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0"><strong class="text-danger"> Address for Correspondence </strong></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label class="form-label">Country</label>
                                                <select class="selectpicker @error('country') is-invalid @enderror" name="country" data-width="100%">
                                                    <option @if(auth()->user()->country == 'Afghanistan')selected @endif>Afghanistan</option>
                                                    <option @if(auth()->user()->country == 'Zimbabwe')selected @endif>Zimbabwe</option>
                                                </select>
                                                @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Select State</label>
                                                <select class="selectpicker @error('state') is-invalid @enderror" name="state" data-width="100%">
                                                    <option @if(auth()->user()->state == 'Andhra Pradesh')selected @endif>Andhra Pradesh</option>
                                                    <option @if(auth()->user()->state == 'Andaman and Nicobar Islands')selected @endif>Andaman and Nicobar Islands</option>
                                                </select>
                                                @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Select City</label>
                                                <select class="selectpicker @error('city') is-invalid @enderror" name="city" data-width="100%">
                                                    <option @if(auth()->user()->city == 'Rajkot')selected @endif>Rajkot</option>
                                                    <option @if(auth()->user()->city == 'surat')selected @endif>surat</option>
                                                </select>
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Address Line 1</label>
                                                <input id="courseTitle" name="address" class="form-control @error('address') is-invalid @enderror" type="text" placeholder="Enter Address Line 1" />

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Address Line 2</label>
                                                <input id="courseTitle" class="form-control" type="text" placeholder="Enter Address Line 2" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Pincode</label>
                                                <input id="courseTitle" name="pincode" class="form-control @error('pincode') is-invalid @enderror" type="text" placeholder="Enter Pincode" />

                                                @error('pincode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- <small>Write a 60 character course title.</small> -->
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="courseTitle" class="form-label">Is Permanent Address same as the Correspondence address?</label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <button type="button" class="btn btn-primary col-lg-6" onclick="courseForm.back()">
                                            Back
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-4 offset-lg-4 text-center">
                                        <button type="button" class="btn btn-primary col-lg-6" onclick="courseForm.next()">
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
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Leaving Certificate</label>
                                                <input id="courseTitle" class="form-control" type="file" name="leavingcertificate" id="leavingcertificate" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Adharcard</label>
                                                <input id="courseTitle" class="form-control" type="file" name="aadharcard" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">10th Marksheet</label>
                                                <input id="courseTitle" class="form-control" type="file" name="marksheet10" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">12th Marksheet</label>
                                                <input id="courseTitle" class="form-control" type="file" name="marksheet12" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Graduation Certificate</label>
                                                <input id="courseTitle" class="form-control" type="file" name="marksheetgraduation" />
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="courseTitle" class="form-label">Marksheet D2D</label>
                                                <input id="courseTitle" class="form-control" type="file" name="marksheetd2d" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <button type="button" class="btn btn-primary col-lg-3" onclick="courseForm.back()">
                                            Back
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-4 offset-lg-4 text-center">
                                        <button type="submit" class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Content three -->
                            <!-- Content four -->
                            <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0">Requirements</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <input name='tags' value='jquery, bootstrap' autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-3" onclick="courseForm.back()">
                                                    Back
                                                </button>
                                            </div> -->
                                    <!-- <div class="col-lg-4 text-center">
                                                <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                    Save & Exit
                                                </button>
                                            </div> -->
                                    <div class="col-lg-4 text-center">
                                        <button type="button" class="btn btn-primary col-lg-3" onclick="courseForm.next()">
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
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<!-- Scripts -->
<!-- Libs JS -->
@endsection