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
    <title>StringConcatination</title>

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
            Concatination Of Two Strings 
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
                    Design and develop a C program to implement the following operations without
using library functions. Display the results after every operation.
                        <br><br>
                    </div>

                    <div id="pre" style="display: none;">
                    <strong>Vedio to understand</strong>
      <br>
      <br>
      <iframe src="https://drive.google.com/file/d/1wjyQIerfxoXiEhaiJEDAq8Qs_7cjf0ft/preview" width="640" height="480" allow="autoplay"></iframe>
        <br>
                        <div class="ui bulleted list">
                            <div class="item">
                                <strong>Programming Approach:</strong>
                                <br>
                                <pre>
The program is used to read 2 strings STR1 & STR2 and compute the resulting
string STR3 which consists of STR1 and STR2 without using library function.
The programincludes the concept of Strings and looping.
             </pre>
                            </div>
                            <div class="item">
                                <strong>Algorithm:
                                    <br>
                                    <br>
    Input: String STR1
                                           String STR2.
                                    <br>
    Output: String STR3 = STR1+STR2.
                                </strong>
                                <pre>
Step 1: START
        [Input 2 strings STR1 & STR2]
        Read STR1, STR2
Step 2: [Initialize i, j and count to Zero]
        i = 0; j = 0; count = 0;
Step 3: [Copy the string STR1 to STR3]
        while STR1[ i ] !="\0"
        BEGIN
        STR3[ count ] = STR1[ i ]
        count ++ [Track length of string STR3]
        i++;
        END
Step 4: [Increment the value of Count to insert space between 2 strings]
        STR3[count++]=" ".
Step 5: [Copy the string STR2 to STR3]
            hile STR2[j ]!= "\0"
        BEGIN
        STR3[ count ] = STR2[ j ]
        count ++;
        j++;
Step 6: [Terminate the String with end of Character]
        STR3[count] = "\0"
Step 7: [Print the String STR1, STR2 and STR3]
        Print STR1, STR2, STR3
Step 8: END
    </pre>
                                <strong>Flow Chart</strong>
                            </div>
                            <div class="item">
                                <img height="50%" width="70%" src="images/p7.jpg" frameborder="0">
                                </img>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui form">
                            <div id="compilerData">
                            Program 7: Design and develop a C program to implement the following operations without
using library functions. Display the results after every operation.

                                <div class="ui segment">
                                    <div class="ui two column very relaxed grid">
                                        <div class="column">
                                            <strong>Sample Input</strong><br>
                                            Enter the String 1 : Dayananda<br>Enter the String 2 : Sagar
                                            
                                        </div>
                                        <div class="column">
                                            <strong>Sample Output</strong><br>
                                            String STR1 = Dayananda <br>String STR2 = Sagar<br>String STR3 = DayanandaSagar
                                        </div>
                                    </div>
                                    <div class="ui vertical divider">and</div>
                                </div>
                            </div><br>
                            <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
                            <a href="https://www.youtube.com/embed/LFPoPHBiWCE" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>

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
                        <a href="quiz/stringconcatquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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