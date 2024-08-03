<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/chat.css">
    <script>
        function aj(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
               if(req.readyState==4 && req.readyState==200){
                document.getElementById('chat').innerHTML=req.responseText;
               }
            }
            red.open('GET','chat.php',true);
            red.send();
        }
        setInterval(function (){aj ()},1000);
    </script>
    <title>Chat</title>
</head>
<body>
    <div id="container">
        <div id="chatbox">
            <div class="chat">
            <?php
              $query = "select * from chat";
              $run = mysqli_query($con,$query);
              while($row=mysqli_fetch_array($run)){
                $name=$row['name'];
                $msg=$row['msg'];
                $date=$row['date'];
            ?>
            <div id="chatdata">
                <span style="color:gold;"><?php echo $name; ?></span>
                <span>:</span>
                <span><?php echo $msg; ?></span>
                <span style="color:tomato; float:right;"><?php echo $date; ?></span>
            </div>
              <?php } ?>
            </div>
            
        </div>
        <center>
        <form action="chat.php" method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <textarea name="msg" placeholder="Enter your message"></textarea>
            <input type="submit" value="Send" name="submit">
        </form>
        </center>
        <?php
          if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $msg=$_POST['msg'];
            $insert = "insert into chat(name,msg)
               values('$name','$msg')";
            $run=mysqli_query($con,$insert);
           }

         
        ?>
    </div>
</body>
</html>

