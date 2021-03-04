<?php

  // Getting the parameter of id
  $test_id = $_GET['id'];
  // This will be the header for the content
  $page_header = "Test $test_id";

  // Panel Instruction
  $panel_content = "TEST";
  $panel_heading = "Instruction";

  $content = "";
  if ($test_id == 1) {
      // Chess Board Finding Bug
      $page_header = "Chess Board";

      $content = "Fix the chessboard<br>";
      $content .= "It must be: <em>8x8</em> and the height and width is 100 by 100px <br>";
      $content .= "<br><br>";
      $content .= "<b>Expected output:</b> <br>";
      $content .= "<img width = '100px' height = '100px' src = 'exams/files/chessboardpng'/>";


      $content .= "<br><br><i><b>File name</b>: test1.php</i><br>";


  } else if ($test_id == 2) {

      $page_header = "JSON DECODE";
      $content = "Write a script which decodes the Following JSON String. <br><br>";

      $content .= "<b>{\"fname\": \"Juan\",
                  \"mname\": \"L.\",
                  \"lname\": \"Santos\",
                  \"birthday\": \"1995-04-01\",
                  \"address\":
                  {
                  \"barangay\": \"Virac\",
                  \"municipal\": \"Caramoran\",
                  \"province\": \"Catanduanes\"
                  }}
                  </b>";

      $content .= "<br><br>";
      $content .= "<b>Expected output:</b> <br><br>";
      $content .= "<pre>";
      $content .= "<b>Name</b> : Juan L. Santos <br>";
      $content .= "<b>Birthday</b> : 1995-04-01 <br>";
      $content .= "<b>Address </b> : Virac, Caramoran, Catanduanes <br>";
      $content .= "</pre>";

      $content .= "<br><br><i><b>File name</b>: test2.php</i><br>";
  } else if ($test_id == 4) {
    $page_header= "Bubble Sort";
    $content .= "Create a <b>bubbleSort</b> function that will sort array number.<br>";
    $content .= "The function must sort the given array number: ";
    $content .= "<b><i>255,1,-1,3,0,5</i></b>";

    $content .= "<br><br>";
    $content .= "<b>Expected output:</b> <br><br>";
    $content .= "<pre>-1,0,1,3,5,255</pre>";

    $content .= "<br>Find which causes the bug.";
    $content .= "<br><br><i><b>File name</b>: test4.php</i><br>";
  } else if ($test_id == 3) {

    $page_header= "Increment Int List";
    $content = "Create a function that will accept an integer array and increment it by 1, return the result in array format.";
    $content .= "<br><b>Example</b>: array(8,7,9,9) will be 8799 + 1";
    $content .= "<br><br>";
    $content .= "<b>Expected output:</b> <br> <pre>[8,8,0,0]</pre>";

    $content .= "<br><br><i><b>File name</b>: test3.php</i><br>";

  } else if ($test_id == 5) {

    $page_header = "";
    $content = "Consider of size <em><b>n</b></em> = 4<br><br>";
    $content .= "<b>Expected output</b>";
    $content .= "<pre>";
    $content .= "   #<br>";
    $content .= "  ##<br>";
    $content .= " ###<br>";
    $content .= "####<br>";
    $content .= "</pre>";
    $content .= "Observe that its base and height are both equal to , and the image is drawn using # symbols and spaces." . "<br>". "The last line is not preceded by any spaces. Write a program that prints a same example above of size <b><em>n</em></b>.";
    $content .= "<br><br>";
    $content .= "<b>Sample input </b>";
    $content .= "<pre>8</pre>";
    $content .= "<b>Sample output </b>";
    $content .= "<pre>";
    $content .= "       #<br>";
    $content .= "      ##<br>";
    $content .= "     ###<br>";
    $content .= "    ####<br>";
    $content .= "   #####<br>";
    $content .= "  ######<br>";
    $content .= " #######<br>";
    $content .= "########<br>";
    $content .= "</pre>";
    
  }

  $panel_content = $content;

  include("elements/header.php");

  if ( $panel_heading !== "" && $panel_content !== "" ) {
      include("elements/panel.php");
  }

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <b>Output</b>
    </div>
    <!-- .panel-heading -->
    <div class="panel-body">
      <pre>
        <?php   include("exams/test" . $test_id . ".php"); ?>
      </pre>
    </div>
    <!-- .panel-body -->
</div>


<?php   include("elements/footer.php"); ?>
