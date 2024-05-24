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
            if (isset($_POST['id'], $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image'])) 
            { 
                //add en BDD
                
                $moto = new moto($_POST['id'], $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                $this->motoManager->add($moto);              
            }      
        }
        //Afficher formulaire   
        include(__DIR__ . "/../../Templates/moto/add.php");
    }
    
    // Mon Edit ne fonctionne pas et je n'ai plus de temps :'( 

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        $moto = $this->motoManager->findById($id);
        if (!$moto) {
            echo("Cette moto n'existe pas");
        }
        //Verif si form valider ( methode POST )
        if ($_SERVER["REQUEST_METHOD"] === "POST") 
        {
        // Tout les champs sont fournies
        if (isset($_POST['id'], $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image'])) 
        { 
       
        $moto->setBrand($_POST['brand']);
        $moto->setModel($_POST['model']);
        $moto->setType($_POST['type']);
        $moto->setPrice($_POST['price']);
        $moto->setImage($_POST['image']);
        
        $this->motoManager->edit($moto, $id); 
        }      
        }
        //Afficher formulaire   
        include(__DIR__ . "/../../Templates/moto/edit.php");
        }
    

    // Route: /moto/delete/$id
    public function delete($id)
    {
        $this->motoManager->delete($id); 
        //echo "ROUTE: /moto/delete/$id   (delete)";
        include(__DIR__ . "/../../Templates/moto/delete.php");
    }
}
