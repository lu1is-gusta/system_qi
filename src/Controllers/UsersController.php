<?php

namespace src\Controllers;

class UsersController extends Controller {

    public function index() {
        return Controller::view("user");
    }

    // public function store(){
    //     $usersModel = new UsersModel();
    //     $dados = [
    //         'fname' => $_REQUEST['fname']
    //     ];

    //     $usersModel->add($dados);
    // }
}