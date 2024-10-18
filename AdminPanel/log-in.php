<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 650px;
            width: 500px;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* max-width: 400px; */
            width: 100%;
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

        .error-message,
        .success-message {
            margin-bottom: 15px;
            text-align: center;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }

        a {
            color: #272535;
            text-decoration: none;
            transition: color 0.3s ease;

        }
    </style>
</head>

<body>

    <?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'stayvista';

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) 
    {
        $user_name = $_POST['username'];
        $pw = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();

            // Verify the password directly
            if ($pw === $stored_password) {
                // Password is correct, start a session
                session_start();
                $_SESSION['username'] = $user_name;
                // Redirect to a welcome page or dashboard
                echo "<script>
                      alert('Login Successful');
                      window.location.href='../index.php';
                  </script>";
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }

        $stmt->close();
    }

    $conn->close();
    ?>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>

            <form action="" method="POST">
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="submit">Login</button>
                <br>
                <br>
                <a href="sign-up.php" style="padding-left: 115px;">Don't have an account? Sign Up</a>
                <br>
                <br>
                <a href="admin-login.php" style="padding-left: 175px;">Login as admin</a>
            </form>
        </div>
    </div>




</body>

</html>