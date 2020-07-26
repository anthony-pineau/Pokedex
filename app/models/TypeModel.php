<?php

class TypeModel extends CoreModel{
    private $name;
    private $color;

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    public function findAllType()
{
    $sql = 'SELECT `type`.`name`, `type`.`color` FROM `type`';

    $pdo = Database::getPdo();

    $pdoStatement = $pdo->query($sql);

    $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'TypeModel');
    return $result;
}
}