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
    <title>BinarySearch</title>

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
            To Search A Key Element Using Binary Search Technique
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
                        Design and Develop a C program that reads N integer numbers and search a key
                        element using Binary search technique.
                        <br><br>
                    </div>

                    <div id="pre" style="display: none;">
                        <div class="ui bulleted list">
                            <div class="item">
                                <strong>Mathematical Approach:</strong>
                                <br>
                                <pre>
        Binary Search starts with the middle element of the sorted list.
        1. [low, high] denotes the range in which element has to be present 
           and [mid] denotes the middle element.
        2. Initially low = 0, high = number_of_elements and 
            mid = floor((low+high)/2).
        3. If the middle element of the list is equal to the "key" 
           then we have found the position the specified value.
        4. Else if the „key‟ is greater than the middle element then the 
           "key" has to be present in the last half of the list.
        5. Or if the „key‟ is lesser than the middle element then the
            "input key" has to be present in the first half of the list.
        6. Hence, the search list gets reduced by half after each iteration.
             </pre>
                            </div>
                            <div class="item">
                                <strong>Algorithm:
                                    <br>
                                    <br>
                                    Input: N number of elements.
                                    <br>
                                    Output: Key-element if found.
                                </strong>
                                <pre>
            Step 1: [input the number of items]
                    read n
            Step 2: [input N elements from keyboard]
                    for i=0 to n
                        read a[i]
                        end for
            Step 3: [input the item to be searched]
                    read key
            Step 4: [initialization]
                    low=0
                    high=n-1
                    found=0
            Step 5: [search using binary search method]
            Step 6: Stopwhile (low <=high && !found)
                    mid=(low+high)/2
                    if(key==a[mid])
                        found=1
                    else if (key less than a[mid])
                        high=mid-1
                    else
                        low=mid+1
                    end while
            Step 7: if(found==1)
                        Print “key found at mid+1 position”
                    Else
                        Print "key not found"
    </pre>
                                <strong>Flow Chart</strong>
                            </div>
                            <div class="item">
                                <img height="50%" width="70%" src="images/p5.jpg" frameborder="0">
                                </img>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui form">
                            <div id="compilerData">
                                Program 5:Design and Develop a C program that reads N integer numbers and search a key
                                element using Binary search technique.<br>
                                <div class="ui segment">
                                    <div class="ui two column very relaxed grid">
                                        <div class="column">
                                            <strong>Sample Input</strong><br>
                                            Enter the number of elements:6<br>Enter 6 elements in ascending order:4 7 9 11 15 18<br>Enter an element to
                                            search : 15
                                        </div>
                                        <div class="column">
                                            <strong>Sample Output</strong><br>
                                            Key found at position 5
                                        </div>
                                    </div>
                                    <div class="ui vertical divider">and</div>
                                </div>
                            </div><br>
                            <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
                            <a href="https://www.youtube.com/embed/T5NuccwRA" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>
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
                        <a href="quiz/binarysearchquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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