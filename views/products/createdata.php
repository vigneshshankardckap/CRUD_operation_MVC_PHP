<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AddProducts</title>
    <link rel="stylesheet" href="/views/products/style.css">
</head>
<body>


            <form action="/create" method="post"  enctype="multipart/form-data">
                <div class="container">

                    <h2>Create Product Details </h2>
                    <label for="">Product Name</label><br>
                    <input  type="text" name="product_name"  placeholder="Add your products"  required ><br>
                    <label for="">Price</label><br>
                    <input type="number" name="price" placeholder="Your Price" required ><br>
                    <label for="">Add Product Image</label><br>
                    <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px" required><br>

                    <label for="">Product SKU</label><br>
                    <input type="text" name="sku" placeholder="Product SKU" required ><br>
                    <label for="brands">Choose your Brand </label><br>
                    <select name="brands" id="brands">
                    <option value="R15">R15</option>
                    <option value="hero">HERO</option>
                    <option value="honda">honda</option>
                    <option value="suzuki">suzuki</option>
                    </select><br>
                    <label for="">Manufacture Date</label><br>
                    <input type="date" name="manufactured" placeholder="product date" required ><br>
                    <label for="">Available Stock</label><br>
                    <input type="number" name="stock" placeholder="Your Price" required ><br>
                   

                    <input type="submit" name="create" value="Submit" class="create">


                </div>
            </form>
</body>
</html>