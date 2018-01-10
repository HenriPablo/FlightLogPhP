<?php
namespace App\Controller;
use ReflectionClass;
use ReflectionMethod;

class HomeController extends AppController{
    public function index(){
        /**
         * http://stackoverflow.com/questions/20963786/how-do-i-get-a-list-of-all-functions-inside-a-controller-in-cakephp
         * http://stackoverflow.com/questions/25892594/list-all-controllers-actions-in-cakephp-3
         */

        $path = $_SERVER['DOCUMENT_ROOT'] . '/'. APP_DIR .'/Controller/';
        $files = scandir($path);
        $controllers = [];
        $files = array_diff( $files, array('.','..','Component','AppController.php','HomeController.php'));
        $class = null;
        $ignoreList2 = ['beforeFilter', 'afterFilter', 'initialize', 'delete', 'edit', 'view'];

        foreach( (array)$files as $file){
                $controller = str_replace('Controller', '', explode('.', $file)[0]);
                array_push($controllers, $controller); //str_replace('Controller', '', $controller));

                /* controller methods */
                $className = 'App\\Controller\\'.$controller.'Controller';
                $class = new ReflectionClass($className);
                $methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);

                //echo "<ul><li>$controller</li>";
                //echo "<ol>";

                foreach($methods as $method){

                    if ( isset( $method->name )){
                        if($method->class == $className && !in_array($method->name, $ignoreList2))
                        {
                            //array_push($controllers[$controller], $action->name);
                            $controllers[$controller][]= $method->name;
                            //echo "<li><a href='$controller/$method->name'>$method->name</a></li>";

                        }
                    }
                }
                //echo "</ol>";
                //echo "</ul>";
        }
        $this->set('allControllers', $controllers );
    }
}
//phpinfo();
