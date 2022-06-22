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
  <title>Leaky Relu activation function</title>

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
    leaky Relu activation function
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
          Using Keras and Tensor flow framework:
            <br />
            <pre>
i)Load the mnist image dataset
ii).Design a two-layer neural network with one hidden layer
    and one output layer
iii)Use CNN with Leaky Relu activation function for the
    hidden layer
iv)Use sigmoid activation function for the output layer.
v)Train the designed network for mnist dataset
vi)Visualize the results of
vii)Training vs validation accuracy
viii)Training vs Validation loss
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
<strong>LeakyReLU layer</strong>
<br>
Leaky version of a Rectified Linear Unit.
It allows a small gradient when the unit is not active:
<br>
f(x) = alpha * x if x < 0
f(x) = x if x >= 0
<br>
<strong>Input Shape</strong>
Arbitrary. Use the keyword argument input_shape (tuple of integers,
does not include the batch axis) when using this layer as the first
layer in a model.
<br>
<strong>Output Shape</strong>
Same shape as the input.
<br>
<strong>Arguments</strong>
alpha: Float >= 0. Negative slope coefficient. Default to 0.3
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://www.youtube.com/embed/sNDJrzK1H0A" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/leakyrelu.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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