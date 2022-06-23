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
    <title>MatrixMultiplication</title>

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
            To Perform Multiplication Of Two Matrices.
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
                    Design and develop a C program that reads two matrices A (m x n) and B (p x q)
and Compute product of matrices A and B. Read matrix A and matrix B in row major order.
Print both the input matrices and resultant matrix appropriately.
                        <br><br>
                    </div>

                    <div id="pre" style="display: none;">
                    <strong>Vedio to understand</strong>
                    <br>
                    <br>
                    <iframe src="https://drive.google.com/file/d/1yayDOWi9mKZ7zEg_LI7p0qiBrT6ITB2k/preview" width="640" height="480" allow="autoplay"></iframe>
                    <br>
                        <div class="ui bulleted list">
                            <div class="item">
                                <strong>Programming Approach:</strong>
                                <br>
                                <pre>
I. Read matrix A of size mxn
II. Read matrix B of size pxq
III. Check for compatibility (n==p)
IV. Perform multiplication AXB,
                        resultant matrix size will be mXq
                        Where m and p are the number of rows
                        n and q are the number of columns
             </pre>
                            </div>
                            <div class="item">
                                <strong>Algorithm:
                                    <br>
                                    <br>
                                    Input: Matrix A of size mXn
                                           Matrix B of size pXq.
                                    <br>
                                    Output: Resultant MAtrix Of size mXq.
                                </strong>
                <pre>
Step1: Start
Step 2: Declare variables and initialize necessary variables
Step 3: Enter the element of matrices by row wise using loops
Step 4: Check the number of rows and column of first and second matrices
Step 5: If number of rows of first matrix is equal to the number of columns
        of second matrix, go to
Step 6: Otherwise, print matrix multiplication is not possible and go to 
        step 8.
Step 6: Multiply the matrices using nested loops.
Step 7: Print the product in matrix form as console output.
Step 8: Stop.
                </pre>
                                <strong>Flow Chart</strong>
                            </div>
                            <div class="item">
                                <img height="50%" width="70%" src="images/p6.jpg" frameborder="0">
                                </img>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui form">
                            <div id="compilerData">
                            Program 6 : Design and develop a C program that reads two matrices A (m x n) and B (p x q)
and Compute product of matrices A and B. Read matrix A and matrix B in row major order.
Print both the input matrices and resultant matrix appropriately.<br>
                                <div class="ui segment">
                                    <div class="ui two column very relaxed grid">
                                        <div class="column">
                                            <strong>Sample Input</strong><br>
                                            Enter the size of matrix A:2 2<br>Enter the size of matrix B
:2 2<br>Enter the elements of matrix A : 2 4 1 3 <br>Enter the elements of matrix
B : 4 1 2 3
                                            
                                        </div>
                                        <div class="column">
                                            <strong>Sample Output</strong><br>
                                            The resultant matrix C is : 16 14 <br><pre>                     10 10 </pre>
                                        </div>
                                    </div>
                                    <div class="ui vertical divider">and</div>
                                </div>
                            </div><br>
                            <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
                            <a href="https://www.youtube.com/embed/KPQ-hXgVIXs" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>

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
                        <a href="quiz/matrixmulquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
                    </div>
                </div>
            </div>
            <div id="faqs" style="display: none;">
                        <a href="quiz/electricityquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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