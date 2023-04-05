<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('review', ['reviews' => $reviews]);
    }

    public function store(Request $request)
    {
        $comment = new Review;
        $comment->review = $request->input('review');
        $comment->rating = $request->input('rating');
        $comment->save();

        return redirect()->back();
    }

    public function show(Review $post)
    {
        return view('review.show', compact('post'));
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->back();
    }

}
