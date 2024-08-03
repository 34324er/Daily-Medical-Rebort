<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../style/page_admin.css">
</head>
<body> 
<?php
$sql = "SELECT * FROM user_registration";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
   
    echo "<table>
    <tr>
      <th>First Name </th> 
      <th>  Last Name </th> 
      <th> validity  </th> 
      <th> Email  </th>
      <th>  Password </th> 
    </tr>
    ";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo '<td>'.$row ['first_name'] . '</td>';
        echo'<td>'.$row ['last_name'] . '</td>' ;
        echo'<td>'.$row ['validity'] .'</td>';
        echo'<td>'.$row ['email'] . '</td>';
        echo'<td>'.$row ['password'] . '</td>';
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>
