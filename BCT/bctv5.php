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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/jquery-3.4.1.min.js"></script>../
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>What is Smart Contracts</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
    <br>
    <p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="index.php">
        Home
      </a>
      <a class="item" href="bct.php">
        Blockchain Technologies
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
      What is Smart Contracts
    </h2>
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui secondary vertical pointing menu" id="Menus">
          <a class="active item" id="intro">
            Video
          </a>



          <!-- <a class="item" id="faq">
        Quiz
      </a> -->
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int">
            <iframe src="https://www.youtube.com/embed/_J6G5g-nKg0" width="640" height="480" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>








        </div>
      </div>

    </div>
  </div>
  </div>
  </div>

</body>

</html>