<?php
    session_start();
    // if there is no user id in this session, go to login page. 
    if (!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit();
    }
    $username= $_SESSION['username'];
    $email= $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <title>Movie Listings</title>  
         <!--Latest Version of bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <div class="container mt-5">
            <h1 class='mb-4'>Now Showing</h1>
                    <!-- logout button -->
                    <p>
                        <a href='logout.php' class='btn btn-primary me-2'>LogOut</a>
                    </p>
            <div class="row">
            <?php
                $db = new SQLite3('data.sqlite3');
                $db->exec("PRAGMA foreign_key=ON;");

                $result = $db->query("SELECT movietitle, genre, rating, image_path FROM movies");
               
                
                   
                

                echo "<div class='container'><div class='row'>";
                
                    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                        echo "
                        <div class='col-md-4 mb-4'>
                            <div class='card h-100'>
                                <img src='{$row['image_path']}' class='card-img-top' alt='{$row['movietitle']}'>
                                <div class='card-body'>
                                    <h2 class='card-title'>{$row['movietitle']}</h2>
                                        <p class='card-text'>
                                            Genre: {$row['genre']}</br>
                                            Rating: {$row['rating']}</br>
                                            <a href='booking.php' class='btn btn-primary me-2'>Book Now</a>
                                        </p>
                                </div>
                            </div>
                        </div>";
                    }
            ?>
            </div>
        </div>
    </body>
</html>

