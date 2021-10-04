<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateOrderdetailForm</title>
    </head>
<body>
<div class="container">
        <h1>Add new Orderdetail</h1>
    <form method="get" action="" style="width: 40%; ">
        <div class="mb-3">
        <label>Orderdetail_ID<input type="text" name="Orderdetail_ID" value="<?php echo $orderdetail->Orderdetail_ID;?>"></label><br>
        <label>Order_ID<input type="text" name="Order_ID" value="<?php echo $orderdetail->Order_ID;?>"></label><br>
                    <label for="formGroupExampleInput2" class="form-label">Colordetaildetail
                        <select name="Colordetail_ID" class="form-select" aria-label="Default select example">
                                <?php foreach($colordetail_list as $color){
                                    {
                                        echo"<option value=$color->Colordetail_ID>$color->Product_ID $color->Color_Name</option>";
                                    }     
                                }    
                                ?>
                        </select>
                    </label><br>
                </div>
        <label>Orderdetail_QuantityColor<input type="text" name="Orderdetail_QuantityColor" value="<?php echo $orderdetail->Orderdetail_QuantityColor;?>"></label><br>
        <label>Orderdetail_Quantity<input type="text" name="Orderdetail_Quantity" value="<?php echo $orderdetail->Orderdetail_Quantity;?>"></label><br>
        
        <input type="hidden" name="controller" value="orderdetail" class="form-control">
    <button type="submit" class="btn btn" name="action" value="index">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="updateOrderdetail">Update</button>
    </form>
    </div>
</body>
</html>