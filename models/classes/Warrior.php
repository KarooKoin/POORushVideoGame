<?php

class Warrior extends Character implements WarriorInterface{
	CONST type = 'Warrior';
	protected $objectName = 'Bouclier de vie';

	public function __construct(){
		$this->strength += 30;
        $objectWarior = new Object('Bouclier de vie',15,'health');
        $this->addObject($objectWarior);
		parent::setInventory($objectWarior);
		parent::__construct();
	}
	
	public function getObjectName(){
		return $this->objectName;
	}

	public function getType(){
		return self::type;
	}

    public function addObject(Object $object){
        $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
        $this->{$object->getFeature()} += $bonus;
    }

	//Attaque plus puissante (200)
	public function powerfulHit(Player $enemy){
        /* on calcule l'attaque */
        $atkPower = 200;

        /* on récupère la vie de l'ennemi */
        $health = $enemy->player_health;

        /* on vérifie si il se protège */
        if($enemy->player_protection == 1){
            $atkPower = $atkPower * 0.25;
            $enemy->player_protection = 0;
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->player_health = $remainLife;
    }

	//!inflige 20% de force et -5 pts d'int
	public function dizziness(Player $enemy){

        /* on calcule l'attaque */
        $atkPower = $this->strength * 0.2;

        /* on récupère la vie de l'ennemi */
        $health = $enemy->player_health;

        /* on vérifie si il se protège */
        if($enemy->player_protection == 1){
            $atkPower = $atkPower * 0.25;
            $enemy->player_protection = 0;
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->player_health = $remainLife;

        $enemy->player_intelligence -= 5;
    }

}
?>