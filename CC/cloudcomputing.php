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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images/dscelogo.png">
  <title>cloudcomputing</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="../titles6.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item" href="../index.php">
        About Us
      </a>
      <a class="header item" href="../titles6.php">
        Go Back
      </a>
      <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item -->
      </a>
    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      <h2 class="ui header" style="font-size:35px; margin-left:10px;">
        Cloud Computing
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
              List of Tutorials
            </a>
            <a class="item" id="faq">
              FAQ's
            </a>

            
          </div>
        </div>
        <div class="twelve wide stretched column">
          <div class="ui segment">

            <div id="int" align="justify">


            <p>Cloud Computing is the delivery of computing services such as servers, storage, databases, networking, software, analytics, intelligence, and more, over the Cloud (Internet).</p>
            
            </div>


            <div id="lis" style="display: none;">
              <div class="ui bulleted list">
                <a class="item" href="ccintro.php">Introduction to Cloud Computing </a>
                <a class="item" href="cca.php">Cloud Computing: Application Paradigms and Concepts:</a>
                <a class="item" href="networking.php">Storage Systems & Networking Support</a>
                <a class="item" href="scheduling.php">Resource management and scheduling</a>
                <a class="item" href="cloudsecurity.php">cloud security</a>
              </div>
            </div>

            <div id="pre" style="display: none;">

            <li>  To learn about basics of how to use Cloud Services</li>
            <li>To gain knowledge on Virtualization</li>
            <li>To acquire knowledge about Task Scheduling algorithms.</li>
            <li>To gain basic understanding of Map-Reduce concept to applications</li>
            <li> To gain knowledge in cloud resource virtualization and scheduling.</li>
              
            </div>

            <div id="faqs" style="display: none;">
              <div class="ui styled accordion">
                <div class="title">
                  <i class="dropdown icon"></i>Importance of Cloud Computing
                </div>
                <div class="content">
                  <p class="transition hidden">Expose the students to role and importance of cloud computing</p>
                </div>

                <div class="title">
                  <i class="dropdown icon"></i>What does Cloud Computing lead to ?
                </div>
                <div class="content">
                  <p class="transition hidden">To gain knowledge on Virtualization and different computing model </p>
                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
  </div>
  <script language='javascript'>
    $(document).ready(function() {
      $('.ui.accordion').accordion();
    });
  </script>
</body>

</html>