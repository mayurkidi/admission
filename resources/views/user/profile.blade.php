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
                              <input type="text" disabled id="email" name="email" class="form-control" placeholder="E-mail" value="{{auth()->user()->email}}" required />
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="sname">Student Name</label>
                              <input type="text" id="sname" name="name" class="form-control" placeholder="Student Name" value="{{auth()->user()->name}}" required />
                           </div>
                           <!-- Last name -->
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="fname">Father Name</label>
                              <input type="text" id="dname" name="fathername" class="form-control" placeholder="Father Name" value="{{auth()->user()->fathername}}" required />
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label">Gender</label>
                              <select name="gender" class="gender form-control" required id="gender">
                                 <option value="">Select Gender</option>
                                 <option @if(auth()->user()->gender == 'Male')selected @endif>Male</option>
                                 <option @if(auth()->user()->gender == 'Female')selected @endif>Female</option>
                                 <option @if(auth()->user()->gender == 'Transgender')selected @endif>Transgender</option>
                              </select>
                           </div>
                           
                           <div class="mb-3 col-12 col-md-12">
                              <label class="form-label" for="address">Address</label>
                              <input type="text" name="address" id="bd" class="form-control" placeholder="Address" value="{{auth()->user()->address}}" required />
                           </div>
                        
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="pincode">Pincode</label>
                              <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="{{auth()->user()->pincode}}" required />
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="birth">Birthday</label>
                              <input required class="form-control flatpickr" type="date" name="dateofbirth" placeholder="Birth of Date" id="birth" value="{{auth()->user()->dateofbirth}}" />
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="cnos">Contact Number of Student</label>
                              <input type="text" id="cnos" name="mobile" class="form-control" placeholder="Contact Number of Student" value="{{auth()->user()->mobile}}" required />
                           </div>
                           <div class="mb-3 col-12 col-md-6">
                              <label class="form-label" for="cnof">Contact Number of Student's Father</label>
                              <input type="text" id="cnof" name="fathermobile" class="form-control" placeholder="Contact Number of Student's Father" value="{{auth()->user()->fathermobile}}" required />
                           </div>
                           <div class="col-12">
                              <button class="btn btn-primary" type="submit">
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
@if(session()->has('message'))
<div class="alert alert-success">
   {{ session()->get('message') }}
</div>
@endif
<!-- Scripts -->
<!-- Libs JS -->
@endsection