<?php

namespace src\Controllers;

class HomeController extends Controller {

    public function index() {
        return Controller::view("home");
    }

    // public function store(){
    //     $usersModel = new UsersModel();
    //     $dados = [
    //         'fname' => $_REQUEST['fname']
    //     ];

    //     $usersModel->add($dados);
    // }
}