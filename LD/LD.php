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
  
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Logic Design</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
  <a href="../titles3.php">Virtual Labs</a>
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
  <a class="header item" href="../titles3.php">
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
    Logic Design
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
      
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      logic design, basic organization of the circuitry of a digital computer. All digital computers are based on a two-valued logic system—1/0, on/off, yes/no<br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="./LDv1.php">Positive and Negetive Logic</a>
          <a class="item" href="./LDv2.php">Karnaugh Map (K' Map)</a>
          <a class="item" href="./LDv3.php">Quine-McCluskey Minimization Technique (Tabular Method)</a>
          <a class="item" href="./LDv4.php">Multiplexer || Demultiplexer || MUX Basics</a>
          <a class="item" href="./LDv5.php">Basic Flip-Flop Circuit Using NOR Gates</a>
          <a class="item" href="./LDv6.php">Introduction to Registers</a>
          <a class="item" href="./LDv7.php">Application of Logic Gates</a>
          
          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. To optimize simple logic using Karnaugh maps, understand "don't care".</p>
<p>2. design combinational logics using basic and universal gates</p> 
<p>3. Familiar with basic sequential logic components and their usage and able to analyze sequential logic circuits.</p>
<p>4.Design various counters by analyzing the concept of sequential logic components.</p> <br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is logic design?
          </div>
          <div class="content">
            <p class="transition hidden">logic design, basic organization of the circuitry of a digital computer. All digital computers are based on a two-valued logic system—1/0, on/off, yes/no </p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is K-map explain?</div>
          <div class="content">
            <p class="transition hidden">A Karnaugh map (K-map) is a pictorial method used to minimize Boolean expressions without having to use Boolean algebra theorems and equation manipulations. A K-map can be thought of as a special version of a truth table . Using a K-map, expressions with two to four variables are easily minimized.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is Multiplexer in logic design? </div>
          <div class="content">
            <p class="transition hidden"> <p>The Multiplexer, shortened to “MUX” or “MPX”, is a combinational logic circuit designed to switch one of several input lines through to a single common output line by the application of a control signal.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is a flip-flop explain?</div>
          <div class="content">
            <p class="transition hidden">A flip-flop is a device which stores a single bit (binary digit) of data; one of its two states represents a "one" and the other represents a "zero". Such data storage can be used for storage of state, and such a circuit is described as sequential logic in electronics.</p>
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