<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="container">
           <h1>Payments Received</h1>
           <p>The payments you received</p> 
           <table class="table table-hover">
           <tr>
           <th>Transaction ID</th>
          <th>Name</th>
         <th>Amount</th>
         </tr>
    </thead>
    <tbody>
</head>
<body>
<?php  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "seva_portal");  
      $query = "Select * FROM payment";  
      $result = mysqli_query($connect, $query);  
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
    
            echo '<tr>
                      <td scope="row">' . $row["tid"]. '</td>
                      <td>' . $row["name"] .'</td>
                      <td> '.$row["amount"] .'</td>
                    </tr>';
    

        }
    } else {
        echo "0 results";
    } 
    ?>
     </tbody>
    </div>
</table>
</body>
</html>
