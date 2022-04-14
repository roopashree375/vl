<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: ../index.php");
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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/questions.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images/dscelogo.png">
  <title>Memory System in a Computer</title>
  
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
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
    Memory System in a Computer
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
      <!-- <a class="item" id="faq">
        Quiz
      </a> -->
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int"><b>What is Memory?</b><br><br>
Computer memory is just like the human brain. It is used to store data/information and instructions.
 It is a data storage unit or a data storage device where data is to be processed and instructions required for processing are stored.
      <br><br>
     <b><u>In general, memory is of three types:</b></u><br>
(i)Primary memory<br>
(ii)Secondary memory / Storage<br>
(iii)Cache memory<br><br>
<iframe width="100%" height="400px" src="https://www.youtube.com/embed/H_M--weEzpA" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <br><br>

      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bullete list">
          <div class="item">
         <span><u><b> Now we discuss each type of memory one by one in detail:</span></b></u><br><br>
         <b>1.Primary Memory:</b> It is also known as the main memory of the computer system. It is used to store data and programs or instructions during computer operations. 
         It uses semiconductor technology and hence is commonly called semiconductor memory. <br><br>
          <b>2.Secondary Memory:</b> It is also known as auxiliary memory and backup memory. It is a non-volatile memory and used to store a large amount of data or information. 
          The data or information stored in secondary memory is permanent, and it is slower than primary memory. A CPU cannot access secondary memory directly. 
          The data/information from the auxiliary memory is first transferred to the main memory, and then the CPU can access it.<br><br>
          <b>3.Cache Memory:</b> It is a type of high-speed semiconductor memory that can help the CPU run faster. Between the CPU and the main memory, it serves as a buffer. 
          It is used to store the data and programs that the CPU uses the most frequently.<br><br><br>
          <b>Types of Primary memory:</b><br>


<b><u>(i) RAM (Random Access Memory):</b></u> It is a volatile memory. Volatile memory stores information based on the power supply. 
If the power supply fails/ interrupted/stopped, all the data & information on this memory will be lost. 
RAM is used for booting up or start the computer. It temporarily stores programs/ data which has to be executed by the processor. <br><br>
<b><u>(ii) ROM (Read Only Memory):</u><br></b>It is a non-volatile memory. 
Non-volatile memory stores information even when there is a power supply failed/ interrupted/stopped. 
ROM is used to store information that is used to operate the system. As its name refers to read-only memory, we can only read the programs and data that is stored on it. 
It contains some electronic fuses that can be programmed for a piece of specific information. 
The information stored in the ROM in binary format. It is also known as permanent memory.
<br><br><br>
<b>Types of Secondary memory:</b><br>
<b><u>(i) Magnetic Tapes:</b></u> Magnetic tape is a long, narrow strip of plastic film with a thin, magnetic coating on it that is used for magnetic recording. 
Bits are recorded on tape as magnetic patches called RECORDS that run along many tracks. Typically, 7 or 9 bits are recorded concurrently. 
Each track has one read/write head, which allows data to be recorded and read as a sequence of characters. 
It can be stopped, started moving forward or backward, or rewound.<br><br>
<b><u>(ii) Magnetic Disks:</b></u> A magnetic disc is a circular metal or a plastic plate and these plates are coated with magnetic material. 
The disc is used on both sides. Bits are stored in magnetized surfaces in locations called tracks that run in concentric rings. 
Sectors are typically used to break tracks into pieces.<br><br>
<b><u>(iii) Optical Disks:</b></u> It’s a laser-based storage medium that can be written to and read. 
It is reasonably priced and has a long lifespan. The optical disc can be taken out of the computer by occasional users. 

          <br><br>
            <!-- <div class="GrayBlock">
            <br>
            <img id="theoryImage" src="../images/CPUblock.jpg">
            <br>
            </div></div> -->
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
      <form name="quiz" id="quiz" action="../quizProcess.php" method="POST">
      <?php
        $servername = "localhost:3306";
        $db_username = "root";
        $password = "1234";
        $dbname = "virtuallabsdsce";

        // Create connection
        $conn = new mysqli($servername, $db_username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $usn=$_SESSION["usn"];
        $query = "select * from user_scores where usn='$usn' and topic_name='st'";
        $res=$conn->query($query);
        
        if ($res->num_rows == 1)
        { 
          $row = $res->fetch_assoc();
          echo "Quiz already attemped!<br><br>Your score: ".$row["quiz_score"];
        
        }
        else{
        $a= [1,2,3,4,5,6,7,8];
        $opt = ['a','b','c','d']; 
        $questionno = 1;
        shuffle($a);
        foreach($a as $i)
        {
          $query = "select question from questions_ds where question_no like \"st$i\"";
          $question_name = $conn->query($query);
          $row = $question_name->fetch_assoc();
          echo "<p>".$questionno.". ".$row['question']."<br>";
          shuffle($opt);
          foreach($opt as $j)
          {
            $option_name = $conn->query("select options_name from answer_ds where option_no like \"st$i$j\"");
            $row =$option_name->fetch_assoc();
            echo "<label><input type=\"radio\" name=\"st".$i."\" value=\"st".$i.$j."\">".$row['options_name']."</label><br>";
          }
          echo "<span id=\"st".$i."\"></span></p><br>";
          $questionno += 1;
        }
        
        echo "<input type=\"hidden\" name=\"quizID\" value=\"ds.st.8\">";
        echo "<div id=\"result\"><input type=\"submit\" id=\"quizSub\" class=\"ui left floated button\" value=\"Submit\"></div>";
        }
        $conn->close();
        ?>
        </form>
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
