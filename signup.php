<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $db = new SQLite3('data.sqlite3');
            $db->exec("PRAGMA foreign_key=ON");

            // get input and assign them to variables
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];


            // insert into table
            $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt ->bindValue(':username',$username,SQLITE3_TEXT);
            $stmt ->bindValue(':email',$email,SQLITE3_TEXT);
            $stmt ->bindValue(':password',$password,SQLITE3_TEXT);
            $stmt ->execute();

            echo "<p>Signup Sucessful!</p>";
    }




?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>     
    <body class="container mt-5">
            <h1>Sign Up</h1>
            <form method="post" action="signup.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <a href="index.html" class="btn btn-primary me-2">Return</a>
            </form>
    </body>
</html>
