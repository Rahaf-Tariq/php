<?php
session_start();

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    $errors = [];
    
    // Basic validation
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    // If no errors, process login
    if (empty($errors)) {
        // In a real application, you would verify against database
        // For demo purposes, we'll just create a session
        $_SESSION['user'] = [
            'username' => 'DemoUser',
            'email' => $email
        ];
        
        header("Location: dashboard.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #323e3f 0%, #176a86 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
            .container {
             background: rgba(255, 255, 255, 0.2);  /* transparent background */
             backdrop-filter: blur(10px);  /* glass effect */
             padding: 40px;
             border-radius: 10px;
             box-shadow: 0 10px 25px rgba(0,0,0,0.2);
             max-width: 400px;
             width: 100%;
        }

h2 {
    color: white;  /* change from #333 to white */
    margin-bottom: 20px;
    text-align: center;
}
        .form-group {
            margin-bottom: 20px;
        }
           label {
    display: block;
    color: white;  /* change from #555 to white */
    margin-bottom: 5px;
    font-weight: bold;
}
        input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.1);  /* transparent input */
    color: white;  /* white text in input */
    border-radius: 5px;
    font-size: 14px;
}
        input:focus {
            outline: none;
            border-color: #667eea;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #141417;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #bbb5c1;
        }
        .error {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .error ul {
            margin-left: 20px;
        }
        .link {
            text-align: center;
            margin-top: 15px;
        }
        .link a {
            color: #ededee;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        
        <?php if (!empty($errors)): ?>
            <div class="error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            
            <button type="submit" class="btn">Login</button>
        </form>
        
        <div class="link">
            Don't have an account? <a href="signup.php">Sign up here</a>
        </div>
        <div class="link">
            <a href="index.html">← Back to Home</a>
        </div>
    </div>
</body>
</html>