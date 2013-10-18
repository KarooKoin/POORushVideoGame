<?php

	/* classe fille pour les mages */
	class Mage extends Character implements MageInterface {

		CONST type = "Mage";

		/* constructeur */
		public function __construct(){

			$this->health -= 150;
			$this->intelligence += 60;
            $objectMage = new Object('Bâton runique',15,'intelligence');
            $this->addObject($objectMage);
            parent::__construct();
		}

		/* get type */
		public function getType(){
			return self::type;
		}

        public function addObject(Object $object){
            $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
            $this->{$object->getFeature()} += $bonus;
        }

		/* destructeur */
		public function __destruct(){}

		/* Passe un tour et inflige 300 de force */
		public function fireBall(Character $enemy){

            // Doit passer un tour avant exécution

            /* on calcule l'attaque */
            $atkPower = 300;

            /* on récupère la vie de l'ennemi */
            $health = $enemy->health;

            /* on vérifie si il se protège */
            if($enemy->protection == 1){
                $atkPower = $atkPower * 0.25;
            }

            /* on calcule la nouvelle vie de l'ennemi */
            $remainLife = $health - $atkPower;

            /* on le set */
            $enemy->health = $remainLife;
		}

		/* Récupère 250 de santé */
		public function firstAid(){
            $this->health += 250;
		}

	}

?>