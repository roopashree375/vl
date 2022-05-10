<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images/dscelogo.png">
  <title>EE</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="../titles6.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item" href="../index.php">
        About Us
      </a>
      <a class="header item" href="../titles6.php">
        Go Back
      </a>
      <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item -->
      </a>
    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Engineering Economics
    </h2>
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui secondary vertical pointing menu" id="Menus">
          <a class="active item" id="intro">
            Introduction
          </a>
          <a class="item" id="prereq">
            Objective
          </a>
          <a class="item" id="list">
            List of Tutorials
          </a>
          <a class="item" id="faq">
            FAQ's
          </a>

          
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int" align="justify">
            Identify the importance and role of engineering economy in investment decisions.
          </div>


          <div id="lis" style="display: none;">
            <div class="ui bulleted list">
              <a class="item" href="eeintro.php">Introduction to Engineering economics</a>
              <a class="item" href="rateofreturn.php">Rate of Return Calculations</a>
              <a class="item" href="dba.php">Depreciation and Breakeven Analysis</a>
              <a class="item" href="replacement.php">Replacement Analysis</a>

            </div>
          </div>

          <div id="pre" style="display: none;">To Understand the techniques of cash flows and interest calculations.<br></div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title">
                <i class="dropdown icon"></i>Importance of Engineering Economics
              </div>
              <div class="content">
                <p class="transition hidden">Expose the students to role and importance of engineering economics in decision
                  making.</p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What does Engineering Economics lead to ?
              </div>
              <div class="content">
                <p class="transition hidden">Establish decision making capabilities in investments alternatives. </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>Why is Engineering Economics Important ?
              </div>
              <div class="content">
                <p class="transition hidden">Equip the students with methods of evaluating investment decisions.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script language='javascript'>
    $(document).ready(function() {
      $('.ui.accordion').accordion();
    });
  </script>
</body>

</html>