<?php
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    if ($unit1 == "celsius" && $unit2 == "fahrenheit" && ($temp != null) && is_numeric($temp)) {
        return ($temp * 9 / 5) + 32;
    } elseif ($unit1 == "celsius" && $unit2 == "kelvin" && ($temp != null) && is_numeric($temp)) {
        return ($temp + 273.15);
    } elseif ($unit1 == "fahrenheit" && $unit2 == "celsius" && ($temp != null) && is_numeric($temp)) {
        return ($temp - 32) * 5 / 9;
    } elseif ($unit1 == "fahrenheit" && $unit2 == "kelvin" && ($temp != null) && is_numeric($temp)) {
        return ($temp  + 459.67) * 5 / 9;
    } elseif ($unit1 == "kelvin" && $unit2 == "fahrenheit" && ($temp != null) && is_numeric($temp)) {
        return ($temp * 9 / 5) - 459.67;
    } elseif ($unit1 == "kelvin" && $unit2 == "celsius" && ($temp != null) && is_numeric($temp)) {
        return ($temp - 273.15);
    } elseif (($unit1 == $unit2) && ($temp != null) && is_numeric($temp)) {
        return null;
    }
    // conversion formulas
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15
} // end function