<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM produit");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM produit WHERE prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' AND contiter > 0 ");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.' DT</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST["homme"]))
{
    $query = $conn->query("SELECT * FROM produit   WHERE categorie = 'puleHomme' AND contiter > 0 order by id ");
    if(isset($_POST["minimum_pricehomme"], $_POST["maximum_pricehomme"]) && !empty($_POST["minimum_pricehomme"]) && !empty($_POST["maximum_pricehomme"]))
    {
        $query = $conn->query("SELECT * FROM produit WHERE prix BETWEEN '".$_POST["minimum_pricehomme"]."' AND '".$_POST["maximum_pricehomme"]."' AND contiter > 0 AND categorie = 'puleHomme' ");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.' DT</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST["femme"]))
{
    $query = $conn->query("SELECT * FROM produit   WHERE categorie = 'puleFemme' AND contiter > 0 order by id ");
    if(isset($_POST["minimum_pricefemme"], $_POST["maximum_pricefemme"]) && !empty($_POST["minimum_pricefemme"]) && !empty($_POST["maximum_pricefemme"]))
    {
        $query = $conn->query("SELECT * FROM produit WHERE prix BETWEEN '".$_POST["minimum_pricefemme"]."' AND '".$_POST["maximum_pricefemme"]."' AND contiter > 0 AND categorie = 'puleFemme' ");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.' DT</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
<?php
$conn = new mysqli('localhost','root','','e_commerce');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
if(isset($_POST["object"]))
{
    $query = $conn->query("SELECT * FROM produit   WHERE categorie = 'objet' AND contiter > 0 order by id ");
    if(isset($_POST["maximum_priceobject"], $_POST["minimum_priceobject"]) && !empty($_POST["minimum_priceobject"]) && !empty($_POST["maximum_priceobject"]))
    {
        $query = $conn->query("SELECT * FROM produit WHERE prix BETWEEN '".$_POST["minimum_priceobject"]."' AND '".$_POST["maximum_priceobject"]."' AND contiter > 0 AND categorie = 'objet' ");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-lg-4 col-md-6" >
        
                                 <div class="product__item" >
                <div class="product__item__pic set-bg"  >
                <img style="border-radius:5px; height:320px; width:320px; " src="categorie/'.$row->image.'"/>
                                    <ul class="product__hover">
                                        <li><a href="#" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$row->libelle.'</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">'.$row->prix.' DT</div>
                                    <button type="submit" class="site-btn"><a href="product-details.php?id_per='.$row->id.'" class="b" style="color:white;">ajout</a></button>
                                </div>
                            </div>
                        </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>

