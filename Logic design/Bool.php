<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    //  if(!isset($_SESSION['username']))
    //   {
    //     header("Location: index.php");
    //     exit;
    //   } 
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
  <link rel="icon" href="..\images\dscelogo.png">
    <title>Boolean Algebra and Laws</title>

</head>

<body>
    <h1 class="ui header" style="text-align:center" id="head">
        <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
        <a href="titles.php">Virtual Labs</a>
    </h1>
    <div id="toTop"><i class="chevron up icon"></i></div>
    <div>
        <div class="ui  light grey inverted secondary huge menu">
            <a class="header item" href="index.php">
                Home
            </a>
            <a class="item" href="logicdesign.php">
                Logic Design
            </a>
            <a class="item">
                About Us
            </a>
        </div>
    </div>
    <div class="ui container" id="cont">
        <h2 class="ui header" style="font-size:35px; margin-left:10px;">
            Boolean Algebra and Laws
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

                    <div id="int">
                        <p>
                        <h3>Boolean Algebra</h3>It is used to analyze and simplify the digital (logic) circuits. It uses only the
                        binary numbers i.e. 0 and 1. It is also called as Binary Algebra or logical Algebra. Boolean
                        algebra was invented by George Boole in 1854.</p>
                        Rule in Boolean Algebra
                        Following are the important rules used in Boolean algebra.
                        <ul type="circle">
                            <li>Variable used can have only two values. Binary 1 for HIGH and Binary 0 for LOW.</li>
                            <li>Complement of a variable is represented by an overbar (-). Thus, complement of variable
                                B is represented as . Thus if B = 0 then = 1 and B = 1 then = 0.</li>
                            <li>ORing of the variables is represented by a plus (+) sign between them. For example
                                ORing of A, B, C is represented as A + B + C.</li>
                            <li>Logical ANDing of the two or more variable is represented by writing a dot between
                                them such as A.B.C. Sometime the dot may be omitted like ABC.</li>
                        </ul>
                        <br><br>
                        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/EPJf4owqwdA" frameborder="0">
                        </iframe>
                        <br><br>
                        <h4>Boolean Laws</h4>
                        <ul type="circle">
                            There are six types of Boolean Laws.
                            <li>Commutative law</li>
                            <li>Associative law</li>
                            <li>Distributive law</li>
                            <li>AND law</li>
                            <li>OR law</li>
                            <li>INVERSION law</li>
                        </ul>
                    </div>

                    <div id="pre" style="display: none;">
                        <div class="ui bulleted list">
                            <div class="item">
                                <li> De Morgan has suggested two theorems which are extremely useful in Boolean Algebra.</li>
                                <br><br>

                                <div class="GrayBlock">
                                    <div class="item"><strong>Theorem 1:</strong>
                                        <p>The left hand side (LHS) of this theorem represents a NAND gate with inputs A and B,whereas the right hand side (RHS) of the theorem represents an OR gate with inverted inputs. This OR gate is called as Bubbled OR.</p>
                                        A.B = A+B
                                    </div>
                                    <div class="item"><strong>Theorem 2:</strong>
                                        <p> The LHS of this theorem represents a NOR gate with inputs A and B, whereas the RHS
                                            represents an AND gate with inverted inputs.This AND gate is called as Bubbled AND.</p>
                                        A+B = A.B
                                    </div>

                                </div>
                            </div>
                            <br>
                            <img id="theoryImage" src="../images/logicg.png">
                            <br>
                            <div class="item">
                                <li>Logic gates regulate the flow of electricity through an electronic circuit by receiving and modifying binary input and output. Logic gates are theoretical or practical circuits that make an electronic logic operation possible.</li>
                            </div>
                        </div>
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
                                Print one/more array of integers, denoting the composition of the stack.<br>
                            </div><br>

                            <div class="ui segment">
                                <div class="ui two column very relaxed grid">
                                    <div class="column">
                                        <strong>Sample Input</strong><br>
                                        a 5<br>a 8<br>c<br>b<br>a 7<br>c<br>q
                                    </div>
                                    <div class="column">
                                        <strong>Sample Output</strong><br>
                                        8 5 <br>7 5 <br>
                                    </div>
                                </div>
                                <div class="ui vertical divider">and</div>
                            </div>
                        </div><br>


                        <form action="compile.php" id="form" name="f2" method="POST"><br>
                            <label class="writeCode">Write Your Code</label><br><br>
                            <!-- <div class="ui  large segment"  id="editor" style="height:500px;"> -->
                            <!-- <textarea class="field codeBlock"  id="editor" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{

}</textarea><br><br> -->

                            <div class="ui large segment" style="height:500px;">
                                <div id="editor">/*Type your code here: */
                                    #include&lt;stdio.h&gt;
                                    void main()
                                    {

                                    }
                                </div>
                            </div>
                            <div>
                                <textarea name="editor" style="display: none;">
</div>
<textarea style="display: none;"></textarea>

                                <button class="ui left floated button" onclick="myFunction()">Custom Input</button>
                                <div id="inputs" style="display:None;">
                                    <br><br>
                                    <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
                                    <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
                                </div>

                                <input type="hidden" name="extra" value="Content of the extra variable">
                                <input type="hidden" name="lang" value="c">
                                <input type="hidden" name="prog" value="stack">
                                <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
                                <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

                        </form><br>
                        <div id="outputBox" style="display:None;">Output:<br><br>
                            <div name="output"></div><br>
                        </div>
                    </div>

                </div>
                <div id="faqs" style="display: none;">
                    <form name="Quiz1">
                        <p>1.Simplification of the Boolean expression (A + B)'(C + D + E)' + (A + B)' yields which of the following results?
                            <br>
                            <label><input type="radio" name="q1" value="1">A'B'




                            </label><br>
                            <label><input type="radio" name="q1" value="0">C + D + E</label><br>
                            <label><input type="radio" name="q1" value="0">C'D'E'</label><br>
                            <label><input type="radio" name="q1" value="0">A'B'C'D'E'</label><br>
                        </p><br>
                        <p>2. Product-of-Sums expressions can be implemented using ___________
                            <br>
                            <label><input type="radio" name="q2" value="1">Both 2-level OR-AND and NOR logic circuits


                            </label><br>
                            <label><input type="radio" name="q2" value="0">2-level OR-AND logic circuits</label><br>
                            <label><input type="radio" name="q2" value="0">2-level NOR logic circuits</label><br>
                            <label><input type="radio" name="q2" value="0">
                                2-level XOR logic circuits</label><br>
                        </p><br>
                        <p>3.The simplification in minimal sum of product (SOP) of Y = F(A, B, C. D) = Σm (0, 2, 3, 6, 7) + Σd (8, 10, 11, 15) using K-maps is: <br>
                            <label><input type="radio" name="q3" value="0">Y = AC + BD’



                            </label><br>
                            <label><input type="radio" name="q3" value="0">Y = AC’ + BD’</label><br>
                            <label><input type="radio" name="q3" value="0">Y = A’C’ + B’D</label><br>
                            <label><input type="radio" name="q3" value="1">Y = A’C + B’D’</label><br>
                        </p><br>
                        <p>4.Which of the following Boolean functions is algebraically complete?
                            <br>
                            <label><input type="radio" name="q4" value="0">F = x + y



                            </label><br>
                            <label><input type="radio" name="q4" value="0">F = x'</label><br>
                            <label><input type="radio" name="q4" value="0">F = xy + yz</label><br>
                            <label><input type="radio" name="q4" value="1">F = x + y'</label><br>
                        </p><br>
                        <p>5.There are ______ cells in a 4-variable K-map
                            <br>
                            <label><input type="radio" name="q5" value="0">12</label><br>
                            <label><input type="radio" name="q5" value="1">16</label><br>
                            <label><input type="radio" name="q5" value="0">18</label><br>
                            <label><input type="radio" name="q5" value="0">8</label><br>
                        </p><br>
                        <button id="quizSub" class="ui left floated button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
        let qs = document.getElementById('quizSub');
        qs.addEventListener('click', () => {
            var j, i;
            var quiz = document.getElementById('Quiz1');
            var score=0;
            var val = new Array(6);
            var q = new Array(6);
           q[1] =document.getElementsByName('q1');
           q[2] =document.getElementsByName('q2');
           q[3] =document.getElementsByName('q3');
           q[4]=document.getElementsByName('q4');
           q[5] =document.getElementsByName('q5');
           for(i=1;i<=5;i++)
           {
                  for(j=0;j<q[i].length;j++)
                  {
                      if(q[i][j].checked)
                      {
                          if(q[i][j].value==1)
                          {
                              score++;
                          }
                      }
                  }
           }
            alert("score="+score);
        })
    </script>
</body>

</html>