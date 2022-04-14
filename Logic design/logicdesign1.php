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
  <script src="../js/questions.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>DS-Lab</title>
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
  <a class="item" href="logicdesign1.php">
    Logic Design
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
      LOGIC DESIGN
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="list">
      Important Concepts
      </a>
      <a class="item" id="prereq">
      Objective
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui clearing segment">
      
      <div id="int">
      Logic design, Basic organization of the circuitry of a digital computer. All digital computers are based on a two-valued logic system—1/0, on/off, yes/no (see binary code). Computers perform calculations using components called logic gates, which are made up of integrated circuits that receive an input signal, process it, and change it into an output signal. The components of the gates pass or block a clock pulse as it travels through them, and the output bits of the gates control other gates or output the result. There are three basic kinds of logic gates, called “and,” “or,” and “not.” By connecting logic gates together, a device can be constructed that can perform basic arithmetic function
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Basics of logic design</span>
        <div class="menu">
          <a class="item" href="Bool.php">Boolean Algebra and</a>
          <a class="item" href="infixtopostfix.php">K-Maps</a>
          <a class="item" href="ratmaze.php">Quine McClusky Method</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Data Processing Circuits</span>
        <div class="menu">
          <a class="item" href="muxnDemux.php">Multiplexer and Demultiplexer</a>
          <a class="item" href="graycd.php">Gray Code Implementation</a>
          <a class="item" href="encoders.php">Encoders and Decoders</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Arithmetic Circuits</span>
        <div class="menu">
          <a class="item" href="fhAdd.php">Full and Half Adder</a>
          <a class="item" href="fhSub.php">Full and Half Subtractor</a>
          <a class="item" href="flipf.php">Flipflops</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Registers and Counters</span>
        <div class="menu">
          <a class="item" href="shift.php">Shift Registers</a>
          <a class="item" href="counters.php">Counters</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Applications Of Logic Design</span>
        <div class="menu">
          <a class="item" href="appln.php">Asychronous Sequential Circuits</a>
          </div>
      </div><br>
      </div>
      </div>

      <div id="pre" style="display: none;"><p>The fundamental logic gates As you study logic circuits, you will see a variety of symbols (variables) used to represent the inputs and outputs. The purpose of these symbols is to let you know what inputs are required for the desired output. A logic function produces the correct output based on the given inputs.
    </p></div>

    
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is a LogicDesign?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">Logic design, Basic organization of the circuitry of a digital computer. ... Computers perform calculations using components called logic gates, which are made up of integrated circuits that receive an input signal, process it, and change it into an output signal.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is the importance of logic design?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">Logic gates are commonly referred to as the fundamental building blocks of digital circuits. Understanding the relationships between the various logic gates allows electronic engineers to design the highly complex systems that enable modern technologies.
            <br><br>
          
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
