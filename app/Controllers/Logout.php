<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Logout extends Controller
{
    public function index()
    {
        // Destroy the user session
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
