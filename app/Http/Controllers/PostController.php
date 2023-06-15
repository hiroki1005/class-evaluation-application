<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Review $review)
    {
        return view('posts.index')->with(['posts' => $review->get()]);  
    }
    
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function show(Review $review)
    {
    return view('posts.show')->with(['review' => $review]);
    }
    
    public function store(Request $request, Review $review)
    {
    $input = $request['post'];
    $review->user_id = 1;
    $review->lesson_id = 1;
    $review->fill($input)->save();
    return redirect('/posts/' . $review->id);
    }
}
