<?php
/**
 * Name: Amanda Brock
 * Assignment: Module 5.2
 * Purpose: Display customer directory and search records using array functions.
 */
require_once __DIR__ . '/customerFunctions.php';

// Create indexed array with customer records.
$customers = [
    ['firstName' => 'Sir', 'lastName' => 'Meowsalot', 'age' => 4, 'phone' => '215-555-0101'],
    ['firstName' => 'Chairman', 'lastName' => 'Meow', 'age' => 7, 'phone' => '215-555-0102'],
    ['firstName' => 'Princess', 'lastName' => 'Beans', 'age' => 3, 'phone' => '215-555-0103'],
    ['firstName' => 'Lord', 'lastName' => 'Fluffington', 'age' => 9, 'phone' => '215-555-0104'],
    ['firstName' => 'Captain', 'lastName' => 'Whiskers', 'age' => 5, 'phone' => '215-555-0105'],
    ['firstName' => 'Sir', 'lastName' => 'Purrington', 'age' => 6, 'phone' => '215-555-0106'],
    ['firstName' => 'Professor', 'lastName' => 'ToeBeans', 'age' => 12, 'phone' => '215-555-0107'],
    ['firstName' => 'Biscuit', 'lastName' => 'McMuffin', 'age' => 2, 'phone' => '215-555-0108'],
    ['firstName' => 'Count', 'lastName' => 'Catula', 'age' => 8, 'phone' => '215-555-0109'],
    ['firstName' => 'Princess', 'lastName' => 'Pickles', 'age' => 4, 'phone' => '215-555-0110'],
    ['firstName' => 'General', 'lastName' => 'Noodle', 'age' => 10, 'phone' => '215-555-0111'],
    ['firstName' => 'Mr.', 'lastName' => 'Fluffington', 'age' => 11, 'phone' => '215-555-0112']
];

// Search the array using different customer fields.
$phoneMatch = findCustomerByPhone($customers, '215-555-0108');
$sections = [
    'All Customers' => $customers,
    'First Name: Sir' => findCustomers($customers, 'firstName', 'Sir'),
    'Last Name: Fluffington' => findCustomers($customers, 'lastName', 'Fluffington'),
    'Age: 5 and Older' => findCustomersByAge($customers, 5),
    'Phone: 215-555-0108' => $phoneMatch !== null ? [$phoneMatch] : []
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Purrfect Customer Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header class="page-header">
            <p class="eyebrow">ASSIGNMENT: Module 5.2</p>
            <h1>The Purrfect Customer Directory</h1>
            <p>A directory of our most distinguished (and occasionally chaotic) customers.</p>
        </header>
        <!-- Display the full directory and each group of matching records. -->
        <?php foreach ($sections as $heading => $records): ?>
            <section class="customer-section">
                <div class="section-heading">
                    <h2><?= htmlspecialchars($heading) ?></h2>
                    <span class="count"><?= count($records) ?> <?= count($records) === 1 ? 'record' : 'records' ?></span>
                </div>
                <?php if (empty($records)): ?>
                    <p class="empty">No matching customers found.</p>
                <?php else: ?>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr><th scope="col">First Name</th><th scope="col">Last Name</th><th scope="col">Age</th><th scope="col">Phone Number</th></tr>
                            </thead>
                            <tbody>
                                <?php foreach ($records as $customer): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($customer['firstName']) ?></td>
                                        <td><?= htmlspecialchars($customer['lastName']) ?></td>
                                        <td><?= htmlspecialchars((string) $customer['age']) ?></td>
                                        <td><?= htmlspecialchars($customer['phone']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
    </main>
</body>
</html>
