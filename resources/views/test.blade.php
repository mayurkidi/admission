@extends('layouts.main')
@section('content')
@if($teststatus[0]!=NULL)
<div class="alert alert-success ">Test already submitted.</div>
@elseif($isapproved[0]==0)
<div class="alert alert-success ">You can attempt test after we Approve your application.</div>
@else
<h1 class="text-center">MCQ Test</h1>
<p class="text-center">The test will be of 40 minutes with 40 questions.</p>
<p class="text-center">The test will be automatically submitted after 40 minutes.</p>
<div class="text-center"><button type="button" id="start" class="btn btn-success " name="start" value="Start Quiz">Start
        The Quiz</button></div>
<!-- Creat Countdown Timer -->
<div class="box-body">
    <h2>
        <p class="text-center" id="countdown"></p>
    </h2>
</div>
<div class="m-5">
    <form name="quiz" hidden id="quiz" method="POST" enctype="multipart/form-data" action="{{route('save_quiz')}}">
        @csrf
        <input type="hidden" id="score" name="score">
        <div>
            <p>1. Find the missing number from below given series:</p>
            <p>&emsp;2, 3, 5, 7, 11, ?, 17, …</p>
            <p><input type="radio" name="question1" value="12">12</p>
            <p><input type="radio" name="question1" value="13"> 13</p>
            <p><input type="radio" name="question1" value="15">15 </p>
            <p><input type="radio" name="question1" value="14">14</p>
        </div>
        <div>
            <p>2. Choose the odd sequence from given. </p>
            <p><input type="radio" name="question2" value="PQs">PQs</p>
            <p><input type="radio" name="question2" value="AtB">AtB</p>
            <p><input type="radio" name="question2" value="SiM">SiM</p>
            <p><input type="radio" name="question2" value="mnZ">mnZ</p>
        </div>
        <div>
            <p>3. Microphone : Loud :: Microscope : ?</p>
            <p><input type="radio" name="question3" value="Elongate">Elongate</p>
            <p><input type="radio" name="question3" value="Investigate">Investigate</p>
            <p><input type="radio" name="question3" value="Magnify">Magnify</p>
            <p><input type="radio" name="question3" value="Examine">Examine</p>
        </div>

        <div>
            <p>4. What should come in place of both x in the equation</p>
            <p>&emsp;<img src="assets/images/q6.png" height="100" width="100" alt=""></p>
            <p><input type="radio" name="question4" value="12">12</p>
            <p><input type="radio" name="question4" value="18">18</p>
            <p><input type="radio" name="question4" value="100">100</p>
            <p><input type="radio" name="question4" value="144">144</p>
        </div>


        <div>
            <p>5. Which one of the following is not a prime number?</p>
            <p><input type="radio" name="question5" value="31">31</p>
            <p><input type="radio" name="question5" value="61">61</p>
            <p><input type="radio" name="question5" value="71">71</p>
            <p><input type="radio" name="question5" value="91">91</p>
        </div>

        <div>
            <p>6. The sum of first five prime numbers is _______.</p>
            <p><input type="radio" name="question6" value="11">11</p>
            <p><input type="radio" name="question6" value="18">18</p>
            <p><input type="radio" name="question6" value="26">26</p>
            <p><input type="radio" name="question6" value="28">28</p>
        </div>

        <div>
            <p>7. Find the lowest common multiple of 24, 36 and 40.</p>
            <p><input type="radio" name="question7" value="120">120</p>
            <p><input type="radio" name="question7" value="240">240</p>
            <p><input type="radio" name="question7" value="360">360</p>
            <p><input type="radio" name="question7" value="480">480</p>
        </div>

        <div>
            <p>8. Choose the word which is different from the rest.</p>
            <p><input type="radio" name="question8" value="Curd">Curd</p>
            <p><input type="radio" name="question8" value="Buter">Buter</p>
            <p><input type="radio" name="question8" value="Oil">Oil</p>
            <p><input type="radio" name="question8" value="Cheese">Cheese</p>
        </div>

        <div>
            <p>9. Choose the word which is different from the rest.</p>
            <p><input type="radio" name="question9" value="Calendar">Calendar </p>
            <p><input type="radio" name="question9" value="Year">Year</p>
            <p><input type="radio" name="question9" value="Date">Date</p>
            <p><input type="radio" name="question9" value="Month">Month</p>
        </div>


        <div>
            <p>10. Choose the word which is different from the rest.</p>
            <p><input type="radio" name="question10" value="Asia">Asia</p>
            <p><input type="radio" name="question10" value="Argentina">Argentina</p>
            <p><input type="radio" name="question10" value="Africa">Africa</p>
            <p><input type="radio" name="question10" value="Antarctica">Antarctica </p>
        </div>

        <div>
            <p>11. Which of these companies was recently bought out in an unsolicited bid?</p>
            <p><input type="radio" name="question11" value="Twitter">Twitter</p>
            <p><input type="radio" name="question11" value="Ola">Ola</p>
            <p><input type="radio" name="question11" value="Spotify">Spotify</p>
            <p><input type="radio" name="question11" value="Netflix">Netflix</p>
        </div>


        <div>
            <p>12. What is the capital of Maharashtra?</p>
            <p><input type="radio" name="question12" value="Nagpur">Nagpur</p>
            <p><input type="radio" name="question12" value="Mumbai">Mumbai</p>
            <p><input type="radio" name="question12" value="Pune">Pune</p>
            <p><input type="radio" name="question12" value="None of the mentioned">None of the mentioned</p>
        </div>


        <div>
            <p>13. What is the name of the social network launched by Donald Trump?</p>
            <p><input type="radio" name="question13" value="Breitbart">Breitbart</p>
            <p><input type="radio" name="question13" value="Koo">Koo</p>
            <p><input type="radio" name="question13" value="Truth">Truth</p>
            <p><input type="radio" name="question13" value="America First">America First</p>
        </div>


        <div>
            <p>14. What is the full form of L in Android-L (5.0)?</p>
            <p><input type="radio" name="question14" value="Lime">Lime</p>
            <p><input type="radio" name="question14" value="Lion">Lion</p>
            <p><input type="radio" name="question14" value="Lollipop">Lollipop</p>
            <p><input type="radio" name="question14" value="Lux">Lux</p>
        </div>


        <div>
            <p>15.Nation Anthem of India is………</p>
            <p><input type="radio" name="question15" value="Sare Jahan se Acha">Sare Jahan se Acha</p>
            <p><input type="radio" name="question15" value="Jana Gana Man">Jana Gana Man</p>
            <p><input type="radio" name="question15" value="Vande Mataram">Vande Mataram</p>
            <p><input type="radio" name="question15" value="None of the mentioned">None of the mentioned</p>
        </div>


        <div>
            <p>16. Half part of Circle is called ________.</p>
            <p><input type="radio" name="question16" value="Radius">Radius</p>
            <p><input type="radio" name="question16" value="Diameter">Diameter</p>
            <p><input type="radio" name="question16" value="Semi – Circle">Semi – Circle</p>
            <p><input type="radio" name="question16" value="None of the mentioned">None of the mentioned</p>
        </div>


        <div>
            <p>17. Who is the current Foreign Affairs Minister of India?</p>
            <p><input type="radio" name="question17" value="Shashi Kapoor">Shashi Kapoor</p>
            <p><input type="radio" name="question17" value="Shashi Tharoor">Shashi Tharoor</p>
            <p><input type="radio" name="question17" value="S. Jaishankar">S. Jaishankar</p>
            <p><input type="radio" name="question17" value="Ajit Doval">Ajit Doval</p>
        </div>


        <div>
            <p>18. What is the capital of Manipur?</p>
            <p><input type="radio" name="question18" value="Nainital">Nainital</p>
            <p><input type="radio" name="question18" value="Ranchi">Ranchi</p>
            <p><input type="radio" name="question18" value="Gandhinagar">Gandhinagar</p>
            <p><input type="radio" name="question18" value="Imphal">Imphal</p>
        </div>

        <div>
            <p>19. What is the full form of MTNL?</p>
            <p><input type="radio" name="question19" value="Mahanagar Transport Nigam Ltd">Mahanagar Transport Nigam Ltd</p>
            <p><input type="radio" name="question19" value="Mahanagar Target Nagar Ltd">Mahanagar Target Nagar Ltd</p>
            <p><input type="radio" name="question19" value="Mahanagar Transport Nagar Ltd">Mahanagar Transport Nagar Ltd</p>
            <p><input type="radio" name="question19" value="Mahanagar Telecom Nigam Ltd">Mahanagar Telecom Nigam Ltd</p>
        </div>

        <div>
            <p>20. National bird of India is ___________.</p>
            <p><input type="radio" name="question20" value="Peacock">Peacock</p>
            <p><input type="radio" name="question20" value="Parrot">Parrot</p>
            <p><input type="radio" name="question20" value="Sparrow">Sparrow</p>
            <p><input type="radio" name="question20" value="None of the mentioned">None of the mentioned</p>
        </div>

        <div>
            <p>21. How many states are there in India?</p>
            <p><input type="radio" name="question21" value="27">27</p>
            <p><input type="radio" name="question21" value="28">28</p>
            <p><input type="radio" name="question21" value="29">29</p>
            <p><input type="radio" name="question21" value="32">32</p>
        </div>

        <div>
            <p>22. The car manufacturing company Audi is owned by _____________</p>
            <p><input type="radio" name="question22" value="Tesla Inc">Tesla Inc.</p>
            <p><input type="radio" name="question22" value="Mercedes-Benz">Mercedes-Benz</p>
            <p><input type="radio" name="question22" value="Tata Group">Tata Group</p>
            <p><input type="radio" name="question22" value="Volkwagen Group">Volkwagen Group</p>
        </div>

        <div>
            <p>23. Which Batter currently holds the record for the highest score in an IPL match?</p>
            <p><input type="radio" name="question23" value="Virat Kohli">Virat Kohli</p>
            <p><input type="radio" name="question23" value="Hardik Pandya">Hardik Pandya</p>
            <p><input type="radio" name="question23" value="Jos Buttler">Jos Buttler</p>
            <p><input type="radio" name="question23" value="Harbhajan Singh">Harbhajan Singh</p>
        </div>

        <div>
            <p>24. National Anthem should be completed in how much time?</p>
            <p><input type="radio" name="question24" value="51 Sec">51 Sec</p>
            <p><input type="radio" name="question24" value="52 Sec">52 Sec</p>
            <p><input type="radio" name="question24" value="53 Sec">53 Sec</p>
            <p><input type="radio" name="question24" value="54 Sec">54 Sec</p>
        </div>

        <div>
            <p>25. Title Sponsor of IPL2022 is ____________.</p>
            <p><input type="radio" name="question25" value="Jio">Jio</p>
            <p><input type="radio" name="question25" value="Parle">Parle</p>
            <p><input type="radio" name="question25" value="Tesla">Tesla</p>
            <p><input type="radio" name="question25" value="Tata">Tata</p>
        </div>

        <div>
            <p>26. A business with single ownership is _______</p>
            <p><input type="radio" name="question26" value="Sole proprietorship">Sole proprietorship</p>
            <p><input type="radio" name="question26" value="Partnership">Partnership</p>
            <p><input type="radio" name="question26" value="Joint Stock Company">Joint Stock Company</p>
            <p><input type="radio" name="question26" value="None of the mentioned">None of the mentioned</p>
        </div>

        <div>
            <p>27. In computer full-form of OS is _______________</p>
            <p><input type="radio" name="question27" value="Open System">Open System</p>
            <p><input type="radio" name="question27" value="Operating System">Operating System</p>
            <p><input type="radio" name="question27" value="Open Sensor">Open Sensor</p>
            <p><input type="radio" name="question27" value="Operating Sensor">Operating Sensor</p>
        </div>

        <div>
            <p>28. With computers, .mov extension is used for ___________</p>
            <p><input type="radio" name="question28" value="Image file">Image file</p>
            <p><input type="radio" name="question28" value="Audio file">Audio file</p>
            <p><input type="radio" name="question28" value="Movie/animation file">Movie/animation file</p>
            <p><input type="radio" name="question28" value="Text file">Text file</p>
        </div>

        <div>
            <p>29. The purpose of choke in tube light is _________</p>
            <p><input type="radio" name="question29" value="To decrease the current">To decrease the current</p>
            <p><input type="radio" name="question29" value="To increase the current">To increase the current</p>
            <p><input type="radio" name="question29" value="To decrease the voltage momentarily">To decrease the voltage momentarily</p>
            <p><input type="radio" name="question29" value="To increase the voltage momentarily">To increase the voltage momentarily</p>
        </div>

        <div>
            <p>30. First train station started in India in ________________.</p>
            <p><input type="radio" name="question30" value="1851">1851</p>
            <p><input type="radio" name="question30" value="1852">1852</p>
            <p><input type="radio" name="question30" value="1853">1853</p>
            <p><input type="radio" name="question30" value="1854">1854</p>
        </div>

        <div>
            <p>31. What is the width of broad gauge railway line in India?</p>
            <p><input type="radio" name="question31" value="5  feet 3 inches">5  feet 3 inches </p>
            <p><input type="radio" name="question31" value="5 feet 6 inches">5 feet 6 inches</p>
            <p><input type="radio" name="question31" value="5 feet 11 inches">5 feet 11 inches</p>
            <p><input type="radio" name="question31" value="All the mentioned">All the mentioned</p>
        </div>

        <div>
            <p>32. Stars appears to move from east to west because </p>
            <p><input type="radio" name="question32" value="All stars move from east to west">All stars move from east to west</p>
            <p><input type="radio" name="question32" value="The earth rotates from west to east">The earth rotates from west to east</p>
            <p><input type="radio" name="question32" value="The earth rotates from east to west">The earth rotates from east to west</p>
            <p><input type="radio" name="question32" value="All the mentioned">All the mentioned </p>
        </div>

        <div>
            <p>33. Who gave the call for Evergreen Resolution ?</p>
            <p><input type="radio" name="question33" value="M. S. Swaminathan">M. S. Swaminathan</p>
            <p><input type="radio" name="question33" value="Verghese Kurien">Verghese Kurien</p>
            <p><input type="radio" name="question33" value="H. M. Dalaya">H. M. Dalaya</p>
            <p><input type="radio" name="question33" value="Narendra Modi">Narendra Modi</p>
        </div>

        <div>
            <p>34. Income tax in India was introduced by ________</p>
            <p><input type="radio" name="question34" value="William Jones">William Jones</p>
            <p><input type="radio" name="question34" value="James Wilson">James Wilson</p>
            <p><input type="radio" name="question34" value="Nicholas Kaldor">Nicholas Kaldor</p>
            <p><input type="radio" name="question34" value="Mahavir Tyagi">Mahavir Tyagi</p>
        </div>

        <div>
            <p>35. Government of India has merged Annapurna Scheme with ____________.</p>
            <p><input type="radio" name="question35" value="National old age pension scheme">National old age pension scheme</p>
            <p><input type="radio" name="question35" value="Ujjwala">Ujjwala </p>
            <p><input type="radio" name="question35" value="IRDP">IRDP</p>
            <p><input type="radio" name="question35" value="Ayushyman">Ayushyman </p>
        </div>

        <div>
            <p>36. A and B are brothers. C and D are sisters. A’s son is D’s brother. How is B related to C?</p>
            <p><input type="radio" name="question36" value="Father">Father</p>
            <p><input type="radio" name="question36" value="Brother">Brother</p>
            <p><input type="radio" name="question36" value="Uncle">Uncle</p>
            <p><input type="radio" name="question36" value="Grandfather">Grandfather</p>
        </div>

        <div>
            <p>37. Pointing a photo Amit said  “His father is only son of my mother”. The photo belongs to _____</p>
            <p><input type="radio" name="question37" value="Amit">Amit</p>
            <p><input type="radio" name="question37" value="Amit’s son">Amit’s son</p>
            <p><input type="radio" name="question37" value="Amit’s brother">Amit’s brother</p>
            <p><input type="radio" name="question37" value="Amit’s uncle">Amit’s uncle</p>
        </div>

        <div>
            <p>38. A main said to lady, “The son of your only brother is the brother of my wife.” What is the lady to the man?</p>
            <p><input type="radio" name="question38" value="Mother">Mother</p>
            <p><input type="radio" name="question38" value="Sister">Sister</p>
            <p><input type="radio" name="question38" value="Sister of father-in-law">Sister of father-in-law</p>
            <p><input type="radio" name="question38" value="Grandfather">Grandfather</p>
        </div>

        <div>
            <p>39. In a row of trees, a tree is 7th from left end and 14th from right end. How many trees are there in a row?</p>
            <p><input type="radio" name="question39" value="18">18</p>
            <p><input type="radio" name="question39" value="19">19</p>
            <p><input type="radio" name="question39" value="20">20</p>
            <p><input type="radio" name="question39" value="21">21</p>
        </div>

        <div>
            <p>40. Book:Cover :: Painting: ??</p>
            <p><input type="radio" name="question40" value="Example">Example</p>
            <p><input type="radio" name="question40" value="Color">Color</p>
            <p><input type="radio" name="question40" value="Drawing">Drawing</p>
            <p><input type="radio" name="question40" value="Frame">Frame</p>
        </div>


        <input type="submit" value="Submit quiz" class="btn btn-primary" id="submitt" name="submitform">
    </form>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.4.1.js">
</script>
<script>
    // $('#quiz').attr('hidden', true);
  $(document).ready(function() {
    function calc() {
      var score = 0;
      var q1 = $('input[name="question1"]:checked').val();
      var q2 = $('input[name="question2"]:checked').val();
      var q3 = $('input[name="question3"]:checked').val();
      var q4 = $('input[name="question4"]:checked').val();
      var q5 = $('input[name="question5"]:checked').val();
      var q6 = $('input[name="question6"]:checked').val();
      var q7 = $('input[name="question7"]:checked').val();
      var q8 = $('input[name="question8"]:checked').val();
      var q9 = $('input[name="question9"]:checked').val();
      var q10 = $('input[name="question10"]:checked').val();
      
      var q11 = $('input[name="question11"]:checked').val();
      var q12 = $('input[name="question12"]:checked').val();
      var q13 = $('input[name="question13"]:checked').val();
      var q14 = $('input[name="question14"]:checked').val();
      var q15 = $('input[name="question15"]:checked').val();
      var q16 = $('input[name="question16"]:checked').val();
      var q17 = $('input[name="question17"]:checked').val();
      var q18 = $('input[name="question18"]:checked').val();
      var q19 = $('input[name="question19"]:checked').val();
      var q20 = $('input[name="question20"]:checked').val();
      
      var q21 = $('input[name="question21"]:checked').val();
      var q22 = $('input[name="question22"]:checked').val();
      var q23 = $('input[name="question23"]:checked').val();
      var q24 = $('input[name="question24"]:checked').val();
      var q25 = $('input[name="question25"]:checked').val();
      var q26 = $('input[name="question26"]:checked').val();
      var q27 = $('input[name="question27"]:checked').val();
      var q28 = $('input[name="question28"]:checked').val();
      var q29 = $('input[name="question29"]:checked').val();
      var q30 = $('input[name="question30"]:checked').val();
      
      var q31 = $('input[name="questionq31"]:checked').val();
      var q32 = $('input[name="questionq32"]:checked').val();
      var q33 = $('input[name="questionq33"]:checked').val();
      var q34 = $('input[name="questionq34"]:checked').val();
      var q35 = $('input[name="questionq35"]:checked').val();
      var q36 = $('input[name="questionq36"]:checked').val();
      var q37 = $('input[name="questionq37"]:checked').val();
      var q38 = $('input[name="questionq38"]:checked').val();
      var q39 = $('input[name="questionq39"]:checked').val();
      var q40 = $('input[name="questionq40"]:checked').val();


      if (q1 == "13") {score++;}
      if (q2 == "mnZ"){score++;}
      if (q3 == "Magnify"){score++;}
      if (q4 == "12"){score++;}
      if (q5 == "91 "){score++;}
      if (q6 == "28"){score++;}
      if (q7 == "360"){score++;}
      if (q8 == "Oil"){score++;}
      if (q9 == "Calendar "){score++;}
      if (q10 == "Argentina"){score++;}
      
      if (q11 == "Twitter"){score++;}
      if (q12 == "Mumbai"){score++;}
      if (q13 == "Truth"){score++;}
      if (q14 == "Lollipop"){score++;}
      if (q15 == "Jana Gana Man"){score++;}
      if (q16 == "Semi – Circle"){score++;}
      if (q17 == "S. Jaishankar"){score++;}
      if (q18 == "Imphal"){score++;}
      if (q19 == "Mahanagar Telecom Nigam Ltd"){score++;}
      if (q20 == "Peacock"){score++;}
      
      if (q21 == "29"){score++;}
      if (q22 == "Volkwagen Group"){score++;}
      if (q23 == "Jos Buttler"){score++;}
      if (q24 == "52 Sec"){score++;}
      if (q25 == "Tata"){score++;}
      if (q26 == "Sole proprietorship"){score++;}
      if (q27 == "Operating System"){score++;}
      if (q28 == "Movie/animation file"){score++;}
      if (q29 == "To increase the voltage momentarily"){score++;}
      if (q30 == "1853"){score++;}
      
      if (q31 == "5 feet 6 inches"){score++;}
      if (q32 == "The earth rotates from west to east"){score++;}
      if (q33 == "M. S. Swaminathan"){score++;}
      if (q34 == "James Wilson"){score++;}
      if (q35 == "National old age pension scheme"){score++;}
      if (q36 == "Uncle"){score++;}
      if (q37 == "Amit’s son"){score++;}
      if (q38 == "Sister of father-in-law"){score++;}
      if (q39 == "20"){score++;}
      if (q40 == "Frame"){score++;}

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
      }, 2400000);

      $('#quiz').attr('hidden', false);
      $('#start').attr('hidden', true);


      $time_limit = "2016-08-14 00:40:00"
      var d = new Date($time_limit);
      var hours = d.getHours(); //00 hours
    //   alert(hours);
      var minutes = d.getMinutes(); //10 minutes
    //   alert(minutes);
      var seconds = 60 * minutes; // 600seconds
    //   alert(seconds);

      if (typeof(Storage) !== "undefined") {
        if (localStorage.seconds) {
          seconds = localStorage.seconds;
        }
      }

      function secondPassed() {
        var minutes = Math.floor((seconds - 30) / 60);
        // alert(minutes);
        console.log(minutes);
        var hours = Math.floor((minutes) / 60);
        // alert(hours);
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