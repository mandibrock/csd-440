<?php
/*
 * Name: Amanda Brock
 * Date: 11/8/26
 * Assignment: Module 4
 *
 * Purpose: Checks six strings to see if they are
 * palindromes. Displays each string in its original and
 * reversed order along with the result of the test.
 * 
 */

// Checks to see if the string reads the same in both directions.
function checkPalindrome($word) {
    $reversed = strrev($word);

    return strtolower($word) == strtolower($reversed);
}

// 3 palindromes and 3 non-palindromes.
$words = array(
    "kayak",
    "butterfly",
    "tacocat",
    "pumpkin",
    "dragon",
    "rotator"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Palindrome Checker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="table-card">
        <h1>Palindrome Checker</h1>
        <p>Can these words be read the same forward and backward?</p>

        <table>
            <thead>
                <tr>
                    <th>Original</th>
                    <th>Reversed</th>
                    <th>Result</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // Loopty loop through all 6 strings.
                foreach ($words as $word) {
                    // Reverse the current string.
                    $reversed = strrev($word);
                    // Test string.
                    $result = checkPalindrome($word);
                ?>
                    <tr>
                        <td><?php echo $word; ?></td>
                        <td><?php echo $reversed; ?></td>
                        <td>
                            <?php
                            if ($result) {
                                echo "<span class='yes'>Yes</span>";
                            } else {
                                echo "<span class='no'>No</span>";
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <p class="note">
            A palindrome reads the same forward and backward.
        </p>
    </main>
</body>
</html>
