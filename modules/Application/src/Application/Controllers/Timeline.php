<?php
namespace Application\controllers;

use Application\Services;

// if(!isset($_SESSION['email']))    
//     header("Location: /home/select");

class Timeline
{    
    public $layout = null;
    
    public function index()
    {
        $id = \Core\Application\Application::getRequest()['id'];
        $service = new Services\Timeline();
        $data = $service->{strtolower($_SERVER['REQUEST_METHOD'])}($id);
        
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        echo json_encode($data);        
    }
    
}