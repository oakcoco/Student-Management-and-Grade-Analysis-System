<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management and Grade Analysis System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: #f4f4f4;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, 'Ubuntu', Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding:0px;
        margin: 0;
        justify-content: center;
        align-items: center;
        display: flex
    }
    .form-container {
        background-color: #fff;
        padding: 100px;
        border-radius: 10px;
        box-shadow:  0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 0 auto;
        width: 1200px;
        position: relative;
            top: 50px;
        content: center;
    }
    .form-group {
        margin-bottom:18px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        text-align: center;
    }
    input[type="text"], input[type="password"] {
        width: 40%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        text-align: center;
        margin: 0 auto;
        display: block;
    }
    button {
        background-color: green;
        color: white;
        padding: 12px 90px;
        border: none;
        border-radius: 7px;
        font-size: 16px;
        text-align:center;
        display: block;
        margin: 0px auto;
    }
    .inside-form-container {
        position: relative;
        right: 16px;
    }
    .system_name {
        text-align: center;
        margin-bottom: 100px;
        padding: 10px;
    }
    .subtitle {
        color: #3838385e;
        font-weight: normal;
        font-size: 15px;
    }
    .forgot-password {
        text-align: center;
        margin-top: 20px;
    }
    .login {
        color: #191919;
        text-decoration: none;
        text-align: center;
    }
    
    
</style>
<body>
    <div class="form-container">
        <!-- put backend logic here at form action -->
        <!-- < form action="" method="POST" > -->
        <form method="POST">
            <ul>
                <div class="inside-form-container">
                    <div class="system_name">
                        <img src="assets/School-PNG-Picture.png" alt="logo" width="100px" height="100px">
                        <h1>Student Management & Grade Analysis System</h1>                    
                        </div>
                        <h4 class="login">Welcome Back!</h4>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" placeholder="Enter your username" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" placeholder="Enter your password" id="password" name="password" required>
                        </div>
                        <button type="submit">Login</button>
                        <div class="forgot-password">
                        <p><a href="#">Forgot Password?</a></p>
                        <h6 class = "subtitle">A web-based project for IT 223 - Interactive Programming and Technologies I.</h6>
                </div>
            </ul>
        </form>
    </div>
</body>
</html>