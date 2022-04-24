<!DOCTYPE html>
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
  <link rel="icon" href="../images/dscelogo.png">
  <title>SS-lab</title>
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
  <a class="header item" href="../index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
  <?php
    // if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"../login.php\">Login</a><a class=\"item\" href=\"../register.php\">Register</a>";
    // else 
    // { 
    //   echo "<a class=\"item\">"; 
    //   echo $_SESSION['username'];
    //   echo "</a><a class=\"item\" href=\"../logoutprocess.php\">Logout</a>";
    // }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
     System Software _ Operating System Lab with Mini-project
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
      System software is a set of programs that handles all the basic internal working of a computer. Moreover, it executes and controls all the working of different peripheral devices and other basic tasks and software.
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Linux</span>
        <div class="menu">
          <a class="item" href="p1.php">Linux Installation</a>
          
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Lex and YACC</span>
        <div class="menu">
          <a class="item" href="p3.php">Program 3</a>
          <a class="item" href="p4.php">Program 4</a>
          <a class="item" href="p5.php">Program 5</a>
          <a class="item" href="p6.php">Program 6</a>
          <a class="item" href="p7.php">Program 7</a>
          <a class="item" href="p8.php">Program 8</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">File Handling</span>
        <div class="menu">
          <a class="item" href="p9.php">Program 9</a>
          <a class="item" href="p10.php">Program 10</a>
          <a class="item" href="p11.php">Program 11</a>
          
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Operating Systems</span>
        <div class="menu">
          <a class="item" href="p12.php">Fibonacci series</a>
          
        </div>
      </button><br>
      
        </div>
      </div><br>
      
      </div>
      </div>
      
      <div id="pre" style="display: none;"> To be familiar with Lexical Analysis and Syntax Analysis phases of Compiler
Design and implement programs on these phases using LEX & YACC tools
and/or C/C++/Java. To be fluent with the system calls available in the LINUX environment. To be able to design and build an applications/service over a given operating
system</div>



<div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i>What is systemsoftware?
          </div>
          <div class="content">
            <p class="transition hidden">System software is a set of programs that handles all the basic internal working of a computer. Moreover, it executes and controls all the working of different peripheral devices and other basic tasks and software.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is Lex?</div>
          <div class="content">
            <p class="transition hidden">Lex is a computer program that generates lexical analyzers. Lex is commonly used with the yacc parser generator. Lex, originally written by Mike Lesk and Eric Schmidt and described in 1975, is the standard lexical analyzer generator on many Unix systems, and an equivalent tool is specified as part of the POSIX standard.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is YACC?</div>
          <div class="content">
            <p class="transition hidden">YACC (yet another compiler-compiler) is an LALR(1) (LookAhead, Left-to-right, Rightmost derivation producer with 1 lookahead token) parser generator. YACC was originally designed for being complemented by Lex.
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
