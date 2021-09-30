<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new order</title>
</head>
<body>
    
    <div class="container">
        <h1>Add new order</h1>
        <form method="get" action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">ID</label>
        <input type="text" class="form-control" name= "id" placeholder="Quotation_ID Ex 11001"> 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="number" class="form-control" name= "date" placeholder="Quotation_Date">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Seller
            <select name="sellerID" class="form-select" aria-label="Default select example">
            <option selected>Open this select Seller</option>
                <?php
                    foreach($employee_list as $sell){
                        if($sell->positionID=='POS01'){
                            echo"<option value=$sell->id>$sell->name</option>";
                        }    
                    }    
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Customer
            <select name="customerID" class="form-select" aria-label="Default select example">
            <option selected>Open this select Customer</option>
                <?php
                    foreach($customer_list as $cus){
                        echo"<option value=$cus->id>$cus->name</option>";
                    }    
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Deposit</label>
        <input type="text" class="form-control" name="deposit" placeholder="Quotation_Deposit">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Manager
            <select name="managerID" class="form-select" aria-label="Default select example">
            <option selected>Open this select Manager</option>
                <?php
                    foreach($employee_list as $man){
                        if($man->positionID=='POS04'){
                            echo"<option value=$man->id>$man->name</option>";
                        } 
                    }    
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date approv</label>
        <input type="text" class="form-control" name="dateApprov" placeholder="Quotation_DateApprov">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Extra Product</label>
        <input type="text" class="form-control" name="extraProduct" placeholder="Extra_Product">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date menufacture</label>
        <input type="text" class="form-control" name="dateMenufacture" placeholder="Date_Menufacture">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Transmission Status</label>
        <input type="text" class="form-control" name="transmissionStatus" placeholder="Transmission_Status">
    </div>
    <br>
    <input type="hidden" name="controller" value="order" class="form-control">
    <button type="submit" class="btn btn" name="action" value="order">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="addOrder">Save</button>
    </form>
    </div>
    
</body>
</html>