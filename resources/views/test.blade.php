@extends('layouts.main')
@section('content')
@if($teststatus[0]!=NULL)
<div class="alert alert-success ">Test already submitted.</div>
@elseif($isapproved[0]==0)
<div class="alert alert-success ">You can attempt test after we Approve your application.</div>
@else
<h1 class="text-center">MCQ Test</h1>
<p class="text-center">The test will be of 30  minutes with 30 questions.</p>
<p class="text-center">The test will be automatically submitted after 30 minutes.</p>
<div class="text-center"><button  type="button" id="start" class="btn btn-success " name="start" value="Start Quiz">Start The Quiz</button></div>
<!-- Creat Countdown Timer -->
<div class="box-body">
  <h2>
    <p id="countdown"></p>
  </h2>
</div>
<div class="m-5">
  <form name="quiz" id="quiz" method="POST" enctype="multipart/form-data" action="{{route('save_quiz')}}">
    @csrf
    <input type="hidden" id="score" name="score">
    <div>
      <p>1. What is the best programming language to learn in 2020?</p>
      <p><input type="radio" name="question1" checked value="HTML"> A. HTML</p>
      <p><input type="radio" name="question1" value="Python"> B. Python</p>
      <p><input type="radio" name="question1" value="Javascript"> C. Javascript</p>
      <p><input type="radio" name="question1" value="Swift"> D. Swift</p>
    </div>
    <div>
      <p>2. What is the best programming language to learn in 2020?</p>
      <p><input type="radio" name="question2" value="HTML"> A. HTML</p>
      <p><input type="radio" name="question2" checked value="Python"> B. Python</p>
      <p><input type="radio" name="question2" value="Javascript"> C. Javascript</p>
      <p><input type="radio" name="question2" value="Swift"> D. Swift</p>
    </div>
    <div>
      <p>3. What is the best programming language to learn in 2020?</p>
      <p><input type="radio" name="question3" value="HTML"> A. HTML</p>
      <p><input type="radio" name="question3" value="Python"> B. Python</p>
      <p><input type="radio" name="question3" checked value="Javascript"> C. Javascript</p>
      <p><input type="radio" name="question3" value="Swift"> D. Swift</p>
    </div>
    <div>
      <p>4. What is the best programming language to learn in 2020?</p>
      <p><input type="radio" name="question4" value="HTML"> A. HTML</p>
      <p><input type="radio" name="question4" value="Python"> B. Python</p>
      <p><input type="radio" name="question4" value="Javascript"> C. Javascript</p>
      <p><input type="radio" name="question4" checked value="Swift"> D. Swift</p>
    </div>
    <input type="submit" value="Submit quiz" id="submitt" name="submitform">
  </form>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.4.1.js">
</script>
<script>
  $(document).ready(function() {
    function calc() {
      var score = 0;
      var q1 = $('input[name="question1"]:checked').val();
      var q2 = $('input[name="question2"]:checked').val();
      var q3 = $('input[name="question3"]:checked').val();
      var q4 = $('input[name="question4"]:checked').val();
      if (q1 == "HTML") {
        score++;
      }
      if (q2 == "Python") {
        score++;
      }
      if (q3 == "Javascript") {
        score++;
      }
      if (q4 == "Swift") {
        score++;
      }
      $($('#score').val(score));
    }
    $('#quiz').attr('hidden', true);
    $($('#submitt').click(function() {
      calc();
    }));
    $($("#start").click(function() {
      if (window.confirm('Do you want to start the quiz now') == false) {
        return false;
      }
      setTimeout(function() {
        calc();
        document.getElementById("quiz").submit();
      }, 5000);

      $('#quiz').attr('hidden', false);
      $('#start').attr('hidden', true);


      $time_limit = "2016-08-14 00:30:00"
      var d = new Date($time_limit);
      var hours = d.getHours(); //00 hours
      var minutes = d.getMinutes(); //10 minutes
      var seconds = 60 * minutes; // 600seconds

      if (typeof(Storage) !== "undefined") {
        if (localStorage.seconds) {
          seconds = localStorage.seconds;
        }
      }

      function secondPassed() {
        var minutes = Math.round((seconds - 30) / 60);
        console.log(minutes);
        var hours = Math.round((minutes) / 60);
        var remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
          remainingSeconds = "0" + remainingSeconds;
        }
        if (typeof(Storage) !== "undefined") {
          localStorage.setItem("seconds", seconds);
        }
        document.getElementById('countdown').innerHTML = hours + ":" + minutes + ":" + remainingSeconds;

        if (seconds == 0) {
          clearInterval(myVar);
          document.getElementById('countdown').innerHTML = "Time Out";
          if (typeof(Storage) !== "undefined") {
            localStorage.removeItem("seconds");
          }
        } else {
          seconds--;
          console.log(seconds);
        }

      }
      var myVar = setInterval(secondPassed, 1000);



    }));

  });
</script>

@endsection