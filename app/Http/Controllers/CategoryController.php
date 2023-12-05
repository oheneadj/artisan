<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        $ads = Ad::where('category_id', $category->id);
        return view(
            'ads.index',
            [
                'ads' => $ads->latest()->paginate(6),
                "categories" => Category::get()
            ]
        );
    }
}
