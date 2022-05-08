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
    <link rel="stylesheet" href="../../css/Semantic/semantic.min.css">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/quiz.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../css/Semantic/semantic.min.js"></script>
    <script src="../js/script.js"></script>
    <link rel="icon" href="../images\dscelogo.png">
    <title>Quiz On Operating System</title>

</head>

<body>
    <h1 class="ui header" style="text-align:center" id="head">
        <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
        <a href="titles.php">Virtual Labs</a>
        <br>
        <p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
    </h1>
    <div id="toTop"><i class="chevron up icon"></i></div>
    <div>
        <div class="ui  light grey inverted secondary huge menu">
            <a class="header item" href="../../index.php">
                Home
            </a>
            <a class="item" href="../../os.php">
                Operating System
            </a>
            <a class="item">
                About Us
            </a>
        </div>
        <div>
            <h1>QUIZ</h1>
        </div>
        <br>
        <br>
        <div class="qPanel">
            <div class="ques" id="question">
            </div>
            <br>
            <div><input type="radio" id="opt1" name="options">
                <span id="optt1"></span>
            </div>
            <div><input type="radio" id="opt2" name="options">
                <span id="optt2"></span>
            </div>
            <div><input type="radio" id="opt3" name="options">
                <span id="optt3"></span>
            </div>
            <div class="rgtCss">
                <button class="preBtn" onclick="goBack()">< back</button>
            </div>
            <div class="lftCss">
                <button class="nxtBtn" onclick="checkAnswer()">next ></button>
            </div>
        </div>
        <script src="osv5data.js"></script>
        <script src="../../quizlogic.js"></script>
    </div>
</body>

</html>