<?php 
    include "/../config.php";
    include "/../config/database.php";
    include "/../layout/app.php"; 

    $sqlFile = __DIR__.'/data.sql';
    if (!file_exists($sqlFile)) {
        die("Error: The .sql file does not exist.");
    }else{
        echo "<h5>Importing SQL file for mysql database ... </h5>\r\n";
    }

    $sql = file_get_contents($sqlFile);

    // Execute the SQL commands
    if ($conn->multi_query($sql)) {
        echo "<h5>SQL file imported successfully. ... </h5>\r\n";
    } else {
        echo "Error importing SQL file: " . $conn->error;
    }

    // Close the connection
    $conn->close();



    