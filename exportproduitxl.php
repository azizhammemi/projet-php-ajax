
 <?php 
$output='';
    $conn = mysqli_connect("localhost","root","","e_commerce");
    $query = "SELECT * FROM produit";
    $result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    $output .='<table border="2px solid black">
        <thead>
            <th width="200px" >Id</th>
            <th width="200px" >nom</th>
            <th width="200px" >prix</th>
            <th width="200px" >description</th>
            <th width="200px" >categorie</th>
            <th width="200px" >contiter</th>
            <th width="200px" >image</th>
        </thead>
        <tbody>
        ';
    while($row=mysqli_fetch_array($result))
    {
    $id=$row['id'];
    $nom=$row['libelle'];
    $prix=$row['prix'];
    $description= $row['description'];
    $categorie=$row['categorie'];
    $contiter=$row['contiter'];
    $image=$row['image'];
    
    $output .='    <tr style="height:110px;">
                    <td>'.$id.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$prix.'</td>
                    <td>'.$description.'</td>
                    <td>'.$categorie.'</td>
                    <td>'.$contiter.'</td>
                    
                    <td><img src= "http://localhost/e_comerce/categorie/'.$image.'" width="80" height="80" ></td> </tr>';
    }
   $output .='</tbody></table>';
               header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; Filename=listproduit.xls");
header("Content-Transfer-Encoding: BINARY");
echo $output;
}
    ?>
    
    

