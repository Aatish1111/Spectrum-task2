<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\CSS\style.css">
</head>
<body>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $Password = $_POST['Password'];


    $email_search = "select * from registration where email = '$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count>0){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['Password'];
        $_SESSION['Username'] = $email_pass['Username'];
        $_SESSION['email'] = $email_pass['email'];
        $_SESSION['phone_number'] = $email_pass['phone_number'];
        $_SESSION['branch'] = $email_pass['branch'];
        $_SESSION['year'] = $email_pass['year'];
        $_SESSION['domain'] = $email_pass['domain'];
        $pass_decode = password_verify($Password, $db_pass);

        if($pass_decode){
            echo "Login Successful";
            ?>
            <script>
                location.replace("home.php");
            </script>
            <?php
        }else{
            echo "Password Incorrect";
        }
    }else{
        echo "Invalid Email";
    }
}

?>
    <div class="sign-up-form">
        <h1> Login </h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type = "email" name = "email" class ="input-box" placeholder="email">
            <input  required placeholder="Password" name ="Password"  value = "">
            <p><span><input type="checkbox"></span> I agree to terms of services</p>
            <button type="submit" name="submit" class="signup-btn">Login Here</button>
            <hr>
            <p>Do not have an account ? <a href = "registration.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>