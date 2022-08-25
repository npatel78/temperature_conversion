<?php
// Logic to check for POST and grab data from $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // if originaltemp is null, then display a message asking to enter an amount
    if ($_POST['originaltemp'] == null) {
        $message1 = "<p class=\"alert alert-warning mt-3 shadow text-center\" role=\"alert\">The temperature amount to be converted has not been entered, please try again.</p>";
        // if originaltem is not a numerical value, then display a message asking to enter a numerical value
    } elseif (!is_numeric($_POST['originaltemp'])) {
        $message1 = "<p class=\"alert alert-warning mt-3 shadow text-center\" role=\"alert\">The temperature you entered is not a valid numerical entry, please try again.</p>";
        // if originalunit or conversionunit is set to "--Select--", then display a message to select a conversion type
    } else {
        $message1 = null;
    }


    if ($_POST['originalunit'] == $_POST['conversionunit']) {
        $message2 = "<p class=\"alert alert-warning mt-3 shadow text-center\" role=\"alert\">The temperature units cannot be the same, please try again.</p>";
    } elseif ($_POST['originalunit'] == "--Select--" || $_POST['conversionunit'] == "--Select--") {
        $message2 = "<p class=\"alert alert-warning mt-3 shadow text-center\" role=\"alert\">A conversion unit has not been selected, please try again.</p>";
    } else {
        $message2 = null;
    }
    $originalTemperature = $_POST['originaltemp'];
    $originalUnit = $_POST['originalunit'];
    $conversionUnit = $_POST['conversionunit'];
    $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
} // end if
else {
    $originalUnit = null;
    $conversionUnit = null;
    $convertedTemp = null;
    $message1 = null;
    $message2 = null;
}
