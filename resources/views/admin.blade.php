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

    /* table td:first-child::first-letter {
        text-transform: uppercase;
    } */
    .capitalize {
        text-transform: capitalize;
    }
</style>
<h1 class="text-center">Admin panel</h1>
<div class="p-2">
    <table class="capitalize" id="adminTable" style="font-size:12px ;">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Fathername</th>
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
                <td class="w-15 text-lowercase">{{$user[$i]->email}}</td>
                <td class="w-15">{{$user[$i]->fathername}}</td>
                @foreach($application as $a)
                @if($a->userid==$user[$i]->id)
                <td class="w-5">{{$a->id}}</td>
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
                <td class="w-4">@if($p->paymentstatus==1)<a href="storage/{{$p->paymentproof}}" target="_blank" download><i class="bi bi-download"></i></a> @else Pending @endif</td>
                @endif
                @endforeach
                @foreach($academic as $ac)
                @if($ac->userid==$user[$i]->id)
                <td class="w-50">
                    <a target="_blank" href="storage/{{$ac->leavingcertificate}}" download>Leaving Certificate</a> |
                    <a target="_blank" href="storage/{{$ac->aadharcard}}" download>Aadhar Card</a> |
                    <a target="_blank" href="storage/{{$ac->marksheet10}}" download>Marksheet 10</a> |
                    <a target="_blank" @if($ac->marksheetdiploma==null)hidden @endif href="storage/{{$ac->marksheetdiploma}}" download>Marksheet Diploma</a> |
                    <a target="_blank" @if($ac->marksheet12==null)hidden @endif href="storage/{{$ac->marksheet12}}" download>Marksheet 12</a> |
                    <a target="_blank" @if($ac->marksheetgraduation==null)hidden @endif href="storage/{{$ac->marksheetgraduation}}" download>Marksheet Graduation</a>
                </td>
                @endif
                @endforeach
                @foreach($application as $a)
                @if($a->userid==$user[$i]->id)
                <td class="w-4">@if($a->testresult==null) -- @else {{$a->testresult}} @endif</td>
                @endif
                @endforeach
                @foreach($application as $a)
                @if($a->userid==$user[$i]->id)

                <td class="">@if($a->isapproved==0)<a onclick="return confirm('Do you want to Approve the application ?')" href="{{url('/isapproved')}}?id={{$user[$i]->id}}" class="btn btn-danger btn-sm" id="approve">Approve</a> @else <i class="bi bi-check h1"></i> @endif</td>
                <td class="">
                    @if($a->offerletter==NULL || $a->offerletter=="NULL")
                    <form action="{{url('/uploadoc')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$user[$i]->id}}">
                        <input type="file" id="offerletter" class="offerletter" name="offerletter">
                        <button type="submit" class="btn btn-primary btn-xs" id="btnUpload">
                            <i class="bi bi-upload"></i>
                        </button>
                    </form>
                    @else <a href="storage/{{$a->offerletter}}" target="_blank" download><i class="bi bi-download"></i></a>
                    @endif
                </td>
                @endif
                @endforeach
                </tr>
                @endfor
        </tbody>
    </table>
</div>
<div class="text-center mt-10">

</div>
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
<script>
    $("#test").hide();
    $(document).ready(function() {
        // $('#adminTable').dataTable({
        //     // parameters
        // });
        $("#btnUpload").click(function() {
            if ($(".offerletter").val() == "") {
                alert("Select the offer letter");
                return false;
            }
            if ($(".offerletter").val() != "") {
                var ext = $('.offerletter').val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Offer letter file format is not valid.");
                    return false;
                }
            }
        });
    });
</script>
@endsection