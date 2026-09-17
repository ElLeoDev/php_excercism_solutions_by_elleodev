<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        // throw new \BadFunctionCallException("Implement the function");
        return (int) implode("", $digitsOfNumber1) + (int) implode("", $digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $number = str_split((string) $number);
        // throw new \BadFunctionCallException("Implement the function");
        return (int) implode("", array_reverse($number)) === (int) implode("", $number);
    }

    public function validate(string $input): string
    {
        // throw new \BadFunctionCallException("Implement the function");

        if ($input === "")
        {
            return "Required field";
        }
        
        $input = (int) implode("", str_split($input));
        switch (true) {
            case ($input <= 0):
                return "Must be a whole number larger than 0";
            default:
                return "";
        }
    }
}
