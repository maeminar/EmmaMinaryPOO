<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add</title>
  </head>
<div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-dark text-white">
<h1>Ajouter une nouvelle moto :</h1>
    <form method='POST'>
            <div class="form-group row">
        <label for="id" name="id">Id :</label>
            <div class="col-sm-10">
        <input type="texte" name="id" id="id">
            </div>
            </div>
            <div class="form-group row">
        <label for="brand" name="brand">Brand :</label>
            <div class="col-sm-10">
        <input type="texte" name="brand" id="brand">
            </div>
            </div>
            <div class="form-group row">
        <label for="model" name="model">Model :</label>
            <div class="col-sm-10">
        <input type="texte" name="model" id="model">
            </div>
            </div>
            <div class="form-group row">
        <label for="type" name="type">Type :</label>
            <div class="col-sm-10">
        <input type="texte" name="type" id="type">
            </div>
            </div>
            <div class="form-group row">
        <label for="price" name="price">Price :</label>
            <div class="col-sm-10">
        <input type="texte" name="price" id="price">
            </div>
            </div>
        <input type="submit" value="Ajouter">
    </form>
</div>