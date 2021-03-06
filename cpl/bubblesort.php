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
  <title>BubbleSort</title>
  
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
     Sorting By BubbleSort Technique
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
      Design and develop a C program thatread N integer numbers and arrange them
in ascending order using Bubble Sort.
        <br><br>
      </div>
      
      <div id="pre" style="display: none;">
      <strong>Vedio to understand</strong>
      <br>
      <br>
      <iframe src="https://drive.google.com/file/d/15jC-Ih9WZ78QJ3unJBWRWaWCZHIeGl9c/preview" width="640" height="480" allow="autoplay"></iframe>
        <br>
        <div class="ui bulleted list">
          <div class="item">
             <strong>Programming Approach:</strong>
             <br>
             <p>
             Bubble sort algorithm takes the array of numbers as input and compares the
adjacent numbers and performs swapping of numbers which are not in order and prints
the array of numbers in ascending order
             </p>
            </div>
            <br>
            <div class="item">
              <strong>Algorithm:
                <br>
                Input: A list of  sorted or unsorted numbers. 
                <br>
                Output: A list of sorted numbers either in ascending or descending manner.
              </strong>
              <pre>
            Step 1: [Initialize]
                    Start
            Step 2: [Input]
                    Read n
            Step 3: [Input Unsorted array]
                    Read elements to array a[]
            Step 4: Print elements of array a[]
            Step 5: [Iterate array a[] in two loops.
                    Outer loop gives number of pass.
                    Inner loop does Swap task.
                    In each pass, compare each pair of adjacent items.
                    If formal elements are greater than latter one, swap them]
                    For each value I in array a[i] to n do for each value j
                    in array a[j] to n-1 
                    do [Compare each pair of adjacent elements]
                    If (a[j]>a[j+1]) 
                    then[Swap these elements using temp variable] 
                    temp <- a[j]
                    a[j] <- a[j+1]
                    a[j+1] <- temp
                    End if
                    End for
                    End for
            Step 6: Print array with sorted elements
            Step 7: [Finished]
                    End.
              </pre>
            </div>
            <strong>Flow Chart:</strong>
            <div>
            <img height="50%" width="70%"  src="images/p4.jpg" frameborder="0"></img>
            </div>
          </div>
          <br>
      </div>
      
      <div id="lis" style="display: none;">
      <div class="ui form">
        <div id="compilerData">
        Program 4. Design and develop a C program thatread N integer numbers and arrange them
in ascending order using Bubble Sort.

<br>
        <div class="ui segment">
         <div class="ui two column very relaxed grid">
              <div class="column">
                <strong>Sample Input</strong><br>
                Enter the number of elements:4<br>Enter the 4 elements of array:87 100 20 3
              </div>
              <div class="column">
                <strong>Sample Output</strong><br>
                The sorted array in ascending order is: 3 20 87 100
              </div>
         </div>
         <div class="ui vertical divider">and</div>
         </div>
        </div><br>

        <a href="https://www.onlinegdb.com/" target=_blank style="font-size:20px; margin: 10px; float: left;" class="ui green button">Online Compiler</a>
        <a href="https://www.youtube.com/embed/YbJDGpqW2r4" target=_blank style="font-size:20px; margin: 10px; float: right;" class="ui green button">Solution</a><br><br><br>
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
        </div>
    </div>
    </div>
    </div>
          <div id="outputBox" style="display:None;">Output:<br><br>
          <div name="output"></div><br>
          </div>
          </div>
      </div>
      <div id="faqs" style="display: none;">
                        <a href="quiz/bubblesortquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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
