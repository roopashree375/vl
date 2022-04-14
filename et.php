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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Emerging Technologies</title>
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
      Emerging Technologies
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
    <div class="ui segment">

      <div id="int" align="justify">
      Emerging technologies are technologies whose development, practical applications, or both are still largely unrealized, such that they are figuratively emerging into prominence from a background of nonexistence or obscurity. These technologies are generally new but also include older technologies that are still relatively undeveloped in potential, such as gene therapy (which dates to circa 1990 but even today still has large undeveloped potential). Emerging technologies are often perceived as capable of changing the status quo.
    </div>

       <div id="lis" style="display: none;">
        <div class="ui bulleted list">
           <a class="item" href="https://www.youtube.com/watch?v=9URSbTOE4YI">Robotic Process Automation-Introduction</a>
          <a class="item" href="https://www.youtube.com/watch?v=tvuMVsrDURA">Benefits of Robotic Process Automation</a>
          <a class="item" href="https://www.youtube.com/watch?v=Gc_nLK4ji_k">Future of Automation</a>
          <a class="item" href="https://www.youtube.com/watch?v=DgANFuMpfeQ">Intoduction to Automation Anywhere</a>
          <a class="item" href="https://www.youtube.com/watch?v=HRyK388MGt4">Recorders</a>
          <a class="item" href="https://www.youtube.com/watch?v=JUH7JqYTg08">AA Commands</a>

        </div>
      </div>

      <div id="pre" align="justify" style="display: none;">
      Emerging technologies are contemporary advances and innovations in various fields of technology.</div>

      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i> Will robots be our peers?
          </div>
          <div class="content">
            <p class="transition hidden">   The boundary between human and machine is becoming increasingly tenuous. The possibilities for enhancing ourselves might increasingly allow us to work like machines. Robots themselves might soon be endowed with traditional human attributes such as cognition and emotional intelligence, allowing them to mimic the most complex human activities. Thus, we might have to rethink not only what it means to be human but also the nature of our competitive advantage in the labor market and our place alongside machines. Which jobs will we need other humans for? Which skills will we value most? And if work became mostly obsolete, what then will be our primary occupation, how will we earn our livelihoods and how will we redefine success? </p>
          </div>

          <!-- <div class="title" >
            <i class="dropdown icon"></i>What are the characteristics of an object?</div>
          <div class="content">
            <p class="transition hidden">An Object is a bundle of data and its behaviour(often known as methods), which have states and behaviors. The characteristcs of an Object is:<br><br>
            <div class="ui bulleted list">
              <div class="item">Abstraction</div><br>
              <div class="item">Encapsulation</div><br>
              <div class="item">Method Invocation</div>
            </div></p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is an Abstract method? </div>
          <div class="content">
            <p class="transition hidden">
            <div class="ui bulleted list">
              <div class="item">A method that is declared but not defined. Only method signature no body.</div><br>
              <div class="item">Declared using the abstract keyword</div><br>
              <div class="item">Used to put some kind of compulsion on the class who inherits the class has abstract methods.</div><br>
              <div class="item">The class that inherits must provide the implementation of all the abstract methods of parent class else declare the subclass as abstract.</div>
            </div></p>
          </div>
        </div>
      </div> -->

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
