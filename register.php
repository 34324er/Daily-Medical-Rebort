
<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>


<?php
    if(isset($_POST['submit'])){
      $first_name =$_POST['first_name'];
      $last_name =$_POST['last_name'];
      $validity =$_POST['validity'];
      $email =$_POST['email'];
      $password = sha1($_POST['password']);
      $insert ="insert into user_registration(first_name , last_name , validity , email , password)
      values('$first_name','$last_name','$validity','$email','$password')";
      $run= mysqli_query($con,$insert); 
      header('location: index.php');
}
?>