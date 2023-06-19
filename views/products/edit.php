<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link rel="stylesheet" href="/views/products/style.css">
</head>
<body>

<?php foreach ($onedata as $index => $product):?>
    <form action="/edit" method="post"  enctype="multipart/form-data">
        <div class="conatiner">
            <h2>Edit Products</h2>
            <label for="">Product Name</label><br>
            <input  type="text" name="product_name"  placeholder="Add your products" value="<?php echo $product->product_name?>"  required ><br>
            <label for="">Price</label>
            <input type="number" name="price" placeholder="Your Price" value="<?php echo $product->price?>" required ><br>
            <label for="">Add Product Image</label>
            <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px"  value="<?php echo $product->image?>" required> <br>
            <label for="">Product SKU</label>
            <input type="text" name="sku" placeholder="Product SKU" value="<?php echo $product->sku?>" required ><br>
            <label for="brands">Choose your Brand </label>
            <select name="brands" id="brands" ><br>
                <option value="<?php echo $product->brand?>"><?php echo $product->brand?></option>
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Xiaomi">Xiaomi</option>
                <option value="OnePlus">OnePlus</option>
            </select><br>
            <label for="">Manufacture Date</label><br>
            <input type="date" name="manufactured" placeholder="product date" value="<?php echo $product->manufactured?>" required > <br>
            <label for="">Available Stock</label>
            <input type="number" name="stock" placeholder="Your Price" value="<?php echo $product->availabe_stock?>" required > <br>
             <input type="text" name="id" value="<?php echo $product->id?>"> <br>

            <input type="submit" name="edit" value="Update your Products">
        </div>
    </form>
<?php endforeach;?>
</body>
</html>