<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My ContactForm HTML page</title>
    <link rel="stylesheet" type="text/css" href="css/blueberry.css">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="js/jquery.blueberry.js"></script>

    <script>
        $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>
</head>

<body>

<div id="wrapper">

<h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Portal</h1>

<nav>
  <ul>
    <li><a href="index.php">Welcome</a></li>
    <li><a href="big.php">Big</a></li>
    <li><a href="aia.php">AIA</a></li>
    <li><a href="flowchart.php">Flowchart</a></li>
    <li><a href="finalproject.php">Final Project</a></li>
    <li><a href="contactme.php">Contact Naran</a></li>
  </ul>
</nav>

<h2>Welcome</h2>
<div class="blueberry">
  <div class="slides">
  <li>
   <img src="images/naran.png" alt="image" width="250">
   <img src="images/naran1.png" alt="images" width="250">
   <img src="images/naran2.png" alt="images" width="250">
  </li>
  </div>
</div>

  <p>I am Naran Torguud. I was born and grew up in Mongolia. Since I was in a middle school, I have wondered how people discovered those scientific inventions, such as coding. However, I completed a bachelor's degree in Textile Design in my country, I have never forgotten my dream which is learning code. After I graduated, I started to work at Mongolia's leading Cashmere Fashion company called "Gobi Cashmere" for 5 years.
  </p>

  <p>I decided to change my career in order to fulfill my aspiration, and also wanted know other cultures and life style. Thus, I moved to Seattle, Washington in January 2020. This is my fourth quarter at Seattle Central College. I am planning to complete A.A.S degree of Web Development at Seattle Central College. I love this beautiful Emerald city. In my free time, I like to cook and play volleyball.
  </p>


  <footer>
    <ul>
      <li>&copy; <?php echo date('Y');?>
      <li>by <a href="http://central.mystudentswa.com/naranto/web110/">Naran Torguud</a></li>
      <li>All Rights Reserved</li>
      <li><a href="https://validator.w3.org/check?uri=referer"><img src="images/html5.png" alt="html5"></a></li>
      <li><a href="http://jigsaw.w3.org/css-validator/#validate_by_input">Valid CSS</a></li>
    </ul>

</footer>   
</body>

</html>