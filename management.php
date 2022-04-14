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
  <title>Management & Entrepreneurship</title>
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
    Management & Entrepreneurship
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
      Management is the act of getting people together to accomplish desired goals and objectives using available resources efficiently and effectively. Since organizations can be viewed as systems, management can also be defined as human action, including design, to facilitate the production of useful outcomes from a system. This view opens the opportunity to manage oneself,
      a pre-requisite to attempting to manage others.
      Entrepreneurship is the ability and readiness to develop, organize and run a business enterprise, along with any of its uncertainties in order to make a profit.
       The most prominent example of entrepreneurship is the starting of new businesses
     </div>



     <div id="pre" align="justify">
        The main objectives of management are: Getting Maximum Results with Minimum Efforts -
        The main objective of management is to secure maximum outputs with minimum efforts & resources. ...
         Human betterment & Social Justice - Management serves as a tool for the upliftment as well as betterment of the society.
     </div>


      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="problem1.php">Problem-1</a>
          <a class="item" href="https://www.youtube.com/watch?v=ohQvcWZt7-o&list=PLLy_2iUCG87CUSdZ0z0ihunS1QSrNqXFN&index=17">What is Business model</a>
          <a class="item" href="https://www.youtube.com/watch?v=zu7IjsAhn5A&list=PLLy_2iUCG87CUSdZ0z0ihunS1QSrNqXFN&index=18">Who is an Entrepreneur</a>
          <a class="item" href="https://www.youtube.com/watch?v=dxOGKCODSXI&list=PLLy_2iUCG87CUSdZ0z0ihunS1QSrNqXFN&index=22">Marketing of Innovation</a>
          <a class="item" href="https://www.youtube.com/watch?v=4LK_tzopi74&list=PLLy_2iUCG87CUSdZ0z0ihunS1QSrNqXFN&index=27">Sustainablity Innovation and Entrepreneurship</a>

          <a class="item" href="https://www.youtube.com/watch?v=UL86GGHBX5Q&list=PLLy_2iUCG87CUSdZ0z0ihunS1QSrNqXFN&index=37">Business Models and value preposition</a>
        </div>
      </div>



      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is the most challenging thing about being a manager?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">The most challenging thing about being a manager is also the most rewarding. It is easy to handle your performance, however, as a manager, you are responsible for your teams. So you must continually measure their performance, set clear expectations, goals, motivate them, and keep them focused. It is a great feeling to be able to accomplish this.</p>
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What are qualities of a successful manager?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">A successful manager must also be a leader because that is how you can motivate and influence your employees to perform at their peak ability. A manager must also have the vision to take the team and company.</p>
          </div>

          <!-- <div class="title" id="dion3">
            <i class="dropdown icon"></i>How to get placed?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">Go to the previous tab and <strong>solve the algorithms.</strong></p>
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
