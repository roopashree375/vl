<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
  }
}
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
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
    <br>
    <p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
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
      if (!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
      else {
        echo "<a class=\"item\">";
        echo $_SESSION['username'];
        echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
      }
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
            List of Topics
          </a>
          <a class="item" id="faq">
            FAQ's
          </a>
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui clearing segment">

          <div id="int">
            Understand how data can be represented in C.</br>
            Understand to analyse and design the problem solving techniques.</br>
            Understand how to create modular programs.</br>
            Understand the various memory and data access methods.

          </div>

          <div id="lis" style="display: none;">
            <div style="display:inline-block;">
              <button class="ui icon dropdown button">
                <span class="text">Network Topplogy </span>
                <div class="menu">
                  <a class="item" href="cn\nt.php">Network Topplogy</a>
                </div>
              </button><br>
              <button class="ui icon dropdown button">
                <span class="text">OSI Model</span>
                <div class="menu">
                  <a class="item" href="cn\osi.php">OSI Model</a>
                </div>
              </button><br>
              <div class="ui icon dropdown button">
                <span class="text">Datalink Layer</span>
                <div class="menu">
                  <a class="item" href="cn\dll.php">Datalink Layer</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Flow control</span>
                <div class="menu">
                  <a class="item" href="cn\fc.php">Flow control</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">TCP/IP protocol</span>
                <div class="menu">
                  <a class="item" href="cn\tcp.php">TCP/IP protocol</a>
                </div>
              </div><br>
              <div class="ui icon dropdown button">
                <span class="text">Addressing in Network</span>
                <div class="menu">
                  <a class="item" href="cn\add.php">Addressing in Network</a>
                </div>
              </div><br>
            </div>
          </div>

          <div id="pre" style="display: none;">To make students get better at Computer Networks.</div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title" id="dion1">
                <i class="dropdown icon"></i>What is a Computer Networks?
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord1">A computer network is a system that connects numerous independent computers in order to share information (data) and resources. The integration of computers and other different devices allows users to communicate more easily.<br>
A computer network is a collection of two or more computer systems that are linked together. A network connection can be established using either cable or wireless media. Hardware and software are used to connect computers and tools in any network.<br>
A computer network consists of various kinds of nodes. Servers, networking hardware, personal computers, and other specialized or general-purpose hosts can all be nodes in a computer network. Hostnames and network addresses are used to identify them.<br></p>
              </div>

              <div class="title" id="dion2">
                <i class="dropdown icon"></i>What is Computer Networks used for?
              </div>
              <div>
                <p style="padding: 10px;display: none;" id="accord2">Goal Of Networking<br>
                Programs do not have to execute on a single system because of resource and load sharing.<br>
Reduced costs – Multiple machines can share printers, tape drives, and other peripherals.<br>
Reliability – If one machine fails, another can take its place.<br>
Scalability (it’s simple to add more processors or computers)<br>
Communication and mail (people living apart can work together)<br>
Information Access (remote information access, access to the internet, e-mail, video conferencing, and online shopping)<br>
Entertainment that is interactive (online games, videos, etc.)<br>
Social Networking</p>
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
      $('.ui.dropdown').dropdown();
    });
  </script>
</body>

</html>