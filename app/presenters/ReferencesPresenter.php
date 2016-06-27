<?php

namespace App\Presenters;

use Nette;
use Nette\Utils\Paginator;

class ReferencesPresenter extends BasePresenter {

    /**
     * @var \App\Model\referenceDB
     * @inject
     */
    public $referenceDB;

    public function renderDefault($referenceChoose) {

        $this->template->references = $this->referenceDB->getReferences()->where('type', $referenceChoose)
                ->order('created_at DESC');

        $this->template->referenceChoose = $referenceChoose;

        $this->template->galery = $this->referenceDB->getImgs();
    }

}

//                ->limit($paginator->getLength(), $paginator->getOffset());
//        // Get visual paginator components
//        $visualPaginator = $this['visualPaginator'];
//        // Get paginator form visual paginator
//        $this->paginator = $visualPaginator->getPaginator();
//        // Define items count per one page
//        $this->paginator->itemsPerPage = $this->limit;
//        // Define total items in list
//        $count = $this->businessRepo->getBusinessCount();
//        $this->paginator->itemCount = $count;
//        // $this->paginator limits to list
//
//        $that = $this;
//        // Define event for example to redraw snippets
//        $this['visualPaginator']->onShowPage[] = (function ($component, $page) use ($that) {
//            $this->page = $page;
//            $this->offset = ($this->page * $this->limit) - $this->limit;
//            $this->businesses = $this->businessRepo->getBusinessesPerPage($this->limit, $this->offset);
//            if ($that->isAjax()){
//                $that->redrawControl('paginator');
//            }
//        });
//        
//        
//        
//        
//        
//        
//        
//        $paginator = new Paginator;
//        $paginator->setItemsPerPage(5); // the number of records on page
//        $paginator->setPage($page);
//
//        $references = $this->database->table('references')
//                ->order('created_at DESC')
//                ->limit($paginator->getLength(), $paginator->getOffset());
//
//        if ($items == 0) {
//            $this->template->totalReferences = $this->database->table('references')->count();
//        } else {
//            $this->template->totalReferences = $items;
//        }
//
//        $paginator->setItemCount($this->template->totalReferences);
//
//        $this->template->totalReferences = $paginator->getPageCount();
//        $this->template->references = $references;
//        $this->template->page = $paginator->page;
//
        
//    }
//    
//    public function loadState(array $params)
//	{
//		parent::loadState($params);
//		$this->getPaginator()->page = $this->page;

