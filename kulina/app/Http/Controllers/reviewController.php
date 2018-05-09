<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review as ReviewModel;
class reviewController extends Controller
{
    public function createReview(){
        return view('storeReview');
    }

    public function storeReview(Request $req) {
        $post = new ReviewModel;
        $post->order_id = $req->order_id;
        $post->product_id = $req->product_id;
        $post->user_id = $req->user_id;
        $post->rating = $req->rating;
        $post->review = $req->review;
        $post->save();

        return redirect('reviews');
    }

    public function showReview(Request $req) {
        $post = ReviewModel::all();

        return view('showReview',compact('post'));
    }

    public function edit($id)
    {
        $post = ReviewModel::find($id);
        return view('editReview',compact('post','id'));
    }

    public function update(Request $request, $id)
    {
        $post= ReviewModel::find($id);
        $post->review=$request->get('review');
        $post->rating=$request->get('rating');
        $post->save();
        return redirect('showreview');
    }

    public function destroy($id)
    {
        $post = ReviewModel::find($id);
        $post->delete();
        return redirect('showreview');
    }
}
