<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!isset($_SESSION['username'])) {
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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/home.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="icon" href="../images\dscelogo.png">
  <title>Introduction to Computer Hardware and Software </title>

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
      <a class="item" href="../cpps.php">
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
      Introduction to Computer Hardware and Software
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
            <u>Introduction</u>
            <br />
            <br />
            The term computer is derived from word ‘compute’ which means to calculate.<br>

            Computer is basically a group of electronic devices that can accept data, conduct a series of arithmetic and logical operations on it and give result of these operations as information that is useful to people.<br>



            It is a machine that performs pre-defined or programmed computations or control operations that are expressible in numerical and logical form at a high speed and with great accuracy.<br>

            In other words, Computer is an electronic device capable of performing commands and these commands are basically input, output, storage, arithmetic and logical operations.<br>

            A computer is a programmable electronic device that accepts raw data and instruction from input device, process data and provides output as information in output device.<br>
            All the modern computers are digital and represents information in binary digits. They represent data using two distinct values.<br>

            In binary system we have only two digits (bits) – 0 and 1 to represent data. Since the bit is a very small unit, virtually, it cannot convey much information while used single.<br>



            Combination of eight bits is called a byte. A byte is the fundamental unit of data representation in computer. A byte can represent one character of data. Modern computers are capable of processing more than one byte at a time. <br><br>
            <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/vG_qmtdBPTU" frameborder="0">
            </iframe>
            <br><br>


          </div>
          <div id="pre" style="display: none;">

            <div class="item">
              <u>Computer System</u><br>
              A computer system consists of two major components, namely, hardware and software.<br>

              All physical components that forms computer system are known as computer hardware.<br>

              Software is basically collection of different programs that tells computer’s hardware what to do.<br><br><br>


              <u>Hardware</u><br>
              All physical components that make up a computer is known as computer hardware.<br>

              It includes all components that we can see and touch i.e. processor, input devices like keyboard, mouse, output devices like visual display unit (VDU), printer, speaker, connecting wires, casing, storage devices etc. <br><br>
              <u>Software</u><br>
              Set of instructions that tells the computer hardware what to do is known as computer program. This program or collection of such programs is known as computer software.<br>
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
         <a href="quiz/quiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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