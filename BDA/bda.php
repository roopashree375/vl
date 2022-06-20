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
    <title>BDA</title>
</head>

<body>
    <h1 class="ui header" style="text-align:center" id="head">
        <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
        <a href="../titles.php">Virtual Labs</a>
    </h1>
    <div id="toTop"><i class="chevron up icon"></i></div>
    <div>
        <div class="ui  light grey inverted secondary huge menu">
            <a class="header item" href="../index.php">
                Home
            </a>
            <a class="header item" href="../titles7.php">
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
            Big Data Analytics
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
                        Big data is a new driver of the world economic and societal changes. The world's data collection is reaching a tipping point for major technological changes that can bring new ways in decision making, managing our health, cities, finance and education. While the data complexities are increasing including data's volume, variety, velocity and veracity, the real impact hinges on our ability to uncover the value in the data through Big Data Analytics technologies. Big Data Analytics poses a grand challenge on the design of highly scalable algorithms and systems to integrate the data and uncover large hidden values from datasets that are diverse, complex, and of a massive scale. Potential breakthroughs include new algorithms, methodologies, systems and applications in Big Data Analytics that discover useful and hidden knowledge from the Big Data efficiently and effectively.
                        <br> <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui bulleted list">

                            <a class="item" href="./bdav1.php">What is Big Data Analytics?</a>
                            <a class="item" href="./bdav2.php">Big Data Applications</a>
                            <a class="item" href="./bdav3.php">How do NoSQL databases work?</a>
                            <a class="item" href="./bdav4.php">Introduction to Hadoop</a>
                            <a class="item" href="./bdav5.php">MapReduce Explanation</a>
                            <a class="item" href="./bdav6.php">Hadoop Distributed File System (HDFS) Introduction</a>
                            <a class="item" href="./bdav7.php">Big Data Use cases</a>

                        </div>
                    </div>

                    <div id="pre" style="display: none;">
                        <ol>
                            <li>Interpret several key technologies used in Manipulating, storing and analyzing data.</li>
                            <li> Relate between Big data and NOSQL.</li>
                            <li> Assessing the data for Hadoop File System.</li>
                            <li> Develop the process of Map reduce analytics using Hadoop concepts.</li>
                            <li> Apply Map reduce concepts for business applications</li>
                            <li> Summarize big data for business intelligence.</li>
                        </ol>
                        <br>
                    </div>

                    <div id="faqs" style="display: none;">
                        <div class="ui styled accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>What is a Big Data Analytics?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Big data refers to data sets that are too large or complex to be dealt with by traditional data-processing application software. Data with many fields offer greater statistical power, while data with higher complexity may lead to a higher false discovery rate.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>How much data does it take to be called Big Data?
                            </div>
                            <div class="content">
                                <p class="transition hidden">This question cannot be easily answered absolutely. Based on the infrastructure on the market the lower threshold is at about 1 to 3 terabytes. But using Big Data technologies can be sensible for smaller databases as well, for example if complex mathematiccal or statistical analyses are run against a database.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Types of Big Data
                            </div>
                            <div class="content">
                                <p class="transition hidden">Structured, Semi-structured and Unstructured <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Who supports and funds Hadoop?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Hadoop is one of the projects of the Apache Software Foundation. The main Hadoop project is contributed to by a global network of developers. Sub-projects of Hadoop are supported by the world’s largest Web companies, including Facebook and Yahoo. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What are the five V's of big data?
                            </div>
                            <div class="content">
                                <p class="transition hidden">volume, value, variety, velocity, and veracity. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is the importance of big data analytics?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Big data analytics helps organizations harness their data and use it to identify new opportunities. That, in turn, leads to smarter business moves, more efficient operations, higher profits and happier customers. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Which tools are used in big data analytics?
                            </div>
                            <div class="content">
                                <p class="transition hidden">
                                <ol>
                                    <li>Hadoop - helps in storing and analyzing data.</li>
                                    <li>MongoDB - used on datasets that change frequently.</li>
                                    <li>Talend - used for data integration and management.</li>
                                    <li>Cassandra - a distributed database used to handle chunks of data.</li>
                                    <li>Spark - used for real-time processing and analyzing large amounts of data.</li>
                                </ol><br>
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