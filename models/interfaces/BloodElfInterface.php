<?php
interface BloodElfInterface
{
    //Perd 250 de santé et paralyse l'ennemi pour un tour
    public function bloodDrown(Character $enemy);

    //Annule les dégâts de la prochaine attaque et se soigne pour 25% des dégâts bloqués
    public function frenzy(Character $enemy);

}
?>