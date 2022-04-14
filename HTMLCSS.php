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
  <title>html an css</title>
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
    Item
  </a> -->
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    <!-- To Find the Roots of Quadratic Equation -->
    html and css
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
      <a href="https://www.w3schools.com/quiztest/quiztest.asp?qtest=HTML" target="_blank" class="item" id="faq">
        Quiz
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      learn about structure of web page
      </div>
      <div id="pre" style="display: none;">
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/QMnv3QrjZoU" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
          <div class="item">
            In this program, you'll learn to find all roots of a quadratic equation and print them using format() in Java.
            <br><br>
          </div>
          <br>
          The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.
          
          Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
          
          HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as img and inpu directly introduce content into the page. Other tags such as <p> surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page
            
            
            <br>
            <br>
          </div>
          
           
            <div id="lis" style="display: none;">
              <div class="ui form">
                <div id="compilerData">
                  Write a program in C to simulate the working of a stack of integers using an array. Provide the following operations:<br>
                  a. Insert<br> b. Delete<br> c. Display.<br><br>
                  <strong>Input Format:</strong><br>
                  Every line consists of one argument, a character. If the character is 'a', the next argument is an integer.<br>
                  The Character denotes the operation. 'a' is to Insert, 'b' is to Delete, and 'c' is to Display.<br>
                  The Integer denotes the value to Insert into the stack.<br>
                  Note: The program ends only when a character which is not any of the above options is entered.<br><br>
                  <strong>Output Format:</strong><br>
                  Prints one/multiple array of integers, denoting the composition of the stack.<br> 
                </div><br>
                
                <form action="compile.php" id="form" name="f2" method="POST" ><br>
                <label class="writeCode">Write Your Code</label><br><br>
                <div class="ui large segment" style="height:500px;">
                  <div id="editor">
                    import java.util.*;
                    class Main{
                      public static void main(String []args)
                      {
                        //code
                        
                      }
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
                  <input type="hidden" name="lang" value="java" >
                  <input type="hidden" name="prog" value="1java" >
                  <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
                  <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>
                  
                </form>
                
                
                <script type="text/javascript">
          $(document).ready(function(){
            $("#st").click(function(){
              $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
              document.f2.extra.value = "runn";
            });
          });
          </script>
          <script type="text/javascript">
          $(document).ready(function(){
            $("#subb").click(function(){
                  $("#outputBox").html("<div class=\"writeCode\">Loading ......</div>");
                  document.f2.extra.value = "subb";
            });
          }); 
          </script>

          <script type="text/javascript">
            $(document).ready(function(){
              //listen for form submission
              $('form').on('submit', function(e){
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
      
      <div id="faqs" style="display:relative">
        <form name="Quiz1">
          <p>1. Yes?<br>
            <label><input type="radio" name="q1" value="Ok">Ok</label><br>
            <label><input type="radio" name="q1" value="Sure">Sure</label><br>
            <label><input type="radio" name="q1" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q1" value="Aythu">Aythu</label><br>
          </p><br>
          <p>2. Yes?<br>
            <label><input type="radio" name="q2" value="Ok">Ok</label><br>
            <label><input type="radio" name="q2" value="Sure">Sure</label><br>
            <label><input type="radio" name="q2" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q2" value="Aythu">Aythu</label><br>
          </p><br>
          <p>3. Yes?<br>
            <label><input type="radio" name="q3" value="Ok">Ok</label><br>
            <label><input type="radio" name="q3" value="Sure">Sure</label><br>
            <label><input type="radio" name="q3" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q3" value="Aythu">Aythu</label><br>
          </p><br>
          <p>4. Yes?<br>
            <label><input type="radio" name="q4" value="Ok">Ok</label><br>
            <label><input type="radio" name="q4" value="Sure">Sure</label><br>
            <label><input type="radio" name="q4" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q4" value="Aythu">Aythu</label><br>
          </p><br>
          <p>5. Yes?<br>
            <label><input type="radio" name="q5" value="Ok">Ok</label><br>
            <label><input type="radio" name="q5" value="Sure">Sure</label><br>
            <label><input type="radio" name="q5" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q5" value="Aythu">Aythu</label><br>
          </p><br>
          <p>6. Yes?<br>
            <label><input type="radio" name="q6" value="Ok">Ok</label><br>
            <label><input type="radio" name="q6" value="Sure">Sure</label><br>
            <label><input type="radio" name="q6" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q6" value="Aythu">Aythu</label><br>
          </p><br>
          <p>7. Yes?<br>
            <label><input type="radio" name="q7" value="Ok">Ok</label><br>
            <label><input type="radio" name="q7" value="Sure">Sure</label><br>
            <label><input type="radio" name="q7" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q7" value="Aythu">Aythu</label><br>
          </p><br>
          <p>8. Yes?<br>
            <label><input type="radio" name="q8" value="Ok">Ok</label><br>
            <label><input type="radio" name="q8" value="Sure">Sure</label><br>
            <label><input type="radio" name="q8" value="Kewl">Kewl</label><br>
            <label><input type="radio" name="q8" value="Aythu">Aythu</label><br>
          </p><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit">
        </form>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  
</body>
</html>