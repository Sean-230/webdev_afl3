<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'product'])
            ->latest()
            ->paginate(12);
        
        $averageRating = Review::avg('rating');
        $totalReviews = Review::count();

        return view('user.review', compact('reviews', 'averageRating', 'totalReviews'));
    }

    public function store(Request $request, $productId)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000'
        ]);

        Product::findOrFail($productId);

        // Check if user already reviewed this product
        if (Review::where('user_id', Auth::id())->where('product_id', $productId)->exists()) {
            return redirect()->back()->with('error', 'You have already reviewed this product!');
        }

        Review::create(array_merge($validated, [
            'user_id' => Auth::id(),
            'product_id' => $productId,
        ]));

        return redirect()->back()->with('success', 'Thank you for your review!');
    }

    public function update(Request $request, $reviewId)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000'
        ]);

        $review = Review::findOrFail($reviewId);

        // Check if the user owns this review
        if ($review->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $review->update($validated);

        return redirect()->back()->with('success', 'Review updated successfully!');
    }

    public function destroy($reviewId)
    {
        $review = Review::findOrFail($reviewId);

        // Check if the user owns this review
        if ($review->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully!');
    }
}
