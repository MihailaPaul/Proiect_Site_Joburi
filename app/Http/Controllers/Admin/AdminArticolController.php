<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class AdminArticolController extends Controller
{
    public function index()
    {
         $date_articol = Article::get();
        return view("Admin.articol",compact('date_articol'));
    }
}
