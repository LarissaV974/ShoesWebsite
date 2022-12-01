<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="title">Bienvenue sur le site ! </h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/shoe.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/shoe1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/shoe2.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br/>

<table class="table table-sm">
<caption>Tableau des tailles </caption>
  <thead>
    <tr class="table-active">
      <th scope="col">#</th>
      <th scope="col">Longeur pied</th>
      <th scope="col">Taille FR</th>
      <th scope="col">Taille US</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>25 cm</td>
      <td>39</td>
      <td>6</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>25.7 cm</td>
      <td>40</td>
      <td>7</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>26.4</td>
      <td>41</td>
      <td>8</td>
    </tr>
  </tbody>
</table>



</body>
</html>



<?php
include('footer.php');
?>