<?php
$tab=array();
$tab[0]=2;
$tab[1]=13;
$tab[2]=5;
$tab[3]=15;
$tab[4]=132;
$tab[5]=8;
$tab[6]=10;
$tab[7]=18;
$tab[8]=3;
$tab[9]=7;
$tab[10]=12;
print_r($tab);
echo '<br>';
// Supprimer	le	premier	nombre
echo "Suppression du premier nombre";
echo '<br>';	
array_shift($tab);
array_splice($tab,0,0);
print_r($tab);
echo '<br>';


// Ajouter	40	aux	nombres
echo "Ajoue de 40 aux nombres";
echo '<br>';
array_push($tab, "40");
print_r($tab);
echo '<br>';
// Remplacer	le	dernier	nombre	par	29
echo "La dernière valeur est 29 '<br>'";
$tab[10]=29;
print_r($tab);
echo '<br>';
// Déterminer	la	somme	des	nombres	
echo "la somme des nombre est " . array_sum($tab) . "\n";
echo '<br>';
// Déterminer	le	tableau	stockant	les	nombres	pairs
 function evenCmp($tab){
 	return !($tab & 1);
 }
 $tabp = array_filter($tab,"evenCmp");
 echo '<br>';
 echo "Tableau pair";
 print_r($tabp);
 echo '<br>';
// Déterminer	le	tableau	stockant	les	carrés	des	nombres
foreach($tab as &$chiffre){
	$chiffre*=$chiffre;
	}
	echo "Le tableau stockant les carrés est '<br>'";
	print_r($tab);
	echo '<br>';

// Déterminer	le	plus	grand	nombre	
$max=max($tab);
echo "le plus grand nombre est $max";