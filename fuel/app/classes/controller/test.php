<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\View;

class Controller_Test extends Controller_Template {
    public $template = 'template_test'; 

    // public function before()
    // {
    //     parent::before();
    // }

    public function action_index() { 
         $this->template->title = 'Example Page'; 
         $this->template->content = View::forge('test/index'); 
    } 

    // public function after($response)
    // {
    //     $response = parent::after($response);
    //     return $response; 
    // }

}