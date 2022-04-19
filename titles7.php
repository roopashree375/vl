<!DOCTYPE html>
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
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Virtual Lab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="css/Semantic/semantic.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Semantic/semantic.min.css">
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
        <a class="header item" href="titles.php">
            Go Back
        </a>
    </div>

    <div id="toTop"><i class="chevron up icon"></i></div>

    <div class="ui container" id="CardGrid">
        <div class="ui stackable grid">
            <div class="four wide column">
                <div class="ui raised card" id="car1">
                    <div class="content" id="Card1">
                        <div class="header">
                            <a href="BDA/bda.php">
                                Big Data Analytics
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            Big Data Analytics involves the design of highly scalable algorithms and systems to integrate the data and uncover large hidden values from datasets that are diverse, complex and of a massive scale.
                        </span>
                        <br><br>
                        <a class="ui button" href="BDA/bda.php">Go</a>
                    </div>
                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car2">
                    <div class="content" id="Card2">
                        <div class="header">
                            <a href="WSN/wsn.php">
                                Wireless Sensor Networks
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            Wireless sensor networks involves spatially dispersed sensors that monitor and record the physical conditions of the environment and forward the collected data to a central location.
                        </span>
                        <br><br>
                        <a class="ui button" href="WSN/wsn.php">Go</a>
                    </div>
                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car3">
                    <div class="content" id="Card3">
                        <div class="header">
                            <a href="nlp.php">
                                Blockchain Technologies
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
                                Cloud and Big Data Laboratory
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

        </div>
    </div>
</body>

</html>