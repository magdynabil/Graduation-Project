<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Lines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


  <style>
ol, ul {
  list-style: none;
}
#busline-trip{
  position:absolute;
  height: 350px;

}
.busDetails{
  margin-left:120px;
}

html, body {
  color: #681;
  background: #eee;
  font: normal 12px Helvetica;
  zoom: 0 !important;
}

.bc {
  cursor: pointer;
  color: #28e;
}
.bc:before {
  top: 1px;
  left: -31px;
  width: 8px;
  height: 8px;
  border-width: 5px;
  border-color: #28e;
}

/* ---- Timeline ---- */
.bus {
  -moz-transform-origin: 25% 25%;
  -ms-transform-origin: 25% 25%;
  -webkit-transform-origin: 25% 25%;
  transform-origin: 25% 25%;
  position: absolute;
  z-index: 1;
  display: block;
  margin: 100px;
  height: 4px;
  background: #9b2;
  width: 25px;
  animation: a 10s 1s both ease-in-out;
}

.bus::before,
.bus::after {
  content: "";
  position: absolute;
  top: -8px;
  display: block;
  width: 0;
  height: 0;
  border-radius: 10px;
  border: 10px solid #9b2;
}

.bus::before {
  left: -5px;
}

.bus::after {
  right: -10px;
  border: 10px solid transparent;
  border-right: 0;
  border-left: 20px solid #9b2;
  border-radius: 3px;
}

#busline-trip li:nth-child(1) {
  left: 150px;
  top: 25px;
}

#busline-trip li:nth-child(2) {
  left: 300px;
  top: 55px;
}

#busline-trip li:nth-child(3) {
  left: 450px;
  top: 75px;
}

#busline-trip li:nth-child(4) {
  left: 600px;
  top: 32px;
}

#busline-trip li:nth-child(5) {
  left: 750px;
  top: 100px;
}

@keyframes a {
  0% {
    top: -55px;
    left: -55px;
    -moz-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }
  10% {
    top: 1px;
    left: 53px;
  }
  20% {
    -moz-transform: rotate(13deg);
    -ms-transform: rotate(13deg);
    -webkit-transform: rotate(13deg);
    transform: rotate(13deg);
  }
  30% {
    top: 31px;
    left: 203px;
  }
  40% {
    -moz-transform: rotate(9deg);
    -ms-transform: rotate(9deg);
    -webkit-transform: rotate(9deg);
    transform: rotate(9deg);
  }
  50% {
    top: 51px;
    left: 353px;
  }
  60% {
    -moz-transform: rotate(-19deg);
    -ms-transform: rotate(-19deg);
    -webkit-transform: rotate(-19deg);
    transform: rotate(-19deg);
  }
  70% {
    top: 8px;
    left: 503px;
  }
  80% {
    -moz-transform: rotate(25deg);
    -ms-transform: rotate(25deg);
    -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
  }
  90% {
    top: 76px;
    left: 653px;
    filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
  }
  100% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    left: 700px;
    top: 76px;
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}
#busline-trip li {
  position: absolute;
  top: -77px;
  display: inline-block;
  float: left;
  width: 150px;
  transform: rotate(-45deg);
  font: bold 14px arial;
}

#busline-trip li::before {
  animation: li 100ms both;
  content: "";
  position: absolute;
  top: 3px;
  left: -29px;
  display: block;
  width: 6px;
  height: 6px;
  border: 4px solid #9b2;
  border-radius: 10px;
  background: #eee;
  -moz-transition: all 1s;
  -o-transition: all 1s;
  -webkit-transition: all 1s;
  transition: all 1s;
}

/* ---- Hover effects ---- */
#busline-trip li:hover {
  cursor: pointer;
  color: #28e;
}

#busline-trip li:hover::before {
  top: 1px;
  left: -31px;
  width: 8px;
  height: 8px;
  border-width: 5px;
  border-color: #28e;
}
    
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}

        .button {
  background-color: RoyalBlue;  
  border-radius: 5px;
  color: white;
  padding: .5em;
  text-decoration: none;
}

.button:focus,
.button:hover {
  background-color: DodgerBlue;
  color: White;
}
</style>
</head>

<body>

<div class="container">
  <h2>Available Bus Lines</h2> 
              <!-- [SEARCH FORM] -->
 
 <input type="text" id="myInput" onkeyup="SFunction()" placeholder="Search By First Destination">

 <table id="myTable" class="table table-hover" class="table-responsive"><br>
    <thead>
      <tr>
        <th>Bus Number</th>
        <th>First Destination</th>
        <th>Last Destination</th>
        <th>More Details</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>319</td>
        <td>Badr city</td>
        <td>EL Sayda Aisha</td>
        <td><a href='#' class="button" id="btn1" role="button" onclick="myFunction()">Show Details</a>

</td>
      </tr>
      <tr>
        <td>420</td>
        <td>EL Sherouk Gate 1</td>
        <td>Hadayk el Qoba</td>
        <td><a href='#' class="button" id="btn2" role="button" onclick="myFunction1()">Show Details</a>

      </tr>
      <tr>
        <td>421</td>
        <td>EL Sherouk Gate 1</td>
        <td>Tahrir</td>
        <td><a href='#' class="button" id="btn3" role="button" onclick="myFunction2()">Show Details</a>
      </tr>
      <tr>
        <td>425</td>
        <td>Badr city</td>
        <td>EL Ataba</td>
        <td><a href='#' class="button" id="btn4" role="button" onclick="myFunction3()">Show Details</a>
      </tr>
      <tr>
        <td>1016</td>
        <td>EL Sherouk Gate 1</td>
        <td>Shoubra</td>
        <td><a href='#' class="button" id="btn5" role="button" onclick="myFunction4()">Show Details</a>
      </tr>
      <tr>
        <td>1057</td>
        <td>Badr city</td>
        <td>Hadayk el Qoba</td>
        <td><a href='#' class="button" id="btn6" role="button" onclick="myFunction5()">Show Details</a>
      </tr>
    </tbody>
  </table>
 </div>

	<!-- TRIP SECTION 1 -->
  <div id="trip1" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 1:30 Hours <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
EL Sherouk Gate 1
  </li>
  <li>
    Ismailia Road 
  </li>  
    <li>
    Military college
  </li>  
    <li>
    Sheraton
  </li>  
    <li>
    El Ahly Club
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 1 END -->

  <!-- TRIP SECTION 2 -->
  <div id="trip2" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 2 Hours <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
    El Asher Buses Stop
  </li>
  <li>
    El-Garage
  </li>  
    <li>
    Alf Maskan
  </li>  
    <li>
    Masr Al Jadidah 
  </li>  
    <li>
    Hadayk el Qoba
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 2 END -->

  <!-- TRIP SECTION 3 -->
  <div id="trip3" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 1:30 Hours <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
El Asher Buses Stop
  </li>
  <li>
  Sheraton
  </li>  
    <li>
    Abbas El-Akkad
  </li>  
    <li>
    El-Abaseya
  </li>  
    <li>
    Ramsis
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 3 END -->

  <!-- TRIP SECTION 4 -->
  <div id="trip4" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 2 Hours  <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
New Heliopolis City
  </li>
  <li>
  EL Sherouk City
  </li>  
    <li>
    El Asher Buses Stop
  </li>  
    <li>
    Alf Maskan
  </li>  
    <li>
    El-Gaish Street
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 4 END -->

  <!-- TRIP SECTION 5 -->
  <div id="trip5" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 1:30 Hours <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
El Asher Buses Stop
  </li>
  <li>
    Sheraton
  </li>  
    <li>
    El Ahly Club
  </li>  
    <li>
    El-Abaseya
  </li>  
    <li>
    Ramsis
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 5 END -->

  <!-- TRIP SECTION 6 -->
  <div id="trip6" style="display:none;">
 <div class="busDetails">
    <h2>Details:</h2>
    <p><img src="../img/time.png" width="20px"> Duration: 1:30 Hours <br><br><img src="../img/ticket.png" width="25px"> Price: 5 L.E </p>
</div>
 <div id="busline-trip">
    <div class="bus"></div>
<ol>
<li>
EL Sherouk Gate 1
  </li>
  <li>
  El Asher Buses Stop
  </li>  
    <li>
    El-Garage
  </li>  
    <li>
    Alf Maskan
  </li>  
    <li>
    Hadayk el Qoba
  </li>
</ol>
    </div>
    </div>
  <!-- TRIP SECTION 6 END -->
  <style>
.footer {
    margin-top: 250px;}
    p{color:black;}</style>

<script>
function SFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction() {
        document.getElementById("trip1").style.display = "block";
        document.getElementById("trip2").style.display = "none";
        document.getElementById("trip3").style.display = "none";
        document.getElementById("trip4").style.display = "none";
        document.getElementById("trip5").style.display = "none";
        document.getElementById("trip6").style.display = "none";
    }
        $("#btn1").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip1").offset().top},
        'slow'); });

function myFunction1() {
        document.getElementById("trip1").style.display = "none";
        document.getElementById("trip2").style.display = "block";
        document.getElementById("trip3").style.display = "none";
        document.getElementById("trip4").style.display = "none";
        document.getElementById("trip5").style.display = "none";
        document.getElementById("trip6").style.display = "none";
    }
        $("#btn2").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip2").offset().top},
        'slow'); });

function myFunction2() {
        document.getElementById("trip1").style.display = "none";
        document.getElementById("trip2").style.display = "none";
        document.getElementById("trip3").style.display = "block";
        document.getElementById("trip4").style.display = "none";
        document.getElementById("trip5").style.display = "none";
        document.getElementById("trip6").style.display = "none";
    }
        $("#btn3").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip3").offset().top},
        'slow'); });

function myFunction3() {
        document.getElementById("trip1").style.display = "none";
        document.getElementById("trip2").style.display = "none";
        document.getElementById("trip3").style.display = "none";
        document.getElementById("trip4").style.display = "block";
        document.getElementById("trip5").style.display = "none";
        document.getElementById("trip6").style.display = "none";
    }
        $("#btn4").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip4").offset().top},
        'slow'); });
 
function myFunction4() {
        document.getElementById("trip1").style.display = "none";
        document.getElementById("trip2").style.display = "none";
        document.getElementById("trip3").style.display = "none";
        document.getElementById("trip4").style.display = "none";
        document.getElementById("trip5").style.display = "block";
        document.getElementById("trip6").style.display = "none";
    }
        $("#btn5").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip5").offset().top},
        'slow'); });
        
function myFunction5() {
        document.getElementById("trip1").style.display = "none";
        document.getElementById("trip2").style.display = "none";
        document.getElementById("trip3").style.display = "none";
        document.getElementById("trip4").style.display = "none";
        document.getElementById("trip5").style.display = "none";
        document.getElementById("trip6").style.display = "block";
    }
        $("#btn6").click(function() {
    $('html,body').animate({
        scrollTop: $("#trip6").offset().top},
        'slow'); });         
</script>

    <?php

include_once("include/footer.php");
?>