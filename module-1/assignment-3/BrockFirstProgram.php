<?php
/* 
 * Name: Amanda Brock
 * Date: 10/22/26
 * Assignment: Module 1.3
 * 
 * Purporse: Bemonstrate basic PHP functionality
 * within an HTML webpage. 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Program</title>
</head>
<body>
    <h1>Meet the Programmer</h1>

    <?php
        // Displays a personal greeting.
        echo "<p>Hi! I'm Amanda, and welcome to my first PHP program</p>";
    ?>

    <?php
        // Store a personal interest in a variable.
        $favoriteHobby = "playing with my GSD, Raya";
        echo "<p>When I'm not coding, I enjoy $favoriteHobby!</p>";
    ?>

</body>
</html>
