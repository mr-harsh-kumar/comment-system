<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    header("Location: main1.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form</title>
    <style>
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        #red {
            color: red;
            font-size: 24px;
        }
        #green {
            color: green;
            font-size: 24px;
        }
        #home {
            border-radius: 30px;
        }
    </style>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="login.php" method="post">
                <h1 id="login">Login</h1>
                <?php 
                if(isset($_GET['available'])){
                    $avail = $_GET['available'];
                    echo 'Please Login to access ' . htmlspecialchars($avail);
                }
                if(isset($_GET['discuss'])){
                    $discuss = $_GET['discuss'];
                    echo 'Please Login to enroll yourself in ' . htmlspecialchars($discuss);
                }
                ?>
                
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                    
                    <?php
                    require_once 'vendor/autoload.php';

                    // Function to handle login
                    function loginUser($username) {
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                    }

                    // You should store your Google OAuth Client ID in an environment variable
                    $clientID = getenv('GOOGLE_CLIENT_ID');

                    // If you need to create a client object, do so using the environment variable
                    // $client = new Google_Client();
                    // $client->setClientId($clientID);
                    ?>

                </div>
                <span>or use your account</span>
                <input type="text" placeholder="Username" name="username" required />
                <div style="position:relative;">
                    <input type="password" required id="password" placeholder="Password" name="password"/>
                    <i class="fa fa-eye eye-icon" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <button type="submit" name="submit" id="log_in">Log In</button>
                <br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    include 'dbconnect.php';
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = "SELECT * FROM `login system` WHERE `username`='$username'";

                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);

                    if ($num == 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if (password_verify($password, $row['password'])) {
                                if (!isset($_SESSION['loggedin'])) {
                                    $_SESSION['loggedin'] = true;
                                    $_SESSION['username'] = $username;
                                    success();
                                    sleep(2);
                                    echo '<meta http-equiv="refresh" content="0; url=http://localhost/hk/login system/main1.php"/>';
                                    exit;
                                } else {
                                    warn();
                                    echo "User is already logged in.";
                                }
                            } else {
                                warn();
                                echo "Invalid username or password";
                            }
                        }
                    } else {
                        warn();
                        echo "Invalid username or password";
                    }
                }
                ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to Login Form</h1>
                    <p>Please login if you already signed up</p>
                    <p>You can access our available resources by logging in</p>
                    <button class="signup"><a href="signup.php">Sign Up</a></button><br>
                    <button id="home"><a href="main1.php" class="login">Home</a></button><br>
                    <?php
                    function warn() {
                        echo '<div class="alert alert-danger" id="red" role="alert">
                            <strong>Warning!</strong> Invalid Credentials.
                        </div>';
                    }

                    function success() {
                        echo '<div class="alert alert-success" id="green" role="alert">
                            <strong>Success!</strong> You are logged in successfully.
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
