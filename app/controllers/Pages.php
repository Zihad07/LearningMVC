<?php 

    class Pages extends Controller {
        function __construct()
        {
           
        }

        public function index(){
            $data = ['title'=> 'WelCome'];
            $this->view('pages/index',$data);
        }

        public function about(){
            $data = ['title'=> 'About Us'];
           $this->view('pages/about',$data);
        }
    }

?>