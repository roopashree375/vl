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
  <title>AIML-Lab</title>
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
      ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING LABORATORY (Practice)
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
          Artificial intelligence and machine learning are the part of computer science that are 
          correlated with each other. These two technologies are the most trending technologies 
          which are used for creating intelligent systems. Machine learning is a subfield of 
          artificial intelligence, which enables machines to learn from past data or experiences
          without being explicitly programmed.
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
                <span class="text">Simple linear regression model</span>
                <div class="menu">
                  <a class="item" href="slrm.php">Simple linear Regression</a>
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
          The basic objective of AI (also called heuristic programming, machine intelligence, 
          or the simulation of cognitive behavior) is to enable computers to perform such intellectual
           tasks as decision making, problem solving, perception, understanding human communication
             (in any language, and translate among them
          </div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title" id="dion1">
                <i class="dropdown icon"></i>What do you understand by Artificial Intelligence
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord1">>Artificial intelligence is computer science technology that emphasizes creating intelligent machine that can mimic human behavior. Here Intelligent machines can be defined as the machine that can behave like a human, think like a human, and also capable of decision making. It is made up of two words, "Artificial" and "Intelligence," which means the "man-made thinking ability.</p>
              </div>

              <div class="title" id="dion2">
                <i class="dropdown icon"></i>What are the types of Machine Learning?
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord2">Supervised Learning: Supervised learning is a type of Machine learning in which the machine needs external supervision to learn from data. The supervised learning models are trained using the labeled dataset. Regression and Classification are the two main problems that can be solved with Supervised Machine Learning. <br/> <br>

Unsupervised Learning: It is a type of machine learning in which the machine does not need any external supervision to learn from the data, hence called unsupervised learning. The unsupervised models can be trained using the unlabelled dataset. These are used to solve the Association and Clustering problems. <br> <br>

Reinforcement Learning: In Reinforcement learning, an agent interacts with its environment by producing actions, and learn with the help of feedback. The feedback is given to the agent in the form of rewards, such as for each good action, he gets a positive reward, and for each bad action, he gets a negative reward. There is no supervision provided to the agent. Q-Learning algorithm is used in reinforcement learning.</p>
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