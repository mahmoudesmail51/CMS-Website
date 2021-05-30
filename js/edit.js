$(document).ready( function(){
    $("#Editbtn").click(function(e){
        e.preventDefault();
        var prodName = $("#prodName").val();
        var prodCat = $("#prodCat").val();
        var prodPrice = $("#price").val();
        if(prodName == "" || prodCat =="" || prodPrice == ""){
            alert("Please enter the required fields!");
            return;
        }
        else{
            $.ajax({
                type: "POST",
                url: '../scripts/product.php',
                data: $("#formUpdate").serialize(),
                success: function(response)
                {
                    alert("Product Updated successfully");
                    window.history.back();
                }
           });
        }
    });
});