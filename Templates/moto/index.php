Toutes les moto



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
use Src\Controller\MotoController;
use Src\Entity\Moto;
$motoController = new MotoController ();
$motos = json_decode($motoController->findAll());
foreach ($motos as $moto) { ?>
<div class="row d-flex justify-content-center">
<div class="border border-grey col-sm-6 mb-3 mb-sm-0">
        
        <p><?php echo $moto->id;?></p>

        <form method='POST' action='deleteAd.php?id=<?php echo $moto['id']?>'>  
        <label for="id" name="id"></label>
        <input class="btn btn-danger text-align-center m-3" type="submit" name="id" id="id" value="Supprimer cette annonce">
        </form>
</div>
<?php
}
?>

</body>
</html>