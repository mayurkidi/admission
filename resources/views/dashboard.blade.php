@extends('layouts.main')

@section('content')
  <div class="container-fluid p-4 ">     
                <div class="container displayDesktopCard">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 mb-12">
                        <div class="card h-100">
                            <div class="card-header bg-danger">
                                <h4 class="mb-0 text-white">Under Graduate Programs</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-responsive-stack mb-0" id="tableOne">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="">Application Form</th>
                                            <th scope="col" class="text-end">Application No.</th>
                                            <th scope="col" class="text-end">Application Submitted On</th>
                                            <th scope="col" class="text-end">Application Fees</th>
                                            <th scope="col" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UG Application Form</td>
                                            <td class=" text-end">-</td>
                                            <td class=" text-end ">-</td>
                                            <td class=" text-end ">1500</td>
                                            <td class=" text-end "><a href="{{ route('stu.addcousrse',['id' => 1]) }}" class="btn btn-primary">Register</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container displayDesktopCard">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 mb-12">
                        <div class="card h-100">
                            <div class="card-header bg-danger">
                                <h4 class="mb-0 text-white">Post Graduate Programs</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="">Application Form</th>
                                            <th scope="col" class="text-end ">Application No.</th>
                                            <th scope="col" class="text-end ">Application Submitted On</th>
                                            <th scope="col" class="text-end ">Application Fees</th>
                                            <th scope="col" class="text-end ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PG Application Form</td>
                                            <td class=" text-end">-</td>
                                            <td class=" text-end ">-</td>
                                            <td class=" text-end ">1200</td>
                                            <td class=" text-end "><a href="{{ route('stu.addcousrse',['id' => 2]) }}" class="btn btn-primary">Register</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container displayDesktopCard">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 mb-12">
                        <div class="card h-100">
                            <div class="card-header bg-danger">
                                <h4 class="mb-0 text-white">Diploma Programs</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="">Application Form</th>
                                            <th scope="col" class="text-end ">Application No.</th>
                                            <th scope="col" class="text-end ">Application Submitted On</th>
                                            <th scope="col" class="text-end ">Application Fees</th>
                                            <th scope="col" class="text-end ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Diploma Application Form</td>
                                            <td class=" text-end">-</td>
                                            <td class=" text-end ">-</td>
                                            <td class=" text-end ">1200</td>
                                            <td class=" text-end "><a href="{{ route('stu.addcousrse',['id' => 3]) }}" class="btn btn-primary">Register</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="displayMobileCard">
                    <div class="container mt-5 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between align-items-center bg-danger">
                                        <h4 class="mb-0 text-white">Under Graduate Form</h4>
                                        <div class="badge"> 
                                            <span><button class="btn btn-light"> Apply</button></span> 
                                        </div>
                                    </div>
                                    <div class="p-3 text-black">
                                        <p class="mb-2">Application Form : Under Graduate Form</p>    
                                        <p class="mb-2">Application Number : 1200</p>    
                                        <p class="mb-2">Application Submitted On : 21/02/22</p>    
                                        <p class="mb-2">Application Fees : 1500</p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="displayMobileCard">
                    <div class="container mt-5 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between align-items-center bg-danger">
                                        <h4 class="mb-0 text-white">Post Graduate Form</h4>
                                        <div class="badge"> 
                                            <span><button class="btn btn-light"> Apply</button></span> 
                                        </div>
                                    </div>
                                    <div class="p-3 text-black">
                                        <p class="mb-2">Application Form : Post Graduate Form</p>    
                                        <p class="mb-2">Application Number : 1200</p>    
                                        <p class="mb-2">Application Submitted On : 21/02/22</p>    
                                        <p class="mb-2">Application Fees : 1500</p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="displayMobileCard">
                    <div class="container mt-5 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between align-items-center bg-danger">
                                        <h4 class="mb-0 text-white">Diploma Form</h4>
                                        <div class="badge"> 
                                            <span><button class="btn btn-light"> Apply</button></span> 
                                        </div>
                                    </div>
                                    <div class="p-3 text-black">
                                        <p class="mb-2">Application Form : Diploma Form</p>    
                                        <p class="mb-2">Application Number : 1200</p>    
                                        <p class="mb-2">Application Submitted On : 21/02/22</p>    
                                        <p class="mb-2">Application Fees : 1500</p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection