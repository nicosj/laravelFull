<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return $this->render('index');
    }

    public function create(){

        return $this->render('index');
    }
    public function store(){

        return $this->render('index');
    }
    public function destroy($ability, $arguments = [])
    {
        return $this->render('index');
    }
    public function edit(){
        return $this->render('index');

    }

    public function editDos(){
     
    }
}
    
