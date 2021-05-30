
<script src="../js/add_product.js"></script>
<div class="container">
    <div class="row" style="text-align:center;">
        <h3> Add Product </h3>
    </div>
    <div class="row signup">
        <!--This is the login form for the user-->
        <!--The php script for the login functionality is in the login.php and is included at the top of the page-->
        <form id="formAdd" action="" method="post" class=".form-horizontal"> 
          <input type="hidden" id="operation" name="operation" value="add">
            <!--The global variables that holds all alert messages are echoed here with php-->       
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Product Name*</label>
               <div class="col-sm-10">
                  <input type="text" name="prodName" id="prodName" class="form-control"> 
                  <span id="error_Email"></span> <!--This span tag with id is used to display the client-side error from the custom validation. Same with the others-->
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Category*</label>
               <div class="col-sm-10">
                  <input type="text" name="prodCat" id="prodCat" class="form-control"> 
                  <span id="error_Password"></span>
               </div>
           </div>
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Price*</label>
               <div class="col-sm-10">
                  <input type="text" name="price" id="price" class="form-control"> 
                  <span id="error_Password"></span>
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="Add" id="Addbtn" class="form-control" value="Add"> 
               </div>
           </div>
            
        </form>
       
        
    </div>
    
</div>
