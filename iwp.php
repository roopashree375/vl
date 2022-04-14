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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>internet and web programming</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
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
    if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
    else 
    { 
      echo "<a class=\"item\">"; 
      echo $_SESSION['username'];
      echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
    }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Internet and web programming
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
    <div class="ui segment">
      
      <div id="int" align="justify">
      Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. The most common languages used for Web programming are XML, HTML, JavaScript, Perl 5 and PHP. Web programming is different from just programming, which requires interdisciplinary knowledge on the application area, client and server scripting, and database technology.
    </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <!-- <a class="item" href="#">Gross Salary and Net Income calculation</a> -->
          <a class="item" href="HTMLCSS.php">HTML AND CSS</a>
          <!-- <a class="item" href="#">Matrix Multiplication</a> -->
          <!-- Complex Number operations using Constructors -->
          <a class="item" href="javascript12.php">JavaScript</a>
          <!-- Sorting a List with Exception Handling -->
          <a class="item" href="php12.php">PHP AND NODE.JS</a>
          <!-- Interest and Maturity Amount using Interface -->
          <a class="item" href="mongodb12.php">MONGODB AND EXPRESS.JS</a>
          <!-- Finding Surface area and Volume of Solids using Abstract Classes -->
          <!--  <a class="item" href="abstractclass.php">REACT AND  NODE.JS</a>
          <a class="item" href="threads.php">DOM MANUPULACTION</a>
          <a class="item" href="#">XML</a> -->
          <!-- Implementation of Stack from Generic class -->
           <a class="item" href="bootstrap12.php">BOOTSTRAP</a> 
          <!-- <a class="item" href="#">String operations</a>-->
        </div> 
      </div>
      
      <div id="pre" align="justify" style="display: none;"> understanding the basics and  how the websites and web works. </div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i>What is the html?
          </div>
          <div class="content">
            <p class="transition hidden"> 
                <ol type="1">
                <li>HTML stands for Hyper Text Markup Language </li>  
                <li>HTML is the standard markup language for creating Web pages </li>  
                <li>HTML describes the structure of a Web page </li>  
                <li>HTML consists of a series of elements </li>  
                <li>HTML elements tell the browser how to display the content </li>  
                <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc. </li> 
 </ol>
                </p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>what is css</div>
          <div class="content">
            <p class="transition hidden">
            CSS stands for Cascading Style Sheets
CSS describes how HTML elements are to be displayed on screen, paper, or in other media
CSS saves a lot of work. It can control the layout of multiple web pages all at once
External stylesheets are stored in CSS files
              
            </p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is javascript? </div>
          <div class="content">
            <p class="transition hidden">
            <div class="ui bulleted list">
            JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area
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
             });
</script>
</body>
</html>
