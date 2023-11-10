
 <?php 
$output='';
    $conn = mysqli_connect("localhost","root","","e_commerce");
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    $output .='<table border="2px solid black">
        <thead>
            <th width="200px" >Id</th>
            <th width="200px" >nom</th>
            <th width="200px" >prenom</th>
            <th width="200px" >numero</th>
            <th width="200px" >password</th>
            <th width="200px" >image</th>
        </thead>
        <tbody>
        ';
    while($row=mysqli_fetch_array($result))
    {
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $numero=$row['numero'];
    $password= $row['password'];
    $photo=$row['photo'];
    
    $output .='    <tr style="height:110px;">
                    <td>'.$id.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$numero.'</td>
                    <td>'.$password.'</td>   
                    <td><img src= "http://localhost/e_comerce/login%20form/user/'.$photo.'" width="80" height="80" ></td> </tr>';
    }
   $output .='</tbody></table>';
               header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; Filename=listuser.xls");
header("Content-Transfer-Encoding: BINARY");
echo $output;
}
    ?>
    
    

