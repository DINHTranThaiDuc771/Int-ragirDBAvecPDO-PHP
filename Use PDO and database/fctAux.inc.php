<?php
/* fctAux.inc.php */

// ------------------------------------
// FONCTIONS AUXILIAIRES DE SORTIE HTML
// ------------------------------------

function entete($titre='') {
  echo "<!DOCTYPE html>\n";
  echo "<html>\n";
  echo "<head>\n";
  echo "<meta http-equiv=\"Content-type\" content=\"text/html; charset=UTF-8\">\n";
  echo "<title>$titre</title>\n";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"site.css\">\n";
  echo "</head>\n";
  echo "<body>\n";

  haut();
  echo "<div class=\"milieu\">\n";
  menu();
}

function pied() {
	echo "</div>\n"; /* ferme la div contenu */
  echo "</div>\n"; /* ajout pour fermer la div milieu */

  echo "</body>\n";
  echo "</html>\n";
}

/* Ajout pour l'en-tete et le menu */
function haut() {
  echo "<div class=\"haut\">\n";

  echo "<div class=\"hautGauche\">\n";
  echo "  <img src=\"imagesWA3.png\" alt=\"logo webapp\">\n";
  echo "</div>\n";

  echo "<div class=\"hautCentre\">\n";
  echo " Contrôle de TP WebApp \n";
  echo "</div>\n";
  echo "</div>\n";
}

function menu() {

  echo "  <div class=\"menu\">\n";
  echo "<ul>";
  echo "<a href=\"./editMess.php\"><li> Editer</li></a>";
  echo "<a href=\"./consultMess.php\"><li> Afficher</li></a>";
  echo "<a href=\"deleteMess.php\"><li> Rénitialiser</li></a>";
  echo "</ul>";
  echo "</div>\n";

  echo "    <div class=\"contenu\">\n"; //on ouvre le div pour le contenu de la page
}


?>
