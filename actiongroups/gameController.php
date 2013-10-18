<?php
    if ($action == 'newGame'){
        $playerTable = new Player;
        $playerTable->deleteAll();
        $characters = new Character();
        $characters->getAll();
        echo 'GetAll characters<br/>';
       // var_dump($characters);
        $smarty->assign('characters',$characters->getAll());
        $smarty->assign('template','newGame');
    }
    elseif ($action == 'startGame'){ 
        $player1 = new Player();
        $player1->nickname = $_POST['nickname1'];
        $player1->id_character = $_POST['character1'];
       // echo 'Player1_1<br/>';
     //var_dump($player1);
        $character1 = new Character();
        $character1->id_character = $_POST['character1'];
        $character1->hydrate();
      
        $characType1=$character1->type;
        
        //var_dump($characType1);
        //$characTypeObject1=
        $type1 = new $characType1;
        $player1->save($type1);
        
        

      //  echo 'Player1_2<br/>';
        //var_dump($player1);

        $perso1 = $character1->getAll('id_character='.$character1->id_character);
        //var_dump($objectBarbarian);


 
        //var_dump($playergame1);
        //ASSIGN SMARTY PLAYER 1
        $smarty->assign("nickname1",$_POST['nickname1']);
        $smarty->assign('perso1',$perso1[0]->name);
        $smarty->assign('player1',$player1->id_player);


        $player1->savePlayer($type1);
        //var_dump($character1->getName());

        $health_p1 = $player1->player_health;
        $strength_p1 = $player1->player_strength;
        $intel_p1 = $player1->player_intelligence;

        $smarty->assign("health_p1",$health_p1);
        $smarty->assign("strength_p1",$strength_p1);
        $smarty->assign("intel_p1",$intel_p1);
        

        $player2 = new Player();
        $player2->nickname = $_POST['nickname2'];
        $player2->id_character = $_POST['character2'];
        $character2 = new Character();
        $character2->id_character = $_POST['character2'];
        $character2->hydrate();
        $characType2=$character2->type;
        $type2 = new $characType2;

        $player2->save($type2);

        

        $perso2 = $character2->getAll('id_character='.$character2->id_character);

        //ASSIGN SMARTY PLAYER 2
        $smarty->assign("nickname2",$_POST['nickname2']);
        $smarty->assign('perso2',$perso2[0]->name);
        $smarty->assign('player2',$player2->id_player);

        $player2->savePlayer($type2);

        $health_p2 = $player2->player_health;
        $strength_p2 = $player2->player_strength;
        $intel_p2 = $player2->player_intelligence;

        $smarty->assign("health_p2",$health_p2);
        $smarty->assign("strength_p2",$strength_p2);
        $smarty->assign("intel_p2",$intel_p2);
      //  var_dump($player2);
      





        $smarty->assign('template','game');
    }

    elseif($action == "gameAction"){

        /* une attaque */
        if($_GET["gameAction"] == "attack"){

            /* défenseur prends les dégats */
            $defender = new Player();
            $defender->id_player = $_GET["defender"];
            $defender->hydrate();

            /* joueur attaque */
            $player = new Player();
            $player->id_player = $_GET["attacker"];
            $player->hydrate();

            /* l'attaque se passe */
            $player->attack($defender);

            /* on sauvegarde les informations */
            $defender->save();
        }

        /* soin */
        if($_GET["gameAction"] == "heal"){

            /* joueur qui se soigne */
            $player = new Player();
            $player->id_player = $_GET['healed'];
            $player->hydrate();

            /* le joueur se soigne */
            $player->heal();

            /* on sauvegarde les informations */
            $player->save();

        }

        /* soin */
        if($_GET["gameAction"] == "protect"){

            /* joueur qui se soigne */
            $player = new Player();
            $player->id_player = $_GET['protect'];
            $player->hydrate();

            /* le joueur se soigne */
            $player->defend();

            /* on sauvegarde les informations */
            $player->save();

        }


        /* INFORMATIONS JOUEUR 1 */
        $player1 = new Player();
        $player1->id_player = $_GET["player1"];
        $player1->hydrate();

        $character1 = new Character();
        $character1->id_character = $player1->id_character;
        $character1->hydrate();

        //ASSIGN SMARTY PLAYER 1

        $smarty->assign("nickname1",$player1->nickname);
        $smarty->assign('perso1',$character1->name);
        $smarty->assign('player1',$player1->id_player);
        $smarty->assign("health_p1",$player1->player_health);
        $smarty->assign("strength_p1",$player1->player_strength);
        $smarty->assign("intel_p1",$player1->player_intelligence);


        /* INFORMATIONS JOUEUR 2 */
        $player2 = new Player();
        $player2->id_player = $_GET["player2"];
        $player2->hydrate();

        $character2 = new Character();
        $character2->id_character = $player2->id_character;
        $character2->hydrate();
       

        //ASSIGN SMARTY PLAYER 2
        $smarty->assign("nickname2",$player2->nickname);
        $smarty->assign('perso2',$character2->name);
        $smarty->assign('player2',$player2->id_player);
        $smarty->assign("health_p2",$player2->player_health);
        $smarty->assign("strength_p2",$player2->player_strength);
        $smarty->assign("intel_p2",$player2->player_intelligence);


        /* on renvoie le template du jeu */
        $smarty->assign('template','game');
    }

?>