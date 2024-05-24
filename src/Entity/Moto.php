<?php 

namespace Src\Entity;

Class Moto 
{
    private int $id;
    private string $brand;
    private string $model;
    private string $type;
    private float $price;
    private string $image;

    public function __construct (int $id, string $brand, string $model, string $type, float $price, string $image)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }
    static public function fromArray(array $array): self
    {
        return new self($array["Id"], $array["Brand"], $array["Model"], $array["Type"], $array["Price"], $array["Image"] );
    }

    public function toString() 
    {
        $res = " id =" . (string)$this->id . "\n brand = " . $this->brand . "\n model = " . $this->model . "\ntype = " . $this->type . "\nprice = " . (string)$this->price . "\nimage = " . $this->image;
        return $res;
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    

}