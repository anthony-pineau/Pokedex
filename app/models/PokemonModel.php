<?php

class PokemonModel{
    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;
    private $type_name;
    private $color;
    
            /**
             * Get the value of id
             */ 
            public function getId()
            {
                return $this->id;
            }
    
            /**
             * Get the value of nom
             */ 
            public function getNom()
            {
                return $this->nom;
            }
    
            /**
             * Get the value of pv
             */ 
            public function getPv()
            {
                return $this->pv;
            }
    
            /**
             * Get the value of attaque
             */ 
            public function getAttaque()
            {
                return $this->attaque;
            }
    
            /**
             * Get the value of defense
             */ 
            public function getDefense()
            {
                return $this->defense;
            }
    
            /**
             * Get the value of attaque_spe
             */ 
            public function getAttaqueSpe()
            {
                return $this->attaque_spe;
            }
    
            /**
             * Get the value of defense_spe
             */ 
            public function getDefenseSpe()
            {
                return $this->defense_spe;
            }
    
            /**
             * Get the value of vitesse
             */ 
            public function getVitesse()
            {
                return $this->vitesse;
            }
    
            /**
             * Get the value of numero
             */ 
            public function getNumero()
            {
                return $this->numero;
            }
    
            /**
             * Get the value of type_name
             */ 
            public function getTypeName()
            {
                return $this->type_name;
            }

                    /**
             * Get the value of id
             */ 
            public function getColor()
            {
                return $this->color;
            }
    
    public function findAllOrderedByNumero()
    {

        $sql = 'SELECT 
        `pokemon`.`nom`,
        `pokemon`.`pv`,
        `pokemon`.`attaque`,
        `pokemon`.`defense`,
        `pokemon`.`attaque_spe`,
        `pokemon`.`defense_spe`,
        `pokemon`.`vitesse`,
        `pokemon`.`numero`
        FROM `pokemon`
        ORDER BY `pokemon`.`numero` ASC';

        $pdo = Database::getPdo();

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'PokemonModel');
        return $result;

    }

public function getType($pokemonId)
{
    $sql = 'SELECT `pokemon`.`nom`, 
    `pokemon`.`numero`, 
    `type`.`name` AS `type_name`, 
    `type`.`color` 
    FROM `pokemon` 
    INNER JOIN `pokemon_type` 
    ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero` 
    INNER JOIN `type` 
    ON `pokemon_type`.`type_id` = `type`.`id` 
    WHERE `pokemon`.`numero` =' . $pokemonId;

    $pdo = Database::getPdo();

    $pdoStatement = $pdo->query($sql);

    $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'PokemonModel');
    return $result;
}

public function getAllByType($typeId)
{
    $sql = 'SELECT 
    `pokemon`.`nom`,
    `pokemon`.`numero`,
    `type`.`name` AS `type_name` 
    FROM `pokemon` 
    INNER JOIN `pokemon_type` 
    ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero` 
    INNER JOIN `type` 
    ON `pokemon_type`.`type_id` = `type`.`id` 
    WHERE `type`.`name` =' . '"' . $typeId . '"';

    $pdo = Database::getPdo();

    $pdoStatement = $pdo->query($sql);

    $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'PokemonModel');
    return $result;
}


public function findPokemon($pokemonId)
    {
        $sql = 'SELECT 
        `pokemon`.`id`,
        `pokemon`.`nom`,
        `pokemon`.`pv`,
        `pokemon`.`attaque`,
        `pokemon`.`defense`,
        `pokemon`.`attaque_spe`,
        `pokemon`.`defense_spe`,
        `pokemon`.`vitesse`,
        `pokemon`.`numero`
        FROM `pokemon`
        WHERE `pokemon`.`numero`=' . $pokemonId;

        $pdo = Database::getPdo();

        $pdoStatement = $pdo->query($sql);
        
        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'PokemonModel');
        $result = $pdoStatement->fetch();
        return $result;
    }
}   

