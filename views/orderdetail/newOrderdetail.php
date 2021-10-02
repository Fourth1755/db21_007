<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Orderdetail</title>
</head>
<body>
    
    <div class="container">
        <h1>Add New Orderdetail</h1>
        <form method="get" action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Orderdetail_ID</label>
        <input type="text" class="form-control" name= "Orderdetail_ID" placeholder=" Ex QD001">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Order_ID
            <select name="Order_ID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select Order_ID</option>
                <?php
                    foreach($ProductList as $product){
                        if($product->Product_ID=='PR001'){
                        echo"<option value=$product->Product_ID>$product->Product_Name</option>";
                    }    
                } 
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Colordetail_ID
            <select name="Colordetail_ID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select Colordetail_ID</option>
                <?php
                         foreach($colordetail_list as $color){
                            if($color->Colordetail_ID=='COLOR011'){
                                echo"<option value=$color->Colordetail_ID>$color->Color_Name</option>";
                            }    
                        }   
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Orderdetail_QuantityColor</label>
        <input type="int" class="form-control" name= "Orderdetail_QuantityColor" placeholder=" Ex 1">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Orderdetail_Quantity</label>
        <input type="int" class="form-control" name= "Orderdetail_Quantity" placeholder=" Ex 500">
    </div>
    <br>
    <input type="hidden" name="controller" value="Orderdetail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addOrderdetail">Save</button>
    </form>
</body>
</html>