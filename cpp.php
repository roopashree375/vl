<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>C-programming</title>
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
  <a class="header item" href="index.php">
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
      C programming
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
      
      <div id="int">
      C is a procedural programming language. It was initially developed by Dennis Ritchie as a 
      system programming language to write operating system. The main features of C language include
       low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.
       <br/><br/>
     <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/8PopR3x-VMY" frameborder="0">
</iframe>
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="createtable.php">Create a table</a>
          <a class="item" href="#">Alter table</a>
          <a class="item" href="#">Insert</a>
          <a class="item" href="#">Use of AND,OR</a>
          <a class="item" href="#">Row Level Functions</a>
          <a class="item" href="#">String Handling functions</a>
        </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better at Database management system (DBMS).</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is a dbms?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is database? 
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
          </div>

          <div class="title" id="dion3">
            <i class="dropdown icon"></i>Why is database used?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
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