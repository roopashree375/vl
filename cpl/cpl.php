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
  <title>C-Lab</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
    <br>
    <p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
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
      COMPUTER PROGRAMMING LABORATORY (Practice)
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
            C is a general-purpose programming language that is extremely popular, simple, and flexible to use.
            It is a structured programming language that is
            machine-independent and extensively used to write various applications,
            Operating Systems like Windows, and many other complex programs like Oracle database, Git, Python interpreter, and more.
            It is said that ???C??? is a god???s programming language. One can say, C is a base for the programming.
            If you know ???C,??? you can easily grasp the knowledge of the other programming languages that uses
            the concept of ???C???.
          </div>

          <div id="lis" style="display: none;">
            <div style="display:inline-block;">
              <button class="ui icon dropdown button">
                <span class="text">Quadratic Equation</span>
                <div class="menu">
                  <a class="item" href="quadratic.php">Quadratic</a>
                </div>
              </button><br>
              <div class="ui icon dropdown button">
                <span class="text">electricity board charges</span>
                <div class="menu">
                  <a class="item" href="electricity.php">electricity</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Reverse and Check for palindrome</span>
                <div class="menu">
                  <a class="item" href="palindrome.php">Palindrome</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Bubble Sort.</span>
                <div class="menu">
                  <a class="item" href="bubblesort.php">BubbleSort</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Binary search technique</span>
                <div class="menu">
                  <a class="item" href="bst.php">Binary Search</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Matrix Multiplication</span>
                <div class="menu">
                  <a class="item" href="matrixmultiplication.php">Matrix Multiplication</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">String Concatination</span>
                <div class="menu">
                  <a class="item" href="stringconcatination.php">String Concatination</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Check if prime</span>
                <div class="menu">
                  <a class="item" href="isprime.php">IsPRime</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Structure-Employee</span>
                <div class="menu">
                  <a class="item" href="struct.php">Struct</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Pointers</span>
                <div class="menu">
                  <a class="item" href="pointers.php">Pointers</a>
                </div>
              </div><br>
            </div>
          </div>

          <div id="pre" style="display: none;">
            1. Analyze and design problem solving techniques using flowcharts and algorithms.
            <br />
            2. Develop programs using different data types in C
            <br />
            3. Develop programs to solve real time problems
            <br />
            4. Lean to test and debug a program
            <br />
          </div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title" id="dion1">
                <i class="dropdown icon"></i>What is a datastructure?
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord1">In computer science, a data structure is a data organization, management, and storage format that enables efficient access and modification. More precisely, a data structure is a collection of data values, the relationships among them, and the functions or operations that can be applied to the data.</p>
              </div>

              <div class="title" id="dion2">
                <i class="dropdown icon"></i>What are some types of datastructures?
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord2">There are many datastructures. Some of them are: <br>
                  Array<br>List<br>Union<br>Trees</p>
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
      $('.ui.dropdown').dropdown();
    });
  </script>
</body>

</html>