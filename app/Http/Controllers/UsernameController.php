<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsernameController extends Controller
{
    public function showUsername()
    {
        // İşletim sistemi kullanıcı adını al
        $username = get_current_user();

        // HTML içeriği oluştur
        $htmlContent = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Hoşgeldiniz</title>
            </head>
            <body>
                <h1>Hoşgeldiniz {$username}</h1>
            </body>
            </html>
        ";

        // HTML dosyasını yaz
        $filePath = public_path('hosgeldiniz.html');
        file_put_contents($filePath, $htmlContent);

        return response()->download($filePath);
    }
}
