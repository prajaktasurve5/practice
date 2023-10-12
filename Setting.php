<?php
if (isset($_POST['Enter_new_password'], $_POST['Re_enter_password'])) {
    session_start();
    $mobile= $_SESSION['mobile'];
    $Enter_new_password = $_POST['Enter_new_password'];
    $Re_enter_password = $_POST['Re_enter_password'];
    $connect = mysqli_connect('localhost', 'root', '', 'learn');
    $query = "UPDATE user SET password = ? WHERE mobile= ? ";
    $q2 = $connect->prepare($query);
    $q2->bind_param("ss", $Enter_new_password,$mobile);
    if ($q2->execute()) {
        // Password updated successfully
        echo "Password updated successfully.";
    } else {
        // Current password is incorrect
        echo "something went wrong.";
    }

    $q2->close();
    exit;
}

?>



<html>

<head>
    <title>Setting</title>
    
    
        <title>Add product</title>
        <title>Side Menu</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h1>Change password</h1>
        <form method="POST" action="">
            <label for="Enter_new_password">Enter new password:</label>
            <input type="text" name="Enter_new_password"><br><br>

            <label for="Re_enter_password">Re-enter password:</label>
            <input type="text" name="Re_enter_password"><br><br>

            <button type="submit" name="save">Save</button>
        </form>
    </div>
    </div>

</html>