<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Employee_Testing extends Controller {

    // public function before() { 
    //     echo "This message comes from <em>before()</em> method</br>"; 
    // } 
    
    public function action_index()
    {
        // echo "This is subdir controller";

        // // first method 
        // $data = array();
        // $data['username'] = 'View';
        // return View::forge('user/join', $data);

        //second method
        $view = View::forge('user/join');
        $view->username = "Jhon";
        return $view;
    }
}