<?php

namespace App\Http\Controllers;

use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_extension = $image->getClientOriginalExtension();
            $file_name = "img". time() . random_int(1, 999) . $file_extension;
            $folder = uniqid('img-', true);
            $image->storeAs('public/tmp/'. $folder, $file_name);

            TempImage::create([
                'folder' => $folder,
                'file' => $file_name,
                'user_id' => auth()->user()->id
            ]);

            return $folder;
        }
        return '';
    }

    public function delete (){
        $temp_file = TempImage::where('folder', request()->getContent())->first();
        if($temp_file){
            Storage::deleteDirectory('public/tmp/'. $temp_file->folder);
            $temp_file->delete();
        }

        return response()->noContent();
    }
}
