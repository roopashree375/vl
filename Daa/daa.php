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
  <title>Design and Analysis of Algorith</title>
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
     Design and analysis of algorithm
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
      An Algorithm is a set of well-defined instructions designed to perform a specific set of tasks. Algorithms are used in Computer science to perform calculations, automatic reasoning, data processing, computations, and problem-solving. <br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="./daav1.php">what is Algorithm?</a>
          <a class="item" href="./daav2.php">differnt types of algorithms?</a>
          <a class="item" href="./daav3.php">what is divide and conquer technique?</a>
          <a class="item" href="./daav4.php">what is differnt types of sorting techniques?</a>
          <a class="item" href="./daav5.php">what is dynamic programming?</a>
          <a class="item" href="./daav6.php">Warshall's-Floyd's Algorith?</a>
          <a class="item" href="./daav7.php">Bellam-ford Algorithm?</a>
          <a class="item" href="./daav8.php">Dijkstra Algorithm?</a>
          <a class="item" href="./daav9.php">Backtracking N Queens problem?</a>


          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. The student will be able to understand and use asymptotic notation to formulate the time 
                                           and space requirements of algorithm.</p>
                                        <p>2. The student will be able to analyze and compare complexity for different types of 
                                           algorithms for different types of problems.</p> 
                                       <p> 3. The student will be able to apply and implement major different algorithm design 
                                        techniques to solve problems and analyze time complexity of those problems. </p>
                                        4. Ability to apply and implement learned algorithm design techniques and data structures to 
                                        solve problem.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>why actually algorithm used in Programming?
          </div>
          <div class="content">
            <p class="transition hidden">Algorithms are used in every part of computer science. They form the field's backbone. In computer science, an algorithm gives the computer a specific set of instructions, which allows the computer to do everything, be it running a calculator or running a rocket.</p>
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