<div class="container shadow">
    <div class="row mt-5">
        <div class="col text-center">
            <h3 class="mt-5" id="time"></h3>
        </div>
    </div>
    <div class="row mt-5 shadow background-imgLocal">
        <div class="col text-center">
            <h1 class="ps-5 text-start text-light display-1">Temperature Converter</h1>
            <p class="lead ps-5 text-start">Use this converter to convert Celsius, Fahrenheit and Kelvin temperatures.</p>
        </div>
    </div>
    <div class="row mt-5">
        <?php require "inc/form.inc.php" ?>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12 col-lg-6 mb-3">
            <div class="mx-0 px-3 background-color">
                <h1 class="border-bottom border-dark">Temperature Formulas</h1>
                <ul>
                    <li class="py-2">Celsius to Fahrenheit = T(°C) × 9/5 + 32</li>
                    <li class="py-2">Celsius to Kelvin = T(°C) + 273.15</li>
                    <li class="py-2">Fahrenheit to Celsius = (T(°F) - 32) × 5/9</li>
                    <li class="py-2">Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9</li>
                    <li class="py-2">Kelvin to Fahrenheit = T(K) × 9/5 - 459.67</li>
                    <li class="py-2">Kelvin to Celsius = T(K) - 273.15</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 mb-3">
            <div class="mx-0 px-3 background-color">
                <h1 class="border-bottom border-dark">Temperature Info</h1>
                <h5 class="fw-bold">Celcius</h5>
                <p>The degree Celsius is a unit of temperature on the Celsius scale, a temperature scale originally known as the centigrade scale.</p>
                <h5 class="fw-bold">Fahrenheit</h5>
                <p>The Fahrenheit scale is now usually defined by two fixed points: the temperature at which pure water freezes into ice is defined as 32 °F and the boiling point of water is defined to be 212 °F, both at sea level and under standard atmospheric pressure.</p>
                <h5 class="fw-bold">Kelvin</h5>
                <p>Kelvin temperature scale, a temperature scale having an absolute zero below which temperatures do not exist. Absolute zero, or 0°K, is the temperature at which molecular energy is a minimum, and it corresponds to a temperature of −273.15° on the Celsius temperature scale..</p>
            </div>
        </div>
    </div>