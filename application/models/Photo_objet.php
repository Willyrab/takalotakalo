<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_objet extends BDDObject {
    protected $table = 'photo_objet';

    public function getMyPhoto($id_objet){
        $where = array();
        $where['id_objet'] = $id_objet;
        return $this->db->select('*')
        ->from($this->table)
        ->where($where)
        ->get()
        ->result();
    }
}
