<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('templates/header.php');
        echo view('pages/home/index.php');
        echo view('templates/footer.php');

    }
}
