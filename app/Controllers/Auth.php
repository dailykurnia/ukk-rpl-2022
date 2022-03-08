<?php

namespace App\Controllers;
use App\Models\User_model;
use Config\Services;

class Auth extends BaseController
{
    public function login()
    {
        if (User_model::authenticate($this->request->getVar('nik'), $this->request->getVar('password')))
        {
            Services::session()->set("nik", $this->request->getVar('nik'));
            return redirect()->to(base_url('/'));
        } else {
            Services::session()->setFlashdata("failed", "Login Failed");
            return redirect()->to(base_url('/login'));
        }
    }

    public function register() {

        $password = $this->request->getVar('password');
        $confirm_password = $this->request->getVar('confirm_password');

        if ($password != $confirm_password) {
            Services::session()->setFlashdata("failed", "Password and Confirm Password must be same");
            return redirect()->to(base_url('/register'));
        }

        $cond = User_model::create(
            $this->request->getVar("nik"), 
            $this->request->getVar("nama"),
            $this->request->getVar("password"),
        );
        
        if ($cond >= 0) {
            Services::session()->setFlashdata("success", "Account created, you can now login");
            return redirect()->to(base_url('/login'));
        } elseif ($cond == -1) {
            Services::session()->setFlashdata("failed", "NIK Sudah dipakai");
            return redirect()->to(base_url('/register'));
        }

    }

    public function logout()
    {
        Services::session()->destroy();
        return redirect()->to(base_url("/"));
    }
}