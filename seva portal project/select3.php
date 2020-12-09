<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "seva_portal");  
      $query = "Select * FROM passport WHERE id='".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              <tr>  
              <td width="30%"><label>Photo</label></td>  
              <td width="70%"><a href='.$row["a_copy"].'><img src='.$row["a_copy"].' width=100 height=100/></a></td>  
              </tr>
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Surname</label></td>  
                     <td width="70%">'.$row["surname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Passport Location</label></td>  
                     <td width="70%">'.$row["location"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date of Birth</label></td>  
                     <td width="70%">'.$row["dob"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Applying for</label></td>  
                     <td width="70%">'.$row["apply"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Citizen By</label></td>  
                     <td width="70%">'.$row["citizen"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Qualification</label></td>  
                     <td width="70%">'.$row["quali"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Aadhar number</label></td>  
                     <td width="70%">'.$row["a_num"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Pan number</label></td>  
                     <td width="70%">'.$row["pan"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Contact</label></td>  
                     <td width="70%">'.$row["contact"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Status</label></td>  
                     <td width="70%">'.$row["status"].'</td>  
                </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
