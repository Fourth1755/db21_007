<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Order</title>
</head>
<body>
    <br>
    (Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity
    <div class="container">
        <form method="get" action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Quotation_ID</label>
        <input type="text" class="form-control" name= "name" placeholder="Anime input placeholder" > 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Quotation_Date</label>
        <input type="number" class="form-control" name= "episode" placeholder="Episodes">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Seller_ID
            <select name="sellerID" class="form-select" aria-label="Default select example">
            <option selected>Open this select Seller</option>
                <?php
                    foreach($seller_list as $sell){
                        echo"<option value=$sell->id>$sell->name</option>";
                    }    
                ?>
            </select>
        </label>
    </div>
    



    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Quotation_Deposit</label>
        <input type="text" class="form-control" name="year" placeholder="year">
    </div>
    <br>
    <input type="hidden" name="controller" value="anime" class="form-control">
    <button type="submit" class="btn btn" name="action" value="index">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="addAnime">Save</button>
    </form>
    </div>
    
</body>
</html>