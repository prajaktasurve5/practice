<?php 
// if(isset($_POST['fullname'],$_POST['mobile'],$_POST['password'],$_POST['confirm_password'],$_POST['email'],$_POST['gender'],$_POST['city'],$_POST['address'],$_POST['pincode']));

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
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
    <div style="margin-left: 250px; padding: 20px;">
        <h1>Add User</h1>
        <form method="POST" action="submit.php">
            <label for="fullname">Name:</label>
            <input type="text" name="fullname" required><br><br>

            <label for="mobile">Mobile number:</label>
            <input type="number" name="mobile" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br><br>

            <label for="city">City:</label>
            <input type="text" name="city" required><br><br>

            <label for="address">Address:</label>
            <input type="text" name="address"><br><br>

            <label for="pincode">Pincode:</label>
            <input type="text" name="pincode"><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>