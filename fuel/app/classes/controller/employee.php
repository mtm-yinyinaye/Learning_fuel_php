<?php

use Fuel\Core\Request;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_Employee extends Controller {

    // public function before()
    // {
    //     echo "This message comes from <em>before()</em> method</br>"; 
    // }



    public function action_home()
    {
        echo "FuelPHP-Employee application!<br>"; 
        echo "define route";
    }

    public function action_index()
    {
        echo "This is the index method of employee controller"; 
    }

    public function action_route()
    {
        $this->name = Request::active()->param('name', 'World'); 
        $message = "Hello, " . $this->name;  
        echo $message; 
    }

    public function get_index()
    {
        echo "This is get method()";
    }

    public function action_request() {
        $params = Request::active()->params();
        echo var_dump($params);
    }

    public function action_response()
    {
        // // return 
        // $body = "Hi, FuelPHP";
        // $headers = array (
        //     'Content-Type' => 'text/html',
        // );
        // $response = new Response($body, 200, $headers);
        // return $response;
        

        // // return with forge 
        // return Response::forge("Hi, FuelPHP!!!!!!", 404);


        // return with redirect 
        Response::redirect('employee/request/jon');
    }

    public function action_show()
    {
        $view =  View::forge("employee/show");
        $view->set('name', 'Jon');
        $view->set('job', '<em>Designer</em>', false);

        return $view;
    }


    public function action_nestedview()
    {
        $data = array(); 
        $data['title'] = 'Home';  
        $data['name'] = 'Jon'; 
        $data['job'] = 'Designer';  
        $views = array(); 
        $views['head'] = View::forge('head', $data)->render(); 
        $views['content'] = View::forge('employee/show', $data)->render();  
        return View::forge('layout', $views, false)->render(); 
    }






    // public function after($response)
    // {
    //     if (! $response instanceof Response) { 
    //         $response = Response::forge($response, $this->response_status); 
    //     }
    // }
}