<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Reservations_page.css">
    <title>Reservations</title>
</head>
<body>
    <div class="container">
        <h2>Appointment List</h2>
         
<?php
$sql = "SELECT * FROM book_an_appoitment";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
   
    echo "<table>
     <thed> <tr>
      <th> Full Name </th> 
      <th>  Email </th> 
      <th> Specialization  </th> 
      <th> Doctor Name  </th>
      <th>  Phone Number </th> 
      <th> Appointment Date </th> 
      <th>  Action</th> 
   </tehed> </tr>
    ";

    while ($row = mysqli_fetch_array($result)){
        echo "<tbody> <tr>";
        echo '<td>'.$row ['name'] . '</td>';
        echo'<td>'.$row ['email'] . '</td>' ;
        echo'<td>'.$row ['phone'] .'</td>';
        echo'<td>'.$row ['department'] . '</td>';
        echo'<td>'.$row ['doctor'] . '</td>';
        echo'<td>'.$row ['date'] . '</td>';
        echo'<td>'.$row ['message'] . '</td>';
        echo "</tr> </tbody>";
    }
    echo "</table>";
}
?>
          
            
                <!-- More appointment rows can be added here -->
            
        
    </div>
</body>
</html>
