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
  <title>Clustering Algorithms</title>

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
      Clustering Algorithms
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
a) Partitioning k-means clustering technique on ch1ex1 dataset
with different K (number of clusters) as input and record the
output
<br/>
b) Hierarchical Clustering Algorithm on seeds_less_rows
dataset for extracting cluster labels of different varieties of
seeds
    </pre>
            <br><br>
          </div>

          <div id="pre" style="display: none;">
            <div class="ui bulleted list">
              <div class="item">
                <pre>
Clustering or cluster analysis is a machine learning technique, which groups
the unlabelled dataset. It can be defined as <strong>"A way of grouping the
data points into different clusters, consisting of similar data points.
The objects with the possible similarities remain in a group that has less 
or no similarities with another group."</strong>
<br>
<br>
<strong>K-means Clustering</strong>
K-Means Clustering is an Unsupervised Learning algorithm, which groups the
unlabeled dataset into different clusters. Here K defines the number of 
pre-defined clusters that need to be created in the process, as if K=2,
there will be two clusters, and for K=3, there will be three clusters,
and so on.
1. It is an iterative algorithm that divides the unlabeled dataset
   into k different clusters in such a way that each dataset belongs only
   one group that has similar properties.
2. It allows us to cluster the data into different groups and a convenient 
   way to discover the categories of groups in the unlabeled dataset on its
   own without the need for any training.
3. It is a centroid-based algorithm, where each cluster is associated with a
   centroid. The main aim of this algorithm is to minimize the sum of
   distances between the data point and their corresponding clusters.
<br>
<br>
<strong>Hierarchial clustering</strong>
Hierarchical clustering is another unsupervised machine learning algorithm,
which is used to group the unlabeled datasets into a cluster and also known as
hierarchical cluster analysis or HCA.
In this algorithm, we develop the hierarchy of clusters in the form of a tree,
and this tree-shaped structure is known as the dendrogram.
Sometimes the results of K-means clustering and hierarchical clustering 
may look similar, but they both differ depending on how they work. 
As there is no requirement to predetermine the number of clusters as we did
in the K-Means algorithm.
The hierarchical clustering technique has two approaches:
1. Agglomerative: Agglomerative is a bottom-up approach, in which the algorithm 
   starts with taking all data points as single clusters and merging them until 
   one cluster is left.
2. Divisive: Divisive algorithm is the reverse of the agglomerative algorithm
   as it is a top-down approach.
              </pre>
              </div>
            </div>
          </div>
          <div id="lis" style="display: none;">
            <div class="ui form">
              <div id="compilerData">
              <iframe src="https://drive.google.com/file/d/1MH5ddGJSKQFoK86NFKc5jTM6vq9zLIPJ/preview" width="640" height="480" allow="autoplay"></iframe>
              </div><br>
            </div>

          </div>
          <div id="faqs" style="display: none;">
                        <a href="quiz/kmeansquiz.php"><button id="quizbutton"><strong>Take a Quiz and Test your knowledge</strong></button></a>
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