<?php
    class Core{
        public function run(){
            spl_autoload_register(array($this,'LoadClass'));
            $this->setReporting();
            $this->removeMagicQuotes();
            $this->unregisterGlobals();
            $this->Route();
        }
        function setReporting(){
            if(APP_DEBUG === true){
                error_reporting(E_ALL);
                ini_set('display_errors','on');
            }else{
                error_reporting(E_ALL);
                ini_set('display_errors','off');
                ini_set('log_erros','on');
                ini_set('error_log',RUNTIME_PATH.'logs/error.log');
            }
        }
        function stripSlashesDeep($value){
            $value = is_array($value)?array_map('stripSlashesDeep',$value):stripsslashes($value);
            return $value;
        }
        function removeMagicQuotes(){
            if(get_magic_quotes_gpc()){
                $_GET = stripSlashesDeep($_GET);
                $_POST = stripSlashesDeep($_POST);
                $_COOKIE = stripSlashesDeep($_COOKIE);
                $_SESSION = stripSlashesDeep($_SESSION);
            }
        }
        function unregisterGlobals(){
            if(ini_get('register_globals')){
                $array = array('_SESSION','_POST','_GET','_COOKIE','_REQUEST','_SERVER','_ENV','_FILES');
                foreach($array as $value){
                    foreach($GLOBALS[$value]as $key=>$var){
                        if($var === $GLOBALS[$key]){
                            unset($GLOBALS[$key]);
                        }
                    }
                }
            }
        }
        private function Route(){
            $controllerName = 'Index';
            $action = 'Index';

            if(!empty($_GET['url'])){
                $url = $_GET['url'];
                $urlArray = explode('/',$url);
                $controllerName = ucfirst($urlArray[0]);

                array_shift($urlArray);
                $action = empty($urlArray[0])?'Index':$urlArray[0];
                
                array_shift($urlArray);
                $queryString = empty($urlArray)?array():$urlArray;

                //return var_dump($queryString);
            }
            $queryString = empty($queryString)?array():$queryString;
            $controller = $controllerName.'Controller';
            $dispatch = new $controller($controllerName,$action);

            if((int)method_exists($controller,$action)){
                call_user_func_array(array($dispatch,$action),$queryString);
            }else{
                exit($controller."控制器不存在");
            }
        }
        static function LoadClass($class){
            $frameworks = FRAME_PATH.$class.'.php';
            $controllers = APP_PATH.'app/Controllers/'.$class.'.php';
            $models = APP_PATH.'app/Models/'.$class.'.php';

            if(file_exists($frameworks)){
                include $frameworks;
            }elseif(file_exists($controllers)){
                include $controllers;
            }elseif(file_exists($models)){
                include $models;
            }else{

            }
        }
    }
?>