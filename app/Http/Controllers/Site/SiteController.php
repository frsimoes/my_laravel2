<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return 'Home Page do Site';
    }
    public function contato()
    {
        return 'contato';
    }
    
    public function categoria($id)
    {
        return "Listagem dos post da categoria:($id)";
    }
    public function categoriaop($id = "1")
    {
        return "Listagem dos post da categoria:($id)";
    }
}
