<?php
    namespace App\Controller;

    use Kernel\Controller;
    //use App\Model\IndexModel;
    use App\View\LoginView;
    use App\DB\DB;
    
    class LoginController extends Controller {
        protected $paras;
    
        public function __construct($parameter){
           parent::__construct($parameter);
        }
        public function getUri(){
            $this->paras = parent::getUri();
            return $this->paras;
        }
        public function run(){
            $db = new DB("students");
            //var_dump($db->fetchAll());
            $view = new LoginView("/login");
            $view->show($db->fetchAll());
        }
    }
?>