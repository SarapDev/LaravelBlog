<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Dashboard

    public function dashboard(){
        return view('admin.dashboard', [
            'categories'=>Category::lastCategories(5),
            'articles'=>Article::lastArticles(5),
            'count_categories'=>Category::count(),
            'count_articles'=>Article::count(),
            'count_user'=>User::count(),
            'count_user_today'=>User::where('login_at', '>', \Carbon\Carbon::now()->subHour(11)->format('ymdHi'))->count(),
        ]);
    }
}
