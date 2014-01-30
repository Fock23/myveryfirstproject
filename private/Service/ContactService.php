<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

 *  */

/**
 * Description of ContactService
 *
 * @author Luca
 */
class ContactService {
    
    private $dao;
    
    public function __construct($_dao){
        $this->dao = $_dao;
    }
    
    public function sendContactRequest($_message,$_name,$_mail){
        
        return $this->dao->sendRequest($_message,$_name,$_mail); 
    }
}
