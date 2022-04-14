<!DOCTYPE html>
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Computer Networks</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
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
    Computer Networks
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Objective
      </a>
      <a class="item" id="list">
        List of Experiments
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui clearing segment">

      <div id="int">
      A computer network is a set of devices connected through links. A node can be computer, printer, or any other device capable of sending or receiving the data. The links connecting the nodes are known as communication channels.

      Computer Network uses distributed processing in which task is divided among several computers. Instead, a single computer handles an entire task, each separate computer handles a subset.
      </div>
      <div id="lis" style="display: none;">
      <div class= "ui bulleted list">
         <a class="item" href="https://www.youtube.com/watch?v=4_zSIXb7tLQ">Network Topplogy</a>
          <a class="item" href="https://www.youtube.com/watch?v=qBXmbJZQ5rY">OSI Model</a>
           <a class="item" href="https://www.youtube.com/watch?v=Tr2y2xs2Crg">Data link layer</a>
            <a class="item" href="https://www.youtube.com/watch?v=ReQiSK8W3Ag">Flow control</a>
             <a class="item" href="https://www.youtube.com/watch?v=wvPe4Zb0tUA&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=19">TCP/IP protocol</a>
              <a class="item" href="https://www.youtube.com/watch?v=yDTC6sbYFFE&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=18">Addressing in Network</a>
               <a class="item" href="https://www.youtube.com/watch?v=263Z4PDuqpA&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=98">Logical Addressing and Subnetting</a>
                <a class="item" href="https://www.youtube.com/watch?v=OyBIburQl6s&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=100">Routing Protocol</a>
                 <a class="item" href="https://www.youtube.com/watch?v=TF-6G-cFi5E&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=101">Nat and IPV6</a>
                  <a class="item" href="https://www.youtube.com/watch?v=wTNVM7WrJpc">Transport layer</a>
                  <a class="item" href="https://www.youtube.com/watch?v=wTNVM7WrJpc">Mutliple Access and Ethernet</a>



      <!-- <button class="ui icon dropdown button">
        <span class="text">Operations on Stack</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="infixtopostfix.php">Infix to Postfix</a>
          <a class="item" href="ratmaze.php">Maze</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Operations on Queue</span>
        <div class="menu">
          <a class="item" href="queue.php">Queue</a>
          <a class="item" href="queue.php">Calculator</a>
          <a class="item" href="queue.php">Maze</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Singly Linked List</span>
        <div class="menu">
          <a class="item" href="singlylinkedlist.php">Singly Linked List</a>
          <a class="item" href="singlylinkedlist.php">Calculator</a>
          <a class="item" href="singlylinkedlist.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Doubly Linked List</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Binary Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Preorder Traversal in Binary Search Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br> -->
      </div>
      </div>
      <!-- <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Operations on Stack</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="infixtopostfix.php">Infix to Postfix</a>
          <a class="item" href="ratmaze.php">Maze</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Operations on Queue</span>
        <div class="menu">
          <a class="item" href="queue.php">Queue</a>
          <a class="item" href="queue.php">Calculator</a>
          <a class="item" href="queue.php">Maze</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Singly Linked List</span>
        <div class="menu">
          <a class="item" href="singlylinkedlist.php">Singly Linked List</a>
          <a class="item" href="singlylinkedlist.php">Calculator</a>
          <a class="item" href="singlylinkedlist.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Doubly Linked List</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Binary Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Preorder Traversal in Binary Search Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      </div>
      </div> -->

      <div id="pre" style="display: none;">To make student get to know about the fundamental of computer network</div>

      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What do you mean by Network?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">Set of devices connected to each other over the physical medium is known as a computer network. For example the Internet.</p>
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What do you mean by Network Topology?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">A network topology is a physical structure of the network which defines how the computers or node will be connected to each other.</p>
          </div>

          <!-- <div class="title" id="dion3">
            <i class="dropdown icon"></i>What is a dog?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div> -->
        </div>
      </div>

    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
                $('.ui.dropdown').dropdown();
             });
</script>
</body>
</html>
