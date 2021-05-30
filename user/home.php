<?php require_once("../config/db.php");?>
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

<script>
$(document).ready(function(){
//This code is written so as to always make the currently selected tab to be active
    
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        
        //If the current tab is not active, remove every errors if they exist on the page.
        if(("#myTab a") !== $(this)){
            $("#errorFirstname").html("");
            $("#errorLastname").html("");
            $("#errorEmail").html("");
            $("#errorPassword").html("");
            $("#error_Email").html("");
            $("#error_Password").html("");
            $(".alert-danger").remove();
            $(".alert").remove();
            //$(".email_alert").remove();
        }
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
    
    // $("#typed_text").typed({
    //     strings: ["This is a system that allows users to create read update and delete information."],
    //     typeSpeed: 0
    // });
    
    
});

</script>

<body>
<nav class="navbar" style="background-color: #19aff5;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
      </button>
      <a class="navbar-brand home" href="#" >Shopify</a>
    </div>
    
  </div>
</nav>
<div class="container">
<!--We use bootstrap to create tabs on the index.php page-->
    <ul class="nav nav-tabs" id="myTab">
       <li><a data-toggle='tab' href="#add">Add Course</a></li>
       <li><a data-toggle='tab' href="#table">Table of contents</a></li>
    </ul>
    
<!--    Here we add the forms elements of the various tabs-->
    <div class="tab-content">
      
       
       <div id="add" class="tab-pane fade ">
           <?php include("add.php") ?>
       </div>
       
       <div id="table" class="tab-pane fade">
       <table class="table">
        <thead>
            <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Producty Category</th>
            <th scope="col">Product Price</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $sql = "SELECT * FROM products";
                $result = mysqli_query($connection, $sql); 
                if (mysqli_num_rows($result ) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                        <td>' . $row["prod_name"] . '</td>
                        <td>' . $row["prod_category"] . '</td>
                        <td>' . $row["prod_price"] . '</td>
                        <td><a href="../scripts/update.php?id=' . $row["ID"] . '" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Edit</a>
                        <a href="../scripts/delete.php?id=' . $row["ID"] . '" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Delete</a></td>
                    </tr>';
            }} ?>
        </tbody>
        </table>
       </div>
    </div>
</div> 



</body>
</html>