<?php

namespace App\Presenters;


use Nette,
    App\Model;
use IPub\FlashMessages;

class SignPresenter extends BasePresenter {

    public $userManager;
    use FlashMessages\TFlashMessages;
  
    protected function createComponentSignInForm() {
        $form = new Nette\Application\UI\Form;
        $form->addText('username', 'Uživatelské meno:')
                ->setRequired('Prosím vyplňte svoje uživateľské meno.');

        $form->addPassword('password', 'Heslo:')
                ->setRequired('Prosím vyplňte svoje heslo.');

        $form->addCheckbox('remember', 'Zapamätať');

        $form->addSubmit('send', 'Prihlásit');

        $form->onSuccess[] = array($this, 'signInFormSucceeded');
        return $form;
    }

    public function signInFormSucceeded($form) {
 
        $values = $form->getValues();
		if ($values->remember) {
			$this->getUser()->setExpiration('+ 2 days', FALSE);
		} else {
			$this->getUser()->setExpiration('+ 20 minutes', TRUE);
		}
		try {
			$this->getUser()->login($values->username, $values->password);
		} catch (Nette\Security\AuthenticationException $e) {
			$form->addError($e->getMessage());
			return;
		}
		$this->redirect('Homepage:');
    }
    
        function actionOut() {
            $this->getUser()->logout();
            $this->flashMessage('Bol si odhlaseny');
            $this->redirect('Homepage:');
        }

    }



  