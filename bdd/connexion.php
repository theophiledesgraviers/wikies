<?php 

$connexion = new PDO('mysql:host=localhost;dbname=wikies;charset=utf8', 'root', '');
// TODO creer un objet PDF_open_ccitt(pdfdoc, filename, width, height, BitReverse, k, Blackls1)

function getNotes(){
	global $connexion;
	return $connexion->query("SELECT * FROM note")->fetchAll(PDO::FETCH_ASSOC);

}


