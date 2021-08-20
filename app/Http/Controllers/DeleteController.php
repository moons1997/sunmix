<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use File;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function deleteimage($id){
        $images = Image::findOrFail($id);
        if (File::exists("uploads/products/images/".$images->image)) {
            File::delete("uploads/products/images/".$images->image);
        }
        Image::find($id)->delete();
        return back();
    }
}
