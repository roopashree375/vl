<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
//     if (!isset($_SESSION['username'])) {
//         header("Location: index.php");
//         exit;
//     }
// }
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
    <title>Wireless Sensor Network</title>
</head>

<body>
    <h1 class="ui header" style="text-align:center" id="head">
        <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
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
            Wireless Sensor Network
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
                    <a class="item" id="quiz">
                        QUIZ
                    </a>
                </div>
            </div>
            <div class="twelve wide stretched column">
                <div class="ui segment">

                    <div id="int" align="justify">
                        Wireless sensor networks refer to networks of spatially dispersed and dedicated sensors that monitor and record the physical conditions of the environment and forward the collected data to a central location. WSNs can measure environmental conditions such as temperature, sound, pollution levels, humidity and wind. <br> <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui bulleted list">

                            <a class="item" href="./wsnv1.php">What is Wireless Sensor Network?</a>
                            <a class="item" href="./wsnv2.php">WSN Characteristics</a>
                            <a class="item" href="./wsnv3.php">Network architecture</a>
                            <a class="item" href="./wsnv4.php">S-MAC Protocol</a>
                            <a class="item" href="./wsnv5.php">Contention based and Scheduled based Protocols</a>
                            <a class="item" href="./wsnv6.php">Multicast Routing</a>
                            <a class="item" href="./wsnv7.php">Quality of service in WSN</a>

                        </div>
                    </div>

                    <div id="pre" style="display: none;">
                        <ol>
                            <li>Understand the Architecture and Design Principles of Wireless Sensor Network</li>
                            <li>Analyze Hardware and Software Design Issues in Energy Efficiency of Wireless Sensor Network</li>
                            <li>Illustrate the various flow and error Control in Wireless Sensor Network</li>
                            <li>Compare the Efficiency of Routing Protocols Used In Wireless Sensor Network</li>
                            <li>Demonstrate the Various Deployment Models Used In Wireless Sensor Network to improve the quality of services</li>
                            <li>Evaluate the various models and protocols used in Wireless Sensor Networ</li>
                        </ol>
                        <br>
                    </div>

                    <div id="faqs" style="display: none;">
                        <div class="ui styled accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>What is a wireless sensor network?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Wireless sensor networks refer to networks of spatially dispersed and dedicated sensors that monitor and record the physical conditions of the environment and forward the collected data to a central location. WSNs can measure environmental conditions such as temperature, sound, pollution levels, humidity and wind.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Different contention based protocols?
                            </div>
                            <div class="content">
                                <p class="transition hidden">CSMA and PAMAS</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Different Scheduled based protocols?
                            </div>
                            <div class="content">
                                <p class="transition hidden">SMAC, BMAC, TRAMA <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What are the problems in wireless sensor networks?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Challenges in such WSN include high bandwidth demand, high energy consumption, quality of service (QoS) provisioning, data processing and compressing techniques, and cross-layer design. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is the need for wireless sensor network?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Surveillance and Monitoring for security and threat detection, Environmental temperature,humidity and air pressure, Noise Level of the surrounding Medical applications like patient monitoring, Agriculture. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is the advantage of a wireless sensor network in industrial applications?
                            </div>
                            <div class="content">
                                <p class="transition hidden">WSNs are faster to install and much easier to relocate compared to wired solutions. They are extremely scalable and link-reliable, and offer real-time capability and energy independence when deployed with energy-harvesting devices. <br>
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