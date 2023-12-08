<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
  <title>Login & Register</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      color: #008000;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #008000; 
      /* color: #008000; */
    }
    
    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group .button {
      width: 100%;
      padding: 10px;
      background-color: #008000;
      border: none;
      color: #ffffff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 3px;
    }
    
    .form-group button:hover {
      background-color: #006400;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="proses_login.php" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Login" class="button">
      </div>
    </form>
    <p>Tidak punya akun? <a href="/signup">Sign Up</a></p>
  </div>
</body>
</html>