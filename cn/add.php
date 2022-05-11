<?php
 if(session_status()==PHP_SESSION_NONE)
 {
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
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Addressing in Network</title>
  
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
  <a class="item" href="../.php">
  Computer Networks
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
    Addressing in Network
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
      
      <div id="int"><u>Addressing in Network</u><br>
     
        <br><br>
        <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/watch?v=yDTC6sbYFFE" frameborder="0">
</iframe>
<br><br>
Network Addressing is one of the major responsibilities of the network layer.<br>
Network addresses are always logical, i.e., software-based addresses.<br>
A host is also known as end system that has one link to the network. The boundary between the host and link is known as an interface. Therefore, the host can have only one interface.<br>
A router is different from the host in that it has two or more links that connect to it. When a router forwards the datagram, then it forwards the packet to one of the links. The boundary between the router and link is known as an interface, and the router can have multiple interfaces, one for each of its links. Each interface is capable of sending and receiving the IP packets, so IP requires each interface to have an address.<br>
Each IP address is 32 bits long, and they are represented in the form of "dot-decimal notation" where each byte is written in the decimal form, and they are separated by the period. An IP address would look like 193.32.216.9 where 193 represents the decimal notation of first 8 bits of an address, 32 represents the decimal notation of second 8 bits of an address.</div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          Class A<br>
In Class A, an IP address is assigned to those networks that contain a large number of hosts.<br>
The network ID is 8 bits long.<br>
The host ID is 24 bits long.<br>
In Class A, the first bit in higher order bits of the first octet is always set to 0 and the remaining 7 bits determine the network ID. The 24 bits determine the host ID in any network.<br>

The total number of networks in Class A = 27 = 128 network address<br>

The total number of hosts in Class A = 224 - 2 = 16,777,214 host address<br>
<br>
<br> <br>
Class B<br>
In Class B, an IP address is assigned to those networks that range from small-sized to large-sized networks.<br>

The Network ID is 16 bits long.<br>
The Host ID is 16 bits long.<br>
In Class B, the higher order bits of the first octet is always set to 10, and the remaining14 bits determine the network ID. The other 16 bits determine the Host ID.<br>

The total number of networks in Class B = 214 = 16384 network address<br>

The total number of hosts in Class B = 216 - 2 = 65534 host address<br>
<br>
<br> <br>
Class C<br>
In Class C, an IP address is assigned to only small-sized networks.<br>
he Network ID is 24 bits long.<br>
The host ID is 8 bits long.<br>
In Class C, the higher order bits of the first octet is always set to 110, and the remaining 21 bits determine the network ID. The 8 bits of the host ID determine the host in a network.<br>

The total number of networks = 221 = 2097152 network address<br>

The total number of hosts = 28 - 2 = 254 host address<br>


            
            
            <br>
            <div class="item">
            
</div>
</div>
            
      
      

       
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
         <a href="quiz/addquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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
 
          </div>
          

  
</body>
</html>
