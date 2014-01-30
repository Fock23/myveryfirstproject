<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactDAO
 *
 * @author Luca
 */
class ContactDAO {
    
    private $db;
    
    public function __construct($_db){
        $this->db = $_db;
    }
    
    public function saveRequest($_message, $_name, $_mail){
        $data = time();
        $sql = $this->db->insertRow("INSERT INTO contact VALUES (?, ?, ?, ?, ?)", array(null, $_name, $_mail, $data, $_message));
        
        return true;
    }
    
}
