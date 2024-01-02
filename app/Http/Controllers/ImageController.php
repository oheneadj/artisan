<?php

namespace App\Http\Controllers;

use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function upload(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = Str::uuid() . '.webp'; //. $image->getClientOriginalExtension();
            $folder = Str::uuid();
            $image->storeAs('tmp/'. $folder, $file_name);

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
            Storage::deleteDirectory('tmp/'. $temp_file->folder);
            $temp_file->delete();
        }

        return response()->noContent();
    }
}
