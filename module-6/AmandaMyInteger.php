<?php
/**
 * Name: Amanda Brock
 * Assignment: Module 6.2
 * Purpose: Create two integer objects and display tests of all class methods.
 */
require_once __DIR__ . '/MyIntegerClass.php';

$integer1 = new AmandaMyInteger(17);
$integer2 = new AmandaMyInteger(9);

// Record original values before testing setter.
$objects = [$integer1, $integer2];
$updatedValues = [24, 2];
$results = [];

foreach ($objects as $index => $object) {
    $original = $object->getValue();
    $before = [$object->isEven($original), $object->isOdd($original), $object->isPrime()];
    $object->setValue($updatedValues[$index]);
    $updated = $object->getValue();
    $after = [$object->isEven($updated), $object->isOdd($updated), $object->isPrime()];
    $results[] = ['original' => $original, 'updated' => $updated, 'before' => $before, 'after' => $after];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyInteger | PHP Class Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="container">
    <header class="intro">
        <p class="eyebrow">ASSIGNMENT: Module 6.2</p>
        <h1>MyInteger</h1>
        <p>Two integer objects, five methods, and a little number magic.</p>
    </header>
    <div class="cards">
        <?php foreach ($results as $index => $result): ?>
        <section class="card">
            <h2>Instance <?= $index + 1 ?></h2>
            <div class="values">
                <div><span>Constructor / getter</span><strong><?= $result['original'] ?></strong></div>
                <span class="arrow" aria-hidden="true">&rarr;</span>
                <div><span>Setter / getter</span><strong><?= $result['updated'] ?></strong></div>
            </div>
            <table>
                <thead><tr><th scope="col">Method</th><th scope="col">Before</th><th scope="col">After</th></tr></thead>
                <tbody>
                <?php foreach (['isEven()', 'isOdd()', 'isPrime()'] as $i => $method): ?>
                    <tr><th scope="row"><?= $method ?></th>
                        <td><span class="result <?= $result['before'][$i] ? 'yes' : 'no' ?>"><?= $result['before'][$i] ? 'True' : 'False' ?></span></td>
                        <td><span class="result <?= $result['after'][$i] ? 'yes' : 'no' ?>"><?= $result['after'][$i] ? 'True' : 'False' ?></span></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <p class="note">The setter changes the stored value from <?= $result['original'] ?> to <?= $result['updated'] ?>.</p>
        </section>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>
