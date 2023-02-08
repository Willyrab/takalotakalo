<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceptation extends BDDObject {
    protected $table = 'acceptation';

    public function historiqueEchange(){
        $this->load->model('objet');
        $this->load->model('utilisateur');
        $query = "SELECT * FROM acceptation  
        JOIN proposition on acceptation.id_proposition=proposition.id";
        $query = $this->db->query($query);
        $echangesReussies = array();
        $info = array();
        $objet1 = array();
        $objet2 = array();
        $utilisateur1 = array();
        $utilisateur2 = array();
        foreach ($query->result() as $row)
        {
                $echangesReussies[] = $row;
                $objet1[] = $this->objet->getDetailsObjet($row->id_ObjetEchange)[0];
                $objet2[] = $this->objet->getDetailsObjet($row->id_ObjetDemande)[0];
                $where = array('id' => $row->id_UserEchange);
                $utilisateur1[] = $this->utilisateur->getAll('*', $where)[0];
                $where['id'] = $row->id_UserDemande;
                $utilisateur2[] = $this->utilisateur->getAll('*', $where)[0];
        }
        $info['objet1'] = $objet1;
        $info['objet2'] = $objet2;
        $info['utilisateur1'] = $utilisateur1;
        $info['utilisateur2'] = $utilisateur2;
        $info['echangesReussies'] = $echangesReussies; 
        return $info;
    }
}
