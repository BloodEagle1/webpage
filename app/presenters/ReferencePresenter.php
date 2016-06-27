<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI\Form;
use IPub\FlashMessages;

class ReferencePresenter extends BasePresenter {
    /** @var Nette\Database\Context */

    /**
     * @var \App\Model\referenceDB
     * @inject
     */
    public $referenceDB;

    use FlashMessages\TFlashMessages;

    public function renderDefault($referenceId) {
        $reference = $this->referenceDB->getReferenceId($referenceId);
        if (!$reference) {
            $this->error('Stránka nebyla nalezena');
        }

        $this->template->reference = $reference;
        $this->template->galery = $this->referenceDB->getImgs()->where('reference_id', $referenceId);
    }

    public function createComponentReferenceForm() {
        $types = array(
            'voda' => 'Voda',
            'solar' => 'Solar',
            'vykurovanie' => 'Vykurovanie',
            'cerpadla' => 'Čerpadla',
        );
        $form = new Form;
        $form->addProtection();
        $form->addSelect('type', 'Sekcia:', $types)
                ->setPrompt('Zvol sekciu')
                ->setRequired('Prosím vyberte sekciu.');
        $form->addText('title', 'Titulok:', 30)
                ->setRequired('Prosím zadajte názov.');
        $form->addTextArea('technologies', 'Technológie:', 150, 5)
                ->setRequired('Prosím zadajte technologie');
        $form->addTextArea('devices', 'Zariadenia:', 150, 5)
                ->setRequired('Prosím zadajte zariadenia.');

        $form->addSubmit('send', 'Uložit')
                ->setAttribute('class', 'btn btn-small btn-success');
        $form->addSubmit('storno', 'Storno')
                        ->setAttribute('class', 'btn btn-small btn-default')
                        ->setValidationScope(false)
                        ->setValidationScope(array())                       
                ->onClick[] = $this->formCancelled;
        $form->onSuccess[] = array($this, 'referenceFormSucceeded');
        
        return $form;
    }

    public function referenceFormSucceeded($form, $values) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $path = WWW_DIR . '/img/';
        $referenceId = $this->getParameter('referenceId');

        if ($referenceId != NULL) {
            $reference = $this->referenceDB->getReferenceId($referenceId);
            $this->referenceDB->updateReference($values, $reference);
        } else {
            $reference = $this->referenceDB->insertReference($values);
            mkdir($path . $reference->id);
        }
        $this->flashMessage("Referencia bola úspešne publikovaná.", 'success');
        $this->redirect('default', $reference->id);
    }

    public function formCancelled() {
        $this->redirect('References:default');
    }
    
    public function formCancelledU() {
        $this->redirect('this');
    }

//    public function createComponentUploadForm() {
//        $form = new Form;
//        $form->addUpload('img', 'Obrazok: ')
//                ->addRule(Form::IMAGE, 'obrazok musi byt JPEG, PNG alebo GIF');
//        $form->addSubmit('send', 'Uložit');
//        $form->onSuccess[] = array($this, 'uploadFormSucceeded');
//
//        return $form;
//    }

    public function createComponentUploadForm() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $form = new Form;
        $form->addProtection();
        $form->addUpload('img', 'Obrazok: ')
                ->addRule(Form::IMAGE, 'Obrázok musí byť vo formáte JPEG, PNG alebo GIF');
        $form->addSubmit('send', 'Uložit')
                ->setAttribute('class', 'btn btn-small btn-success');
        $form->addSubmit('storno', 'Storno')
                        ->setAttribute('class', 'btn btn-small btn-default')
                        ->setValidationScope(false)
                        ->setValidationScope(array())
                ->onClick[] = $this->formCancelledU;
        $form->onSuccess[] = array($this, 'uploadFormSucceeded');

        return $form;
    }

    public function uploadFormSucceeded($form, $values) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $referenceId = $this->getParameter('referenceId');

        $file = $values['img'];
        $fileName = $file->getSanitizedName();
        $imgUrl = WWW_DIR . '/img/' . $referenceId . '/' . $fileName;
        $path = '/img/' . $referenceId . '/' . $fileName;
        $file->move($imgUrl);

        if ($file->isImage() && $file->isOk()) {
            $this->referenceDB->insertImg($referenceId, $fileName, $path);
        } else {
            
        }
        $this->flashMessage('Obrazok bol uploadnuty', 'success');
        $this->redirect('this');
    }

    public function handleDelete() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }

        $path = WWW_DIR . '/img/';

        $referenceId = $this->getParameter('referenceId');

        if ($referenceId != NULL) {
            $this->referenceDB->deleteGalery($referenceId);
            $reference = $this->referenceDB->getReferenceId($referenceId);
            $this->referenceDB->deleteReference($referenceId);

            $dir = $path . $reference->id;

            function delTree($dir) {
                $files = array_diff(scandir($dir), array('.', '..'));

                foreach ($files as $file) {
                    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
                }

                return rmdir($dir);
            }

            delTree($dir);
        }
        $this->flashMessage("Referencia bola zmazana");

        $this->redirect('References:default');
    }

    public function handleDeleteImage($id, $reference_id, $name) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }

        $imgId = $this->getParameter('id');
        $referenceId = $this->getParameter('reference_id');
        $imgName = $this->getParameter('name');
        $path = WWW_DIR . '/img/';
        $dir = $path . $referenceId;
        unlink($dir . '/' . $imgName);
        $this->referenceDB->deleteImg($imgId);

        $this->flashMessage("Obrazok bol zmazany");

        $this->redirect('this');
    }

    public function handleSetMainImg($id, $reference_id) {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
        $imgId = $this->getParameter('id');
        $imgReferenceId = $this->getParameter('reference_id');

        $this->referenceDB->updateSetMainImg($imgId, $imgReferenceId);
    }

    public function actionEdit($referenceId) {

        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }

        $reference = $this->referenceDB->getReferenceId($referenceId);
        if (!$reference) {
            $this->error('Referencia nebola najdena');
        }
        $this['referenceForm']->setDefaults($reference->toArray());
    }

    public function actionCreate() {
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:');
        }
    }

}
