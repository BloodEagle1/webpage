<?php

namespace App\Model;

use Nette;

class referenceDB {

    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    public function getReferences() {
        $references = $this->database->table('references');
        return $references;
    }

    public function getImgs() {
        $galery = $this->database->table('galery');
        return $galery;
    }

    public function getReferenceId($referenceId) {
        $reference = $this->database->table('references')->get($referenceId);
        return $reference;
    }

   
    public function updateReference($values, $reference) {
        $reference->update($values);
    }

    public function insertReference($values) {
        $reference = $this->database->table('references')->insert($values);
        return $reference;
    }

    public function insertImg($referenceId, $fileName, $path) {
        $this->database->table('galery')->insert(array(
            'reference_id' => $referenceId,
            'name' => $fileName,
            'imgUrl' => $path,
            'mainImg' => 0,
            'homeImg' => 0
        ));
    }

    public function deleteGalery($referenceId) {
        $galery = $this->getImgs()->where('reference_id', $referenceId);
        $galery->delete();
    }

    public function deleteReference($referenceId) {
        $reference = $this->getReferenceId($referenceId);
        $reference->delete();
    }

    public function deleteImg($imgId) {
        $img = $this->getImgs()->where('id', $imgId);
        $img->delete();
    }

    public function updateSetMainImg($imgId, $imgReferenceId) {
        $this->getImgs()->where('reference_id', $imgReferenceId)->update(['mainImg' => 0]);

        $this->getImgs()->where('id', $imgId)->update(['mainImg' => 1]);
    }

}
