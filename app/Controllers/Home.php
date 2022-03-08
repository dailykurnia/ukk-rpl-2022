<?php

namespace App\Controllers;

use App\Models\User_model;
use Config\Services;

class Home extends BaseController
{
    function __construct()
    {
        Services::session();
    }

    public function index()
    {
        if (!Services::session()->get("nik")) {
            return redirect()->to(base_url('/login'));
        }

        $userdata = User_model::findByNIK(Services::session()->get("nik"));
        return view("index", ["userdata"=>$userdata]);
    }

    public function login()
    {
        if (Services::session()->get("nik")) {
            return redirect()->to(base_url('/'));
        }

        return view('login');
    }

    public function register()
    {
        if (Services::session()->get("nik")) {
            return redirect()->to(base_url('/'));
        }

        return view('register');
    }
}