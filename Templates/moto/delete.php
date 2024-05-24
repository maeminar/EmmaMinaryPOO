<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Delete</title>
  </head>

  <form action="RouteDelete" method="POST" onsubmit="return confirm('Êtes vous sur de vouloir supprimer ?');">
    <input class="btn btn-danger" type="submit" value="Supprimer">
  </form>