<?php

namespace App\Model;

use Nette;


class aboutDB {
    
    private $database;
    
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

  
    public function getAbout()
	{
		$about = $this->database->table('aboutus');
                return $about;
	}
        
    public function getCertifications() {
        $certifications = $this->database->table('certifications');
        return $certifications;
    }    
    
    public function getAboutId($aboutId)
	{
		$about = $this->database->table('aboutus')->get($aboutId);
                return $about;
	}
        
     public function insertCertif($fileName, $path){
         $this->database->table('certifications')->insert(array(
            'name' => $fileName,
            'certifUrl' => $path,
        ));
     }

     public function updateAbout($values,$aboutId){
         
        $about = $this->getAbout()->where('id', $aboutId);

        $about->update($values);
           
     }    
}
