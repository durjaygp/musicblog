<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $postcount = Blog::count();
        $categorycount = Category::count();
        $usercount = User::count();
        $blogs= Blog::with('category')->latest()->get();
        return view('admin.dashboard.dashboard',compact('categorycount','postcount','usercount', 'blogs'));
    }
}
