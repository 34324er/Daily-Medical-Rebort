<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/View_news.css">
    <title>Our News</title>
</head>
<body>
    <h1>Our News</h1>
    <div class="container">
    <?php
$sql = mysqli_query($con, "SELECT * FROM upload_news");    
    while ($row = mysqli_fetch_array($sql)){
    echo "  
     <div class='card'>
    <img src='$row[image]' alt='News 3' class='card-img'>
    <div class='card-content'>
        <h3 class='card-title'>$row[title]</h3>
        <p class='card-description'>$row[description]</p>
        <a href=''  class='btn-danger' style='text-decoration: none; background-color: red; border-radius:5px; color: white; margin-right:10px; padding: 5px;'>Delete</a>
        <a href='' class='btn-primary' style='text-decoration: none; background-color: green; border-radius:5px; color: white; padding: 5px;'>Edit</a>
    </div>
</div>";
    }
?>
    </div>
</body>
</html>
