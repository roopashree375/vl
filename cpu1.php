<?php
if (session_status() == PHP_SESSION_NONE) {
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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/questions.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images/dscelogo.png">
  <title>How CPU Works</title>
  
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
      <a href="co.php" class="item">
        Computer Organization
      </a>
      <a class="item">
        About Us
      </a>
    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      How CPU Works?
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
          <!-- <a class="item" id="list">
            Video
          </a> -->
          <a class="item" id="faq">
            Quiz
          </a>
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int">
            CPU is the brain of the computer. All types of data processing operations and all the important functions of a computer are performed by the CPU. <br><br>
            <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/cNN_tTXABUA" frameborder="0"></iframe>
            <br><br>

          </div>

          <div id="pre" style="display: none;">
            <div class="ui bullete list">
              <div class="item">
                <span><u><b> The 3 major units of a CPU are:</span></b></u><br><br>
                1.Memory or Storage Unit<br>
                2.Control Unit<br>
                3.ALU(Arithmetic Logic Unit)<br><br>
                <b>Memory or Storage Unit :<br></b>

                As the name suggests this unit can store instructions, data, and intermediate results. The memory unit is responsible for transferring information to other units of the computer when needed.
                It is also known as an internal storage unit or the main memory or the primary storage or Random Access Memory (RAM) as all these are storage devices.<br><br>
                <b>Control Unit:<br></b>

                As the name suggests, a control unit controls the operations of all parts of the computer but it does not carry out any data processing operations. For executing already stored instructions, It instructs the computer by using the electrical signals to instruct the computer system.
                It takes instructions from the memory unit and then decodes the instructions after that it executes those instructions. So, it controls the functioning of the computer. <br><br>
                <b>ALU (Arithmetic Logic Unit) :<br></b>

                ALU (Arithmetic Logic Unit) is responsible for performing arithmetic and logical functions or operations. It consists of two subsections, which are:<br>

                (i)Arithmetic Section<br>
                (ii)Logic Section<br><br>
                Now, let us know about these subsections:<br>

                <u><b>Arithmetic Section:</b></u> By arithmetic operations, we mean operations like addition, subtraction, multiplication, and division, and all these operation and functions are performed by ALU. Also, all the complex operations are done by making repetitive use of the mentioned operations by ALU.<br>

                <u><b>Logic Section:</b></u> By Logical operations, we mean operations or functions like selecting, comparing, matching, and merging the data, and all these are performed by ALU.<br><br>
                <br><br>
                <div class="GrayBlock">
                  <br>
                  <img id="theoryImage" src="../images/CPUblock.jpg">
                  <br>
                </div>
              </div>
            </div>
            <br>
          </div>
          <div id="faqs" style="display: none;">
            <form name="Quiz1">
              <p>1.What are the two other parts of the CPU?<br>
                <label><input type="radio" name="q1" value="0">RAM & ROM
                </label><br>
                <label><input type="radio" name="q1" value="0">Hard Drive & Motherboard</label><br>
                <label><input type="radio" name="q1" value="1"> The ALU and Cache</label><br>

              </p><br>
              <p>2.Which level of cache is the fastest but has the smallest capacity?
                <br>
                <label><input type="radio" name="q2" value="1"> Level 1
                </label><br>
                <label><input type="radio" name="q2" value="0">Level 2</label><br>
                <label><input type="radio" name="q2" valur="0">Level 3</label><br>
                <label><input type="radio" name="q2" value="0">Level 4</label><br>
              </p><br>
              <p>3. What are registers used for?
                <br>
                <label><input type="radio" name="q3" value="1">To temporarily hold bits of data needed by the CPU
                </label><br>
                <label><input type="radio" name="q3" value="0">To make sure that the CPU runs properly.</label><br>
                <label><input type="radio" name="q3" value="0">To make the CPU faster.</label><br>

              </p><br>
              <p>4.What is the main function of the boot program?
                <br>
                <label><input type="radio" name="q4" value="0">To load programs that are being used.
                </label><br>
                <label><input type="radio" name="q4" value="0">To shut the computer down.</label><br>
                <label><input type="radio" name="q4" value="1"> To get the computer up and running and get the operating system loaded</label><br>
                <label><input type="radio" name="q4" value="0">To load Microsoft Office.</label><br>
              </p><br>
              <p>5.What happens at the Decode step of the fetch-decode-execute cycle?

                <br>
                <label><input type="radio" name="q5" value="1">The CPU makes sense of the instructions
                </label><br>
                <label><input type="radio" name="q5" value="0">The CPU fetches the information from RAM.</label><br>
                <label><input type="radio" name="q5" value="0">The instructions are executed.</label><br>

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
        var score = 0;
        var val = new Array(6);
        var q = new Array(6);
        q[1] = document.getElementsByName('q1');
        q[2] = document.getElementsByName('q2');
        q[3] = document.getElementsByName('q3');
        q[4] = document.getElementsByName('q4');
        q[5] = document.getElementsByName('q5');
        for (i = 1; i <= 5; i++) {
          for (j = 0; j < q[i].length; j++) {
            if (q[i][j].checked) {
              if (q[i][j].value == 1) {
                score++;
              }
            }
          }
        }
        alert("score=" + score);
      })
    </script>
</body>

</html>