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
  <title>OOMD</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="index.php">
        Home
      </a>
      <a class="item">
        About Us
      </a>
      <a class="header item" href="../titles5.php">
        Go Back
      </a>
    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Object Oriented Modelling & Design
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
            Intention of object oriented modeling and design is to learn how to apply object -oriented concepts to all the stages of the software development life cycle.Object-oriented modeling and design is a way of thinking about problems using models organized around real world concepts.
            The fundamental construct is the object, which combines both data structure and behavior.<br> <br>
            There are 3 types of models in the object oriented modeling and design are: Class Model, State Model, and Interaction Model
            <br> <br>
          </div>

          <div id="lis" style="display: none;">
            <div class="ui bulleted list">

              <a class="item" href="./oomdv1.php">what is OOMD</a>
              <a class="item" href="./oomdv2.php">Foundation of Object model</a>
              <a class="item" href="./oomdv3.php">Overview of UML</a>
              <a class="item" href="./oomdv4.php">SDLC phases</a>
              <a class="item" href="./oomdv5.php">Sequence Diagram</a>

            </div>
          </div>

          <div id="pre" style="display: none;">
            The main aim of OOMD is to bind together the data and the functions that operate on them
            so that no other part of the code can access this data except that function.
          </div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title">
                <i class="dropdown icon"></i>Name any two object oriented languages?
              </div>
              <div class="content">
                <p style="transition hidden">C++ , java , small talk and C# are most popular object oriented programming languages.</p>
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