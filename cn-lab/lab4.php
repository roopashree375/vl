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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>LAB 4 DNS</title>
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
      <a class="item" href="cn.php">
        Computer Networks Laboratory
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
    LAB 4 DNS
    </h2>
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui secondary vertical pointing menu" id="Menus">
          <a class="active item" id="intro">
          Video 1
          </a>
          <a class="item" id="prereq">
          Video 2 & 3
          </a>
          <a class="item" id="list">
          Video 4 & 5
          </a>


          <a class="item" id="faq">
            Quiz
      </a> 
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/FmR3YFyOkXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
          </div>
          <div id="pre" style="display: none;">
            <iframe src="https://drive.google.com/file/d/11FILu9rysI6gsxNB3drKGnafVCA0xceH/preview" width="640" height="480" allow="autoplay"></iframe>
              <br><br>
              <iframe src="https://drive.google.com/file/d/1rdhHQbCQqkCJpu8sixOiq1WCMkVHysyy/preview" width="640" height="480" allow="autoplay"></iframe>
          </div>
          <div id="lis" style="display: none;">
            <iframe src="https://drive.google.com/file/d/1gXAknqd2cO3dKS-UD90JxrhuWd4h4n0-/preview" width="640" height="480" allow="autoplay"></iframe>
              <br><br>
              <iframe src="https://drive.google.com/file/d/1WCve74mKSL9wZBPxYTWm2Vk7q3mt-B79/preview" width="640" height="480" allow="autoplay"></iframe>
          </div>

          <div id="faqs" style="display: none;">
         <a href="quiz/lab4quiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
          </div>




        </div>
      </div>

    </div>
  </div>
  </div>
  </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
  <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/c_cpp");
    var textarea = $('textarea[name="editor"]');
    editor.getSession().on("change", function() {
      textarea.val(editor.getSession().getValue());
    });
  </script>

</html>