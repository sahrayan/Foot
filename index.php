<?php 
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});
// Nationalité
$n1 = new Nationalite('Fr');
// $n2 = new Nationalite('Esp');
// Pays
// $p1 = new Pays('France');
$p2 = new Pays('Espagne');
// // Equipe
// $t1 = new Equipe('PSG',$p1);
// $t2 = new Equipe('Barça',$p2);
$t3 = new Equipe('Real',$p2);
// $t4 = new Equipe('OM',$p1);
// Joueur
$j1 = new Joueur('Amrabat','Sofyan',26,$n1,$t3);
// $j2 = new Joueur('Bounou','Yassine',31,$n1,$t3);
// $j3 = new Joueur('Hakimi','Achraf',24,$n2,$t3);
// $j4 = new Joueur('Ziyech','Hakim',29,$n2,$t3);

?>