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
  <title>Belman Ford</title>
  
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
    Belman-Fod Algorithm
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
      <h3>Belman-Ford Algorithm</h3>  
      <p>Given a graph and a source vertex src in graph, find shortest paths from src to all vertices in the given graph. The graph may contain 
        negative weight edges. </p>
           <p>Bellman-Ford algorithm is used to find minimum distance from the source vertex to any other vertex. The main difference between 
             this algorithm with Dijkstra’s the algorithm is, in Dijkstra’s algorithm we cannot handle the negative weight, but here we can handle 
             it easily.</p>
        <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/FrLWd1tJ_Wc" frameborder="0">
</iframe>
<br><br>
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
        <li>Design and execute a program in C to create a function called
bellman-ford that represents the cost adjacency matrix. From a given
vertex in a weighted connected graph, find shortest paths from a
single source vertex to all of the other vertices using Bellman-Ford
algorithm.</li>
        </br>
            <div class="GrayBlock">
              <div class="item">
                <h2>ALGORITHM</h2>
BellmanFord (G,n,E,edge)
//G: Cost Adjacency Matrix
//n: No. of Nodes
//E: No, of Edges
//edge: Edge of each nodes
//o/p: Shortest Path from Source
int i,u,v,k,distance[20],parent[20],S,flag<-1
for i<-0 to n
begin
distance[i] <- 1000
parent[i] <- -1
end for
print source
scan source
print Shortest Path from Source
distance[S-1] <- 0
for i<-0 to n-1
begin
for k<-0 to E
begin

u <- edge[k][0]
v <- edge[k][1]
if distance[u]+G[u][v] < distance[v]
begin
distance[v] <- distance[u] + G[u][v]
parent[v] <- u
end if
end for
end for
for k<-0 to E
begin
u <- edge[k][0]
v <- edge[k][1]
if distance[u]+G[u][v] < distance[v]
flag <- 0
end for
if flag
for i<-0 to n
print Shortest Path of each vertex from a source
return flag         
              </div>
              
            </div>
            
        
            <div class="GrayBlock">
                <div class="item"> 
                    <h2>PROGRAM</h2>
#include <stdio.h>
int BellmanFord (int G[20][20] ,int n,int E,int edge[20][2])
{
  int i,u,v,k,distance[20],parent[20],S,flag=1;
  for (i=0;i< n;i++)
  {
    distance[i] = 1000;
    parent[i] = -1;
  }
printf(" Enter Source \n");
scanf ("%d",&S);
printf ("Shortest Path from Source %d:\n",S);
distance[S-1] = 0;
for (i=0;i< n-1;i++)
{
for (k=0;k< E;k++)
{
u = edge[k][0];
v = edge[k][1];
if (distance[u]+G[u][v] < distance[v])
{
distance[v] = distance[u] + G[u][v];
parent[v] = u;
}
}
}
for(k=0;k< E;k++)
{
u = edge[k][0];
v = edge[k][1];
if (distance[u]+G[u][v] < distance[v])
flag = 0;
}
if (flag)
for (i=0;i< n;i++)
printf ( " Vertex %d -> Cost = %d Parent = %d\n",i+1,distance[i],parent[i]+1);
return flag;

}
int main ()
{
int n,edge[20][2],G[20][20],i,j,k=0;
printf ("Enter no. of Nodes in Graph\n");
scanf ("%d",&n);
printf ("Enter Cost Adjacency Matrix of Graph\n");
for (i=0;i< n;i++)
for (j=0;j< n;j++)
{
scanf ("%d",&G[i][j]);
if (G[i][j] != 0)
{
edge[k][0] = i;
edge[k++][1] = j;
}
}
if (BellmanFord(G,n,k,edge))
printf ("No negative weight cycle\n");
else
printf ("Negative weight cycle exists\n");
return 0;
}
                </div>
            </div>

</div>
          </div>
          <div class="GrayBlock">
              <div class="item">
                <h3>Output</h3>
Enter no. of Nodes in Graph
5
Enter Cost Adjacency Matrix of Graph
0 6 0 7 0
0 0 5 8 -4
0 -2 0 0 0
0 0 -3 0 9
2 0 7 0 0
Enter Source
1
Shortest Path from Source 1:
Vertex 1 -> Cost = 0 Parent = 0
Vertex 2 -> Cost = 2 Parent = 3
Vertex 3 -> Cost = 4 Parent = 4
Vertex 4 -> Cost = 7 Parent = 1
Vertex 5 -> Cost = -2 Parent = 2
No negative weight cycle
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
