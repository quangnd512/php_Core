<?php

class Book
{
    protected $id;
    protected $name;
    protected $type;
    protected $pages;
    protected $price;
    protected $auther;
    protected $created_date;
    private $tableName = 'books';
    private $dbConn;

    public function setId($id)
    {$this->id = $id;}
    public function getId()
    {return $this->id;}
    public function setName($name)
    {$this->name = $name;}
    public function getName()
    {return $this->name;}
    public function setType($type)
    {$this->type = $type;}
    public function getType()
    {return $this->type;}
    public function setPages($pages)
    {$this->pages = $pages;}
    public function getPages()
    {return $this->pages;}
    public function setPrice($price)
    {$this->price = $price;}
    public function getPrice()
    {return $this->price;}
    public function setAuther($auther)
    {$this->auther = $auther;}
    public function getAuther()
    {return $this->auther;}
    public function setCreated_date($created_date)
    {$this->created_date = $created_date;}
    public function getCreated_date()
    {return $this->created_date;}

    public function __construct()
    {
        require_once 'DbConnect.php';
        $db = new DbConnect;
        $this->dbConn = $db->connect();
    }

    public function insert()
    {
        $sql = "INSERT INTO $this->tableName VALUES(null, :name, :type, :pages, :price,
        :auther, :cdate)";
        $stmp = $this->dbConn->prepare($sql);
        $stmp->bindParam(':name',$this->name);
        $stmp->bindParam(':type',$this->type);
        $stmp->bindParam(':pages',$this->pages);
        $stmp->bindParam(':price',$this->price);
        $stmp->bindParam(':auther',$this->auther);
        $stmp->bindParam(':cdate',$this->created_date);
        if ($stmp->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function getAllBooks()
    {
        $stmp = $this->dbConn->prepare("SELECT * FROM $this->tableName");
        $stmp->execute();
        $books = $stmp->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }
}
