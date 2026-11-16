<?php
/**
 * Name: Amanda Brock
 * Assignment: Module 6.2
 * Purpose: Store an integer and determine if it's even, odd, or prime.
 */
class AmandaMyInteger
{
    private int $value;

    /** Initialize the object with an integer. */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /** Return the stored integer. */
    public function getValue(): int
    {
        return $this->value;
    }

    /** Update the stored integer. */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /** Determine if the integer is even. */
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }

    /** Determine if the integer is odd. */
    public function isOdd(int $number): bool
    {
        return $number % 2 !== 0;
    }

    /** Determine if the stored integer is prime. */
    public function isPrime(): bool
    {
        $number = $this->value;
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
}
