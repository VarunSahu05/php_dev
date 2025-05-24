<?php
    //Arithmetic Operators
    // +, -, *, /, %, ** (exponentiation)
    //precedence: (), **, * / %, + -

    // Assignment Operators
    // =, +=, -=, *=, /=, %=, **=

    // Comparison Operators
    // ==, ===, !=, !==, >, <, >=, <=

    // Logical Operators
    // &&, ||, !

    // Bitwise Operators
    // &, |, ^, ~, <<, >>

    // Increment/Decrement Operators
    // ++, -- (increments or decrements a variable by 1)

    // String Operators
    // . : Concatenation (joins two strings together)
    // .= : Concatenation assignment (appends a string to the end of another string)

    // Array Operators
    // + : Union (combines two arrays)
    // == : Equality (checks if two arrays are equal)
    // === : Identity (checks if two arrays are identical)

    // Null Coalescing Operator
    // ?? : Returns the left operand if it exists and is not null; otherwise, it returns the right operand.

    // Spaceship Operator
    // <=> : Returns -1, 0, or 1 when comparing two values, depending on whether the left value is less than, equal to, or greater than the right value.

    // Ternary Operator
    // ? : A shorthand for if-else statements. It takes three operands: a condition, a value if true, and a value if false.

    // Null Coalescing Assignment Operator
    // ??= : Assigns the right operand to the left operand if the left operand is null.

    $x = 10;
    $y = 5;
    $z = null;
    $z = $x + $y;
    echo "The value of z is: {$z} <br>";

    $counter = 0;
    $counter += 1; // Increment counter by 1
    $counter ++; // Increment counter by 1
    $counter -= 1; // Decrement counter by 1
    echo "The value of counter is: {$counter} <br>";

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "The value of total is: {$total} <br>";

?>