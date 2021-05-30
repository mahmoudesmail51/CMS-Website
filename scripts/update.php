<?php
require_once("../config/db.php");
$sql = 'SELECT * FROM products WHERE ID=' . $_GET['id'];
$result = mysqli_query($connection, $sql); 
if (mysqli_num_rows($result ) > 0) {
    $row = mysqli_fetch_assoc($result);
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS APPLICATION - INDEX PAGE</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/custom.css">

</head>
<script src="../js/edit.js"></script>

<body>
<nav class="navbar" style="background-color: #19aff5;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
      </button>
      <a class="navbar-brand home" href="#">Shopify</a>
    </div>
    
  </div>
</nav>
<div class="container">
    <div class="row" style="text-align:center;">
        <h3> Update Product </h3>
    </div>
    <div class="row signup">
        <!--This is the login form for the user-->
        <!--The php script for the login functionality is in the login.php and is included at the top of the page-->
        <form id="formUpdate" action="" method="post" class=".form-horizontal"> 
          <input type="hidden" id="operation" name="operation" value="update">
          <input type="hidden" id="id" name="id" value="<?= $row['ID'] ?>">
            <!--The global variables that holds all alert messages are echoed here with php-->       
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Product Name*</label>
               <div class="col-sm-10">
                  <input type="text" value="<?= $row['prod_name'] ?>" name="prodName" id="prodName" class="form-control"> 
                  <span id="error_Email"></span> <!--This span tag with id is used to display the client-side error from the custom validation. Same with the others-->
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Category*</label>
               <div class="col-sm-10">
                  <input type="text" value="<?= $row['prod_category'] ?>" name="prodCat" id="prodCat" class="form-control"> 
                  <span id="error_Password"></span>
               </div>
           </div>
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Price*</label>
               <div class="col-sm-10">
                  <input type="text" value="<?= $row['prod_price'] ?>" name="price" id="price" class="form-control"> 
                  <span id="error_Password"></span>
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="Edit" id="Editbtn" class="form-control" value="Edit"> 
               </div>
           </div>
            
        </form>
       
        
    </div>
    
</div>


</body>
</html>
