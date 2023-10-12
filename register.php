<html>
    <head>
        <title>Registration</title>
    </head>

    <div style="margin-left: 450px; padding: 50px; fontsize: 30;">
        <h1>Sign UP</h1>
        <form method="POST" action="submit.php">
        <label for="name">Name:</label>
        <input type="text"  name="fullname"><br><br>

        <label for="Mobile number">Mobile number:</label>
        <input type="number"  name="mobile"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password"  ><br><br>

        <label for="Confirm Password">Confirm Password:</label>
        <input type="password" name="password"  ><br><br>

        <label for="Email">Email:</label>
        <input type="email" name="email"  ><br><br>

        <label for="Gender">Gender:</label>
        <select id="gender" name="gender" >
        <option value="male">Male</option>
        <option value="female">Female</option>
</select><br><br>
         <label for="city">City:</label>
        <input type="city" name="city"  ><br><br>

        <label for="address">Address:</label>
        <input type="address" name="address"  ><br><br>

        <label for="pincode">Pincode:</label>
        <input type="pincode" name="pincode"  ><br><br>

    </select>

        <div style="margin-left: 200px; padding: 40px;">
        Already registered? <a href="login.php">Here</a>
        <button type="submit" name="submit">submit</button>
        <div style="margin-left: 200px; padding: 40px;">
        </form>
    </div>
    </div>
</html>