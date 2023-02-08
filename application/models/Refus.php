<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refus extends BDDObject {
    protected $table = 'refus';

    public function refuserAutres($propositions){
        $options_echap = array();
        $options_non_echap = array();
        $options_non_echap['daterefus'] = 'now()';
        foreach($propositions as $pro){
            $options_echap['id_proposition'] = $pro->id;
            $this->create($options_echap, $options_non_echap);
        }       
    }
}
