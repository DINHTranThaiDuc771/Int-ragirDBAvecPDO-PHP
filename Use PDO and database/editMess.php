<?php
	include ("fctAux.inc.php");
    require ("DB.inc.php");
	require_once ("message.inc.php");
	if (empty($_POST['titre']))
    {
        genererFormulaire();
    }
    else
    {
        $titre = htmlspecialchars($_POST['titre']);
        $auteur= htmlspecialchars($_POST['auteur']);
        $email = htmlspecialchars($_POST['email']);
        $datep = htmlspecialchars($_POST['datep']);
        $texte = htmlspecialchars($_POST['texte']);
        $db = db::getInstance(); 



        $db->insertMessage($titre, $auteur,$email, $datep, $texte);      
        $db->close();
        header ("Location: consultMess.php");            
     
    }
        


   

	function genererFormulaire()
	{
        entete();
        echo "<table>\n";
        echo "<form action=\"editMess.php\" method=\"post\">\n";
        echo "<tr><td><label>Titre</td></label><td> <input type=\"text\" name=\"titre\" required></td></tr>\n";
        echo "<tr><td><label>Auteur</td></label><td> <input type=\"text\" name=\"auteur\" required></td></tr>\n";
        echo "<tr><td><label>Email</td></label><td> <input type=\"email\" name=\"email\" required></td></tr>\n";
        echo "<tr><td><label>Date de publication</td></label><td> <input type=\"datetime-local\" name=\"datep\" required></td></tr>\n";
        echo "<tr><td><label>Texte</td></label><td> <textarea name=\"texte\" required> </textarea></td></tr>\n";
        echo "<tr><td><input type=\"reset\" value=\"annuler\"></td><td><input type=\"submit\" value=\"valider\"></td></tr>\n";
        echo "</form>\n";            
        echo "</table>\n";
        pied();
    }
?>
