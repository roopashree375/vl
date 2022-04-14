<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: index.php");
//     exit;
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>OOMD</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
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
  <?php
    // if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
    // else
    // {
    //   echo "<a class=\"item\">";
    //   echo $_SESSION['username'];
    //   echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
    // }
    ?>
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
        List of Experiments
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">

      <div id="int">
      Intention of object oriented modeling and design is to learn how to apply object -oriented concepts to all the stages of the software development life cycle.Object-oriented modeling and design is a way of thinking about problems using models organized around real world concepts.
       The fundamental construct is the object, which combines both data structure and behavior.
<br> <br>
There are 3 types of models in the object oriented modeling and design are: Class Model, State Model, and Interaction Model
<br> <br>
     <!-- <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/FR4QIeZaPeM" frameborder="0">
</iframe> -->
      </div>
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="https://www.youtube.com/watch?v=0swthCcQ-qA&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=6">what is OOMD</a>
          <a class="item" href="https://www.youtube.com/watch?v=hq8UoN89uXE&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=10">Foundation of Object model</a>
          <a class="item" href="https://www.youtube.com/watch?v=iN4Ft6loL7o&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=33">Overview of  UML</a>
          <a class="item" href="https://www.youtube.com/watch?v=h6HCaJiNtxA&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=34">SDLC phases</a>
          <a class="item" href="https://www.youtube.com/watch?v=2pFjyOI0_7s&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=41">Sequence Diagram</a>
          <a class="item" href="https://www.youtube.com/watch?v=s6QC0ly2cqM&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=43">Communication Diagram</a>
          <a class="item" href="https://www.youtube.com/watch?v=YnFJ3ZNx0Nk&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=48">State Machine Diagram</a>
          <a class="item" href="https://www.youtube.com/watch?v=9fz2nvrkf6o&list=PLJ5C_6qdAvBHslIkD7JB7kBdgv1SeXy3P&index=51">Various UML Diagram</a>



        </div>
      </div>
      <!-- <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="createtable.php">Create a table</a>
          <a class="item" href="#">Alter table</a>
          <a class="item" href="#">Insert</a>
          <a class="item" href="#">Use of AND,OR</a>
          <a class="item" href="#">Row Level Functions</a>
          <a class="item" href="#">String Handling functions</a>
        </div>
      </div> -->

      <div id="pre" style="display: none;"> The main aim of OOMD is to bind together the data and the functions that operate on them
      so that no other part of the code can access this data except that function.</div>
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>Why C++ is preferred language for OOP?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">C++ is a very powerful language that supports the object oriented programming. The most important feature of C++ is class. Inheritance and polymorphism makes C++ a truly object oriented programming language</p>
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>Name any two object oriented languages?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">C++ , java , small talk and C# are most popular object oriented programming languages.</p>
          </div>

          <!-- <div class="title" id="dion3">
            <i class="dropdown icon"></i>Why is database used?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div> -->
        </div>
      </div>

    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>
