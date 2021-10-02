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
        <label for="formGroupExampleInput" class="form-label">Orderdetail_ID</label>
        <input type="text" class="form-control" name= "Colordetail_ID" placeholder="Ex COLOR011"> 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Order_ID</label>
        <input type="date" class="form-control" name= "Order_ID" placeholder="Ex 11001">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Seller
            <select name="sellerID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select Seller</option>
                <?php
                    foreach($employee_list as $sell){
                        if($sell->positionID=='POS01'){
                            echo"<option value=$sell->id>$sell->name</option>";
                        }    
                    }    
                ?>
</head>
<body>
<form>
    <label>ColorDetail<select name="ColorDetail_ID">
        <?php foreach($productList as $Product){
            echo "<option values = $Product->Product_ID>$Product->Product_Name</option>";
            }
        ?>
    </select></label><br>
    <label>Orderdetail_ID <input type="text" name="Orderdetail_ID"/></label><br>
    <label>Order_ID <input type="text" name="Order_ID"/>></label><br>
    <label>ColorDetail_ID <input type="text" name="ColorDetail_ID"/>></label><br>
    <label>OrderDetail_QuantityColor <input type="text" name="OrderDetail_QuantityColor"/>></label><br>
    <label>OrderDetail_Quantity	 <input type="text" name="OrderDetail_Quantity"/>></label><br>
    <input type="hidden" name="controller" value="Orderdetail"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addOrderdetail">Save</button>
    </form>
</body>
</html>