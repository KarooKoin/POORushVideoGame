<div>
 <table>
	Joueur 1 - {$perso1}<br>
	Pseudo : {$nickname1}<br>
	Objet &eacute;quip&eacute; :<br>
	Sant&eacute; : {$health_p1}<br>
	Force : {$strength_p1}<br>
	Intelligence : {$intel_p1}<br> 
	<a href="index.php?action=gameAction&amp;attacker={$player1}&amp;defender={$player2}&amp;gameAction=attack"><button>Attaquer</button></a>
	<a href="index.php?action=gameAction&amp;player1={$player1}&amp;gameAction=heal"><button>Se soigner</button></a>
	<a href="index.php?action=gameAction&amp;player1={$player1}&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
	<a href="index.php?action=gameAction&amp;player1={$player1}&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
	<a href="index.php?action=gameAction&amp;player1={$player1}&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
</table>
	<br><br>

 <table>
	Joueur 2 - {$perso2}<br>
	Pseudo : {$nickname2}<br>
	Objet &eacute;quip&eacute; :<br>
	Sant&eacute; : {$health_p2}<br>
	Force : {$strength_p2}<br>
	Intelligence : {$intel_p2}<br> 
	<a href="index.php?action=gameAction&amp;attacker={$player2}&amp;defender={$player1}&amp;gameAction=attack"><button>Attaquer</button></a>
	<a href="index.php?action=gameAction&amp;player2={$player2}&amp;gameAction=heal"><button>Se soigner</button></a>
	<a href="index.php?action=gameAction&amp;player2={$player2}&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
	<a href="index.php?action=gameAction&amp;player2={$player2}&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
	<a href="index.php?action=gameAction&amp;player2={$player2}&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
 </table>

 {if $health_p1 == 0  or $health_p2 == 0}
 Partie termin&eacute;e !
 {/if}
