<?php

/*classe permettant de representer les tuples de la table client */
class Message {
    /*avec PDO, il faut que les noms attributs soient les mêmes que ceux de la table*/
    public $titre;
    public $auteur;
    public $email;
    public $datep;
    public $texte;

    /* Les méthodes qui commencent par __ sont des methodes magiques */
    /* Elles sont appelées automatiquement par php suite à certains événements. */
    /* Ici c'est l'appel à new sur la classe qui déclenche l'exécution de la méthode */
    /* des valeurs par défaut doivent être spécifiées pour les paramètres du constructeur sinon
         il y aura une erreur lorsqu'il sera appelé automatiquement par PDO
     */

    function __construct($titre="", $auteur="",$email="", $datep="", $texte="")
    {
        $this->titre  = $titre;
		$this->auteur = $auteur;
        $this->email  = $email;
        $this->datep  = $datep;
        $this->texte  = $texte;
	}

    public function getTitre() { return $this->titre; }
    public function getEmail() { return $this->email; }
    public function getDatep() { return $this->datep; }
    public function getTexte() { return $this->texte; }

    public function __toString() {
        $res = "<article>";
        $res = $res."<h3>Titre: ". $this->titre ."</h3> <br/>";
		$res = $res."<h4>Auteur: ". $this->auteur ." - Date: ".$this->datep."</h4><br/>";
		$res = $res."<h5>Email: ". $this->email ."</h5><br/>";
		$res = $res."<p>". $this->texte ."</p> <br/>";
        $res = $res."</article>";

        return $res;

    }
}

//test
//$unclient = new Client(5,'Dupont','Le Havre');
//echo $unclient;
?>