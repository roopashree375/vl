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
  <title>Artifical Neural Network</title>

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
    Sigmoid activation function in artificial neural
network
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
          Demonstrate:
            <br />
            <pre>
a) Usage of Sigmoid activation function in artificial neural
network
<br/>
b) Identification of face using opencv library.
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
<strong>Artificial Neural Network</strong>
<br>
<br>
An Artificial Neural Network in the field of Artificial intelligence where
it attempts to mimic the network of neurons makes up a human brain so that 
computers will have an option to understand things and make decisions in a
human-like manner. The artificial neural network is designed by programming
computers to behave simply like interconnected brain cells.
<br>
<img src="./images/artificial-neural-network2.png" alt="">
<br>
<img src="./images/artificial-neural-network3.png" alt="">
<br>
<br>
<strong>Activation Function</strong>
Activation function decides, whether a neuron should be activated or not by
calculating weighted sum and further adding bias with it. The purpose of the
activation function is to introduce non-linearity into the output of a neuron.
<br>
<br>
<strong>Sigmoid Actication Function:</strong>
Sigmoid function is a widely used activation function. It is defined as
<img src="./images/sigmoidfunction.svg" alt="">
Graphically,
<br>
<img src="./images/sigmoidfunctiongraph.png" alt="">
This is a smooth function and is continuously differentiable. The biggest
advantage that it has over step and linear function is that it is non-linear.
This is an incredibly cool feature of the sigmoid function. This essentially 
means that when I have multiple neurons having sigmoid function as their 
activation function – the output is non linear as well. The function 
ranges from 0-1 having an S shape.
<br>
<strong>OpevCV</strong>
OpenCV is a huge open-source library for computer vision, machine learning, 
and image processing.OpenCV supports a wide variety of programming languages 
like Python, C++, Java, etc. It can process images and videos to 
identify objects, faces, or even the handwriting of a human. When it is 
integrated with various libraries, such as Numpy which is a highly optimized 
library for numerical operations, then the number of weapons increases in 
your Arsenal i.e whatever operations one can do in Numpy can be 
combined with OpenCV.
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://drive.google.com/file/d/1_aOukS13FR0OzZG8NcHS9tMlvT688txF/preview" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/annquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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