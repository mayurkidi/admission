@extends('layouts.main')
@section('content')
@if($paymentstatus->isEmpty()==false)
<input type="hidden" value="{{$paymentstatus[0]}}" name="pstatus" id="pstatus">
@else
<input type="hidden" value="0" name="pstatus" id="pstatus">
@endif
@if($graduationtype->isEmpty()==false)
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
        <td><i class="bi bi-download text-danger"> </i><a id="lc" target="_blank" href="storage/{{$academic[0]->leavingcertificate}}" download>Leaving Certificate</a></td>
      </tr>
      <tr id="trac">
        <td>Aadhar Card</td>
        <td><i class="bi bi-download text-danger"> </i><a id="ac" target="_blank" href="storage/{{$academic[0]->aadharcard}}" download>Aadhar Card</a></td>
      </tr>
      <tr id="trm10">
        <!-- <th scope="col">3</th> -->
        <td>10th Marksheet</td>
        <td><i class="bi bi-download text-danger"> </i><a id="m10" target="_blank" href="storage/{{$academic[0]->marksheet10}}" download>10th Marksheet</a></td>
      </tr>
      @if($academic[0]->marksheet12!=NULL)
      <tr id="trm12">
        <!-- <th scope="col">3</th> -->
        <td>12th Marksheet</td>
        <td><i class="bi bi-download text-danger"> </i><a id="m12" target="_blank" href="storage/{{$academic[0]->marksheet12}}" download>12th Marksheet</a></td>
      </tr>
      @endif
      @if($academic[0]->marksheetdiploma!=NULL)
      <tr id="trmd">
        <!-- <th scope="col">3</th> -->
        <td>Diploma Marksheet</td>
        <td><i class="bi bi-download text-danger"> </i><a id="md" target="_blank" href="storage/{{$academic[0]->marksheetdiploma}}" download>Diploma Marksheet</a></td>
      </tr>
      @endif
      @if($academic[0]->marksheetgraduation!=NULL)
      <tr id="trmg">
        <!-- <th scope="col">3</th> -->
        <td>Graduation Marksheet</td>
        <td><i class="bi bi-download text-danger"> </i><a id="mg" target="_blank" href="storage/{{$academic[0]->marksheetgraduation}}" download>Graduation Marksheet</a></td>
      </tr>
      @endif
      <tr id="pstatus">
        <!-- <th scope="col">3</th> -->
        <td>Payment Status</td>
        @if($paymentstatus[0]==0)
        <td><b>Payment Pending</b>
          <br><span><a  href="{{ route('stu.addcousrse',['id' => $id[0]]) }}">Make Payment</a></span>
        </td>
        @else
        <td>Payment Done</td>
        @endif
      </tr>
      <tr id="admitcard" @if($application[0]->isapproved==0)hidden  @endif>
        <!-- <th scope="col">3</th> -->
        <td>Admit Card</td>
        <td><i class="bi bi-download text-danger"> </i><a target="_blank" id="ac" href="{{url('generate-pdf')}}?app_id={{\Auth::user()->id}}">Admit card</a></td>
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
        <td><i class="bi bi-download text-danger"> </i><a href="storage/{{$application[0]->offerletter }}" target="_blank" download>Offer Letter</a></td>
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
      $("#admitcard").hide();
    }
  });
</script>
@endsection