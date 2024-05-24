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
    public function getByType(string $type)
    {
        $moto = $this->motoManager->findByType($type);
    
        echo "ROUTE: /moto/$type   (getByType)";

        include(__DIR__ . "/../../Templates/moto/getByType.php");
    
        //return $moto;
    }

    // Route: /moto/add/
    public function add()
    {
        //Verif SI form valider ( methode POST )

        //SI tous les champs sont fournies
        //add en BDD
        //redirection index

        // IL FAUT INCLUDE ICI LE TEMPLATES
        //Afficher formulaire
        echo "ROUTE: /moto/add   (add)";
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index

        echo "ROUTE: /moto/edit/$id   (edit)";
    }

    // Route: /pizza/delete/$id
    public function delete($id)
    {
        echo "ROUTE: /moto/delete/$id   (delete)";
    }
}
