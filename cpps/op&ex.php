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
  <title>Operators and Expression</title>
  
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
    Operators and Expression
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
      <u>C Operators</u><br>
Operators are the symbols which tell the computer to execute certain mathematical or logical operations. A mathematical or logical expression is generally formed with the help of an operator. C programming offers a number of operators which are classified into 8 categories viz.
<br>
Arithmetic operators<br>
Relational operators<br>
Logical operators<br>
Assignment operators<br>
Increment and Decrement operators<br>
Conditional operators<br>
Bitwise operators<br>
Special operators
        <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/3-7hEhXd1So" frameborder="0">
</iframe>
<br><br>
        </div>
        
        
        <div id="pre" style="display: none;">
        
          <div class="item">
<u>Arithmetic Operators</u><br>
C programming language provides all basic arithmetic operators: +, -, *, / and %. <br>
Note: ‘/’ is integer division which only gives integer part as result after division. ‘%’ is modulo division which gives the remainder of integer division as result.<br>
Some examples of arithmetic operators are:<br>

a + b<br>
a – b<br>
a * b<br>
a  / b<br>
a % b<br>
In these examples, a and b are variables and are called operands.<br>

Note: ‘%’ cannot be used on floating data type.

      <br>
      <br>
      
      
          <u>Relational Operators</u><br>
Relational operators are used when we have to make comparisons. C programming offers 6 relational operators.

 <br>
 
 Relational expression is an expression which contains the relational operator. Relational operators are most commonly used in decision statements like if, while, etc. Some simple relational expressions are:
<br>
1 < 5<br>
9 != 8<br>
2 > 1+3<br>
Note: Arithmetic operators have higher priority than relational operators meaning that if arithmetic expressions are present on two sides of a relational operator then arithmetic expressions will be calculated first and then the result will be compared.<br>
            <br>
            <br>
 
         <u> Logical Operators</u><br>
Logical operators are used when more than one conditions are to be tested and based on that result, decisions have to be made. C programming offers three logical operators. They are:

 <br>
 
 a < 18 || a> 60<br>
An expression which combines two or more relational expressions is known as logical expression.<br>

Note: Relative precedence of relational and logical operators are as follows<br>

<table>
  <tr><td>Highest precedence</td> <td>	!</td></tr>
<tr><td></td><td> > >= < <=</td></tr>
<tr><td></td><td> == !=</td></tr>
<tr><td></td><td> && </td></tr>

<tr><td>Lowest precedence </td> <td>	||</td></tr>
 </table>
            <br>
            <br>
           <u> Assignment Operators </u><br>
Assignment operators are used to assign result of an expression to a variable. ‘=’ is the assignment operator in C. Furthermore, C also allows the use of shorthand assignment operators. Shorthand operators take the form:
  <br>
var op = exp;<br>
where var is a variable, op is arithmetic operator, exp is an expression. In this case, ‘op=’ is known as shorthand assignment operator.
<br>
The above assignment<br>

var op = exp;<br>
is the same as the assignment<br>

var = var op exp;<br>
Consider an example:<br>

x += y;<br>
Here, the above statement means the same as<br>

x = x + y;<br>
Note: Shorthand assignment can be used with all arithmetic operators.<br>
<br>
<u>Increment and Decrement Operators</u><br>
C programming allows the use of ++ and – operators which are increment and decrement operators respectively. Both the increment and decrement operators are unary operators. The increment operator ++ adds 1 to the operand and the decrement operator – subtracts 1 from the operand. The general syntax of these operators are:
<br>
Increment Operator: m++ or ++m;<br>

Decrement Operator: m–or –m;<br>

In the example above, m++ simply means m=m+1; and m– simply means m=m-1;<br>

Increment and decrement operators are mostly used in for and while loops.<br>
++m and m++ performs the same operation when they form statements independently but they function differently when they are used in right hand side of an expression.
<br>
++m is known as prefix operator and m++ is known as postfix operator. A prefix operator firstly adds 1 to the operand and then the result is assigned to the variable on the left whereas a postfix operator firstly assigns value to the variable on the left and then increases the operand by 1. Same is in the case of decrement operator.
<br>
For example,<br>

X=10;<br>
Y=++X;<br>

In this case, the value of X and Y will be 6.<br>

And,<br>

X=10;<br>
Y=X++;<br>
In this case, the value of Y will be 10 and the value of X will be 11.<br>
<br>
<u>Conditional Operator</u><br>
The operator pair “?” and “:” is known as conditional operator. These pair of operators are ternary operators. The general syntax of conditional operator is:
<br>
expression1 ? expression2 : expression3 ;<br>
This syntax can be understood as a substitute of if else statement.<br>

For example,<br>

a = 3 ;<br>
b = 5 ;<br>
Consider an if else statement as:<br>

if  (a > b)<br>
x = a ;<br>
else<br>
x = b ;<br>
Now, this if else statement can be written by using conditional operator as:<br>

x = (a > b) ? a : b ;<br><br>

          </div>
          <br>
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
