<?php

//especifica que el controlador está aqui
namespace App\Http\Controllers;

//herencia de BaseController
use Illuminate\Routing\Controller as BaseController;

//el nombre de la clase debe ser el mismo del archivo
class TestController extends BaseController{
    // metodos
    public function index(){
        // return "Primer controlador";
        $arrayData = array(
            "title" => 'Programación Computacional IV',
            "description" => "Primera aplicación con Laravel",
            "studentName" => "Eduardo Josué Álvarez González",
        );
        return View("Test/index")->with($arrayData);
    }
}