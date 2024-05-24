<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit</title>
  </head>
<div class="p-4 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black">
<h1>Modifier une  moto</h1>
<form method='POST' action="">
    <div class="form-group row">
        <label for="brand">Brand :</label>
        <div class="col-sm-10">
            <input type="text" name="brand" id="brand" value="<?php echo $moto->getBrand(); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="model">Model :</label>
        <div class="col-sm-10">
            <input type="text" name="model" id="model" value="<?php echo $moto->getModel(); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="type">Type :</label>
        <div class="col-sm-10">
            <input type="text" name="type" id="type" value="<?php echo $moto->getType(); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="price">Price :</label>
        <div class="col-sm-10">
            <input type="number" name="price" id="price" value="<?php echo $moto->getPrice(); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="image">URL de l'image :</label>
        <div class="col-sm-10">
            <input type="text" name="image" id="image" value="<?php echo $moto->getImage(); ?>">
        </div>
    </div>
    <input type="submit" value="Modifier">
</form>

</div>