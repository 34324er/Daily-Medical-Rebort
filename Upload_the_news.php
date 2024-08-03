<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Upload_the_news.css">
    <title>News page</title>
</head>
<body>
    <div class="container">
        <h2>Upload News</h2>
        <form action="Upload_the_news.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image"  required>
            </div>
            <button type="submit" name="up">Upload</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['up'])){
  $name = $_POST['title'];
  $description = $_POST['description'];
  $image = $_FILES['image'];
  $image_location = $_FILES['image']['tmp_name'];
  $image_name = $_FILES['image']['name'];
  $image_up = "upload/".$image_name;
  $insert = "insert into upload_news(title, description, image) 
                        values ('$name','$description','$image_up')";
  $run = mysqli_query($con, $insert);
}
?>
