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
    <title>Struct-Employee</title>

</head>

<body>
    <h1 class="ui header" style="text-align:center" id="head">
        <a class="ui circular image" href="http://dsce.edu.in"><img src="../../images/dscelogo.jpg"></a>
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
            Employee Details Using Structures. 
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
                    Design and develop a C program to create a structure called Employee to maintain a
record of details using an array of structures with four fields (Emp_name, Emp_id, Emp_sal,
Emp_age). Assume appropriate data type for each field. Print the Employee details in Tabular
Format.
                        <br><br>
                    </div>

                    <div id="pre" style="display: none;">
                    <strong>Vedio to understand</strong>
      <br>
      <br>
      <iframe src="https://drive.google.com/file/d/1aLEEK-22XnVpfeLSpUGou1BAuOXg2BNW/preview" width="640" height="480" allow="autoplay"></iframe>
        <br>
                        <div class="ui bulleted list">
                            <div class="item">
                                <strong>Programming Approach:</strong>
                                <br>
                                <pre>
Solution to the given problem can be given in various ways like with/without
the usage of functions. To make it simple, here we have implemented without 
using functions. First we need to create a structure template with the
necessary fields followed with creation of array of structure variables as
needed. Then as per the user choice of number of employees, their details
will be read and stored in the array of employee structure using dot
operator in a loop. The same will be displayed in the tabular format with
necessary formatting to the user.

             </pre>
                            </div>
                            <div class="item">
                                <strong>Algorithm:
                                    <br>
                                    <br>
    Input:: Number of Employees (n), for each Employee – his eid, ename, esal, eage
                                    <br>
    Output: Details of the ‘n’ employees (Each employee’s eid, ename, esal, eage)
                                </strong>
                                <pre>
Step 1: Start
Step 2: Definition of the structure template.
Step 3: Create aliasing name for the structure using typedef. 
Step 4: Declare the array of structure variable as per the need.
Step 5: Read the number of Employees - „n‟ value.
Step 6: For i=0 until i=n do
        Read the details of each employee (eid, ename, eage,
        esal)and store the same in the array of structure created.
Step 7: Print the header details of employees
Step 8: For i=0 until i=n do
        Print the details of each employee (eid, ename, eage, esal)
        in a formatted way using the array of structure in which
        the details were stored.
        Step 9: End
    </pre>
                                <strong>Flow Chart</strong>
                            </div>
                            <div class="item">
                                <img height="50%" width="70%" src="images/p9.jpg" frameborder="0">
                                </img>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui form">
                            <div id="compilerData">
                            Program 9: Design and develop a C program to create a structure called Employee to maintain a
record of details using an array of structures with four fields (Emp_name, Emp_id, Emp_sal,
Emp_age). Assume appropriate data type for each field. Print the Employee details in Tabular
Format.
<br/>
                                            <br/>
                                <div class="ui segment">
                                    <div class="ui two column very relaxed grid">
                                        <div class="column">
                                            <strong>Sample Input</strong><br>
                                            Enter the number of Employees: 3<br>Enter the details of Employee : 1
                                            <br>Enter eid:111
                                            <br>Enter ename:Akash
                                            <br>Enter eage:21 
                                            <br>Enter esal:20000
                                            <br/>
                                            <br/>
                                            Enter the details of Employee : 2
                                            <br>Enter eid:222
                                            <br>Enter ename:Banu
                                            <br>Enter eage:22 
                                            <br>Enter esal:30000
                                            <br/>
                                            <br/>
                                            <br/>
                                            Enter the details of Employee : 3
                                            <br>Enter eid:333
                                            <br>Enter ename:Chaitra
                                            <br>Enter eage:23 
                                            <br>Enter esal:320000
                                        </div>
                                        <div class="column">
                                            <strong>Sample Output</strong><br>
                                            <pre>
****************************************
Details of 3 Employees are as follows
*****************************************
Empid Empname Empage Empsal
111 Akash 21 20000.000000
222 Banu 22 30000.000000
333 Chaithra 23 32000.000000
-----------------------------------------
            </pre>
                                        </div>
                                    </div>
                                    <div class="ui vertical divider">and</div>
                                </div>
                            </div><br>
                            <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
                            <a href="https://www.youtube.com/embed/6kQTh8cwKWM" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>

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
                        <a href="quiz/structquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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