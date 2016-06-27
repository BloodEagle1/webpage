<?php

namespace App\Model;

use Nette;


class homepageDB {
    
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

  
    public function getReferences()
	{
		$references = $this->database->table('references');
                return $references;
	}
        
     public function getImgs()
	{
		$galery = $this->database->table('galery');
                return $galery;
	}
        
     public function updateSetHomeImg($imgId, $idHomeImg){
        $img = $this->getImgs()->where('id', $imgId);
      
        if($idHomeImg == 1 ){     
        $this->getImgs()->where('homeImg', $idHomeImg)->update(['homeImg' => 0]); 
        
        $img->update(['homeImg' => 1]);
        }
        elseif ($idHomeImg == 2 ) {    
        $this->getImgs()->where('homeImg', $idHomeImg)->update(['homeImg' => 0]);
        $img->update(['homeImg' => 2]);
        }
        elseif ($idHomeImg == 3 ) {    
        $this->getImgs()->where('homeImg', $idHomeImg)->update(['homeImg' => 0]);
        $img->update(['homeImg' => 3]);
        }         
     }    
}
