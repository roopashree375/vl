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
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Network Topology</title>
  
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
  <a class="item" href="../.php">
  Computer Networks
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
    Network Topology
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
           <a class="item" id="faq">
        Quiz
      </a> 
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int"><u> OSI Model</u><br>
      OSI stands for Open Systems Interconnection. It has been developed by ISO ??? ???International Organization for Standardization???, in the year 1984. It is a 7 layer architecture with each layer having specific functionality to perform. All these 7 layers work collaboratively to transmit the data from one person to another across the globe.  <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/watch?v=qBXmbJZQ5rY&t=1s" frameborder="0">
</iframe>
<br><br>
</div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          Functions of the OSI Layers<br><br>
There are the seven OSI layers. Each layer has different functions. A list of seven layers are given below:<br>

Physical Layer<br>
Data-Link Layer<br>
Network Layer<br>
Transport Layer<br>
Session Layer<br>
Presentation Layer<br>
Application Layer
            
            
            <br>
            <div class="item">
            
</div>
</div>
            
      
      

       
        <!-- <form action="compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode">Write Your Code</label><br><br>
          <div class="ui  large segment"  id="editor" style="height:500px;">
          <textarea class="field codeBlock"  id="editor" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{

}</textarea><br><br>

<div class="ui large segment" style="height:500px;">
<div id="editor">/*Type your code here: */
#include&lt;stdio.h&gt;
void main()
{

}
</div>
</div>
<div>
<textarea name="editor" style="display: none;" >
</div>
<textarea style="display: none;"></textarea>

<button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

        <input type="hidden" name="extra" value="Content of the extra variable" >
         <input type="hidden" name="lang" value="c" >
         <input type="hidden" name="prog" value="stack" >
          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form> -->

          <script type="text/javascript">
                $(document).ready(function() {
                  $("#st").click(function() {
                    $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                    document.f2.extra.value = "runn";
                  });
                });
              </script>
              <script type="text/javascript">
                $(document).ready(function() {
                  $("#subb").click(function() {
                    $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                    document.f2.extra.value = "subb";
                  });
                });
              </script>

              <script type="text/javascript">
                $(document).ready(function() {
                  //listen for form submission
                  $('form').on('submit', function(e) {
                    //prevent form from submitting and leaving page
                    e.preventDefault();

                    // AJAX 
                    $.ajax({
                      type: "POST", //type of submit
                      cache: false, //important or else you might get wrong data returned to you
                      url: "compile.php", //destination
                      datatype: "html", //expected data format from process.php
                      data: $('form').serialize(), //target your form's data and serialize for a POST
                      success: function(result) { // data is the var which holds the output of your process.php

                        // locate the div with #result and fill it with returned data from process.php
                        $('#outputBox').html(result);
                      }
                    });
                  });
                });
              </script>
              <br>
              <div id="outputBox" style="display:None;">Output:<br><br>
                <div name="output"></div><br>
              </div>
            </div>
          </div>
          <div id="faqs" style="display: none;">
         <a href="quiz/osiquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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
    editor.getSession().on("change", function() {
      textarea.val(editor.getSession().getValue());
    });
  </script>
 
          </div>
          

  
</body>
</html>
