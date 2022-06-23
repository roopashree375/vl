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
  <title>QuadraticRoots</title>

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
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item" href="cpl.php">
        C programming laboratory
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
      Computing roots of quadratic equation
    </h2>
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui secondary vertical pointing menu" id="Menus">
          <a class="active item" id="intro">
            ProblemStatement
          </a>
          <a class="item" id="prereq">
            Theory
          </a>
          <a class="item" target="_blank" id="list">
            Compiler
          </a>
          <a class="item" id="faq">
            Quiz
          </a>
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int">
            Design and develop a C program that accepts three coefficients (a, b, and c) of a
            Quadratic equation (ax2+bx+c=0) as input and compute all possible roots and print the
            possible roots for a given set of coefficients. Also print the message in case of Zero valued
            coefficient/s.
            <br><br>
          </div>

          <div id="pre" style="display: none;">
          <strong>Vedio to understand</strong>
            <br>
            <br>
            <iframe src="https://drive.google.com/file/d/1ueSjxqWljbd0iiRUzRZsRY9B1-BXvg-C/preview" width="640" height="480" allow="autoplay"></iframe>
            <br>
            <div class="ui bulleted list">
              <div class="item">
                <strong>Mathematical Approach</strong>
                <br>
                <pre>
             I. Quadratic equation ax2 + bx + c = 0,
                 where a, b, and c are coefficients.
             II. The roots are :
             III. if discriminant value is,
                  equal to 0, the roots are real and equal
                  greater than 0, the roots are real and distinct
                  less than 0, the roots are complex.
             </pre>
              </div>
              <div class="item">
                <strong>Algorithm
                  <br>
                  <br>
                  Input: Co-efficient a, b, c
                  <br>
                  Output: Root1 and Root2
                </strong>
                <pre>
              Step 1: Start
              Step 2: Read the coefficients a, b and c.
              Step 3: Find d= (b*b) - (4*a*c)
              Step 4: if (d=0)
                      PRINT Roots are real and equal.
                      Else got to Step6
              Step 5: find r1= -b/(2*a)
                      r2=r1 
                      PRINT r1,r2
              Step 6: if (d>0)
                      PRINT Roots are real and distinct.
                      Else go to Step 8
                      Step 7: find r1= ((-b) + sqrt(d))/(2*a)
                      r2= ((-b) -sqrt(d))/(2*a)
              </pre>
              </div>
              <div class="item">
                <img height="50%" width="70%" src="images/p1.jpg" frameborder="0">
                </img>
              </div>
            </div>
            <br>
          </div>

          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
                Program 1: Design and develop a C program that accepts three coefficients (a, b, and c) of a
                Quadratic equation (ax2+bx+c=0) as input and compute all possible roots and print the
                possible roots for a given set of coefficients. Also print the message in case of Zero valued
                coefficient/s.<br>
                <div class="ui segment">
                  <div class="ui two column very relaxed grid">
                    <div class="column">
                      <strong>Sample Input</strong><br>
                      1<br>2<br>1
                    </div>
                    <div class="column">
                      <strong>Sample Output</strong><br>
                      The roots are real and equal <br>Root1=-1.0000 <br>Root2=-1.0000 <br>
                    </div>
                  </div>
                  <div class="ui vertical divider">and</div>
                </div>
              </div><br>
              <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
              <a href="https://www.youtube.com/embed/Zpn5gaTvnHA" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>

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
                <a href="quiz/quadraticquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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

</body>

</html>