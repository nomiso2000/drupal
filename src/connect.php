<?php
try {
   $connect =  new PDO("mysql:host=". getenv("DB_HOST") ."; dbname=" . getenv("DB_NAME") . "", 'root', 'example');
  }
catch(PDOException $e) {
      echo "DATABASE CONNECTION PROBLEM ". $e->getMessage();
  }