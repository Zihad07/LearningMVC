<?php 
    session_start();

    // Flash  message helper
    // example - flas('register_success','Your are now register');
    //Display in view - echo flas('register_success')


    function flash($name = '', $message = '', $class = 'alert alert-success'){
        if(!empty($name)){
            if(!empty($message) && empty($_SESSION['$name'])){
                
                
                $_SESSION[$name] = $message;
                $_SESSION[$name.'_class'] =  $class;
                
            }elseif(empty($message) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$name.'_class'])? $_SESSION[$name.'_class'] : '';
                echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';

                unset($_SESSION[$name]);
                unset($_SESSION[$name.'_class']);
            }
        }
    }

?>