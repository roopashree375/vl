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
  <title>IOT</title>
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
      Internet of things
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

          <a class="item" id="faq">
            Quiz
          </a>
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int" align="justify">
            <p>The interconnection via the internet of computing devices embedded in everyday objects, enabling them to send and receive data.
            <p>
            <p>The Internet of things (IoT) describes physical objects (or groups of such objects) with sensors, processing ability, software, and other technologies that connect and exchange data with other devices and systems over the Internet or other communications networks.</p>
          </div>

          <div id="lis" style="display: none;">
            <div class="ui bulleted list">
              <a class="item" href="./iot1.php">Introduction to IOT</a>
              <a class="item" href="./iot2.php">IoT and M2M</a>
              <a class="item" href="./iot3.php">Sensors, Participatory Sensing, RFID’s</a>
              <a class="item" href="./iot4.php">Design Principles for Web Connectivity:</a>
              <a class="item" href="./iot5.php">IoT Privacy, Security and Design methodology</a>

            </div>
          </div>

          <div id="pre" style="display: none;">1. To understand how internet and internet of things work.
            <br>2. To understand the constraints and opportunities of wireless and mobile networks for Internet
            of Things.</br>
            3. To understand and analyze various performance measurements for real-time case-studies.<br>
          </div>




          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title">
                <i class="dropdown icon"></i>What is IOT?
              </div>
              <div class="content">
                <p class="transition hidden">The Internet of Things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the internet.</p>
              </div>



              <div class="title">
                <i class="dropdown icon"></i>Applications of IOT
              </div>
              <div class="content">
                <p class="transition hidden">1.Smart City</p>
                <p class="transition hidden">2.Farming </p>
                <p class="transition hidden">3.Retail IOT</p>
                <p class="transition hidden">4.SMART GRID </p>
                <p class="transition hidden">ETC ETC </p>

              </div>


              <div class="title">
                <i class="dropdown icon"></i>How does IOT work?
              </div>
              <div class="content">
                <p class="transition hidden">An IoT system consists of sensors/devices which “talk” to the cloud through some kind of connectivity. </p>
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