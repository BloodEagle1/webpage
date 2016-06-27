<?php

namespace App\Presenters;

use Nette,
    App\Model;

class HomepagePresenter extends BasePresenter {
    
        /**
        * @var \App\Model\homepageDB
        * @inject
        */
        public $homepageDB;
   
    
    public function renderDefault()
{
        $this->template->references = $this->homepageDB->getReferences()
                ->order('created_at DESC')
                ->limit(1);
        
        $this->template->galery = $this->homepageDB->getImgs();
        
}

    public function renderSetImgs()
{    
    $this->template->galery = $this->homepageDB->getImgs();
}
    
public function handleSetHomeImg($id, $homeImg) {
    if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $imgId = $this->getParameter('id');
        $idHomeImg = $this->getParameter('homeImg');
        $this->homepageDB->updateSetHomeImg($imgId,$idHomeImg);        
    }

}
