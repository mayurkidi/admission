@extends('layouts.main')
@section('content')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<h1 class="text-center" >Admin panel</h1>
<table class="">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Application ID</th>
        <th>Application Course</th>
        <th>Application Program</th>
        <th>Payment Status</th>
        <th>Documents</th>
        <th>Test Score</th>
        <th>Approve Application</th>
        <th>Upload Offer letter</th>

    </thead>
    <tbody>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        @for($i=1 ; $i < count($user); $i++) <tr>
            <td class="w-10">{{$user[$i]->name}}</td>
            <td class="w-15">{{$user[$i]->email}}</td>
                @foreach($application as $a)
                    @if($a->userid==$user[$i]->id)
                    <td class="w-2">{{$a->id}}</td>
                        @foreach ($programs as $key => $value)
                        @if($a->course == $value)
                        <td class="w-8">{{$key}}</td>
                        @endif 
                        @endforeach

                            @foreach ($courses as $key => $value)
                            @if($a->specialization == $value)
                            <td class="w-8">{{$key}}</td>
                            @endif 
                            @endforeach
                    @endif
                @endforeach
                @foreach($payment as $p)
                    @if($p->user_id==$user[$i]->id)
                    <td class="w-4">@if($p->paymentstatus==1)Paid @else Pending @endif</td>
                    @endif
                @endforeach
                @foreach($academic as $ac)
                    @if($ac->userid==$user[$i]->id)
                    <td class="w-25">
                        <a  href="{{$ac->leavingcertificate}}" download>Leaving Certificate</a> |
                        <a  href="{{$ac->aadharcard}}" download>Aadhar Card</a> |
                        <a  href="{{$ac->marksheet10}}" download>Marksheet 10</a> |
                        <a  @if($ac->marksheetdiploma==null)hidden @endif href="{{$ac->marksheetdiploma}}" download>Marksheet Diploma</a> |
                        <a  @if($ac->marksheet12==null)hidden @endif href="{{$ac->marksheet12}}" download>Marksheet 12</a> |
                        <a  @if($ac->marksheetgraduation==null)hidden @endif href="{{$ac->marksheetgraduation}}" download>Marksheet Graduation</a>
                    </td>
                    @endif
                @endforeach
                @foreach($application as $a)
                    @if($a->userid==$user[$i]->id)
                    <td class="w-4">@if($a->testresult==null) -- @else {{$a->testresult}}  @endif</td>
                    @endif
                @endforeach
                @foreach($application as $a)
                    @if($a->userid==$user[$i]->id)
                    <td class="w-4">@if($a->isapproved==0)<a onclick="return confirm('Do you want to Approve the application ?')"  href="{{url('/isapproved')}}?id={{$user[$i]->id}}" class="btn btn-danger" id="approve">Approve</a> @else <i class="bi bi-check h1"></i> @endif</td>
                    <td class="w-4">
                        @if($a->offerletter==NULL || $a->offerletter=="NULL")
                        <form action="{{url('/uploadoc')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" id="id" name="id" value="{{$user[$i]->id}}">
                        <input type="file" id="offerletter" name="offerletter">
                        <input class="btn btn-danger" type="submit" value="Upload" id="btnUpload">
                        </form>
                        @else <i class="bi bi-download"></i> <a href="{{$a->offerletter}}">Offerletter</a>
                        @endif
                    </td>
                    @endif
                @endforeach
                
            </tr>
            @endfor
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $("#btnUpload").click(function(){
            if($("#offerletter").val()=="")
            {
                alert("Select the offer letter");
                return false;
            }
        });       
    });
</script>
@endsection