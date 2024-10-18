<?php
include('./connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('assets/img/login-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .signup-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* max-width: 400px; */
            width: 500px;
            height: 650px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-field {
            margin-bottom: 15px;
        }

        .input-field label {
            display: block;
            margin-bottom: 5px;
        }

        .input-field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #272535;
            color: #c4a676;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c4a676;
            color: black;
        }

        .error-message, .success-message {
            margin-bottom: 15px;
            text-align: center;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="" method="POST">
                <div class="input-field">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo isset($first_name) ? $first_name : ''; ?>" required>
                </div>
                <div class="input-field">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo isset($last_name) ? $last_name : ''; ?>" required>
                </div>
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-field">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" required>
                </div>
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                </div>
                <div class="input-field">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="<?php echo isset($phone_number) ? $phone_number : ''; ?>" required>
                </div>
                <button type="submit" name="submit">Register</button>
            </form>
            </div>
    </div>

                <?php
                if (isset($_POST['submit'])) 
                {
                    $first_name =$_POST['first_name'];
                    $last_name =$_POST['last_name'];
                    $user_name = $_POST['username'];
                    $pw = $_POST['password'];
                    $cpass = $_POST['cpassword'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone_number'];

                    if($pw == $cpass)
                    {

                        $sql = "INSERT INTO users (first_name, last_name, username, password, email, phone_number) VALUES (?, ?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sssssi", $first_name, $last_name, $user_name, $pw, $email, $phone_number);
                        
                        if ($stmt === false) {
                            die("Prepare failed: " . $conn->error);
                        }
                        
                        if (!$stmt->execute()) {
                            die("Execution failed: " . $stmt->error);
                        }
                        
                        $stmt->close();
                        echo "<script>
                            alert('New record created successfully');
                            window.location.href='./log-in.php';
                            </script>";
                    }
                    else{
                        echo '<script>alert("Passwords must be same")</script>';
                    }
                }
                ?>
</body>
</html>


