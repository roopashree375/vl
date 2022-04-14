<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: index.php");
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
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Boyer-Moore Algorithm</title>
  
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
  <a class="item" href="daa.php">
    DAA
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
    Boyer-Moore String Matching Algorithm
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
      <!-- <a class="item" id="faq">
        Quiz
      </a> -->
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      <h3>Boyer-Moore String Matching Algorithm</h3>  
      <p>Pattern searching is an important problem in computer science.Robert Boyer and J Strother Moore established it in 1977.
           The B-M String search algorithm is a particularly efficient algorithm and has served as a standard benchmark for string search algorithm
            ever since.</p>
           <p>The B-M algorithm takes a 'backward' approach: the pattern string (P) is aligned with the start of the text string (T), and then compares
                the characters of a pattern from right to left, beginning with rightmost character.</p>
            <p>If a character is compared that is not within the pattern, no match can be found by analyzing any further aspects at this position so 
                the pattern can be changed entirely past the mismatching character.

For deciding the possible shifts, B-M algorithm uses two preprocessing strategies simultaneously. Whenever a mismatch occurs, the algorithm calculates a variation using both approaches and selects the more significant 
shift thus, if make use of the most effective strategy for each case.</p>
        <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/ZMQWjslBlbU" frameborder="0">
</iframe>
<br><br>
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
        <li> Write a C program to implement Maximum-sub array problem where, you are given a one dimensional array that may contain both positive and negative integers, and find the sum of contiguous sub array of numbers which has the largest sum.</li>
        </br>
            <div class="GrayBlock">
              <div class="item">
                <h2>ALGORITHM</h2>
shifttable (p)
//p: Pattern String
//o/p: Shift Table of Pattern String
m <- strlen(p)
for i <- 0 to MAX
t[i] <- m
for i <- 0 to m-1
t[p[j]] <- m-1-j
boyermoore (src,p)
//src: Source String
//p: Pattern String
//o/p: Starting Position of Pattern String in Source String
n <- strlen(src)
m <- strlen(p)
print Length of Text
print Length of Pattern
i <- m-1
while i< n
begin
k <- 0
while (k < m) && (p[m-1-k] == src[i-k])
k++
if k == m
return i-m+1
else
i <- i + max(t[src[i]]-k,1)
end while
return -1        
              </div>
              
            </div>
            
        
            <div class="GrayBlock">
                <div class="item"> 
                    <h2>PROGRAM</h2>
    
#include <string.h>
#define MAX 126
int t[MAX];
int max (int a, int b)
{
return (a > b)? a: b;
}
void shifttable (char p[])
{
int i,j,m;
m = strlen(p);
for (i=0;i< MAX;i++)
t[i] = m;
for (j=0;j < m-1;j++)
t[p[j]] = m-1-j;
}
int boyermoore (char src[],char p[])
{
int i,k,m,n;
n = strlen(src);
m = strlen(p);
printf ("Length of Text = %d\n",n);
printf ("Length of Pattern = %d\n",m);
i = m-1;
while (i< n)
{
k = 0;
while ((k< m) && (p[m-1-k] == src[i-k]))
k++;
if (k == m)
return (i-m+1);
else
i = i + max(t[src[i]]-k,1);
}
return -1;
}

int main ()
{
char src[100],p[100];
int pos;
printf ("Enter the Text in which Pattern is to be Searched\n");
gets (src);
printf ("Enter the Pattern to be Searched\n");
gets (p);
shifttable (p);
pos = boyermoore (src,p);
if (pos >= 0)
printf ("Pattern was found starting from position %d\n",pos+1);
else
printf ("Pattern was not found\n");
return 0;
}
                </div>
            </div>

</div>
          </div>
          <div class="GrayBlock">
              <div class="item">
                <h3>Output</h3>
Enter the Text in which Pattern is to be Searched
JIM SAW ME IN BARBER SHOP
Enter the Pattern to be Searched
BARBER
Length of Text = 25
Length of Pattern = 6
Pattern was found starting from position 15
</div>
</div></div>

      
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

        
          <form action="compile.php" id="form" name="f2" method="POST" ><br>
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

      </div>
      
      <div id="faqs" style="display: none;">
      <form name="quiz" id="quiz" action="quizProcess.php" method="POST">
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
  //  function getcodeVal(){
  //   var code = editor.getValue();
  //   console.log(code);
  //  }
</script>
  
</body>
</html>
