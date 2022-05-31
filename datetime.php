<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Date & Times Picker</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
  <script>
    mobiscroll.datepicker('#picker', {
    controls: ['calendar']
    });
  </script>

</head>

<body>

  <h2>Booking Date </h2>
  <p>Date: <input type="text" id="datepicker" mindate="nextDay"></p>
 
  <h2>Booking Times </h2>
  <fieldset>
      <legend>Select Times </legend>
      <input type="radio" name="radio-1" id="radio-1">
      <label for="radio-1">12:00 PM</label>
  <br>
  <br>
      <input type="radio" name="radio-1" id="radio-1">
      <label for="radio-2">12:30 PM</label>
  <br>
  <br>
      <input type="radio" name="radio-1" id="radio-2">
      <label for="radio-3">1:00 PM</label>
  <br>
  <br>
      <input type="radio" name="radio-1" id="radio-3">
      <label for="radio-3">2:00 PM</label>
  </fieldset>

<!-- NEXT AND PREVIOUS BUTTONS -->

<div style="overflow:auto;padding: 30px 0px;">
    			<div style="float:right;">
    				<input type="hidden" name="submit_book_appointment_form">
      				<button type="button" id="prevBtn"  class="next_prev_buttons" style="background-color: #bbbbbb;"  onclick="nextPrev(-1)">Previous</button>
      				<button type="button" id="nextBtn" class="next_prev_buttons" onclick="nextPrev(1)">Next</button>
    			</div>
  			</div>

        <div style="text-align:center;margin-top:40px;">
    			<span class="step"></span>
    			<span class="step"></span>
    			<span class="step"></span>
    			<span class="step"></span>
  			</div> 
</body>
</html>