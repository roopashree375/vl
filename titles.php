<!-- Hello evveryone -->
<!DOCTYPE html>
<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
// if(!isset($_SESSION['username']))
// {
//   header("Location: index.php");
//   exit;
// }
// }
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
  <link rel="stylesheet" href="css\home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Virtual-Labs</title>
</head>

<body>

  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
    <br>
    <p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
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
    <a class="header item" href="titles1.php">
      1st semester
    </a>
    <a class="header item" href="titles2.php">
      2nd semester
    </a>
    <a class="header item" href="titles3.php">
      3rd semester
    </a>
    <a class="header item" href="titles4.php">
      4th semester
    </a>
    <a class="header item" href="titles5.php">
      5th semester
    </a>
    <a class="header item" href="titles6.php">
      6th semester
    </a>
    <a class="header item" href="titles7.php">
      7th semester
    </a>
  </div>
  </div>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui container" id="CardGrid">
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="cpps.php">
                C Programming For Problem Solving
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains educational videos on C Programming For Problem Solving (CPPS)
            </span>
            <br><br>
            <a class="ui button" href="cpps.php">Go</a>
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="cpl.php">
                C Programming Laboratory
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 6 Programs with Applications in C Programming Language
            </span>
            <br><br>
            <a class="ui button" href="cpl.php">Go</a>
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="datastructures.php">
                Data Structures Laboratory
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 6 Programs with Applications On Data Structures in C Programming Language
            </span>
            <br><br>
            <a class="ui button" href="datastructures.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car2">
          <div class="content" id="Card2">
            <div class="header">
              <a href="OppsWithJava\OopsWithJava.php">
                OOPS With Java
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains concepts On Object Oriented Programming in Java
            </span>
            <br><br>
            <a class="ui button" href="OppsWithJava\OopsWithJava.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car3">
          <div class="content" id="Card3">
            <div class="header">
              <a href="CO\co.php">
                Computer Organisation
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains educational videos on Computer Organisation (CO)
            </span>
            <br><br>
            <a class="ui button" href="CO\co.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car4">
          <div class="content" id="Card4">
            <div class="header">
              <a href="Logic design\logicdesign1.php">
                Logic Design
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains educational videos on Logic Design (LD)
            </span>
            <br><br>
            <a class="ui button" href="Logic design\logicdesign1.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car2">
          <div class="content" id="Card2">
            <div class="header">
              <a href="Daa\daa.php">
                Data Analysis And Algorithm
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 7 Programs with Applications On Data Analysis and algorithm in C Programming Language
            </span>
            <br><br>
            <a class="ui button" href="Daa\daa.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car6">
          <div class="content" id="Card6">
            <div class="header">
              <a href="dbms.php">
                Database Management Laboratory
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 12 Experiments On Database Management in Oracle SQL
            </span>
            <br><br>
            <a class="ui button" href="dbms.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car1">
          <div class="content" id="Card1">
            <div class="header">
              <a href="computernetwork.php">
                Computer Networks
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              A computer network is a set of computers sharing resources located on or provided by network nodes.
            </span>
            <br><br>
            <a class="ui button" href="computernetwork.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car2">
          <div class="content" id="Card2">
            <div class="header">
              <a href="aiml.php">
                Artificial Intelligence & ML
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Artificial intelligence (AI) is concerned with building smart machines capable of performing tasks.
            </span>
            <br><br>
            <a class="ui button" href="aiml.php">Go</a>
          </div>
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car3">
          <div class="content" id="Card3">
            <div class="header">
              <a href="nlp.php">
                Natural language processing
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              NLP is concerned with giving computers the ability to understand text and spoken words.
            </span>
            <br><br>
            <a class="ui button" href="nlp.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car4">
          <div class="content" id="Card4">
            <div class="header">
              <a href="sf.php">
                Software engineering
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Software engineering is the systematic application of engineering for development of software.
            </span>
            <br><br>
            <a class="ui button" href="sf.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui  raised card" id="car5">
          <div class="content" id="Card5">
            <div class="header">
              <a href="cn.php">
                Computer Networks Laboratory
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 12 Experiments On Computer Networks in Cisco Packet Tracer
            </span>
            <br><br>
            <a class="ui button" href="cn.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card" id="car6">
          <div class="content" id="Card6">
            <div class="header">
              <a href="oomd.php">
                Object oriented modeling and design
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Object-oriented modeling is an approach to modeling an application that is used at the beginning of the software life cycle.
            </span>
            <br><br>
            <a class="ui button" href="oomd.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
          <div class="content" id="Card7">
            <div class="header">
              <a href="mad.php">
                Mobile application development
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Mobile application development is the process of creating software applications that run on a mobile device.
            </span>
            <br><br>
            <a class="ui button" href="mad.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
          <div class="content" id="Card8">
            <div class="header">
              <a href="management.php">
                Management enterpreneurship
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Practice of taking entrepreneurial knowledge and utilizing it for increasing the effectiveness of new business venturing.
            </span>
            <br><br>
            <a class="ui button" href="management.php">Go</a>
          </div>

        </div>
      </div>
      <div class="four wide column">
        <div class="ui  raised card" id="car5">
          <div class="content" id="Card5">
            <div class="header">
              <a href="aimllab.php">
                AIML labs
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains 10 labs on AIML.
            </span>
            <br><br>
            <a class="ui button" href="aimllab.php">Go</a>
          </div>

        </div>
      </div>
      <div class="four wide column">
        <div class="ui  raised card" id="car5">
          <div class="content" id="Card5">
            <div class="header">
              <a href="et.php">
                Emerging technologies
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Emerging technologies are technologies whose development, practical applications are still not figured out.
            </span>
            <br><br>
            <a class="ui button" href="et.php">Go</a>
          </div>

        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
          <div class="content" id="Card8">
            <div class="header">
              <a href="placement.php">
                Pre-Placement Training
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              Contains concepts which help students in Placements
            </span>
            <br><br>
            <a class="ui button" href="placement.php">Go</a>
          </div>

        </div>
      </div>
      <div class="four wide column">
        <div class="ui  raised card" id="car5">
          <div class="content" id="Card5">
            <div class="header">
              <a href="cpp.php">
                C programming
              </a>
            </div>
          </div>
          <div class="content">
            <span class="CardBody">
              C programming
            </span>
            <br><br>
            <a class="ui button" href="cpp.php">Go</a>
          </div>

        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
</body>

</html>