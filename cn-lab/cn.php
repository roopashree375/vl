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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Computer Networks</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
      <a href="titles.php">Virtual Labs</a>
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
  <a class="header item" href="../titles5.php">
                Go Back
</a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
     Computer Networks Laboratory
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
      A computer network is a set of computers connected together for the purpose of sharing resources. The most common resource shared today is connection to the Internet. Other shared resources can include a printer or a file server.<br><br> The Internet itself can be considered a computer network.
      </div>

       <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="lab1.php">LAB 1 ROUTING</a>
          <a class="item" href="lab2.php">LAB 2 SUBNET</a>
          <a class="item" href="lab3.php">LAB 3 NAT PAT</a>
          <a class="item" href="lab4.php">LAB 4 DNS</a>
          <a class="item" href="lab5.php">LAB 5 VLAN</a>
          <a class="item" href="lab6.php">LAB 6 STOP AND WAIT</a>
          <a class="item" href="lab7.php">LAB 7 DVR</a>
          <a class="item" href="lab8.php">LAB 8 CRC</a>
          <a class="item" href="lab9.php">LAB 9 LEAK</a>
          
        </div>
      </div>

      <div id="pre" style="display: none;">To make students get better in Computer Networks.<br></div>

      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is Routers?
          </div>
          <div class="content">
            <p class="transition hidden"> A router is a device which is responsible for sending data from source to destination over the computer network.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is the OSI model? </div>
          <div class="content">
            <p class="transition hidden">OSI model stands for Open System Interconnection. It’s a reference model which describes that how different applications will communicate to each other over the computer network.</p>
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
