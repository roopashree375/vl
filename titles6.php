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
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Virtual Lab</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="css/Semantic/semantic.min.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Virtual-Labs</title>
</head>

<body>

  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui  light grey inverted secondary huge menu">
    <a class="header item" href="index.php">
      Home
    </a>
    <a class="item">
      About Us
    </a>
    <a class="item">
      About Us
    </a>
    <a class="header item" href="titles.php">
      Go Back
    </a>
    <!-- <a class="item">
      <?php echo $_SESSION["username"]; ?>
    </a>
    <a class="item" href="logoutprocess.php">
      Logout
    </a> -->
  </div>
  </div>

  <div class="ui container" id="CardGrid">
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="SS/ss.php">
                System Software
              </a>
            </div>
          </div>
          <div class="content">
            <spn class="CardBody">
              Study of various machine architecture
              </sp>
              <br><br>
              <a class="ui button" href="SS/ss.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="IOT/iot.php">
                IOT - Internet of things
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Department Elective
            </span>
            <br><br>
            <a class="ui button" href="IOT/iot.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="EE/ee.php">
                Engineering Economics
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Expose the students to role and importance of engineering economics in decision making.
            </span>
            <br><br>
            <a class="ui button" href="EE/ee.php">Go</a>
          </div>
        </div>
      </div>


      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="CC/cloudcomputing.php">
                Cloud Computing
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              To learn about basics of how to use Cloud Services.
            </span>
            <br><br>
            <a class="ui button" href="CC/cloudcomputing.php">Go</a>
          </div>
        </div>
      </div>


      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="SSLAB/ssl.php">
              System Software LAB 
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
            System Software _ Operating System Lab with Mini-project
            </span>
            <br><br>
            <a class="ui button" href="SSLAB/ssl.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="CS/cs.php">
                Cyber security
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Understand the Concept of Cybercrime.
            </span>
            <br><br>
            <a class="ui button" href="CS/cs.php">Go</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
</body>

</html>