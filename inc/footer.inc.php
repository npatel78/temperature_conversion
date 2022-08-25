<?php
$copyright = "&copy; 2021 by Nayan Patel"
?>
<div class="row shadow navbarFooter-background-color">
    <div class="col-12 text-center text-light py-3 my-3">
        <?= $copyright ?>
    </div>
</div>
<div class="row">
    <div class="col-4 my-3 pc">
        <p>Use the color picker to set background color:</p>
        <input type="color" id="color"><br>
        <button class=" my-3 btn btn-primary btn-sm" id="bgcolor">Set Background Color</button>
        <button class=" my-3 btn btn-secondary btn-sm" id="reset">Reset</button>
    </div>
</div>
</div>
<!-- boostrap javascript file -->
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>