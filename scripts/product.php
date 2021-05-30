<?php
    require_once("../config/db.php");
    
    if(isset($_POST['operation']) && $_POST['operation'] == "add"){
        $name = $_POST['prodName'];
        $Cat = $_POST['prodCat'];
        $price = $_POST['price'];
        $sql = "INSERT INTO products (prod_name, prod_category, prod_price) VALUES ('$name', '$Cat', $price)";
        $query = mysqli_query($connection, $sql);    
    }

    if(isset($_POST['operation']) && $_POST['operation'] == "update"){
        $name = $_POST['prodName'];
        $Cat = $_POST['prodCat'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        $sql = "UPDATE products set prod_name='$name', prod_category='$Cat', prod_price='$price' WHERE ID='$id'";
        $query = mysqli_query($connection, $sql);
    }

?>