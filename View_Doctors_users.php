<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/View_Doctors_users.css">
    <title>Doctors Show</title>
</head>
<body>
  <div class="table-container">
   
     <?php
       $sql = "SELECT name, specialty  FROM 	add_doctor";
       $result = mysqli_query($con,$sql);
       if(mysqli_num_rows($result)){
           echo "<table>
           <tr>
             <th>Name </th> 
             <th>Specialty</th> 
           </tr>
           ";
       
        
        
           while ($row = mysqli_fetch_array($result)){
               echo "<tr>";
               echo '<td>'.$row ['name'] . '</td>';
               echo'<td>'.$row ['specialty'] . '</td>' ;
               echo "</tr>";
           }
       
           echo "</table>";
       }
     
     ?>
    </table>
  </div>
</body>
</html>