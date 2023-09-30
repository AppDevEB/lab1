<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    </style>
</head>
<body>
<form action="/save" method="post">
            <input type="hidden" name= "id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            
            <label style="padding-right:36.5px ;">Product Name</label>
            <input type="text" name= "ProductName" placeholder="Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>"   >
            <br>
            <label>Product Description</label>
            <input type="text" name= "ProductDescription" placeholder="Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>" >
            <br>
            <label style="padding-right:16px ;">Product Category</label>
            <select name="ProductCategory" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">

            <option value="Electronics"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Electronics' ? 'selected' : '' ?>>Electronics</option>
            <option value="Pet Supplies"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Pet Supplies' ? 'selected' : '' ?>>Pet Supplies</option>
            <option value="Media"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Media' ? 'selected' : '' ?>>Media</option>
            <option value="Food and Beverage"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Food and Beverage' ? 'selected' : '' ?>>Food and Beverage</option>
            <option value="Health and Beauty"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Health and Beauty' ? 'selected' : '' ?>>Health and Beauty</option>
            <option value="Clothing and Accessories"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Clothing and Accessories' ? 'selected' : '' ?>>Clothing and Accessories</option>
            <option value="Home and Kitchen Appliances"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Home and Kitchen Appliances' ? 'selected' : '' ?>>Home and Kitchen Appliances</option>
            <option value="Auto Parts and Accessories"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Auto Parts and Accessories' ? 'selected' : '' ?>>Auto Parts and Accessories</option>
            <option value="Home Improvement"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Home Improvement' ? 'selected' : '' ?>>Home Improvement</option>
            <option value="Sporting Goods"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Sporting Goods' ? 'selected' : '' ?>>Sporting Goods</option>
            <option value="Personal Care"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Personal Care' ? 'selected' : '' ?>>Personal Care</option>
            <option value="Toys and Games"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Toys and Games' ? 'selected' : '' ?>>Toys and Games</option>

            </select>
            <br>
            <label style="padding-right:19px ;">Product Quantity</label>
            <input type="number" name= "ProductQuantity" placeholder="Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>" >
            <br>
            <label style="padding-right:42px ;">Product Price</label>
            <input type="text" name= "ProductPrice" placeholder="Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>" >
            <br>
            
            <input type="submit" value="submit">
        </form>
    <h1 >PRODUCT LISTING</h1>
    <table border= "3">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a>|| <a href="/edit/<?= $pr['id'] ?>">edit</a> </td>
            </tr>

        <?php endforeach; ?>
        
    </table>
    <h1>PRODUCT LIST</h1>
    <ul>
    <?php foreach($product as $pr):?>
        <li>
            <h3>Product Name:</h3> <?= $pr ['ProductName'] ?>
            <h3>Product Description:</h3> <?= $pr ['ProductDescription'] ?>
            <h3>Product Category:</h3> <?= $pr ['ProductCategory'] ?>
            <h3>Product Quantity:</h3> <?= $pr ['ProductQuantity'] ?>
            <h3>Product Price:</h3> <?= $pr ['ProductPrice'] ?>
        </li>
       
    <?php endforeach; ?>
</ul>

</body>
</html>