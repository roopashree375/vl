<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(!isset($_SESSION['username']))
  {
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
  <link rel="../stylesheet" href="css/Semantic/semantic.min.css">
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Operating Sysytem</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
  <a href="../titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="../index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
  <a class="header item" href="../titles4.php">
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
     Operating Sysytem
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
      <a class="item" id="quiz">
        QUIZ
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      An operating system is a program that acts as an interface between the user and the computer hardware and controls the execution of all kinds of programs. <br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="./osv1.php">what is Operating Sysytem?</a>
          <a class="item" href="./osv2.php">Differnt types of System Calls?</a>
          <a class="item" href="./osv3.php">Multithreading Concept?</a>
          <a class="item" href="./osv4.php">Scheduling Algorithm?</a>
          <a class="item" href="./osv5.php">Deadlock condition?</a>
          <a class="item" href="./osv6.php">Memory managment?</a>
          <a class="item" href="./osv7.php">Paging technique?</a>

          

          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. To understand the importance of operating systems in utilizing the hardware and software 
resources along with the protection and security mechanisms.</p>
<p>2. To comprehend and analyze various resource management techniques.</p> 
<p>3. To implement resource management algorithms.</p>
<p>4. To gain knowledge on the various protection and security mechanisms provided by 
operating system.</p> <br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>what is operating Sysytem
          </div>
          <div class="content">
            <p class="transition hidden">An operating system is a program that acts as an interface between the user and the computer hardware and controls the execution of all kinds of programs.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>what are the various types of algorithm methods used in machine learning?</div>
          <div class="content">
            <p class="transition hidden">There are four types of machine learning algorithms: supervised, semi-supervised, unsupervised and reinforcement.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>different types of algorithm in data structure? </div>
          <div class="content">
            <p class="transition hidden"> Brute Force algorithm.
Greedy algorithm.
Recursive algorithm.
Backtracking algorithm.
Divide & Conquer algorithm.
Dynamic programming algorithm.
Randomised algorithm.<br>

            </p>
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