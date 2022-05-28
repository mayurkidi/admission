@extends('layouts.main')
@section('content')
@if($paymentstatus->isEmpty()==false)
<input type="hidden" value="{{$paymentstatus[0]}}" name="pstatus" id="pstatus">
@else
<input type="hidden" value="0" name="pstatus" id="pstatus">
@endif
@if($graduationtype->isEmpty()==false))
<input type="hidden" value="{{$graduationtype[0]}}" id="gtype" name="gtype">
@endif

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
        <td>Leaving Certificate</td>
        <td><a id="lc" href="storage/{{$academic[0]->leavingcertificate}}" download>Leaving Certificate</a></td>
      </tr>
      <tr id="trac">
        <td>Aadhar Card</td>
        <td><a id="ac" href="storage/{{$academic[0]->aadharcard}}" download>Aadhar Card</a></td>
      </tr>
      <tr id="trm10">
        <!-- <th scope="col">3</th> -->
        <td>10th Marksheet</td>
        <td><a id="m10" href="storage/{{$academic[0]->marksheet10}}" download>10th Marksheet</a></td>
      </tr>
      <tr id="trm12">
        <!-- <th scope="col">3</th> -->
        <td>12th Marksheet</td>
        <td><a id="m12" href="storage/{{$academic[0]->marksheet12}}" download>12th Marksheet</a></td>
      </tr>
      <tr id="trmd">
        <!-- <th scope="col">3</th> -->
        <td>Diploma Marksheet</td>
        <td><a id="md" href="storage/{{$academic[0]->marksheetdiploma}}" download>Diploma Marksheet</a></td>
      </tr>
      <tr id="trmg">
        <!-- <th scope="col">3</th> -->
        <td>Graduation Marksheet</td>
        <td><a id="mg" href="storage/{{$academic[0]->marksheetgraduation}}" download>Graduation Marksheet</a></td>
      </tr>
      <tr id="pstatus">
        <!-- <th scope="col">3</th> -->
        <td>Payment Status</td>
        @if($paymentstatus->isEmpty()==true)
        <td><b>Payment Pending</b>
          <br><span><a href="{{ route('stu.addcousrse',['id' => 4]) }}">Make Payment</a></span>
        </td>
        @else
        <td>Payment Done</td>
        @endif
      </tr>
      <tr id="astatus">
        <!-- <th scope="col">3</th> -->
        <td>Application Status</td>
        @if($application[0]->isapproved==0)
        <td><b>Application under process</b>
        </td>
        @else
        <td>Application Approved</td>
        @endif
      </tr>
      <tr id="offerletter">
        <!-- <th scope="col">3</th> -->
        <td>Offer Letter</td>
        @if($application[0]->offerletter==NULL)
        <td><b>It will be uploaded after verification</b>
      </td>
      @else
        <td><a href="{{$application[0]->offerletter }}">Offer Letter</a></td>
      @endif
      </tr>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    var pstatus = $('#pstatus').val();
    var pstatus = $('#pstatus').val();
    var gtype = $('#gtype').val();
    // alert(pstatus);
    if (gtype == "PG") {
        $('#pg').removeAttr('hidden');
    }
    if (gtype == "UG") {
        $('#ug').removeAttr('hidden');
    }
    if (gtype == "DIPLOMA") {
        $('#diploma').removeAttr('hidden');
    }
    $(document).ready(function() {
        var pstatus = $('#pstatus').val();
    });
    if (pstatus == 0) {
      $("#test").removeAttr('href');
    }
    if ($("#lc").attr('href') == "") {
      $("#trlc").hide();
    }
    if ($("#ac").attr('href') == "") {
      $("#trac").hide();
    }
    if ($("#m10").attr('href') == "") {
      $("#trm10").hide();
    }
    if ($("#m12").attr('href') == "") {
      $("#trm12").hide();
    }
    if ($("#md").attr('href') == "") {
      $("#trmd").hide();
    }
    if ($("#mg").attr('href') == "") {
      $("#trmg").hide();
    }
  });
</script>
@endsection