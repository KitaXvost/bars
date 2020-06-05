<?php
try {
    $host = 'localhost';
    $port = 5432;
    $dbname = 'vue_spa';
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $username = 'andreipunt90';
    $passwd = 'Ii2329925';
    $dbconn = new PDO($dsn, $username, $passwd);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
}
