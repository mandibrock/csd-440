<?php
/* 
 * Name: Amanda Brock
 * Date: 11/1/26
 * Assignment: Module 3.2
 * 
 * Purporse: Creates HTML table using nested PHP loops. Each cell displays
 * the sum of two random numbers calculated by a function in an
 * external PHP file.
 */
require_once 'tableFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Random Number Table - Module 3</title>
    <style>
        /* Gotta make it pretty*/
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 32px 16px;
            background: #f3f5ef;
            color: #253c32;
            font-family: Arial, Helvetica, sans-serif;
        }
        .table-card {
            width: min(100%, 560px);
            padding: 32px;
            border: 1px solid #dfe7dc;
            border-radius: 20px;
            background: #fffefa;
            box-shadow: 0 12px 35px rgba(33, 61, 46, 0.09);
        }
        h1 {
            margin: 0 0 10px;
            text-align: center;
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(1.7rem, 4vw, 2.3rem);
            color: #254a38;
        }
        p {
            margin: 0 0 26px;
            text-align: center;
            color: #69786d;
            line-height: 1.5;
        }
        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: separate;
            border-spacing: 5px;
        }
        td {
            height: 65px;
            border-radius: 10px;
            background: #eef3e9;
            color: #254a38;
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
            font-variant-numeric: tabular-nums;
            transition: background 0.2s ease, transform 0.2s ease;
        }
        tr:nth-child(even) td { background: #e2ebdf; }
        td:hover {
            background: #c8dac3;
            transform: translateY(-2px);
        }
        .note {
            margin: 22px 0 0;
            font-size: 0.85rem;
            text-align: center;
        }
        @media (max-width: 480px) {
            .table-card { padding: 22px 14px; }
            table { border-spacing: 3px; }
            td { height: 52px; font-size: 1rem; }
        }
    </style>
</head>

<body>
    <main class="table-card">
        <h1>Random Number Addition Table</h1>
        <p>Each cell contains the sum of two randomly generated numbers.</p>

        <table>
            <?php
            // Outer loop creates five table rows.
            for ($row = 1; $row <= 5; $row++) {
            ?>
                <tr>
                    <?php
                    // Inner loop creates five cells per row.
                    for ($col = 1; $col <= 5; $col++) {

                        // Generate two random numbers.
                        $num1 = rand(1, 50);
                        $num2 = rand(1, 50);

                        // Call the external function to add them.
                        $sum = addNumbers($num1, $num2);
                    ?>
                        <td><?php echo $sum; ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
        <p class="note">Refresh the page to generate a new set of numbers.</p>
    </main>
</body>
</html>