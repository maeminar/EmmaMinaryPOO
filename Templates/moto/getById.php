<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>GetById</title>
  </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="card-title">Détails de la moto</h1>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Id :</strong> <?php echo $moto->getId(); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Marque :</strong> <?php echo $moto->getBrand(); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Modèle :</strong> <?php echo $moto->getModel(); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Type :</strong> <?php echo $moto->getType(); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Prix :</strong> <?php echo $moto->getPrice(); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>URL :</strong> <?php echo $moto->getImage(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
