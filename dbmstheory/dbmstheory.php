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
  <script src="js/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Database Managment System Theory</title>
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
     Database Managment System Theory
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
      Database management systems are software systems used to manage and manipulate data in a database. As most application performance issues originate in the database, knowing how to monitor and optimize your database is essential to your operations. <br> <br>
      
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
     
          <a class="item" href="dbmstv1.php">what is Database?</a>
          <a class="item" href="dbmstv2.php">Entity-Relationship Model?</a>
          <a class="item" href="dbmstv3.php">Relational Model?</a>
          <a class="item" href="dbmstv4.php">Data Defnition and Data types</a>
          <a class="item" href="dbmstv5.php">Sql queries</a>
          <a class="item" href="dbmstv6.php">Database Design</a>
          <a class="item" href="dbmstv7.php">NOSQL</a>
          


          
        </div>
      </div>
      
      <div id="pre" style="display: none;"><p>1. Understand the underlying principles of management.</p>
<p>2. To analyze and identify the functions of entrepreneurial activities and its prerequisites 
under practical conditions.</p> 
<p>3. To develop and enhance one’s decision making skills amidst competitive business 
market</p><br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>Different types of database?
          </div>
          <div class="content">
            <p class="transition hidden">Relational database, NOSQL database,Cloud database,coloumnar database,key-value pair database</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is DBMS and its importance?</div>
          <div class="content">
            <p class="transition hidden">DBMS stands for "database management system" and refers to software that monitors and maintains accurate, quality data in a data structure. Specifically, a DBMS helps organizations optimize, store, retrieve and manage data in a database.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are database used for? </div>
          <div class="content">
            <p class="transition hidden">database, also called electronic database, any collection of data, or information, that is specially organized for rapid search and retrieval by a computer. Databases are structured to facilitate the storage, retrieval, modification, and deletion of data in conjunction with various data-processing operations. <br>

            </p>
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