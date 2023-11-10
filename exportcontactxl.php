
 <?php 
$output='';
    $conn = mysqli_connect("localhost","root","","e_commerce");
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    $output .='<table border="2px solid black">
        <thead>
            <th width="200px" >Id</th>
            <th width="200px" >nom</th>
            <th width="200px" >email ou telephone</th>
            <th width="200px" >message</th>
        </thead>
        <tbody>
        ';
    while($row=mysqli_fetch_array($result))
    {
    $id=$row['id'];
    $nom=$row['nom'];
    $email=$row['email'];
    $message=$row['message'];

    
    $output .='    <tr style="height:110px;">
                    <td>'.$id.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$email.'</td>
                    <td>'.$message.'</td>
 </tr>';
    }
   $output .='</tbody></table>';
               header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; Filename=listcontact.xls");
header("Content-Transfer-Encoding: BINARY");
echo $output;
}
    ?>
    
    

