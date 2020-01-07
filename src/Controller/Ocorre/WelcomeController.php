<?php

namespace App\Controller\Ocorre;

use App\Controller\AppController;

class WelcomeController extends AppController{

    public function index(){

         //$servidor = $this->Auth->user();
         $this->set(compact('user'));
    }
}
