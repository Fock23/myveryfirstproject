
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



if(isset($_REQUEST['submitContact'])){
    
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];
   
    $contactService->sendContactRequest($message);
    
}