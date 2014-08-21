<?php

// Let's connect to database
try {
     $db = new PDO("mysql:host=localhost;dbname=ekmek", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

