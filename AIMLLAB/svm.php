<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../css/Semantic/semantic.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="icon" href="../images\dscelogo.png">
  <title>Support Vector Machine</title>

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
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item" href="aimllab.php">
        AIML programming laboratory
      </a>
      <a class="item">
        About Us
      </a>

    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Support Vector Machine
    </h2>
    <div class="ui stackable grid">
      <div class="four wide column">
        <div class="ui secondary vertical pointing menu" id="Menus">
          <a class="active item" id="intro">
            ProblemStatement
          </a>
          <a class="item" id="prereq">
            Theory
          </a>
          <a class="item" target="_blank" id="list">
            Vedio
          </a>
          <a class="item" id="faq">
            Quiz
          </a>
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int">
            Apply:
            <br />
            <pre>
SVM classifier on randomly generated dataset using package
library [MAKEMOON]. Find out
i)Linearly separable decision boundary for the generated
  dataset
ii)Non-linearly separable decision boundary for the generated
   dataset
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
<strong>Decision Tree</strong>
<br>
Support Vector Machine or SVM is one of the most popular Supervised Learning
algorithms, which is used for Classification as well as Regression problems.
However, primarily, it is used for Classification problems in Machine Learning.
<br>
<br>
The goal of the SVM algorithm is to create the best line or decision boundary
that can segregate n-dimensional space into classes so that we can easily put
the new data point in the correct category in the future. 
This best decision boundary is called a hyperplane.
<br>
<br>
SVM chooses the extreme points/vectors that help in creating the hyperplane.
These extreme cases are called as support vectors, and hence algorithm is
termed as Support Vector Machine. Consider the below diagram in which there
are two different categories that are classified using a decision boundary
or hyperplane:
<br>
<br>
<img src="./images/support-vector-machine-algorithm.png" alt="">
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://drive.google.com/file/d/1tmWVLOSGzd-wXpKtWW30t50z5mEOlpBH/preview" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/svmquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
          </div>
        </div>
      </div>
    </div>
   
    <script>
      var editor = ace.edit("editor");
      editor.setTheme("ace/theme/twilight");
      editor.session.setMode("ace/mode/c_cpp");
      var textarea = $('textarea[name="editor"]');
      editor.getSession().on("change", function() {
        textarea.val(editor.getSession().getValue());
      });
    </script>

</body>

</html>