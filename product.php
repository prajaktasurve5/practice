<?php
if(isset($_POST['product_name'], $_POST['product_category'], $_POST['product_price'], $_POST['product_image'])) {
$product_name=$_POST['product_name'];
$product_category=$_POST['product_category'];
$product_price=$_POST['product_price'];
$product_image=$_POST['product_image'];
//  store register value
$query="INSERT INTO product (product_name,product_category,product_price,product_image) values ('$product_name','$product_category','$product_price','$product_image') ";
$connect=mysqli_connect('localhost','root','','learn');
if(mysqli_query($connect,$query))
echo "inserted";
else
echo "failed";
}
?>
<html>
    <head>
    <title>Add product</title>
    <title>Side Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Basic CSS for the side menu */
        #side-menu {
            width: 250px;
            height: 100%; 
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding-top: 20px;
            overflow-y: auto;
        }

        #side-menu a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #side-menu a:hover {
            background-color: #555;
            
        }
        </style>
</head>
<body>
    <?php
    include("sidebar/sidebar.php")
    ?>

    <div style="margin-left: 450px; padding: 50px; fontsize: 30;">
        <h1>Add product</h1>
        <form method="POST" action="">
    <label for="product_name">Product name:</label>
    <input type="text" name="product_name"><br><br>

    <label for="product_category">Product category:</label>
    <input type="text" name="product_category"><br><br>

    <label for="product_price">Product price:</label>
    <input type="text" name="product_price"><br><br>

    <label for="product_image">Product image:</label>
    <input type="file" name="product_image"><br><br>

    <button type="submit" name="save">Save</button>
</form>
    </div>
    </div>
</html>