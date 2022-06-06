@extends('layouts.main')

@section('content')

<!-- Container fluid -->
<div class="container-fluid p-4 ">
   <div class="pt-5 pb-5">
      <div class="container">
         <!-- User info -->
         <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
               <!-- Bg -->
               <div class="pt-16 rounded-top-md" style="
                     background-image: linear-gradient(#EA4C46, #F00000
                     );
                     background-color: red;
                     "></div>
               <div class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
                  <div class="d-flex align-items-center">
                     <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                        <img src="assets/images/user.png" class="avatar-xl rounded-circle border border-4 border-white" alt="" />
                     </div>
                     <div class="lh-1">
                        <h2 class="mb-0">
                           {{auth()->user()->name}} <a href="#" disabled> <i class="fe fe-edit me-2"></i>
                           </a>
                        </h2>
                        <p class="mb-0 d-block">{{auth()->user()->email}}</p>
                     </div>
                  </div>
                  <div>
                     <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-sm d-none d-md-block">Go to
                        Dashboard</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Content -->
         <div class="row mt-0 mt-md-4">
            <div class="col-lg-12 col-md-12 col-12">
               <!-- Card -->
               <div class="card">
                  <!-- Card header -->
                  <!-- Card body -->
                  <div class="card-body">
                     <div>
                        <h3 class="mb-3">Personal Details</h3>
                        <!-- Form -->
                        <form action="{{route('user.update',auth()->user())}}" method="POST" enctype="multipart/form-data" class="row">
                           @csrf
                           @method('PUT')
                           <!-- First name -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="email">E-mail</label>
                              <input type="text" id="email" readonly name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{auth()->user()->email}}" required />
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="sname">Student Name</label>
                              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Student Name" value="{{auth()->user()->name}}" required />
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <!-- Last name -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="fname">Father Name</label>
                              <input type="text" id="fathername" name="fathername" class="form-control @error('fathername') is-invalid @enderror" placeholder="Father Name" value="{{auth()->user()->fathername}}" required />
                              @error('fathername')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label">Gender</label>
                              <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                                 <option disabled selected value="">Select Gender</option>
                                 <option @if(auth()->user()->gender == 'Male')selected @endif>Male
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

                           <!-- Address -->
                           <div class="mb-3 col-12 col-md-12">
                              <label class="form-label" for="address">Address</label>
                              <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" value="{{auth()->user()->address}}" required />
                              @error('address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <!-- pincode -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="pincode">Pincode</label>
                              <input type="number" id="pincode" name="pincode" class="form-control @error('pincode') is-invalid @enderror" placeholder="Pincode" value="{{auth()->user()->pincode}}" required />
                              @error('pincode')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <!-- Birthday -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="birth">Birthday</label>
                              <input class="form-control flatpickr @error('dateofbirth') is-invalid @enderror" type="date" id="dob" name="dateofbirth" placeholder="Birth of Date" id="birth" value="{{auth()->user()->dateofbirth}}" />
                              @error('dateofbirth')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <!-- Phone -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="cnos">Contact Number of Student</label>
                              <input type="number" id="mobile" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Contact Number of Student" value="{{auth()->user()->mobile}}" required />
                              @error('mobile')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <!-- Phone father-->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="cnof">Contact Number of Student's Father</label>
                              <input type="number" id="fathermobile" name="fathermobile" class="form-control @error('fathermobile') is-invalid @enderror" placeholder="Contact Number of Student's Father" value="{{auth()->user()->fathermobile}}" required />
                              @error('fathermobile')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-12">
                              <!-- Button -->
                              <button class="btn btn-primary" id="submit" type="submit">
                                 Update Profile
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
      $('#submit').click(function() {
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