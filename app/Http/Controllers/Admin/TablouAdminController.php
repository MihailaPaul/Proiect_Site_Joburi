<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Controller realizat pentru returnarea paginilor web construite in blade uri
class TablouAdminController  extends Controller
{
    public function index()
    {
        return view("Admin.home");
    }
}
