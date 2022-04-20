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
  <title>Microprocessors and Microcontrollers</title>
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
    Microprocessors and Microcontrollers
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
      Microprocessors and Microcontrollers are different ways of organizing and optimizing a computing system based on a CPU. While a microcontroller puts the CPU and all peripherals onto the same chip, a microprocessor houses a more powerful CPU on a single chip that connects to external peripherals. <br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="./mpv1.php">Introduction to Microprocessors</a>
          <a class="item" href="./mpv2.php">8086 Microprocessor Architecture</a>
          <a class="item" href="./mpv3.php">8085 Microprocessor Architecture </a>
          <a class="item" href="./mpv4.php">Interrupt Instructions of 8086 </a>
          <a class="item" href="./mpv5.php">Programmable Peripheral Interface 8255 (I/O interface) </a>
          <a class="item" href="./mpv6.php">8051 Microcontroller Architecture </a>
          <a class="item" href="./mpv7.php">8051 | Instruction Set | Data Transfer group  </a>
          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. To understand the key characteristics of a microprocessor programming model.</p>
                                          <p>2. To analyze the effective address of an operand based on the addressing mode used, the operation of the stack and identify the instructions that manipulate it.</p>
                                          <p>3. To understand the architecture of 8051 microcontroller.</p>
                                          <p>4. To analyze instructions formats and programs using 8051.</p>
      <br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is Microprocessor?
          </div>
          <div class="content">
            <p class="transition hidden">A microprocessor is a central processing unit or the brain of a computer inside a single Integrated circuit (IC). It is made up of millions of semiconductor transistors, diodes & resistors and it is responsible for any arithmetic or logical operation. It is a digital device capable of processing any binary data given to it.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>Evolution of Microprocessor </div>
          <div class="content">
            <p class="transition hidden"><b>1.First Generation 4-bit Microprocessor </b><br>
                                            This is the first microprocessor invented by Intel in 1971. They named it Intel 4004 because it was a 4-bit microprocessor</p>
                                      <p><b>2.Second Generation 8-bit Microprocessor</b><br>
                                            The Second generation processor was an 8-bit microprocessor developed by Intel in the year 1973. It was named Intel 8008 because it was 8 bit. </p>
                                      <p><b>3.Third Generation 16-bit Microprocessor</b><br>
                                            The third generation microprocessors were 16-bit microprocessors introduced in 1978 by Intel. 80286 is a 3rd generation microprocessor.</p>
                                      <p><b>4.Fourth Generation 32-bit Microprocessor</b></br>
                                            The Fourth generation microprocessors were introduced in 1985 and they were 32 bit. 80386 or also known as i386 or just 386 is the most renowned 4th generation microprocessor.</p>
                                      <p><b>5.Fifth Generation 64-bit Microprocessor</b><br>
                                            The fifth-generation microprocessor or 64-bit microprocessors were introduced in 1995 and they are being used till now. The Intel Pentium processors were based on 64-bit architecture. The recent 64-bit microprocessor use super scaling to offer high speed and high performance such as Intel dual, quad, octa-core microprocessors.</p>
                                      
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are the different types of Microprocessors?</div>
          <div class="content">
            <p class="transition hidden">There are different types of microprocessors designed to be used for specific purposes. It has been evolved to be used in various different applications. They are mainly classified into three major types;<br><br>
                                        <b>1.CISC Microprocessor</b>
            </p>
            <p>                         <b>2.RISC Microprocessor</b>
            </p>
            <p>                         <b>3.Special Purpose Microprocessor</b> 
            </p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is flag in microprocessor? </div>
          <div class="content">
            <p class="transition hidden">The Flag register is a Special Purpose Register which shows the status of the task. This is an 8-bit register but the only 5-bit is used for the operation. The flag becomes set or reset after arithmetic and logical operation</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is interrupt in microprocessor? </div>
          <div class="content">
            <p class="transition hidden">The interrupt in the microprocessor is a signal which is generated by external peripherals. The external peripherals (device) send the request to the microprocessor to execute their performance and stop the current task.</p>
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