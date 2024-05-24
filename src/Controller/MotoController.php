<?php

namespace Src\Controller;

use Src\Entity\Moto;
use Src\Manager\MotoManager;

class MotoController
{

    private MotoManager $motoManager;

    public function __construct()
    {
        //J'injecte un nouvelle objet ServiceManager dans mon constructeur 
        //Pour l'utiliser dans mon controller avec $this->serviceManager->findById() par exemple
        $this->motoManager = new MotoManager();
    }

    // Route: /moto
    public function getAll()
    {
        $motos = $this->motoManager->getAll();
       
        include(__DIR__ . "/../../Templates/moto/getAll.php");
    }

    // Route: /moto/$id
    public function getById(int $id)
    {   
        $moto = $this->motoManager->findById($id);

        include(__DIR__ . "/../../Templates/moto/getById.php");
    }


    // Route: /moto/$type
    public function getByType($type)
    {
        $moto = $this->motoManager->findByType($type);
    
      //  echo "ROUTE: /moto/$type   (getByType)";
        if (!$moto)
            echo ("Type non renseigne");
        else
            include(__DIR__ . "/../../Templates/moto/getByType.php");
    }

    // Route: /moto/add/
    public function add() 
    {
        //Verif SI form valider ( methode POST )
        if ($_SERVER["REQUEST_METHOD"] === "POST") 
            {
        //SI tous les champs sont fournies
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image'])) {
                //add en BDD
                $moto = $this->motoManager->add($_POST);               
                //redirection index
                header('Location: index.php');
            }
              //Afficher formulaire
            include(__DIR__ . "/../../Templates/moto/add.php");
    }}
    
    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        if ($_SERVER["REQUEST_METHOD"] === "POST") 
        {
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index
        header('Location: ');
        
        //echo "ROUTE: /moto/edit/$id   (edit)";
        include(__DIR__ . "/../../Templates/moto/edit.php");
        }
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        //echo "ROUTE: /moto/delete/$id   (delete)";
        include(__DIR__ . "/../../Templates/moto/delete.php");
    }
}
