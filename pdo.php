
        <?php
    session_start();

            try{
                $pdo = new PDO("mysql:host=localhost;dbname=e_commerce", 'root');
              
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() ;
            }
        ?>
