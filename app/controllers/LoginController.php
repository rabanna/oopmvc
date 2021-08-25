<?php
namespace App\Controllers;

use Core\Controller;
use Core\DB;
use Core\Helper;

class LoginController extends Controller{

    public function indexAction(){

        $db = DB::getInstance();
       $this->view->getSiteTitle("Login page");
       $this->view->render('ethuto/login');
    }


}