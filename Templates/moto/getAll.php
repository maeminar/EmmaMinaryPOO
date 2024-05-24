<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>GetAll</title>
  </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="card-title">Liste de toutes les motos :</h1>
                    <ul class="list-group">
                        <?php foreach ($motos as $moto): ?> 
                            <li class="list-group-item">
                                <p>Id : <?php echo($moto['Id']); ?></p>
                                <p>Marque : <?php echo($moto['Brand']); ?></p>
                                <p>Modèle : <?php echo($moto['Model']); ?></p>
                                <p>Type : <?php echo($moto['Type']); ?></p>
                                <p>Prix : <?php echo($moto['Price']); ?></p>
                                <p>URL : <?php echo($moto['Image']);?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
