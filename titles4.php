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
                <div class="ui raised card" id="car6">
                    <div class="content" id="Card6">
                        <div class="header">
                            <a href="DBMS LAB/dbmslab.php">
                                Database Management Laboratory
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            Contains Experiments On Database Management in SQL
                        </span>
                        <br><br>
                        <a class="ui button" href="DBMS LAB/dbmslab.php">Go</a>
                    </div>
                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car6">
                    <div class="content" id="Card6">
                        <div class="header">
                            <a href="dbmstheory/dbmstheory.php">
                                Database Management Theory
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            Contains Experiments On Database Management in SQL
                        </span>
                        <br><br>
                        <a class="ui button" href="dbmstheory/dbmstheory.php">Go</a>
                    </div>
                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car2">
                    <div class="content" id="Card2">
                        <div class="header">
                            <a href="Automata Theory/automata_theory.php">
                                Automata Theory and Formal Languages
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            It contains the topics related to Automata Theory and Formal Languages.
                        </span>
                        <br><br>
                        <a class="ui button" href="Automata Theory/automata_theory.php">Go</a>
                    </div>
                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car3">
                    <div class="content" id="Card3">
                        <div class="header">
                            <a href="Daa/daa.php">
                                Design and Analysis of Algorithms
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            It contains the topics related to Design and Analysis of Algorithms
                        </span>
                        <br><br>
                        <a class="ui button" href="Daa/daa.php">Go</a>
                    </div>

                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car4">
                    <div class="content" id="Card4">
                        <div class="header">
                            <a href="OS/os.php">
                                Operating System (OS)
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            It contains the topics related to Operating Systems
                        </span>
                        <br><br>
                        <a class="ui button" href="OS/os.php">Go</a>
                    </div>

                </div>
            </div>

            <div class="four wide column">
                <div class="ui raised card" id="car4">
                    <div class="content" id="Card4">
                        <div class="header">
                            <a href="Microprocessor/microprocessor.php">
                                Microprocessors and Microcontrollers.
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <span class="CardBody">
                            It contains the topics related to Microprocessors and Microcontrollers
                        </span>
                        <br><br>
                        <a class="ui button" href="Microprocessor/microprocessor.php">Go</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>