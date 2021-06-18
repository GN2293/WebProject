<?php
    namespace App\Controller;

    use Kernel\Controller;
    use App\Model\IndexModel;

    class IndexController extends Controller{
        public function run(){
            $username = new IndexModel();
            $result = $username->printName();

            print $result;
        }
    }
?>