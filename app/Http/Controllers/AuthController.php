<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            'siswa' => [
                'nis' => '3103119009',
                'name' => 'Akbar Nugroho',
                'phone' => '081226613752',
                'class' => 'XII RPL 1'
            ]
        ];
    }
}
