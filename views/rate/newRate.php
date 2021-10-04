<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Rate</title>
    </head>
<body>
    <div class="container">
        <h1>Add new Rate</h1>
            <form method="get" action="" style="width: 40%; ">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Product_Name
                        <select name="Product_ID" class="form-select" aria-label="Default select example">
                            <option selected disabled hidden>Select Product_Name</option>
                            <?php foreach($productList as $Product){
                                echo "<option value=$Product->Product_ID>
                                $Product->Product_Name</option>";
                                }
                            ?>
                        </select>
                    </label><br>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Rate_ID </label>
                        <input type="text" name="Rate_ID"/>
                    <br>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Rate_Quantity </label>
                        <input type="text" name="Rate_Quantity"/>
                    <br>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Rate_Price </label>
                        <input type="text" name="Rate_Price"/>
                    <br>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Rate_ScreenPrice </label>
                        <input type="text" name="Rate_ScreenPrice"/>
                    <br>
                </div>
            <input type="hidden" name="controller" value="rate"/>
            <button type="submit" class="btn btn-light" name="action" value="index_rate">Back</button>
            <button type="submit" class="btn btn-success" name="action" value="addRate">Save</button>
        </form>
    </div>
</body>
</html>