<?php

namespace App\Controllers;
use App\Models\MitgliederModel;

class Login extends BaseController
{
    public function index(){
        $this->session->set("loggedin", FALSE);
        return view("login_site");
    }

    public function loginSession(){
        $mitgliederModel = new MitgliederModel();
        if (isset($_POST["loginEmail"]) && isset($_POST["loginPassword"])){
            if ($mitgliederModel->login() != NULL){

                $password = $mitgliederModel->login()['password'];

                if(password_verify($_POST["loginPassword"], $password)){
                    $this->session->set("loggedin", TRUE);
                    $this->session->set("username", $_POST["loginEmail"]);
                    $this->session->set("id", $mitgliederModel->getID());
                    return redirect()->to(base_url() . "/persons");
                }
            }
        }
        $this->session->set('loggedin', FALSE);
        return view('login_site');
    }
}