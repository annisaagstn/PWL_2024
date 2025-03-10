<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Annisa / 2341760032';
    }

    public function artikel($id)
    {
        return 'Halaman artikel dengan ID - '.$id;
    }
}