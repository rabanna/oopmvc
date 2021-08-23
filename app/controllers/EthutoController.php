<?php
namespace App\Controllers;

use Core\Controller;

class EthutoController extends Controller{

    public function indexAction(){

       $this->view->getSiteTitle();
       $this->view->render();
    }


}