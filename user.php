<?php
session_start();
if(empty($_SESSION['mobile'])){
    header("location:login.php");
}
$id = "id";
$name = "name";
$mobile = "mobile";
$email = "email";
$gender = "gender";
$city = "city";
$connect = mysqli_connect('localhost', 'root', '', 'learn');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$fetch = mysqli_query($connect, "SELECT * FROM user" );
if (!$fetch) {
    die("Query failed: " . mysqli_error($connect));
}

?>

<!DOCTYPE html>
<html>
<head>
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
    
    <!-- Content -->
    
    <div style='margin-left: 250px; padding: 20px;'>
    <div style='display: flex; align-items: center;'>
    <form method="post" action="add_user.php">
        <button type="submit" name="Add_user">Add new user</button>
        <h1 style="margin-left: 20px;">USER</h1>
    </div>
    <p>This is the user list</p>
        <table border='1'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>gender</th>
                    <th>city</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <div style='margin-left: 250px; padding: 20px;'>
            
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($fetch)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["mobile"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["City"] . "</td>";
                    
                    echo "<td> <button type='button'><i class='fa fa-pencil'></i></button> </td>";
                    echo "<td> <button type='button'><i class='fa fa-trash'></i></button> </td>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>

<?php
mysqli_close($connect);
?>
