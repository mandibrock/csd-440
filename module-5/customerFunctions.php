<?php
/**
 * Name: Amanda Brock
 * Assignment: Module 5.2
 * Purpose: Provide reusable functions for searching customer records.
 */

/** Return customers who matche search value. */
function findCustomers($customers, $field, $value) {
    return array_filter($customers, function ($customer) use ($field, $value) {
        return strcasecmp((string) $customer[$field], (string) $value) === 0;
    });
}

/** Return customers who meet minimum age requirement. */
function findCustomersByAge($customers, $minimumAge) {
    return array_filter($customers, function ($customer) use ($minimumAge) {
        return $customer['age'] >= $minimumAge;
    });
}

/** Find first customer with specified phone number; otherwise return null. */
function findCustomerByPhone($customers, $phone) {
    $phones = array_column($customers, 'phone');
    $index = array_search($phone, $phones, true);
    return $index !== false ? array_values($customers)[$index] : null;
}
?>
