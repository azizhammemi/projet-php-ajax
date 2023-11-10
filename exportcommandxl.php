
 <?php 
$output='';
    $conn = mysqli_connect("localhost","root","","e_commerce");
    $query = "SELECT * FROM commande";
    $result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    $output .='<table border="2px solid black">
        <thead>
            <th width="200px" height="200px" >Id</th>
            <th width="200px" height="200px">nom</th>
            <th width="200px" height="200px">prenom</th>
            <th width="200px" height="200px">numero</th>
            <th width="200px" height="200px">quantity</th>
            <th width="200px" height="200px">size</th>
            <th width="200px" height="200px">total</th>
           
            <th width="200px" height="200px">image</th>
        </thead>
        <tbody>
        ';
    while($row=mysqli_fetch_array($result))
    {
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $numero=$row['numero'];
    $quantity= $row['quantity'];
    $size= $row['size'];
    $prix= $row['prix'];
    $image=$row['image'];
    
    $output .='    <tr style="height:110px;">
                    <td>'.$id.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$numero.'</td>     
                    <td>'.$quantity.'</td>     
                    <td>'.$size.'</td>     
                    <td>'.$prix.'</td>     
    <td><img src= "http://localhost/e_comerce/categorie/'.$image.'" width="80" height="80" ></td> </tr>';
    }
   $output .='</tbody></table>';
               header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; Filename=listcommande.xls");
header("Content-Transfer-Encoding: BINARY");
echo $output;
}
    ?>
    
    

