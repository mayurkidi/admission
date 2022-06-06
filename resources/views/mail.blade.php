<!-- Dear XYZ,

Thank you for applying in the course Bachelore of Technology in Compuputer Engineering.
Your application fees of amount 2000 INR has been received successfully.

Note: This is an electronically generated reciept, signature not required. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<div class="card text-center mt-2">
  <img src="{{$message->embed($logo)}}" height="100" width="200" alt="RK University" />
  <h3>Application ID:{{$id[0]}}</h3>
  <p>Received with thanks from: {{$name[0]}}</p>
  <p>a sum of Rs.2000.00 (Rupees Two Thousand Indian Rupees Only)</p>
  <p>Towards Application Fees for {{$course[0]}}.</p>
  <p><b>**This is a computer generated receipt and does not required physical signature**</b></p>
</div>