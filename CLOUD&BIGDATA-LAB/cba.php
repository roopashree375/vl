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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">../
  <title>Cloud & BigData</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
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
  <a class="header item" href="../titles7.php">
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
    Cloud & BigData Analytics Laboratory
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Theory
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
      “CloudAnalyst” is a simulator used for simulating large scaled applications along with a novel
       approach for such research oriented studies. There are several toolkits that can be used to model a
       simulated environment to study the behaviour of a large scaled application on the Internet.
       <br> <br>
       BigData: Hadoop or Spark kind of environment is used for offline or online processing of data. The
      industry is looking for scalable architectures to carry out parallel data processing of big data.
      There is a lot of progress in recent years, however, there is a huge potential to improve
      performance.
      </div>

       <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="https://drive.google.com/file/d/1vVBirmJgW_u3bs6-yn67dZaNaaq79AvM/view?usp=sharing">Experiment 1</a>
          <a class="item" href="https://drive.google.com/file/d/1AalxbkZRnFjSAv2985kecJxZSmxsKUkU/view?usp=sharing">Experiment 2</a>
          <a class="item" href="https://drive.google.com/file/d/1O5mT4Yczc372Die3abw4OzGVStmmfL_V/view?usp=sharing">Experiment 3</a>
          <a class="item" href="https://drive.google.com/file/d/1IhUTk3eb0POioLVGDIx4BjF6KfPofmpk/view?usp=sharing">Experiment 4 Hadoop Modes </a>
          <a class="item" href="https://drive.google.com/file/d/1kE9UZRq5md5K66VxtsTLerk-p18GxcMD/view?usp=sharing">Experiment 5 File Management in Hadoop</a>
          <a class="item" href="MapReduce.php">Experiment 6 Map Reduce Program</a>
        </div>
      </div>

      <div id="pre" style="display: none;">
       <ol>
          <li>Optimize business decisions and create competitive advantage with Cloud and Big data analytics.</li>
          <li>Implement best practices for Hadoop development.</li>
          <li>Data management and its analysis for storing and sorting is viewed.</li>
          <li>Impart the architectural concepts of Hadoop and introducing map reduce paradigm.</li>
          
          </ol>
        </div>

     

          <div id="faqs" style="display: none;">
                        <div class="ui styled accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>What is cloud computing lab?

                            </div>
                            <div class="content">
                                <p class="transition hidden">Cloud-Based Computer Laboratory (CBCL) is an education platform that will provide a controlled experimental environment for hands-on experiments using cloud based lab technologies. </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is cloud and Bigdata explain?

                            </div>
                            <div class="content">
                                <p class="transition hidden">Essentially, “Big Data” refers to the large sets of data collected, while “Cloud Computing” refers to the mechanism that remotely takes this data in and performs any operations specified on that data.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Does big data use cloud?
                            </div>
                            <div class="content">
                                <p class="transition hidden">The public cloud has emerged as an ideal platform for big data. A cloud has the resources and services that a business can use on demand, and the business doesn't have to build, own or maintain the infrastructure. Thus, the cloud makes big data technologies accessible and affordable to almost any size of enterprise.<br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is Hadoop system?

                            </div>
                            <div class="content">
                                <p class="transition hidden">Apache Hadoop is an open source framework that is used to efficiently store and process large datasets ranging in size from gigabytes to petabytes of data. Instead of using one large computer to store and process the data, Hadoop allows clustering multiple computers to analyze massive datasets in parallel more quickly. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is Hadoop in cloud?

                            </div>
                            <div class="content">
                                <p class="transition hidden">Hadoop is an Apache open source framework written in java that allows distributed processing of large datasets across clusters of computers using simple programming models. The Hadoop framework application works in an environment that provides distributed storage and computation across clusters of computers.<br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Why Hadoop is called a big data technology?


                            </div>
                            <div class="content">
                                <p class="transition hidden">Hadoop is the Big Data operating system. Optimized for parallel processing using structured and unstructured data, using low hardware costs. Hadoop processing is in batch, not in real time, replicating the data through network, and maintaining fault tolerance.<br>
                                </p>
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
