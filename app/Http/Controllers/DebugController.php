<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class DebugController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd([
            'users' => Number::format(User::count()),
            'categories' => Number::format(Category::count()),
            'posts' => Number::format(Post::count()),
        ]);
    }
}
