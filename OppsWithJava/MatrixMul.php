<?php
 if(session_status()==PHP_SESSION_NONE)
 {
   session_start();
   if(!isset($_SESSION['username']))
   {
     header("Location: ../index.php");
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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/questions.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images/dscelogo.png">
  <title>Matrix Multiplication</title>
  
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
      <a href="titles.php">Virtual Labs</a> 
  <br><p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
</h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="../index.php">
    Home
  </a>
  <a class="item" href="OopsWithJava.php">
  Oops With Java
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
    Calculate multiplication of 2 matrix
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Theory
      </a>
      <!-- <a class="item" target="_blank" id="list">
        Compiler
      </a> -->
      <a class="item" id="faq">
        Quiz
      </a> 
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      Write a Java program to multiply two given matrices
      <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/7kZDlUTct9k"  frameborder="0"></iframe>
      <br><br>
In this program, you'll learn to use constructor overloading

      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          We can multiply two matrices in java using binary * operator and executing another loop.<br><br> A matrix is also known as array of arrays. We can add, subtract and multiply matrices.
          <br><br>In case of matrix multiplication, one row element of first matrix is multiplied by all columns of second matrix.<br><br>
            
            <div class="GrayBlock">
              <br>
              <img id="theoryImage" src="../images/matrix.png">
              <br>
            </div></div>
            
            <!-- <div class="item">
              Stacks are implemented using arrays or Linked Lists. Stacks are Easy to implement and Memory is saved as pointers are not involved. But, it is not dynamic. It doesn’t grow and shrink depending on needs at runtime.
            </div> -->
          </div>
          <br>
      </div>
      
      <div id="lis" style="display: none; ">
      <div class="ui form">
        <div id="compilerData">
         <b>Compile your java program here<b>
        <!-- </div><br>
          <form action="../compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode">Write Your Code</label><br><br>     
          <textarea name="code" rows=15 cols=80 onkeydown=insertTab(this,event) class="field codeBlock" id="editor code"rows="10" cols="50">
class Simple
{  
  public static void main(String args[])
  {  
    System.out.println("Hello Java");  
  }  
}  
</textarea><br><br></div>

<button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

        <input type="hidden" name="extra" value="Content of the extra variable" >
         <input type="hidden" name="lang" value="java" >
         <input type="hidden" name="prog" >
          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form><br>
          <div id="outputBox" style="display:None;">Output:<br><br>
          <div name="output"></div><br>-->
          </div>
          </div>

      </div>
      
      <div id="faqs" style="display: none;">
      <a href="quiz/MatrixMulquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/c_cpp");
    var textarea = $('textarea[name="editor"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
});
</script>
  
</body>
</html>
