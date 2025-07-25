<?php

         
        
        $db = new SQLite3('data.sqlite3');

        
        $db->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");

        
        $db->exec("INSERT INTO users (username, password) VALUES ('admin', '1234')");

        
        $result = $db->query("SELECT * FROM users");

       /*  while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "User: " . $row['username'] . "<br>";
        } */




    ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>     
    <body class="container mt-5">
            <h1>Sign Up</h1>
            <form method="$post" action="$signup.php">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="userName" class="form-label">Username</label>
                        <input type="text" name="userName" id="userName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
    </body>
</html>