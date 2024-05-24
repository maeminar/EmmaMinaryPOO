<?php 

namespace Src\Manager;

use Exception;

use Src\Entity\Moto;

class MotoManager extends DataBaseManager 
{

// CREATE :
    public function add (Moto $moto) 
    {
        {
            try {
                $response = $this->getConnection()->prepare("INSERT INTO moto (id, brand, model, type, price, image) VALUES (:id, :brand, :model, :type, :price, :image)");
    
                $response->execute(
                    [    
                        ':id' => $moto->getId(),
                        ':brand' => $moto->getBrand(),
                        ':model' => $moto->getModel(),
                        ':type' => $moto->getType(),
                        ':price' => $moto->getPrice(),
                        ':image' => $moto->getImage(),
                    ]
                );
            } catch (Exception $e) {
                echo ("Erreur lors de l'ajout en BDD");
                exit();
            }
        }
    
    }
// READ :
    public function getAll ()
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto");
        $query->execute([]);

        $results = $query->fetchAll();
  
        return $results;
    }

    public function findById (int $id) : Moto|false
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE id = :id");
        $query->execute([":id" => $id]);

        //Verifier si j'ai un resultat
        $res = $query->fetch();

        if ($res === false) {
            return $res;
        }

        //Convertir le resultat de la requete en Objet
        return  Moto::fromArray($res);

    }

// UPDATE :
    public function edit (Moto $moto, int $id) 
    {
        try {
            $response = $this->getConnection()
                ->prepare("UPDATE moto SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");

            $response->execute(
                [
                    ':id' => $id,
                    ':brand' => $moto->getBrand(),
                    ':model' => $moto->getModel(),
                    ':type' => $moto->getType(),
                    ':price' => $moto->getPrice(),
                    ':image' => $moto->getImage(),
                ]
            );
        } catch (Exception $e) {
            echo($e->getMessage());
            exit();
        }
    }


// DELETE :
 public function delete(int $id)
 {
    $query = $this->getConnection()->prepare("DELETE FROM moto WHERE id = :id");

    $query->execute([
        ':id' => $id
    ]);
}

}