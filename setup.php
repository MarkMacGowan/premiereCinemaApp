<?php
if (!file_exists('data.sqlite3')) {
    $db = new SQLite3('data.sqlite3');
    $db->exec("PRAGMA foreign_key=ON;");
    // create table called users
    $db->exec("
    CREATE TABLE IF NOT EXISTS users (
        id              INTEGER PRIMARY KEY AUTOINCREMENT,
        username        TEXT NOT NULL UNIQUE, 
        email           TEXT NOT NULL UNIQUE,
        password        TEXT NOT NULL
     )
    ");
    //$db->exec("INSERT INTO users (username, password) VALUES ('admin', '1234')");
    
    // create table called movies
    $db->exec("
    CREATE TABLE IF NOT EXISTS movies (
        id              INTEGER  PRIMARY KEY AUTOINCREMENT,
        movietitle      TEXT NOT NULL, 
        genre           TEXT, 
        rating          TEXT
     )
    ");

    // create table called timetable
    $db->exec("
    CREATE TABLE IF NOT EXISTS timetable (
        id              INTEGER PRIMARY KEY AUTOINCREMENT,
        movie_id        INTEGER NOT NULL, 
        showtime        TEXT NOT NULL, 
        FOREIGN KEY (movie_id) REFERENCES movies(id)
     )
    ");

    // create table called bookings
    $db->exec("
    CREATE TABLE IF NOT EXISTS bookings (
        id              INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id         INTEGER NOT NULL, 
        timetable_id    INTEGER NOT NULL,
        seats           INTEGER DEFAULT 1,
        created_at      TEXT    DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id)       REFERENCES users(id),
        FOREIGN KEY (timetable_id)  REFERENCES timetable(id),

        UNIQUE (user_id, timetable_id)
        
     )
    ");


    echo "✅ Database initialized!";
} else {
    echo "⚠️ Database already exists.";
}
?>