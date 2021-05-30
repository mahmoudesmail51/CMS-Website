<?php
    require_once("../config/db.php");
    
    $sql = 'DELETE FROM products WHERE ID='.$_GET["id"];
    $query = mysqli_query($connection, $sql);
?>

<script>
  alert("Product deleted successfully");
  window.history.back();
</script>