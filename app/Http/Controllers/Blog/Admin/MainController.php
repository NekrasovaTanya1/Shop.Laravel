<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MetaTag;

class MainController extends Controller
{
    public function index(){
        // page title my admin panel
        MetaTag::setTags(['title' => 'Admin panel']);

        
        return view('blog.admin.main.index');
    }
}
