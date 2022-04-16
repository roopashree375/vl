<!DOCTYPE html>
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script> 
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>C Programming For Problem Solving</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
      <a href="titles.php">Virtual Labs</a> 
  <br><p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
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
    C Programming For Problem Solving
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
        List of Topics
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui clearing segment">
      
      <div id="int">
    Understand how data can be represented in C.</br>
	Understand to analyse and design the problem solving techniques.</br>
	Understand how to create modular programs.</br>
	Understand the various memory and data access methods. 

      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Introduction to Computer Hardware and Software </span>
        <div class="menu">
          <a class="item" href="cpps\chs.php">Computer Hardware and Software</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Introductionto C Language</span>
        <div class="menu">
          <a class="item" href="cpps\clang.php">C Language</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Operators and Expression</span>
        <div class="menu">
          <a class="item" href="cpps\op&ex.php">Operators and Expression</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Branching and Looping</span>
        <div class="menu">
          <a class="item" href="cpps\branch&loop.php">Branching and Looping</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Arrays</span>
        <div class="menu">
          <a class="item" href="cpps\Arrays.php">Arrays</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Strings</span>
        <div class="menu">
          <a class="item" href="cpps\Strings.php">Strings</a>
        </div>
      </div><br>
      </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better at C Programming For Problem Solving.</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is a C Programming?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">In computer science, C is a high-level and general-purpose programming language that is ideal for developing firmware or portable applications. Originally intended for writing system software, C was developed at Bell Labs by Dennis Ritchie for the Unix Operating System in the early 1970s.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is C programming used for?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">C programming language is a machine-independent programming language that is mainly used to create many types of applications and operating systems such as Windows, and other complicated programs such as the Oracle database, Git, Python interpreter, and games and is considered a programming foundation in the process of learning any other programming language. Operating systems and diverse application software for computer architectures ranging from supercomputers to PLCs and embedded systems are examples of such applications.</p>
          </div>

          <!-- <div class="title" id="dion3">
            <i class="dropdown icon"></i>What is a dog?
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
                $('.ui.dropdown').dropdown();
             });
</script>
</body>
</html>