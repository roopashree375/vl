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
    <title>English for Diploma Students</title>
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
            <a class="header item" href="../titles3.php">
                Go Back
            </a>
        </div>
    </div>
    <div class="ui container" id="cont">
        <h2 class="ui header" style="font-size:35px; margin-left:10px;">
            English for Diploma Students
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
                    <a class="item" href="./quiz/engv1quiz.php">
                        Quiz
                    </a>
                    <a class="item" id="faq">
                        FAQ's
                    </a>
                </div>
            </div>
            <div class="twelve wide stretched column">
                <div class="ui segment">

                    <div id="int" align="justify">
                        English is thought to be one of the most important languages in the world. There are many reasons why English is so important. One of the reasons is that English is spoken as the first language in many countries. There are 104 countries where English is spoken as the first language. <br> <br>
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui bulleted list">

                            <a class="item" href="./engv1.php">English Grammar</a>
                            <a class="item" href="./engv2.php">English Listening</a>
                            <a class="item" href="./engv3.php">English Writing</a>
                            <a class="item" href="./engv4.php">English Speaking</a>
                            <a class="item" href="./engv5.php">English Reading</a>

                        </div>
                    </div>

                    <div id="pre" style="display: none;">
                        <ol>
                            <li>To enable the students comprehend the spoken form of English</li>
                            <li>To develop students ability to use English in day-to-day life and real life situation</li>
                            <li>To understand the written text and able to use skimming, scanning skills</li>
                            <li>To write simple English to express ideas etc</li>
                        </ol>
                        <br>
                    </div>

                    <div id="faqs" style="display: none;">
                        <div class="ui styled accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>What are the 5 tips to learn English?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Build your Vocabulary, Speak English, Use Online Translators to Help with Pronunciation, Active Listening, Read Often and Read Out Loud, Practice with Friends, Use an Online Dictionary for Synonyms, Watch Films, Cartoons, and Television Shows.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>How can I improve speaking?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Speak, speak, speak, reflect on your conversations, listen and read, prepare cheat sheets, pick up the phone, record your voice, learn phrases rather than single words and have fun.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Why is it important to learn in English?
                            </div>
                            <div class="content">
                                <p class="transition hidden">On an individual level, it improves personality and increases sense of self-worth. In simple words, learning a foreign language makes the brain stronger and more versatile. Learning English is not only useful, but it also gives a lot of satisfaction and making progress will make you feel great. <br>
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