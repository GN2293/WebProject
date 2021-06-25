<?php
    namespace App\View;

    use Kernel\View;

    class LoginView extends View{
        protected $twig;

        public function __construct($path){
            parent::__construct($path);
        }
        public function show($user){
            include (APP_PATH.'App/View/Header.html');
            $twig = $this->getTwig();
            foreach ($user as $value) {
                # code...
            echo $twig->render('UserTable.twig.html', ['id'=>$user['id'], 'studentid'=>$user['studentid'],'name'=>$user['name'],'email'=>$user['email']]);
            }
            include (APP_PATH.'App/View/Footer.html');
        }
        public function __destruct(){}
    }
?>