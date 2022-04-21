<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: index.php");
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
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Branching and Looping </title>
  
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
  <a class="item" href="cpps.php">
  C Programming For Problem Solving
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
    Branching and Looping
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
     
      <!-- <a class="item" id="faq">
        Quiz
      </a> -->
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      <u> Branching:</u>
      <br>
     
Branching is so called because the program chooses to follow one branch or another.<br><br>
<u>
Looping</u><br>
Loops provide a way to repeat commands and control how many times they are repeated. C provides a number of looping way.<br>

 <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/watch?v=Led5aHdLoT4&list=PLBlnK6fEyqRgZq4a-SMViZr-V8jlvCioJ" frameborder="0">
</iframe>
<br><br>


 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">
          <u>if statement</u><br>
This is the most simple form of the branching statements.<br>

It takes an expression in parenthesis and an statement or block of statements. if the expression is true then the statement or block of statements gets executed otherwise these statements are skipped.
<br>
NOTE: Expression will be assumed to be true if its evaulated values is non-zero.<br><br>
if (expression)<br>
  statement;<br>

or<br>

if (expression)<br>
  {<br>
    Block of statements;<br>
  }<br>
  <br>
or<br>
<br>
if (expression)<br>
  {<br>
    Block of statements;<br>
  }<br>
else<br>
  {<br>
    Block of statements;<br>
  }<br>
  <br>
or<br>
<br>
if (expression)<br>
  {<br>
    Block of statements;<br>
  }<br>
else if(expression)<br>
  {<br>
    Block of statements;<br>
  }<br>
else<br>
  {<br>
    Block of statements;<br>
  }<br>

  <br><u>? : Operator</u><br>
The ? : operator is just like an if ... else statement except that because it is an operator you can use it within expressions.<br>

? : is a ternary operator in that it takes three values, this is the only ternary operator C has.<br>

? : takes the following form:<br>



if condition is true ? then X return value : otherwise Y value;<br>
<br><u>switch statement:</u><br>
The switch statement is much like a nested if .. else statement. Its mostly a matter of preference which you use, switch statement can be slightly more efficient and easier to read.
<br>


switch( expression )<br>
     {<br>
        case constant-expression1:	statements1;<br>
        [case constant-expression2:	statements2;]   <br> 
        [case constant-expression3:	statements3;]<br>
        [default : statements4;]<br>
     }<br>
<u>Using break keyword:</u><br>
If a condition is met in switch case then execution continues on into the next case clause also if it is not explicitly specified that the execution should exit the switch statement. This is achieved by using break keyword.


<br>
<u>What is default condition:</u><br>
If none of the listed conditions is met then default condition executed.



<u>while loop</u><br>
The most basic loop in C is the while loop.A while statement is like a repeating if statement. Like an If statement, if the test condition is true: the statments get executed. The difference is that after the statements have been executed, the test condition is checked again. If it is still true the statements get executed again.This cycle repeats until the test condition evaluates to false.<br>
       <br>
       while ( expression )<br>
{<br>
   Single statement <br>
   or<br>
   Block of statements;<br>
}<br>
<u>for loop</u><br>
for loop is similar to while, it's just written differently. for statements are often used to proccess lists such a range of numbers:
  <br>
Basic syntax of for loop is as follows:<br>

Show Example<br>

for( expression1; expression2; expression3)<br>
{<br>
   Single statement<br>
   or<br>
   Block of statements;<br>
}<br>
<br>
In the above syntax:<br>

expression1 - Initialisese variables.<br>
expression2 - Condtional expression, as long as this condition is true, loop will keep executing.<br>
expression3 - expression3 is the modifier which may be simple increment of a variable.<br>
<br><u>do...while loop</u><br>
do ... while is just like a while loop except that the test condition is checked at the end of the loop rather than the start. This has the effect that the content of the loop are always executed at least once.
<br>
Basic syntax of do...while loop is as follows:<br>
<br>


do<br>
{<br>
   Single statement<br>
   or<br>
   Block of statements;<br>
}while(expression);<br>
break and continue statements<br>
C provides two commands to control how we loop:<br>

break -- exit form loop or switch.<br>
continue -- skip 1 iteration of loop.<br>


#include <br>

main()<br>
{<br>
    int i;<br>
    int j = 10;<br>

    for( i = 0; i <= j; i ++ )<br>
    {<br>
       if( i == 5 )<br>
       {<br>
          continue;<br>
       }<br>
       printf("Hello %d\n", i );<br>
    }<br>
}<br>
This will produce following output:<br>

Hello 0<br>
Hello 1<br>
Hello 2<br>
Hello 3<br>
Hello 4<br>
Hello 6<br>
Hello 7<br>
Hello 8<br>
Hello 9<br>
Hello 10<br>
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
