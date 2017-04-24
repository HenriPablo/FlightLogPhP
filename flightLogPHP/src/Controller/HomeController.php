<?php

namespace App\Controller;
use App\Controller\AppController;

class HomeController extends AppController{
    public function index(){
        echo( "<h1>Hello C</h1>");
        /**
         * http://stackoverflow.com/questions/20963786/how-do-i-get-a-list-of-all-functions-inside-a-controller-in-cakephp
         */
    }
}
