<?php

namespace App\Controller;
//use App\Controller\AppController;
use ReflectionClass;
use ReflectionMethod;

use Cake\Core\Configure\ConfigEngineInterface;
use Cake\Core\Configure\Engine\PhpConfig;


use Cake\Core\Configure;
class HomeController extends AppController{
    public function index(){
        echo( "<h1>Hello C</h1>");
        /**
         * http://stackoverflow.com/questions/20963786/how-do-i-get-a-list-of-all-functions-inside-a-controller-in-cakephp
         * http://stackoverflow.com/questions/25892594/list-all-controllers-actions-in-cakephp-3
         */
        $Configure = Configure::configured();
        dump( $Configure);

        $files = scandir(APP_DIR . '/Controller/');
        $results = [];
        $ignoreList = [
            '.',
            '..',
            'Component',
            'AppController.php',
        ];

        $className = '';
        $ignoreList2 = ['beforeFilter', 'afterFilter', 'initialize', 'delete'];
        $results2 = [];
        foreach($files as $file){
            if(!in_array($file, $ignoreList)) {
                $controller = explode('.', $file)[0];
                array_push($results, str_replace('Controller', '', $controller));

                dump( $controller );

                /* controller methods */
                $className = 'App\\Controller\\'.$controller;
                $class = new ReflectionClass($className);
                $actions = $class->getMethods(ReflectionMethod::IS_PUBLIC);


//                array_push( $results2[$controller][]  );
                //$results2[$controller][] = array();

                foreach($actions as $action){
                    if($action->class == $className && !in_array($action->name, $ignoreList2))
                    {
                        array_push($results2[$controller], $action->name);
                    }
                }
//                dump( $results2 );
            }
        }

        dump( APP_DIR );
        dump( getcwd() );
        dump( $results2 );

        $this->set('allControllers', $results2 );

    }
}
