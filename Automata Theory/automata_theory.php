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
  <link rel="icon" href="../images\dscelogo.png">
  <title>Automata Theory and Formal Languages</title>
</head>

<body>
  <h1 class="ui header" style="text-align:center" id="head">
    <a class="ui circular image" href="http://dsce.edu.in"><img src="../images/dscelogo.jpg"></a>
    <a href="../titles.php">Virtual Labs</a>
  </h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
    <div class="ui  light grey inverted secondary huge menu">
      <a class="header item" href="../index.php">
        Home
      </a>
      <a class="item">
        About Us
      </a>
      <a class="header item" href="../titles4.php">
                Go Back
            </a>
      <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item 
      </a> -->
    </div>
  </div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Automata Theory and Formal Languages
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
          
        </div>
      </div>
      <div class="twelve wide stretched column">
        <div class="ui segment">

          <div id="int" align="justify">
            Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science. The word automata comes from the Greek word αὐτόματος, which means "self-acting, self-willed, self-moving". An automaton (Automata in plural) is an abstract self-propelled computing device which follows a predetermined sequence of operations automatically. <br> <br>

          </div>

          <div id="lis" style="display: none;">
            <div class="ui bulleted list">

              <a class="item" href="./atv1.php">Introduction to Automata Theory and Its Applications</a>
              <a class="item" href="./atv2.php">Basic Notations & Representations in Automata Theory || BASICS OF AUTOMATA </a>
              <a class="item" href="./atv3.php">Finite Automata and Representation of Finite Automata</a>
              <a class="item" href="./atv4.php">Deterministic Finite Automata</a>
              <a class="item" href="./atv5.php">Regular Expressions in Automata Theory</a>
              <a class="item" href="./atv6.php">Context Free Grammar in Automata Theory</a>
              <a class="item" href="./atv7.php">Push Down Automata in Automata Theory</a>
              <a class="item" href="./atv8.php">Push Down Automata Example</a>

            </div>
          </div>

          <div id="pre" style="display: none;">
            <p>1. Introduce principles and applications of Automata theory.</p>
            <p>2. Cover basic concepts of Regular Expressions, Pushdown Automata and Context Free Grammar.</p>
            <p>3. Explain concepts related to turing machines and Undecidability.</p>

            <br>
          </div>

          <div id="faqs" style="display: none;">
            <div class="ui styled accordion">
              <div class="title">
                <i class="dropdown icon"></i>What is Automata Theory or Theory of Automata?
              </div>
              <div class="content">
                <p class="transition hidden">Theory of automata is a theoretical branch of computer science and mathematical. It is the study of abstract machines and the computation problems that can be solved using these machines. The abstract machine is called the automata. The main motivation behind developing the automata theory was to develop methods to describe and analyse the dynamic behaviour of discrete systems.</p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What is Formal Language?
              </div>
              <div class="content">
                <p class="transition hidden">In logic, mathematics, computer science, and linguistics, a formal language consists of words whose letters are taken from an alphabet and are well-formed according to a specific set of rules.</p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What is Finite Automata?
              </div>
              <div class="content">
                <p class="transition hidden">Finite Automata(FA) is the simplest machine to recognize patterns. The finite automata or finite state machine is an abstract machine that has five elements or tuples. It has a set of states and rules for moving from one state to another but it depends upon the applied input symbol. Basically, it is an abstract model of a digital computer.<br>
                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What is Equivalent Automata?
              </div>
              <div class="content">
                <p class="transition hidden">Any Two Automaton is said to be equivalent if both accept exactly the same set of input strings.<br>

                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What is Regular Expression?
              </div>
              <div class="content">
                <p class="transition hidden">A regular expression (shortened as regex or regexp; also referred to as rational expression) is a sequence of characters that specifies a search pattern in text. Usually such patterns are used by string-searching algorithms for "find" or "find and replace" operations on strings, or for input validation.<br>

                </p>
              </div>

              <div class="title">
                <i class="dropdown icon"></i>What is Context Free Grammar?
              </div>
              <div class="content">
                <p class="transition hidden">It is a formal grammar which is used to generate all possible patterns of strings in a given formal language. Context-free grammar G can be defined by four tuples as: G = (V, T, P, S)<br>

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