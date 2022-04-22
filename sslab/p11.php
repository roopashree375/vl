<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: ../index.php");
//     exit;
//   }
// }
?>
<!DOCTYPE html>
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
  <link rel="icon" href="../images/dscelogo.png">
  <title>P11</title>
  
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
  <a class="item" href="sslab.php">
  System software
  </a>
 <a class="item">
    About Us
  </a> 
 <?php
    // if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"../login.php\">Login</a><a class=\"item\" href=\"../register.php\">Register</a>";
    // else 
    // { 
    //   echo "<a class=\"item\">"; 
    //   echo $_SESSION['username'];
    //   echo "</a><a class=\"item\" href=\"../logoutprocess.php\">Logout</a>";
    // }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
   Program 11
    </h2>
    <div class="ui stackable grid">
    <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
       <a class="item" id="prereq">
        Theory
      
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
    a) Write a C/Java program to illustrate the race condition.<br>
    <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://drive.google.com/file/d/1ZwRuL02uai-ndQQdqioRC8GgwqR0S3G0/preview" frameborder="0"></iframe>  
          <br><br>
b) Write a C/Java program which demonstrates interprocess communication between
a reader process and a writer process. Use mkfifo, open, read, write and close APIs
in your program
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://drive.google.com/file/d/1RtoKZrkhzxSA9-jTuP5j-HYZpH8iB5Vm/preview" frameborder="0"></iframe>  
          <br><br>


      </div>
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          
            <br>
            <img id="theoryImage" src="images/10a.png">
            <br>
            <img id="theoryImage" src="images/10b.png">
            <br>
            
          </div>
          <br>
      </div>
      
     
  
</body>
</html>
