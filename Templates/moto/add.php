<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add</title>
  </head>
<div class="p-4 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black">
<h1>Ajouter une nouvelle moto :</h1>
    <form method='POST' action="">
            <div class="form-group row">
        <label for="brand">Brand :</label>
            <div class="col-sm-10">
        <input type="text" name="brand" id="brand" required>
            </div>
            </div>
            <div class="form-group row">
        <label for="model">Model :</label>
            <div class="col-sm-10">
        <input type="text" name="model" id="model" required>
            </div>
            </div>
            <div class="form-group row">
        <label for="type">Type :</label>
            <div class="col-sm-10">
        <input type="text" name="type" id="type" required>
            </div>
            </div>
            <div class="form-group row">
        <label for="price">Price :</label>
            <div class="col-sm-10">
        <input type="number" name="price" id="price" required>
            </div>
            </div>
            <div class="form-group row">
        <label for="image">URL de l'image :</label>
            <div class="col-sm-10">
        <input type="text" name="image" id="image" required>
            </div>
        <input type="submit" value="Ajouter">
    </form>
</div>