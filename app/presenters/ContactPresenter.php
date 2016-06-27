<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI\Form;

class ContactPresenter extends BasePresenter {

    /**
     * @var \App\Model\contactDB
     * @inject
     */
    public $contactDB;

    public function renderDefault() {
        $this->template->contacts = $this->contactDB->getContact();
    }

    public function createComponentEditForm() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $contactId = 1;
        $contact = $this->contactDB->getContact()->get($contactId);

        $form = new Form;
        $form->addProtection();
        $form->getElementPrototype()->class('ajax');

        $form->addTextArea('phone', 'Telefon:', 30)
                ->setRequired()
                ->setDefaultValue($contact->phone);
        $form->addTextArea('email', 'Email: ', 30)
                ->setRequired()
                ->setDefaultValue($contact->email);
        $form->addTextArea('adress', 'Adresa:', 30)
                ->setRequired()
                ->setDefaultValue($contact->adress);

        $form->addSubmit('send', 'Uložit')
                ->setAttribute('class', 'btn btn-small btn-success button');

        $form->addSubmit('storno', 'Storno')
                        ->setAttribute('class', 'btn btn-small btn-default button')
                        ->setValidationScope(false)
                        ->setValidationScope(array())
                ->onClick[] = $this->formCancelled;

        $form->onSuccess[] = array($this, 'editFormSucceeded');


        return $form;
    }

    public function editFormSucceeded(Form $form) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $contactId = 1;
        $values = $form->values;
        $this->contactDB->updateContact($values, $contactId);

        $this->flashMessage("Příspěvek byl úspěšně publikován.", 'success');

        if (!$this->isAjax()) {
            $this->redirect('this');
        } else {
            $this->invalidateControl('form');
            $form->setValues(array(), TRUE);
        }
    }

    public function formCancelled() {
        $this->redirect('default');
    }

//    public function handleEdit($contactId) { 
//        $contactId = 1;
//            
//        $contact = $this->database->table('contact')->get($contactId);
//        if (!$contact) {
//            $this->error('Prispevok nebol najdeny');
//        }
//        $this['editForm']->setDefaults($contact->toArray());
//        
//        $this->template->contact = $this->isAjax()
//                ? array()
//                : $this->getTheWholeList();
//        $this->template->contact[$contactId] = 'Updated item';
//        $this->redrawControl('contact');
//        
//        if (!$this->getUser()->isLoggedIn()) {
//          $this->redirect('Sign:in');
//          }   
//    }
//     public function actionEdit($id) {
//        
//          if (!$this->getUser()->isLoggedIn()) {
//          $this->redirect('Sign:in');
//          } 
//        $contactId = $this->getParameter('id');
//        $contact = $this->database->table('contact')->get($contactId);
//        if (!$contact) {
//            $this->error('Prispevok nebol najdeny');
//        }
//        $this['editForm']->setDefaults($contact->toArray());
//        
//    }
//    public function handleEdit($id) {
//
//        $contactId = $this->getParameter('id');
//        
//        $contact = $this->database->table('contact')->get($contactId);
//        if (!$contact) {
//            $this->error('Prispevok nebol najdeny');
//        }
//        $this['editForm']->setDefaults($contact->toArray());
//    }

    /*
      public function actionCreate() {
      if (!$this->getUser()->isLoggedIn()) {
      $this->redirect('Sign:in');
      }
      }
     */
}
