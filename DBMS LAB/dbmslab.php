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
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>DBMS LAB</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="titles.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item">
        About Us
      </a>
      <a class="header item" href="../titles4.php">
        Go Back
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
      DBMS Laboratory
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
            Database Management System (DBMS) is a software for storing and retrieving user data while considering appropriate security measures. It consists of a group of programs which manipulate the database. The DBMS accepts the request for data from an application and instructs the operating system to provide the specific data. In large systems, a DBMS helps users and other third-party software to store and retrieve data. DBMS allows users to create their own databases as per their requirement. The term “DBMS” includes the user of the database and other application programs. It provides an interface between the data and the software application.
          </div>

          <div id="lis" style="display: none;">
            <div class="ui bulleted list">
              <a class="item" href="exp1.php">Experiment 1: Student Database</a>
              <a class="item" href="exp2.php">Experiment 2: Flight Database</a>
              <a class="item" href="exp3.php">Experiment 3: Book dealer Database</a>
              <a class="item" href="exp4.php">Experiment 4: Banking Enterprise Database</a>
              <a class="item" href="exp5.php">Experiment 5: Order Processing Database</a>
            </div>
          </div>

          <div id="pre" style="display: none;">
            <ol>
              <li>Understand fundamentals of database programming such as tables, constraints and queries</li><br>
              <li>Understand fundamentals of database programming using SQL, including Data definition languages, Data manipulation languages, Transaction control and data control.</li><br>
              <li>A deep understanding of data retrieval language to solve complex queries.</li>
            </ol>
          </div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title">
                <i class="dropdown icon"></i>Why is DBMS important?
              </div>
              <div class="content">
                <p class="transition hidden">A DBMS can improve your data processes and increase the business value of your organization's data assets, freeing users across the organization from repetitive and time-consuming data processing tasks. </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What DBMS used for?
              </div>
              <div class="content">
                <p class="transition hidden">Database Management Systems (DBMS) are software systems used to store, retrieve, and run queries on data. A DBMS serves as an interface between an end-user and a database, allowing users to create, read, update, and delete data in the database.</p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What are the limitations of DBMS?
              </div>
              <div class="content">
                <p class="transition hidden">More Costly, High Complexity, Database handling staff required, Database Failure, High Hardware Cost, Huge Size, Upgradation Costs and Cost of Data Conversion.<br>
                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What are the data types in DBMS?

              </div>
              <div class="content">
                <p class="transition hidden">Numerical Data type, Character/String Data type, Date Data type and Binary Data type. <br>
                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What are keys in SQL?
              </div>
              <div class="content">
                <p class="transition hidden">An SQL key is either a single column (or attribute) or a group of columns that can uniquely identify rows (or tuples) in a table. SQL keys ensure that there are no rows with duplicate information. Not only that, but they also help in establishing a relationship between multiple tables in the database.<br>
                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What are the types of SQL?
              </div>
              <div class="content">
                <p class="transition hidden">Data Definition Language (DDL) Statements, Data Manipulation Language (DML) Statements, Transaction Control Statements, Session Control Statements, System Control Statement, Embedded SQL Statements.<br>
                </p>
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