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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>DS-Lab</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
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
      Design and Analysis of Algorithms Laboratory
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
    <div class="ui clearing segment">
      
      <div id="int">
     <p> An algorithm is a set of steps of operations to solve a problem performing calculation, data processing, and automated reasoning tasks. An algorithm is an efficient method that can be expressed within finite amount of time and space.  </p>
     <p>An algorithm is the best way to represent the solution of a particular problem in a very simple and efficient way. If we have an algorithm for a specific problem, then we can implement it in any programming language, meaning that the algorithm is independent from any programming languages.  <p>
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Maximum sum sub array</span>
        <div class="menu">
          <a class="item" href="maxsum.php">Program</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Decrease and Conquer strategy</span>
        <div class="menu">
          <a class="item" href="BFS.php">BFS</a>
          <a class="item" href="DFS.php">DFS</a>
        </div>
      </button></br>
      <div class="ui icon dropdown button">
        <span class="text">Boyer-Moore String Matching Algorithm</span>
        <div class="menu">
          <a class="item" href="Boyer-string.php">Program</a>
        </div>
      </div></br>
      <div class="ui icon dropdown button">
        <span class="text">Longest Common Subsequence</span>
        <div class="menu">
          <a class="item" href="lcs.php">Program</a>
        </div>
      </div></br>
      
      <div class="ui icon dropdown button">
        <span class="text">Kruskal Algorithm</span>
        <div class="menu">
          <a class="item" href="kruskal.php">Program</a>
        </div>
      </div></br>

      <div class="ui icon dropdown button">
        <span class="text">Belman Ford</span>
        <div class="menu">
          <a class="item" href="belmanFord.php">Program</a>
        </div>
      </div></br>

      <div class="ui icon dropdown button">
        <span class="text">Sum Of Subset</span>
        <div class="menu">
          <a class="item" href="subsetsum.php">Program</a>
        </div>
      </div></br>
      </div>
      </div>
      
      <div id="pre" style="display: none;">Analysis of algorithms is a branch of computer science that studies the performance of algorithms, 
      especially their run time and space requirements..</br></br>
      The practical goal of algorithm analysis is to predict the performance of different algorithms in order to guide design decisions.
    </div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is the need of algorithm?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">Algorithms are used in every part of computer science. They form the field's backbone. In computer science, an algorithm gives the computer a specific set of instructions, which allows the computer to do everything, be it running a calculator or running a rocket. These decisions are all made by algorithms.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is the importance of algorithm in day to day life?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">Algorithms lie at the heart of computing. If we observe our surroundings, we can find several algorithms working to solve our daily life problems. Social media Networks, GPS applications, Google search, e-commerce platforms, Netflix recommendation systems, etc. applications are powered by algorithms.</p>
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
                $('.ui.dropdown').dropdown();
             });
</script>
</body>
</html>
