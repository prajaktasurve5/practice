<?php
if(isset($_POST['login'])){
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];
    $connect=mysqli_connect('localhost','root','','learn');
    $fetch=mysqli_query($connect,"select * from user where mobile='$mobile' and password='$password' ");
    $count=mysqli_num_rows($fetch); // count of results found
    if($count==1){
        session_start();
        $_SESSION['mobile']=$mobile;
        header("location:user.php");
    }else{
        echo '<script>alert("user not found!")</script>';
    }
}
?>
<html>
    <head>
        <title>Login</title>
    </head>

    <div style="margin-left: 450px; padding: 50px; fontsize: 18;">
    
        <h1>Sign In</h1>
        <form method='post' action=''>
        <label for="Mobile_number">Mobile number:</label>
        <input type="number" id="Mobile_number" name="mobile"><br><br>

        <label for="Password">Password:</label>
        <input type="text" name="password"  ><br><br>
        
        <button type="submit" name="login">login</button><br><br>
        <p>register with us <a href="register.php">Here</a></p>

       

        </form>
    </div>
</html>