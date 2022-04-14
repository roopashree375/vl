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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Software engineering</title>
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
      Software Engineering
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

      <div id="int" align="justify">
      Software Engineering is an engineering branch related to the evolution of software product using well-defined scientific principles, techniques, and procedures.
      The result of software engineering is an effective and reliable software product.
      Software Engineering is an engineering branch related to the evolution of software product using well-defined scientific principles, techniques, and procedures.
       The result of software engineering is an effective and reliable software product.
    </div>

    <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="https://www.youtube.com/watch?v=kcvEiMFOcoE">Introduction To Software Engineering</a>
          <a class="item" href="https://www.youtube.com/watch?v=CKkGoLBa9ek">Computer Aided Software Engineering</a>
          <a class="item" href="https://www.youtube.com/watch?v=ul6nW1g3xK0">Requirements Gathering And Analysis</a>
          <a class="item" href="https://www.youtube.com/watch?v=sGxgZxwuHzc">Software Design </a>
          <a class="item" href="https://www.youtube.com/watch?v=0mUyAWXwcYQ">Software Development Methodologies</a>
          <a class="item" href="https://www.youtube.com/watch?v=fxXZf4zDjGQ">Verification And Validation,Software Testing</a>
          <a class="item" href="https://www.youtube.com/watch?v=ciTu06q3iW0">Software Evolution</a>
        </div>
      </div>

      <div id="pre" align="justify" style="display: none;">  The basic objective of software engineering is to develop methods and procedures for software development that can scale up for large systems and that can be used consistently
       to produce high-quality software at low cost and with a small cycle of time. </div>

      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i> What is SDLC?
          </div>
          <div class="content">
            <p class="transition hidden">
            SDLC stands for Software Development Life Cycle. It defines the step by step approach for the development of software. SDLC involves the following phases i.e. Requirement Gathering, System Analysis, Design, Coding, Testing, Maintenance, and Documentation.
                </p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are the various models available in SDLC?</div>
          <div class="content">
            <p class="transition hidden">
            There are several models available in SDLC for efficiently carrying out software development. Some of the models include the Waterfall model, V-Model, Agile model, etc.

            </p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i> What are the responsibilities of a Software Project Manager? </div>
          <div class="content">
            <p class="transition hidden">
            <div class="ui bulleted list">
            A Software Project Manager is responsible for driving the project towards successful completion. It is the responsibility of the Software Project Manager to make sure the entire team follows a systematic and well-defined approach towards the development of software.
            </div></p>
          </div>
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
