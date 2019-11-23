<?php 
    /*
    * App Core Class
    * Create URL & loads core controller
    * URL FORMAT -/controller/method/param
    */
    class Core{
        protected $currentContrller = "Pages";
        protected $currentMethod = "index";
        protected $params = [];

        public function __construct()
        {
            // print_r($this->getUrl());
            $url = $this->getUrl();
           

            // Look in controllers for first value
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                // if exists, set as controller
                $this->currentContrller = ucwords($url[0]);
                
                // Unset the 0 Index
                unset($url[0]);
            }

                  // Require the controller
                  require_once '../app/controllers/'.$this->currentContrller.'.php';

                  // Instantiate controller class
                  $this->currentContrller = new $this->currentContrller();

                //   Check for seond part of url
                if(isset($url[1])){
                    // check to see if method exists in controller
                    if(method_exists($this->currentContrller,$url[1])){
                        $this->currentMethod = $url[1];
                        // Unset index url1
                        unset($url[1]);
                    }

                   
                }

                 // get params

                 $this->params = array_values($url)??[];

                 // Call a calback with array fo params
                 call_user_func_array([$this->currentContrller,$this->currentMethod],$this->params);

                




            

           
        }

        public function getUrl(){
            // echo $_GET['url']??'None';
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }
        }
    }


?>