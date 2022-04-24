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
    <link rel="stylesheet" href="../css/Semantic/semantic.min.css">
    <script src="../js/semantic.min.js"></script>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="icon" href="../images\dscelogo.png">
    <title>BCT</title>
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
            <a class="header item" href="../titles7.php">
                Go Back
            </a>
            <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item -->
            </a>
        </div>
    </div>
    <div class="ui container" id="cont">
        <h2 class="ui header" style="font-size:35px; margin-left:10px;">
            Blockchain Technologies
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
                    <a class="item" id="quiz">
                        QUIZ
                    </a>
                </div>
            </div>
            <div class="twelve wide stretched column">
                <div class="ui segment">

                    <div id="int" align="justify">
                        Blockchain is the technology that covers digital currency (like Bitcoin, Litecoin, Ethereum, and others).
                        This technology allows digital information to be distributed and decentralized, but can’t be manipulated. That means each piece of data can only have one owner but many holders of the same data.
                        <br>
                        Blockchain is a shared, distributed ledger that facilitates the process of recording transactions and tracking assets in a business network. An asset can be tangible — a house, a car, cash, land — or intangible like intellectual property, such as patents, copyrights, or branding. Virtually anything of value can be tracked and traded on a blockchain network, reducing risk and cutting costs for all involved.
                    </div>

                    <div id="lis" style="display: none;">
                        <div class="ui bulleted list">

                            <a class="item" href="bctv1.php">What is Blockchain</a>
                            <a class="item" href="bctv2.php">How does Blockchain work</a>
                            <a class="item" href="bctv3.php">What is Cryptocurrency</a>
                            <a class="item" href="bctv4.php">Bitcoin vs Ethereum</a>
                            <a class="item" href="bctv5.php">What is Smart Contracts</a>
                            <a class="item" href="bctv6.php">What is DAO in Crypto?</a>
                            <a class="item" href="bctv7.php">Use cases for Blockchain</a>
                        </div>
                    </div>

                    <div id="pre" style="display: none;">

                        <ol>
                            <li>Understanding the Fundamentals of Block Chains</li>
                            <li>Apply the concept of cryptography to hash functions in cryptocurrency</li>
                            <li>Articulate the decentralized architecture of block chains and its incentives</li>
                            <li>Understand the evolution of block chains</li>
                            <li>Develop block chain based solutions using smart contracts</li>
                            <li>Formulate solutions for real life problems using block chains.</li>
                        </ol>
                    </div>

                    <div id="faqs" style="display: none;">
                        <div class="ui styled accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>What is a blockchain?
                            </div>
                            <div class="content">
                                <p class="transition hidden">A Blockchain is a distributed, cryptographically-secure database structure that allows network participants to establish a trusted and immutable record of transactional data without the need for intermediaries. A blockchain can execute a variety of functions beyond transaction settlement, such as smart contracts. Smart contracts are digital agreements that are embedded in code and that can have limitless formats and conditions. Blockchains have proven themselves as superior solutions for securely coordinating data, but they are capable of much more, including tokenization, incentive design, attack-resistance, and reducing counterparty risk. </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Who created the first blockchain?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Satoshi Nakamoto.</p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What are the benefits of blockchain technology?
                            </div>
                            <div class="content">
                                <p class="transition hidden">Blockchain technology has a wide variety of benefits, for both global enterprises and local communities. The most commonly cited benefits of a blockchain are trusted data coordination, attack-resistance, shared IT infrastructure, tokenization, and built-in incentivization.<br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What is a block in a blockchain?
                            </div>
                            <div class="content">
                                <p class="transition hidden">The “block” in a blockchain refers to a block of transactions that has been broadcast to the network. The “chain” refers to a string of these blocks. When a new block of transactions is validated by the network, it is attached to the end of an existing chain. This chain of blocks is an ever-growing ledger of transactions that the network has validated. We call this single, agreed-upon history of transactions a blockchain. Only one block can exist at a given chain height. There are several ways to add new blocks to an existing chain. These are often termed “proofs,” i.e. Proof of Work (PoW), Proof of Stake (PoS), and Proof of Authority (PoA). All involve cryptographic algorithms with varying degrees of complexity. <br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>Is it possible to modify the data once it is written in a block?
                            </div>
                            <div class="content">
                                <p class="transition hidden">No, it’s not possible to do so. In case any modification is required, the organization simply has to erase the information from all other blocks too. It is because of no other reason than this, data must be given the extreme care of while using this approach.<br>
                                </p>
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>What about Mining?

                            </div>
                            <div class="content">
                                <p class="transition hidden">Mining is used a proof of work for participants in the blockchain. Whenever a block of transactions is to be agreed, every participating node attempts to ‘mine’ the block (a mathematical algorithmic process that requires extensive CPU capacity). In public blockchains successful mining is rewarded with a cryptocurrency token.<br>
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