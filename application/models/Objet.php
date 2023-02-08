<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends BDDObject {
    protected $table = 'objets';

    public function getDetailsObjet($idObjet){
        $where = array('objets.id' => $idObjet);
        $myObjets = $this->db->select('objets.*,photo.id as idPhoto,photo.chemin as photoChemin,utilisateur.*')
        ->from($this->table)
        ->join('utilisateur','utilisateur.id='.$this->table.'.id_utilisateur')
        ->join('photo_objet','photo_objet.id_objet='.$this->table.'.id')
        ->join('photo','photo.id=photo_objet.id_photo')
        ->where($where)
        ->get()
        ->result();
        return $myObjets;
    }

    public function getMyObjets($idUtilisateur){
        $where = array('id_utilisateur' => $idUtilisateur);
        $myObjets = $this->db->select('objets.*,photo.id as idPhoto,photo.chemin as photoChemin')
        ->from($this->table)
        ->join('photo_objet','photo_objet.id_objet='.$this->table.'.id')
        ->join('photo','photo.id=photo_objet.id_photo')
        ->where($where)
        ->group_by('objets.id')
        ->get()
        ->result();
        return $myObjets;
    }

    public function getAllObjectsWithUser($debut, $nbr){
        return $this->db->select('utilisateur.id as idUtilisateur,utilisateur.nom,utilisateur.prenom,
        utilisateur.email,objets.*,photo.id as idPhoto,photo.chemin as photoChemin')
        ->from($this->table)
        ->join('utilisateur','utilisateur.id='.$this->table.'.id_utilisateur')
        ->join('photo_objet','photo_objet.id_objet='.$this->table.'.id')
        ->join('photo','photo.id=photo_objet.id_photo')
        ->limit($nbr, $debut)
        ->group_by('objets.id')
        ->get()
        ->result();
    }
}
