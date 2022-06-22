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
  <title>Decision Tree and Naive Bayes</title>

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
      Decision Tree And Naive Bayes
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
Decision tree and Naïve Bayesian classifiers on breast cancer
dataset. Find out :
i) No of benign and malignant cases in the testing phase
ii) Compare the accuracy of the both classifiers
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
<strong>Decision Tree</strong>
<br>
1. Decision Tree is a Supervised learning technique that can be used for both 
   classification and Regression problems, but mostly it is preferred for
   solving Classification problems. It is a tree-structured classifier,
   where internal nodes represent the features of a dataset, branches
   represent the decision rules and each leaf node represents the outcome.
2. It is a graphical representation for getting all the possible solutions
   to a problem/decision based on given conditions.
3. Below diagram explains the general structure of a decision tree:
<br>
<img src=".\images\decision-tree-classification-algorithm.png" alt="">
<br>
<strong>Naive Bayes</strong>
1. Naïve Bayes algorithm is a supervised learning algorithm, which is
   based on Bayes theorem and used for solving classification problems.
2. It is mainly used in text classification that includes a high-dimensional
   training dataset.
3. Naïve Bayes Classifier is one of the simple and most effective Classification
   algorithms which helps in building the fast machine learning models that can 
   make quick predictions

Bayes' theorem is also known as Bayes' Rule or Bayes' law, which is used 
to determine the probability of a hypothesis with prior knowledge.
It depends on the conditional probability.
The formula for Bayes' theorem is given as:

<img src="./images/naive-bayes-classifier-algorithm.png" alt="">
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://drive.google.com/file/d/1ycz84cL7Vf-M2lO4Qf3k7bKXtPxZYTm3/preview" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/naivebayesquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script> -->
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