<?php 
    require ('inc/function.php');
    require ('inc/pdo.php');

 
    include ('inc/header.php'); 
 
        if (!empty( $_GET['id']) && ctype_digit(( $_GET['id']))) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM city WHERE id = :id";
            $query = $pdo->prepare($sql);
            $query->bindValue(':id',$id,PDO::PARAM_INT);
            $query->execute();
            $villes = $query-> fetch();
            if (empty($villes)){
                die('404');
            } else {
                $sql = "DELETE FROM city WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':id',$id,PDO::PARAM_INT);
                $query->execute();
                echo '<p> La ville à été rayé de la carte. Longue vie au dictateur </p>';
            }
        }  else {
            die('404');
    }     
    
?>



<?php 
    include ('inc/footer.php');

?>