<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request, Review $review)
    {
    $input = $request['post'];
    $review->user_id = 1;
    $review->lesson_id = 1;
    $review->fill($input)->save();
    return redirect('/posts/' . $review->id);
    }
}
