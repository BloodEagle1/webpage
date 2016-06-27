<?php

namespace App\Model;

use Nette;


class contactDB {
    
    private $database;
    
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

  
    public function getContact()
	{
		$contact = $this->database->table('contact');
                return $contact;
	}
        
        
     public function updateContact($values,$contactId){
         
        $contact = $this->getContact()->get($contactId);
        $contact->update($values);
           
     }    
}
