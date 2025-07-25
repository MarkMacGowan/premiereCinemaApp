<!DOCTYPE html>
<html>
    <head>
        <title> Log In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>     
    <body class="container mt-5">
            <h1> Login</h1>
            <form method="$post" action="$login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.html" class="btn btn-primary me-2">Return</a>
            </form>
            
    </body>
</html>
<?php
    $db = new SQLite3('data.sqlite3');
    $db->exec("PRAGMA foreign_key=ON;");
           




?>