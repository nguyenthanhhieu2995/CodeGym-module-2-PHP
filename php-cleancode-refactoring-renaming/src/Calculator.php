<?php

class Calculator
{
    public function calculate($a, $b, $o) {
        switch ($o) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}
?>