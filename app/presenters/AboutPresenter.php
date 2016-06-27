<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;

class AboutPresenter extends BasePresenter {
    
    /**
    * @var \App\Model\aboutDB
    * @inject
    */
    public $aboutDB;

    public function renderDefault() {
        $this->template->about = $this->aboutDB->getAbout();
        $this->template->certifications = $this->aboutDB->getCertifications();
        
    }
    
     public function actionEdit($id) {
         if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
         $aboutId = $this->getParameter('id');

        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }

        $about = $this->aboutDB->getAboutId($aboutId);
        
        if (!$about) {
            $this->error('Referencia nebola najdena');
        }
        $this['aboutForm']->setDefaults($about->toArray());
    }
    
    public function createComponentAboutForm() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $form = new Form;
        $form->addProtection();
        $form->addTextArea('content', 'Odesk1:',150,30);

        $form->addSubmit('send', 'Uložit')
                 ->setAttribute('class', 'btn btn-small btn-success');
        
        $form->addSubmit('storno', 'Storno')
                ->setAttribute('class', 'btn btn-small btn-default')
                ->setValidationScope(false)
                ->setValidationScope(array())
                ->onClick[] = $this->formCancelled;
        
        $form->onSuccess[] = array($this, 'aboutFormSucceeded');

        return $form;
    }

    public function aboutFormSucceeded($form, $values) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $aboutId = $this->getParameter('id');
        $about = $this->aboutDB->getAboutId($aboutId);
        
        if ($about) {        
            $this->aboutDB->updateAbout($values, $aboutId);
        $this->flashMessage("Referencia bola úspešne publikovaná.", 'success');
        }
        
        $this->redirect('default');
    }
    
    public function createComponentUploadForm() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $form = new Form;
        $form->addProtection();
        $form->addUpload('img', 'Obrazok: ')
                ->addRule(Form::IMAGE, 'obrazok musi byt JPEG, PNG alebo GIF');
        $form->addSubmit('send', 'Uložit')
                ->setAttribute('class', 'btn btn-small btn-success');
        $form->addSubmit('storno', 'Storno')
                        ->setAttribute('class', 'btn btn-small btn-default')
                        ->setValidationScope(false)
                        ->setValidationScope(array())
                ->onClick[] = $this->formCancelled;
        $form->onSuccess[] = array($this, 'uploadFormSucceeded');

        return $form;
    }
    
    public function uploadFormSucceeded($form, $values) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $file = $values['img'];
        $fileName = $file->getSanitizedName();
        $imgUrl = WWW_DIR . '/img/certifikacie/' . $fileName;
        $path = '/img/certifikacie/' . $fileName;
        $file->move($imgUrl);

        if ($file->isImage() && $file->isOk()) {
            $this->aboutDB->insertCertif($fileName, $path);
        } else {
            
        }
        $this->flashMessage('Obrazok bol uploadnuty', 'success');
        $this->redirect('this');
    }
    
    public function formCancelled()
    {
        $this->redirect('default');
    }
    
}