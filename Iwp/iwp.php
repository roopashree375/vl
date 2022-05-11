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
  <title>INTERNET & WEB PROGRAMMING</title>
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
    Internet & Web Programming
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
      The Internet is a huge collection of computers connected in a communications network. Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. <br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="./iwpv1.php">What is the Internet?</a>
          <a class="item" href="./iwpv2.php">What is World Wide Web?</a>
          <a class="item" href="./iwpv3.php">History of the Internet</a>
          <a class="item" href="./iwpv4.php">What is JavaScript and where can we use it</a>
          <a class="item" href="./iwpv5.php">What is XML?</a>
          <a class="item" href="./iwpv6.php">Introduction to PHP</a>
          

          

          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. Identify the elements and attributes of creating a webpage.</p>
<p>2. Create web pages using XHTML and Cascading Styles sheets.</p> 
<p>3. Create XML documents using CSS style sheets.</p>
<p>4. Understand the client and server side programming.</p> <br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is the Internet?
          </div>
          <div class="content">
            <p class="transition hidden">The Internet is a vast network that connects computers all over the world. Through the Internet, people can share information and communicate from anywhere with an Internet connection.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is a WWW explain?</div>
          <div class="content">
            <p class="transition hidden">The World Wide Web—commonly referred to as WWW, W3, or the Web—is an interconnected system of public webpages accessible through the Internet. The Web is not the same as the Internet: the Web is one of many applications built on top of the Internet.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is JavaScript and why it is used? </div>
          <div class="content">
            <p class="transition hidden"> <p>Javascript is used by programmers across the world to create dynamic and interactive web content like applications and browsers. JavaScript is so popular that it's the most used programming language in the world, used as a client-side programming language by 97.0% of all websites.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is PHP and why it is used?</div>
          <div class="content">
            <p class="transition hidden">PHP(short for Hypertext PreProcessor) is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications. It was developed in 1994 by Rasmus Lerdorf.</p>
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