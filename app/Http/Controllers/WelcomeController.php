<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $username = $this->getOsUsername();

        // `welcome.blade.php` görünümüne kullanıcı adını gönder
        return view('welcome', ['username' => $username]);

    }

    private function getOsUsername()
    {
        if (stristr(PHP_OS, 'DAR')) {
            // MacOS
            $username = exec('whoami');
        } elseif (stristr(PHP_OS, 'WIN')) {
            // Windows
            $username = getenv('USERNAME') ?: getenv('USER');
        } else {
            // Diğer UNIX tabanlı sistemler
            $username = getenv('USER') ?: exec('whoami');
        }

        return $username ?: 'Guest';
    }


    public function index1()
    {
        $username = $this->getOsUsername();

        // `welcome.blade.php` görünümüne kullanıcı adını gönder
        return view('welcomeEN', ['username' => $username]);

    }



    public function index2()
    {
        $username = $this->getOsUsername();

        return view('welcomeAR', ['username' => $username]);

    }






}
