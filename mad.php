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
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Mobile Application Development </title>
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
   <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item
  </a> -->
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
  Mobile Application Development
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
        Important videos
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">

      <div id="int" align="justify">
        Mobile application development is the process of creating software applications that run on a mobile device,
          and a typical mobile application utilizes a network connection to work with remote computing resources. Hence,
           the mobile development process involves creating installable software bundles (code, binaries, assets, etc.) ,
            implementing backend services such as data access with an API, and testing the application on target devices.
          There are two dominant platforms in the modern smartphone market. One is the iOS platform from Apple Inc.
           The iOS platform is the operating system that powers Apple's popular line of iPhone smartphones. The second
           is Android from Google. The Android operating system is used not only by Google devices
           but also by many other OEMs to built their own smartphones and other smart devices.

     </div>



     <div id="pre" align="justify">
       Ultimately, the aims and objectives of mobile applications in work settings is to improve productivity, and this is aided though
      the more efficient interactions and improved morale that a well-developed app can bring.

   </div>


      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="https://www.youtube.com/watch?v=qqzy1EEid0E">Overview to Mobile Application Development</a>
           <a class="item" href="https://www.youtube.com/watch?v=3mtr0ouSwRo">Introduction to Android</a>
           <a class="item" href="https://www.youtube.com/watch?v=K2dodTXARqc">Introduction to Android Studio</a>
           <a class="item" href="https://www.youtube.com/watch?v=DQ3f06iJujE">User Interaction </a>
           <a class="item" href="https://www.youtube.com/watch?v=MV2mB1Wev2c">Background Tasks</a>
           <a class="item" href="https://www.youtube.com/watch?v=hJPk50p7xwA">Preferences And Settings</a>
           <a class="item" href="https://www.youtube.com/watch?v=a8Gh7d8GebA">Mobile Application Security</a>


  </div>
      </div>



      <div id="faqs" style="display: none;">
          <div class="ui styled accordion">
            <div class="title">
              <i class="dropdown icon"></i> What is Android?
            </div>
            <div class="content">
              <p class="transition hidden">Android is an open-source operating system and is mainly popular for Smartphones and Tablets.This operating system is Linux Kernel-based. Using the Android operating system, the developer develops the functions or programs which can perform basic as well as the advanced type of operations on the Smartphone.</p>
            </div>

            <div class="title" >
              <i class="dropdown icon"></i> What is the Android SDK? </div>
            <div class="content">
              <p class="transition hidden">To develop a mobile application, Android developers require some tools and this requirement is satisfied by “Android SDK” which is a set of tools that are used for developing or writing apps.

  It has a Graphical User Interface that emulates the Android environment. This emulator acts like an actual mobile device on which the developers write their code and then debug/test the same code to check if anything is wrong.</p>
            </div>

            <div class="title" >
              <i class="dropdown icon"></i>Name the languages supported for Android development. </div>
            <div class="content">
              <p class="transition hidden"> Java is the widely used language for Android development. It also supports C/C++ and when used with Android SDK, it improves the performance speed too.</p>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>
