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
        <td>{{$application[0]->id}}</td>
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
      <tr id="trlc">
        <!-- <th scope="col">3</th> -->
        <td >Leaving Certificate</td>
        <td><a id="lc" href="{{$academic[0]->leavingcertificate}}" download>Leaving Certificate</a></td>
      </tr>
      <tr id="trac">
        <td >Aadhar Card</td>
        <td><a id="ac" href="{{$academic[0]->aadharcard}}" download>Aadhar Card</a></td>
      </tr>
      <tr id="trm10">
        <!-- <th scope="col">3</th> -->
        <td >10th Marksheet</td>
        <td><a id="m10" href="{{$academic[0]->marksheet10}}" download>10th Marksheet</a></td>
      </tr>
      <tr id="trm12">
        <!-- <th scope="col">3</th> -->
        <td >12th Marksheet</td>
        <td><a id="m12" href="{{$academic[0]->marksheet12}}" download>12th Marksheet</a></td>
      </tr>
      <tr id="trmd">
        <!-- <th scope="col">3</th> -->
        <td>Diploma Marksheet</td>
        <td><a id="md" href="{{$academic[0]->marksheetdiploma}}" download>Diploma Marksheet</a></td>
      </tr>
      <tr id="trmg">
        <!-- <th scope="col">3</th> -->
        <td>Graduation Marksheet</td>
        <td><a id="mg" href="{{$academic[0]->marksheetgraduation}}" download>Graduation Marksheet</a></td>
      </tr>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    
    if($("#lc").attr('href')=="")
    {
      $("#trlc").hide();
    }
    if($("#ac").attr('href')=="")
    {
      $("#trac").hide();
    }
    if($("#m10").attr('href')=="")
    {
      $("#trm10").hide();
    }
    if($("#m12").attr('href')=="")
    {
      $("#trm12").hide();
    }
    if($("#md").attr('href')=="")
    {
      $("#trmd").hide();
    }
    if($("#mg").attr('href')=="")
    {
      $("#trmg").hide();
    }
  });
</script>
@endsection