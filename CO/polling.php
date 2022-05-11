<?php
 if(session_status()==PHP_SESSION_NONE)
 {
   session_start();
   if(!isset($_SESSION['username']))
   {
     header("Location: ../index.php");
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
  <title>Differences of Polling, Interrupts, DMA</title>
  
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
  <a class="item" href="co.php">
  Computer Organization
  </a>
 <a class="item">
    About Us
  </a> 
 <?php
    // if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"../login.php\">Login</a><a class=\"item\" href=\"../register.php\">Register</a>";
    // else 
    // { 
    //   echo "<a class=\"item\">"; 
    //   echo $_SESSION['username'];
    //   echo "</a><a class=\"item\" href=\"../logoutprocess.php\">Logout</a>";
    // }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Differences between Polling, Interrupts, DMA
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
      <!-- <a class="item" target="_blank" id="list">
        Compiler
      </a> -->
     <a class="item" id="faq">
        Quiz
      </a> 
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
       <br><br>
      <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/LNPBr3WvuNg"  frameborder="0"></iframe>
      <br><br>

      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bullete list">
          <div class="item">
         <span><u><b> Polling, Interrupts and DMA:-</span></b></u><br><br>
        
         Computer systems have to respond to external stimuli or events, whether it be a keyboard button pressed, mouse movement, 
         ADC input, or incoming/outgoing data on a serial or parallel bus.<br><br>
         <u><b>Polling :<br></b></u>
         Polling is a procedure written in software that detects that an event has occurred. 
         There are two types of polling, blocking and non-blocking.<br><br>

(i)<b>Blocking Poll :<br></b>
In a blocking poll, the processor tests a flag or bit and waits until the state of the flag has changed to a desired state. 
Thus the processor is unable to proceed until this new state is detected.<br><br>

(ii) <b>Non-Blocking Poll<br></b>
In non-blocking poll, the processor may proceed with other tasks and only acts on the desired action when a defined flag state has been detected. 
Since the flag may change state while the processor was not testing the flag, 
there will be a delay before the desired action is taken which could be in the order of milliseconds, depending on what the processor is doing.<br><br>

<u><b>Interrupts :</b></u><br>
Interrupts overcome the short comings of polling. An event can interrupt the processor at anytime. 
Interrupt latency is the time it takes for the processor to acknowledge reception of the notification and can be of the order of sub-microseconds. 
The processor may choose to service the event immediately or may postpone servicing until an appropriate moment.<br><br>
<u><b>Direct Memory Access :</b></u><br>
DMA is a hardware process that can handle data transfers without processor intervention. 
Thus, events can happen behind the scene without needing to interrupt the processor. DMA is best suited (but not limited to) mass data transfers, from peripheral to memory, memory to peripheral, or memory to memory. 
A typical example of DMA data transfer is high-speed ADC sampling, video recording and playback, or audio recording and playback.<br><br>


          <br><br>
            <div class="GrayBlock">
            <br>
            <img id="theoryImage" src="../images/executing_program.jpg">
            <br>
            </div></div> 
          </div>
          <br>
      </div>
      
      <!-- <div id="lis" style="display: none;">
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

        
          <form action="../compile.php" id="form" name="f2" method="POST" ><br>
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

          </form><br>
          <div id="outputBox" style="display:None;">Output:<br><br>
          <div name="output"></div><br>
          </div>
          </div>

      </div> -->
      
      <div id="faqs" style="display: none;">
      <a href="quiz/pollingquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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
