<?php
namespace App\Controllers;

use Core\Controller;
use Core\DB;
use Core\Helper;

class EthutoController extends Controller{

    public function indexAction(){

        $db = DB::getInstance();
        $this->view->getSiteTitle();
       $this->view->render();
    }


}
