<?php
foreach ($motos as $moto) {
?>
<body>
    <div class="getById">
            <p>Id : <?php echo($moto['Id']); ?></p>
            <p>Brand: <?php echo($moto['Brand']); ?></p>
            <p>Model: <?php echo($moto['Model']); ?></p>
            <p>Type: <?php echo($moto['Type']); ?></p>
            <p>Price: <?php echo($moto['Price']); ?></p>
            <p>URL: <?php echo($moto['Image']); ?></p>
     </div>
</body>
<?php
}
?>