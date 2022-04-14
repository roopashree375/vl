<!DOCTYPE html>
<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
  // if(!isset($_SESSION['username']))
  // {
  //   header("Location: index.php");
  //   exit;
  // }
// }
?>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Virtual Lab</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <link rel="stylesheet" href="css\home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Virtual-Labs</title>
</head>
<body>

<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="titles.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
   
   <a class="header item" href="titles3.php">
    3rd semester
  </a>
</div>
</div>
<div id="toTop"><i class="chevron up icon"></i></div>
<div class="ui container" id="CardGrid">
  <div class="ui stackable grid">
    <div class="four wide column">
      <div class="ui raised card" id="car1">
       <div class="content" id="Card1">
      <div class="header">
            <a href="datastructures.php">
             Data Structures Laboratory
            </a></div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains 6 Programs with Applications On Data Structures in C Programming Language
           </span>
           <br><br>
           <a class="ui button" href="datastructures.php" >Go</a>
         </div>
      </div> 
    </div>
      
    <div class="four wide column">
        <div class="ui raised card" id="car2">
       <div class="content" id="Card2">
      <div class="header">
         <a href="OppsWithJava\OopsWithJava.php">
             OOPS With Java
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains concepts On Object Oriented Programming in Java
           </span>
           <br><br>
           <a class="ui button" href="OppsWithJava\OopsWithJava.php" >Go</a>
         </div>
    </div>
  </div>

    <div class="four wide column">
        <div class="ui raised card" id="car3">
       <div class="content" id="Card3">
      <div class="header">
         <a href="CO\co.php" >
             Computer Organisation
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Computer Organisation (CO)
           </span>
           <br><br>
           <a class="ui button" href="CO\co.php" >Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car4">
       <div class="content" id="Card4">
      <div class="header">
         <a href="Logic design\logicdesign1.php" >
             Logic Design
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Logic Design (LD)
           </span>
           <br><br>
           <a class="ui button" href="Logic design\logicdesign1.php" >Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car2">
       <div class="content" id="Card2">
      <div class="header">
         <a href="Daa\daa.php">
         Data Analysis And Algorithm
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
           Contains 7 Programs with Applications On Data Analysis and algorithm in C Programming Language
           </span>
           <br><br>
           <a class="ui button" href="Daa\daa.php" >Go</a>
         </div>
    </div>
  </div>
      
  </div>
    </div>
  </div>
  </div>
</body>
</html>