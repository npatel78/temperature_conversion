<?php require "inc/function.inc.php" ?>
<?php require "inc/form-logic.inc.php" ?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <?= $message1 ?>
    <?= $message2 ?>
    <div class="row">
        <div class="col-sm-none col-lg-4">
        </div>
        <div class="col-lg-4">
            <div class="mb-3 col">
                <label for="temp" class="form-label">Original temp</label>
                <input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) {
                                                                    echo $_POST['originaltemp'];
                                                                } ?>" name="originaltemp" id="temp" placeholder="Enter temp here">
            </div>
            <div class="mb-3 col">
                <label for="convert-from" class="form-label">Convert unit from..</label>
                <select id="convert-from" class="form-select" name="originalunit">
                    <option value="--Select--" <?= $originalUnit == "--Select--" ? "selected" : null ?>>--Select--</option>
                    <option value="celsius" <?= $originalUnit == "celsius" ? "selected" : null ?>>Celsius</option>
                    <option value="fahrenheit" <?= $originalUnit == "fahrenheit" ? "selected" : null ?>>Fahrenheit</option>
                    <option value="kelvin" <?= $originalUnit == "kelvin" ? "selected" : null ?>>Kelvin</option>
                </select>
            </div>
            <div class="mb-5 col">
                <label for="convert-to" class="form-label">Convert unit to..</label>
                <select id="convert-to" class="form-select" name="conversionunit">
                    <option value="--Select--" <?= $conversionUnit == "--Select--" ? "selected" : null ?>>--Select--</option>
                    <option value="celsius" <?= $conversionUnit == "celsius" ? "selected" : null ?>>Celsius</option>
                    <option value="fahrenheit" <?= $conversionUnit == "fahrenheit" ? "selected" : null ?>>Fahrenheit</option>
                    <option value="kelvin" <?= $conversionUnit == "kelvin" ? "selected" : null ?>>Kelvin</option>
                </select>
            </div>
        </div>
        <div class="col-sm-none col-lg-4">
        </div>
    </div>
    <div class="row mt-1 text-center justify-content-center">
        <div class="col-4">
            <div class="mb-3 col">
                <button type="submit" class="btn btn-primary">Convert</button>
            </div>
            <div class="mb-3 col justify-content-center">
                <label for="converted-temp" class="form-label text-center">Converted temp</label>
                <input type="text" class="form-control justify-content-center" value="<?php echo $convertedTemp; ?>" name="convertedtemp" id="converted-temp" readonly>
            </div>
        </div>
    </div>
</form>