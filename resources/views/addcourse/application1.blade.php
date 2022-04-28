@extends('layouts.main')
@section('content')
	<div class="table-responsive container">
    <h1 style="text-align:center;">Application is in process</h1>
  <table class="table table-hover text-center table-danger border-danger">
    <thead>
      <tr>
<!--         <th scope="col">Sr no.</th> -->
       <!--  <th scope="col">Fields</th> -->
        <th colspan="3">Student's Details.</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <!-- <th scope="col">1</th> -->
        <td>Application Id</td>
        <td>{{$application[0]['id']}}</td>
      </tr>
      <tr>
        <!-- <th scope="col">1</th> -->
        <td>Name</td>
        <td>{{auth()->user()->name}}</td>
      </tr>
      <tr>
        <!-- <th scope="col">2</th> -->
        <td>Email.</td>
        <td>{{auth()->user()->email}}</td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>Phone no.</td>
        <td>{{auth()->user()->mobile}}</td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>Aadhar Card</td>
        <td><a href="{{$academic[0]['leavingcertificate']}}" download>Leaving Certificate</a></td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>Aadhar Card</td>
        <td><a href="{{$academic[0]['aadharcard']}}" download>Aadhar Card</a></td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>10th Marksheet</td>
        <td><a href="{{$academic[0]['marksheet10']}}" download>10th Marksheet</a></td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>12th Marksheet</td>
        <td><a href="{{$academic[0]['marksheet12']}}" download>12th Marksheet</a></td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>Diploma Marksheet</td>
        <td><a href="{{$academic[0]['marksheetdiploma']}}" download>Diploma Marksheet</a></td>
      </tr>
      <tr>
        <!-- <th scope="col">3</th> -->
        <td>Graduation Marksheet</td>
        <td><a href="{{$academic[0]['marksheetgraduation']}}" download>Graduation Marksheet</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection