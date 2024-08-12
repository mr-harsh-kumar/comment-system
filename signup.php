<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Signup Form </title>
    
    <link rel="icon" type="image/x-icon" href="data:image/jpeg;base64,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">

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Add your CSS styles here */
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
   
    #red {
        color: red;
        /* background: rgb(27, 18, 18); */
        font-size:24px;
    }
    #green {
        color: green;
        /* background: rgb(27, 18, 18); */
        font-size:24px;
    }
    
</style>

</head>
<body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <?php include 'header.php' ;?> -->

<?php 
    
    $showalert=false;
    $showerror=false;
    $email = "";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'dbconnect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exist=false;
        $sql="select * from `login system` where `username`='$username'";
        $result=mysqli_query($conn,$sql);
        $userexist=mysqli_num_rows($result);
        if($userexist>0){
            $exist=true;
            warn2();
        }
        else{
           

            if($password==$cpassword && $exist==false){
                
                $hash=password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `login system` (`sno`, `username`, `password`, `time`) VALUES (NULL, '$username', '$hash', current_timestamp())";
                $result=mysqli_query($conn,$sql);
                if($result){
                   success();
            
                }
                else{
                 warn1();
                }
            
            }
            else {
               warn1();}
        }    
        
    }
?>

    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="signup.php" method="post">
                <h1 id="login">Sign Up</h1>
                
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" maxlength="18" placeholder="Username" name="username" />
                <div style="position:relative;">
                    <input type="password" id="password" required placeholder="Password" name="password"/>
                    <i class="fa fa-eye eye-icon" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <div style="position:relative;">
                    <input type="password" id="cpassword" required placeholder="Confirm Password" name="cpassword"/>
                    <i class="fa fa-eye eye-icon" onclick="togglecPasswordVisibility('cpassword')"></i>
                </div>
                <!-- <a href="#">Forgot your password?</a> -->
                <button type="submit" name="submit" id="sign_up">Sign Up</button> 
                
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to Signup Form</h1>
                    <p>please Sign up to login </p>
                    <button ><a href="login.php" class="login">Log In</a></button> <br>
                    <button ><a href="main1.php" class="login">Home</a></button> <br>
                    <?php  
                   
    function warn1(){
        echo '<div class="alert alert-danger" id="red" role="alert">
  <strong>Warning:</strong> Passwords do not match.
</div>';}
function warn2(){
    echo '<div class="alert alert-danger" id="red" role="alert">
<strong>Warning:</strong> Username already exists.
</div>';}
function success(){
    echo '<div class="alert alert-success" id="green" role="alert">
<strong>Success!</strong> Your Account has been created and you can Login now.
</div>';}
?>

                </div>
            </div>
            <!-- <button ><a href="#" class="login">Log In</a></button>  -->
        </div>

    </div>

    <script>
        // Add your JavaScript functions here
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }
        function togglecPasswordVisibility(inputId) {
            const cpasswordInput = document.getElementById(inputId);
            cpasswordInput.type = cpasswordInput.type === 'password' ? 'text' : 'password';
        }
    </script>
    
    
    <!-- <?php include 'footer.php'; ?> -->
</body>
</html>
