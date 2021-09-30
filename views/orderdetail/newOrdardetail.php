<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Orderdetail</title>
</head>
<body>
    <form>
    <label>Product_Name <select>
        <?php foreach($orderdetail_list as $orderdetail){
            echo "<option values = $Product->Product_ID>$Product->Product_Name</option>";
            }
        ?>
    </select></label><br>
    <label>Orderdetail_ID <input type="text" name="Orderdetail_IDl"/></label><br>
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