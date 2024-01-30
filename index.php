<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <!-- Link CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php include 'header.php' ?>

  <!-- Home -->
  <div class="slider">
        <div class="list">
            <div class="item">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/5.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/6.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/7.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/8.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

  
 
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>