@extends('layouts.main')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

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
    <table class="capitalize" id="adminTable" style="font-size:12px;">
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
            @foreach($userdata as $user)
            <tr>
                <td class="w-10">{{$user->name}}</td>
                <td class="w-15 text-lowercase">{{$user->email}}</td>
                <td class="w-15">{{$user->fathername}}</td>
                <td class="w-5">{{$user->aid}}</td>
                <td class="w-8">{{$user->pname}}</td>
                <td class="w-8">{{$user->cname}}</td>
                <td class="w-4">@if($user->paymentstatus==1)<a href="storage/{{$user->paymentproof}}" target="_blank" download><i class="bi bi-download"></i></a> @else Pending @endif</td>

                <td class="w-50">
                    <a target="_blank" @if($user->leavingcertificate==null)hidden @endif href="storage/{{$user->leavingcertificate}}" download>Leaving Certificate</a> |
                    <a target="_blank" @if($user->aadharcard==null)hidden @endif href="storage/{{$user->aadharcard}}" download>Aadhar Card</a> |
                    <a target="_blank" @if($user->marksheet10==null)hidden @endif href="storage/{{$user->marksheet10}}" download>Marksheet 10</a> |
                    <a target="_blank" @if($user->marksheetdiploma==null)hidden @endif href="storage/{{$user->marksheetdiploma}}" download>Marksheet Diploma</a> |
                    <a target="_blank" @if($user->marksheet12==null)hidden @endif href="storage/{{$user->marksheet12}}" download>Marksheet 12</a> |
                    <a target="_blank" @if($user->marksheetgraduation==null)hidden @endif href="storage/{{$user->marksheetgraduation}}" download>Marksheet Graduation</a>
                </td>
                <td class="w-4">@if($user->testresult==null) -- @else {{$user->testresult}} @endif</td>
                <td class="">@if($user->isapproved==0)<a onclick="return confirm('Do you want to Approve the application ?')" href="{{url('/isapproved')}}?id={{$user->uid}}" class="btn btn-danger btn-sm" id="approve">Approve</a> @else <i class="bi bi-check h1"></i> @endif</td>

                <td class="">
                    @if($user->offerletter==NULL || $user->offerletter=="NULL")
                    <form action="{{url('/uploadoc')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$user->uid}}">
                        <input type="file" id="offerletter" class="offerletter" name="offerletter">
                        <button type="submit" class="btn btn-primary btn-xs" id="btnUpload">
                            <i class="bi bi-upload"></i>
                        </button>
                    </form>
                    @else <a href="storage/{{$user->offerletter}}" target="_blank" download><i class="bi bi-download"></i></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-5">
        {{ $userdata->links() }}
    </div>
</div>
<div class="text-center mt-10">

</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#adminTable').DataTable({});
    });
</script>
<script>
    $("#test").hide();
    $(document).ready(function() {
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