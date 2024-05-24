<?php

namespace Src\Controller;

use Src\Entity\Moto;
use Src\Manager\MotoManager;

class MotoController
{

    private MotoManager $motoManager;

    //public function __construct()
    //{
        //J'injecte un nouvelle objet ServiceManager dans mon constructeur 
        //Pour l'utiliser dans mon controller avec $this->serviceManager->findById() par exemple
       // $this->motoManager = new MotoManager();
    //}

    // Route: /moto
    public function getAll()
    {
        $motos = $this->motoManager->getAll();
        $res = "";
        if ($motos) 
        {
            $res = json_encode($motos);
        } else {
            $res = ("Aucune moto trouvé");
        }
        return $res;
    }
    //Appel de template
    //include(__DIR__ . "/../../Templates/moto/index.php");
    

    // Route: /moto/$id
    public function getById(int $id)
    {   
        $moto = $this->motoManager->findById($id);

        if ($moto) 
        {
            echo "ROUTE: /moto/$id   (getById)";
        } 
        else {
            echo json_encode("Moto non trouvé");
        }
    }


    // Route: /moto/$type
    public function getByType($type)
    {
        echo "ROUTE: /moto/$type   (getByType)";
    }

    // Route: /moto/add/
    public function add()
    {
        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //redirection index

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
