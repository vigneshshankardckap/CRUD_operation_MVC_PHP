<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Lists</title>
    <link rel="stylesheet" href="./views/products/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/52d2b40c3f.js" crossorigin="anonymous"></script>
    
</head>
<body>
<table>
<tr>
        <th rowspan>id</th>
        <th>Product_name</th>
        <th>Price</th>
        <th>Image</th>
        <th>SKU</th>
        <th>Brand</th>
        <th>Manufactured</th>
        <th>Available_Stock</th>
        <th>edit</th>
        <th>delete</th>



</tr>
        <?php foreach ($allproducts as $index => $product):?>

    <tr>
        <td><?php echo $index+1?></td>
        <td><?php echo $product->product_name?></td>
        <td><?php echo $product->price?></td>
        <td><img class="productimage" src="<?php echo $product->image?>"></td>
        <td><?php echo $product->sku?></td>
        <td><?php echo $product->brand?></td>
        <td><?php echo $product->manufactured?></td>
        <td><?php echo $product->availabe_stock?> <?php if( $product->availabe_stock < 10):?>
                <p style="color: #ff0000"> <?php echo "few stock are left " ?> </p>
            <?php endif; ?>
        </td>
        <td>
            <div class="action"></div>
            <form action="/view" method="post" >
                <input type="hidden" name="view" value="<?php echo $product->id?>">
                <button type="submit" name="action"  value="view">Edit</button>
            </button>
            </form>
            </td>
           <td>
            <form action="/delete" method="post">
            <input type="hidden" name="delete" value="<?php echo $product->id?>">
            <button type="submit" name ="action" value ="delete">delete</button>

            </form>
            </div>
        </td>

    </tr>

    <?php endforeach;?>

<form action="/create" method="post">
    <button type ="submit"   class="create">Create new one</button>
</form>
    
   

</table>
  

</body>
</html>