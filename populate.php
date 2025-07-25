<?php
    $db = new SQLite3('data.sqlite3');
    $db->exec("PRAGMA foreign_key=ON;");

    // insert movies 
    $db->exec("
        INSERT INTO movies (movietitle, genre, rating) VALUES
            ('Star Trek', 'Sci-Fi', 'PG-13'),
            ('Star Wars Episode V The Empire Strikes Back', 'Science Fantasy', 'PG'),
            ('Zoolander', 'Comedy', 'PG-13'),
            ('Ferris Bueller''s Day Off', 'Comedy/Drama', 'PG-13')
    ");

    $db->exec("
        INSERT INTO timetable (movie_id, showtime) VALUES
            ('1', '2025-08-01 08:00'),
            ('1', '2025-08-01 11:00'),
            ('2', '2025-08-01 13:00'),
            ('2', '2025-08-01 16:00'),
            ('3', '2025-08-02 08:00'),
            ('3', '2025-08-02 11:00'),
            ('4', '2025-08-03 08:00'),
            ('4', '2025-08-03 11:00')
    ");

    echo "✅ movie table and timetable table populated";

?>