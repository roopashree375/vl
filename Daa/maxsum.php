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
  <title>Maximum sum sub array</title>
  
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
    Maximum sum sub array
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
      <h3>Maximum Subarray Sum using Divide and Conquer algorithm</h3>  <p>You are given a one dimensional array that may contain both positive and negative integers, find the sum of contiguous subarray of numbers which has the largest sum.For example, if the given array is {-2, -5, 6, -2, -3, 1, 5, -6}, then the maximum subarray sum is 7 </p>
      Using Divide and Conquer approach, we can find the maximum subarray sum in O(nLogn) time. Following is the Divide and Conquer algorithm.<br>
      1.Divide the given array in two halves<br>
      2.Return the maximum of following three
        <ul type="circle">
        <li>Maximum subarray sum in left half (Make a recursive call).</li>
        <li>Maximum subarray sum in right half (Make a recursive call).</li>
        <li>Maximum subarray sum such that the subarray crosses the midpoint.</li>
  </ul>
        <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/ohHWQf1HDfU" frameborder="0">
</iframe>
<br><br>
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
        <li> Write a C program to implement Maximum-sub array problem where, you are given a one dimensional array that may contain both positive and negative integers, and find the sum of contiguous sub array of numbers which has the largest sum.</li>
          <br>
            <div class="GrayBlock">
              <div class="item">
                <h2>ALGORITHM</h2>
#include <stdio.h>
crosssubsum (a,low,mid,high)
//a: array of +ve and -ve elements
//low: position of first element
//mid: position of middle element
//high: position of last element
//o/p: maximum crossing sum
leftsum<- 0,rightsum <- 0,sum <- 0
for i <- mid to low
begin
sumßsum + a[i]
if sum > leftsum
leftsum <- sum
end for
sum <- 0
for i <- mid to high
begin
sum <- sum + a[i]
if sum > rightsum
rightsum <- sum
end for
return ledtsum+rightsum
maxsubsum (a,low,high)
//i/p: array of +ve & -ve elements
//o/p: maximim contiguous sum
if low == high
return a[low]
mid <- (low+high)/2
leftsum <- maxsubsum( a,low,mid)
rightsum <- maxsubsum (a,mid+1,high)
crosssum <- crosssubsum (a,low,mid,high)
if leftsum >= rightsum && leftsum >=crosssum
return leftsum

else if rightsum >= leftsum && rightsum >=crosssum
return rightsum
else
return crosssum
 </div>
              
            </div>
            <br>
        </br>
            <div class="GrayBlock">
            <div class="item"> 
                <h2>PROGRAM</h2>
int crosssubsum (int a[],int low,int mid,int high)
{
int leftsum=0,rightsum=0,sum=0,i;
for (i=mid;i>=low;i--)
{
sum = sum + a[i];
if (sum > leftsum)
leftsum = sum;
}
sum = 0;
for (i=mid+1;i<=high;i++)
{
sum = sum + a[i];
if (sum > rightsum)
rightsum = sum;
}
return leftsum+rightsum;
}
int maxsubsum (int a[],int low,int high)
{
int mid,leftsum,rightsum,crosssum;
if (low == high)
return a[low];
mid = (low+high)/2;
leftsum = maxsubsum( a,low,mid);
rightsum = maxsubsum (a,mid+1,high);
crosssum = crosssubsum (a,low,mid,high);
if (leftsum >= rightsum && leftsum >=crosssum)
return leftsum;
else if (rightsum >= leftsum && rightsum >=crosssum)
return rightsum;
else
return crosssum;
}
int main ()
{

int n,a[10],i,low,high,maxsum;
printf ("Enter the no. of Elements\n");
scanf ("%d",&n);
printf ("Enter an Array of +ve and -ve No.\n");
for (i=0;i< n;i++)
scanf (" %d", &a[i]);
low = 0;
high = n-1;
maxsum = maxsubsum (a,low,high);
printf (" Maximum Contiguous Sum = %d\n",maxsum );
return 0;
}

</div>
          </div>
</div></div>
</br>
<div class="GrayBlock">
              <div class="item">
                <h3>Output</h3>
Enter the no. of Elements
6
Enter an Array of +ve & -ve Numbers
13 -3 -25 20 -3 16
Maximum Contiguous Sum = 33
</div>
</div></div>

      </div>
      
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
