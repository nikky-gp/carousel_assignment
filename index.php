<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <a href="user_registration.php">
        <img src="banner.png" alt="Los Angeles" style="width:100%;">
        </a>
      </div>

      <div class="item">
        <a href="user_registration.php">
        <img src="covax.jpg" alt="Chicago" style="width:100%;">
        </a>
      </div>
    
      <div class="item">
        <a href="user_registration.php">
        <img src="reg.png" alt="New york" style="width:100%;">
        </a>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <?php
    include 'database.php';
    $query = "SELECT `id`,`fname`, `lname`, `email`, `phone` FROM `tbl_users` WHERE status = 1";
    $result1 = mysqli_query($conn, $query);
    if(mysqli_num_rows($result1))
    {
      echo "<br><div style=overflow-x:auto><table id=restable>";
                  echo "<tr><th>FIRST NAME</td><th>LAST NAME</th><th>EMAIL</th><th>PHONE</th></tr>";
    while ($row = mysqli_fetch_array($result1))
      {
                  
                  echo "<tr><td>";
                  echo $row['fname'];
                  echo "</td><td>";
                  echo $row['lname'];
                  echo "</td><td>";
                  echo $row['email'];
                  echo "</td><td>";
                  echo $row['phone'];
                  echo "</td></tr>";
                  
      }
            echo "</table></div>";
    }
    else
    {
      echo "";
    }
  ?>
</div>
</body>
</html>
