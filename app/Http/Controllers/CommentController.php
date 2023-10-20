<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $ad)
    {

        if (!Ad::find($ad)) {
            return back();
        }

        $formFields = $request->validate([
            'comment' => 'required'
        ]);

        $formFields['user_id'] = auth()->user()->id;
        $formFields['ad_id'] = $ad;
        //$formFields['category_id'] = 1;



        $comment = Comment::create($formFields);

        if ($comment) {
            return  redirect(route('ad.single', $comment->ad->slug))
                ->with('success', 'Ad created successfully ');
        } else {
            return redirect('/about')->with('danger', 'Ad creation unsuccessfully');
        }
    }
}
