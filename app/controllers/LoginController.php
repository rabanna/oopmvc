<?php
namespace App\Controllers;

use Core\Controller;
use Core\DB;
use Core\Helper;

class LoginController extends Controller{

    public function indexAction(){

        $db = DB::getInstance();

        $sql = "INSERT INTO articles(`title`,`body`) VALUES(:title, :body)";
        $bind = ['title'=>'new article','body'=>'article body'];
        $query = $db->execute($sql, $bind);
        $lastid = $query->lastInsertId();

      // $sql = "SELECT * FROM articles";
     //  $articles = $db->query($sql)->getResult();
      //  $query = $db->query($sql);
      //  $article = $query->getResult();
      //  $count = $query->count();
       Helper::dnd($lastid);
        $this->view->getSiteTitle("Login page");
        $this->view->render('ethuto/login');
    }


}