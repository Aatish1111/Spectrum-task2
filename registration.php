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
    <!-- <?php include 'CSS/style.css' ?>  -->
</head>
<body style = 'background-color: linear-gradient(120deg, #f0e006, #f75104)'>
<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $Username =mysqli_real_escape_string($con, $_POST['Username']);
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $mobile =mysqli_real_escape_string($con, $_POST['phone_number']);
    $branch =mysqli_real_escape_string($con, $_POST['branch']);
    $year =mysqli_real_escape_string($con, $_POST['year']);
    $domain =mysqli_real_escape_string($con, $_POST['domain']);
    $password =mysqli_real_escape_string($con, $_POST['password']);
    $Cpassword =mysqli_real_escape_string($con, $_POST['Cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $Cpass = password_hash($Cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from registration where email= '$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password === $Cpassword){
            $insertquery = "insert into registration( Username, email, phone_number, branch, year, domain, Password, CPassword)
             values('$Username','$email','$mobile','$branch','$year','$domain','$pass','$Cpass')";
            $iquery = mysqli_query($con, $insertquery); 

            if($iquery){
                ?>
                    <script>
                        alert("Inserted Sucessfully")
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("No Insertion")
                    </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Password Not Matching :)")
            </script>
        <?php
        }
    }
    
}

?>
    <div class="sign-up-form">
        <h1> Sign up Now </h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <input  required placeholder="Name" type="text" name="Username"  required/>
            <br/>
            <br/>
            <input type = "email" class ="input-box" placeholder="Your Email" name="email" required>
            <br/>
            <br/>
            <input pattern="[0-9]" required placeholder="Phone Number" type="number" name="phone_number" required>
            <br/>
            <br/>
            Branch :
            <select class = "Branch" name= "branch">
                <option>Architecture</option>
                <option>Biotechnology</option>
                <option>Civil Engineering</option>
                <option>Computer Science & Application (MCA)</option>
                <option>Computer Science & Engineering</option>
                <option>Electrical Engineering</option>
                <option>Fashion & Apparel Technology</option>
                <option>Information Technology</option>
                <option>Instrumentation & Electronics Engineering</option>
                <option>Mechanical Engineering</option>
                <option>Textile Engineering</option>
                <option>Planning</option>
                <option>Mathematics & Humanities</option>
                <option>Physics</option>
                <option>Chemistry</option>
            </select>
            <br/>
            <br/>
            Year :
            <select class = "Year" name="year">
            <option>1st Year</option>
            <option>2nd Year</option>
            <option>3rd Year</option>
            <option>4th Year</option>
            </select>
            <br/>
            <br/>
            Domain :
            <select class = "Domain" name="domain">
            <option>App Development</option>
            <option>Web Development</option>
            <option>Python Development</option>
            <option>DS/ML</option>
            <option>MATLAB/Simulink</option>
            <option>IOT/Embedded Systems</option>
            <option>PCB Design</option>
            <option>PLC</option>
            <option>Illustration</option>
            <option>UI/UX design</option>
            </select>
            <br/>
            <br/>
            <input  required placeholder="Password" name ="password"  required/>
            <br/>
            <br/>
            <input  required placeholder="Confirm Password" name ="Cpassword"  required />
            <br/>
            <br/>
            <p><span><input type="checkbox"></span> I agree to terms of services</p>
            <button type="submit" name="submit" class="signup-btn">Submit</button>
            <hr>
            <p>Do you have an account ? <a href = "login.php">Sign in</a></p>
        </form>
    </div>
</body>
</html>