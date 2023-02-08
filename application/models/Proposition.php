<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition extends BDDObject {
    protected $table = 'proposition';

    public function refusOtherPropositions($id_objetdemande){
        $this->load->model('refus');
        $pAnnules = $this->getPropositionsAnnules($id_objetdemande);
        $this->refus->refuserAutres($pAnnules);
    }

    public function getPropositionsAnnules($id_objetdemande){
        $query = "SELECT * FROM proposition  
        JOIN utilisateur as t1 on t1.id=proposition.id_userechange
        JOIN objets as o1 on o1.id=proposition.id_objetechange
        JOIN utilisateur as t2 on t2.id=proposition.id_userdemande
        JOIN objets as o2 on o2.id=proposition.id_objetdemande
        WHERE proposition.id_objetdemande = $id_objetdemande
        AND proposition.id NOT IN (SELECT id FROM proposition WHERE id_ObjetDemande = $id_objetdemande)";
        $query = $this->db->query($query);
        $propositions = array();
        foreach ($query->result() as $row)
        {
                $propositions[] = $row;
        }
        return $propositions;
    }

    public function getAllPropositionsValides($iduser){
        $this->load->model('objet');
        $query = "SELECT * FROM proposition  
        WHERE proposition.id NOT IN (SELECT id_proposition FROM acceptation) AND 
        proposition.id NOT IN (SELECT id_proposition FROM refus) AND proposition.id_userdemande=$iduser";
        $query = $this->db->query($query);
        $info = array();
        $propositions = array();
        $objet1 = array();
        $objet2 = array();
        foreach ($query->result() as $row)
        {
                $propositions[] = $row;
                $objet1[] = $this->objet->getDetailsObjet($row->id_ObjetEchange)[0];
                $objet2[] = $this->objet->getDetailsObjet($row->id_ObjetDemande)[0];
        }
        $info['propositions'] = $propositions;
        $info['objet1'] = $objet1;
        $info['objet2'] = $objet2;
        return $info;
    }
}
