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
  <link rel="icon" href="../images/dscelogo.png">
  <title>Java-lab</title>
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
      OOPS With Java Laboratory
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
      Object Oriented programming is a programming style which is associated with the concepts like class, object, Inheritance, Encapsulation, Abstraction, Polymorphism
      An object-based application in Java is based on declaring classes, creating objects from them and interacting between these objects.
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Overview of Java</span>
        <div class="menu">
          <a class="item" href="GrossNetSalary.php">Gross Net salary</a>
          <a class="item" href="quadratic.php">Roots of a Quadratic Equations</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Methods & Classes</span>
        <div class="menu">
          <a class="item" href="MatrixMul.php">Matrix Multiplication</a>
          <a class="item" href="Constructor.php">Constructors</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Packages & Interfaces</span>
        <div class="menu">
          <a class="item" href="exceptionalhand.php">Exception Handling</a>
          <a class="item" href="interfaces.php">Interfaces</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Multithreaded Programming</span>
        <div class="menu">
          <a class="item" href="abstractclass.php">Abstract Classes</a>
          <a class="item" href="threads.php">Operation on Threads</a>
          <a class="item" href="filemanipulate.php">Operation on File Manipulation</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text"> Generics</span>
        <div class="menu">
        <a class="item" href="generic.php">Generic class</a>
          <a class="item" href="string.php">String operations</a>
        </div>
      </div><br>
      </div>
      </div>
      
      <div id="pre" style="display: none;"> Understand fundamentals of object-oriented programming in Java. 
Gain knowledge on working of Packages, Interfaces & Files in Java
Understand the importance of Generic classes, Strings and Multithreaded Programming.</div>

<div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i>What is the meaning of OOPS?
          </div>
          <div class="content">
            <p class="transition hidden">Object-oriented programming System(OOPs) is a programming paradigm based on the concept of “objects” that contain data and methods. The primary purpose of object-oriented programming is to increase the flexibility and maintainability of programs. Object oriented programming brings together data and its behaviour(methods) in a single location(object) makes it easier to understand how a program works. </p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What are the characteristics of an object?</div>
          <div class="content">
            <p class="transition hidden">An Object is a bundle of data and its behaviour(often known as methods), which have states and behaviors. The characteristcs of an Object is:<br><br>
            <div class="ui bulleted list">
              <div class="item">Abstraction</div><br>
              <div class="item">Encapsulation</div><br>
              <div class="item">Method Invocation</div>
            </div></p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is an Abstract method? </div>
          <div class="content">
            <p class="transition hidden">
            <div class="ui bulleted list">
              <div class="item">A method that is declared but not defined. Only method signature no body.</div><br>
              <div class="item">Declared using the abstract keyword</div><br>
              <div class="item">Used to put some kind of compulsion on the class who inherits the class has abstract methods.</div><br>
              <div class="item">The class that inherits must provide the implementation of all the abstract methods of parent class else declare the subclass as abstract.</div>
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
                $('.ui.dropdown').dropdown();
             });
</script>
</body>
</html>
