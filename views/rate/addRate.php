<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Rate</title>
</head>
<body>
    <form>
    <label>Product_Name <select>
        <?php foreach($productList as $Product){echo "option values = $Product->Product_ID>$Product->Product_Name</option>";}?>
    </select></label>





    </form>
</body>
</html>