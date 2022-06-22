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
  <title>Linear Regression</title>

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
      Simple Linear Regression
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
a) Multiple linear regression model for student dataset and
predict writing skill of student based on the math skill and
reading skill of the student using the Gradient descent method.
Find out R^2 score for the predicted model
<br/>
b) Multiple linear regression model for housing_prices dataset
and predict house price based on the area, floor and room size
of the house using the library scikit_learn . Find out the
accuracy of the model using R^2 score statistics for the
predicted model
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
Multiple linear regression (MLR), also known simply as multiple regression,
is a statistical technique that uses several explanatory variables to 
predict the outcome of a response variable. The goal of multiple linear
regression is to model the linear relationship between the explanatory
(independent) variables and response (dependent) variables. In essence,
multiple regression is the extension of ordinary least-squares (OLS) 
regression because it involves more than one explanatory variable.
1. Multiple linear regression (MLR), also known simply as multiple regression,
   is a statistical technique that uses several explanatory variables to
   predict the outcome of a response variable.
2. Multiple regression is an extension of linear (OLS) regression that uses 
   just one explanatory variable.
3. MLR is used extensively in econometrics and financial inference.
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://drive.google.com/file/d/16d-Ge_jMOcFBfG6jYkqJq7Epg3SacTL1/preview" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/mlrmquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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