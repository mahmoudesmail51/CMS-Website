<!--The insert.php fle is included at the top so we can make use of the script inside this page-->
<?php include("./scripts/insert.php"); ?>
  
<!--This form is displayed inside the signup tab in the index.php page-->
   

<div class="container">
    <div class="row" style="text-align:center;">
        <h3>Welcome</h3>
    </div>
    
    <div class="row sub_msg">
        <p>sign up page</p>
    </div>
    
    <div class="row signup">
        <div class="row">
            <h3> Please Sign Up</h3>
        </div>
        
        
        <form action="index.php#signup" method="post" class=".form-horizontal"> 

            
         
            <?php echo $error1; ?>
            <?php echo $error2; ?>
            <?php echo $error3; ?>
            <?php echo $error4; ?>
            <?php echo $error5; ?>
                         
          
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                  <input type="text" name="email" id="email" class="form-control"> 
                  <span id="errorEmail"></span> <!--This span tag with id is used to display the client-side error from the custom validation. Same with the others-->
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Firstname:</label>
               <div class="col-sm-10">
                  <input type="text" name="firstname" id="firstname" class="form-control"> 
                  <span id="errorFirstname"></span>
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Lastname:</label>
               <div class="col-sm-10">
                  <input type="text" name="lastname" id="lastname" class="form-control"> 
                  <span id="errorLastname"></span>
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="password" id="password" class="form-control"> 
                  <span id="errorPassword"></span>
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="submit" id="submit" class="form-control"> 
               </div>
           </div>
            
        </form><br><br><br>
        
    </div>
    
</div>