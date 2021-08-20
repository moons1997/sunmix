<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Images;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use File;




class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();

        return view('products.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Product::all();
        $productCategory = ProductCategory::all();
        return view('products.create',[
            'datas' => $datas,
            'productCategory' => $productCategory,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datas = new Product();

        $request->validate([
            'name_en' => 'required',
            'product_about_en' => 'required',
            'category_id' => 'required',
        ]);

        $datas->category_id = $request->input('category_id');
        $datas->name_en = $request->input('name_en');
        $datas->product_about_en = $request->input('product_about_en');
        $datas->product_info_en = $request->input('product_info_en');

        $datas->name_ru = $request->input('name_ru');
        $datas->product_about_ru = $request->input('product_about_ru');
        $datas->product_info_ru = $request->input('product_info_ru');

        $datas->name_de= $request->input('name_de');
        $datas->product_about_de = $request->input('product_about_de');
        $datas->product_info_de = $request->input('product_info_de');

        $datas->name_es = $request->input('name_es');
        $datas->product_about_es = $request->input('product_about_es');
        $datas->product_info_es = $request->input('product_info_es');

        $datas->name_it = $request->input('name_it');
        $datas->product_about_it = $request->input('product_about_it');
        $datas->product_info_it = $request->input('product_info_it');


        $datas->save();

        if($request->hasFile('images')){
            $files = $request->file('images');

            foreach ($files as $file){

                $imageName = time(). '_' .$file->getClientOriginalName();
                $file->move(public_path('uploads/products/images/'), $imageName);


                $images = new Image();
                $images->product_id = $datas->id;
                $images->image = $imageName;
                $images->save();

            }
        }

        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $productCategory = ProductCategory::all();
//        dd($data->category_id);
        return view('products.edit', [
            'data' => $data,
            'productCategory' => $productCategory,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = Product::findOrFail($id);

        $request->validate([
            'name_en' => 'required',
            'product_about_en' => 'required',
            'category_id' => 'required',
        ]);

        $datas->category_id = $request->input('category_id');

        $datas->name_en = $request->input('name_en');
        $datas->product_about_en = $request->input('product_about_en');
        $datas->product_info_en = $request->input('product_info_en');

        $datas->name_ru = $request->input('name_ru');
        $datas->product_about_ru = $request->input('product_about_ru');
        $datas->product_info_ru = $request->input('product_info_ru');

        $datas->name_de= $request->input('name_de');
        $datas->product_about_de = $request->input('product_about_de');
        $datas->product_info_de = $request->input('product_info_de');

        $datas->name_es = $request->input('name_es');
        $datas->product_about_es = $request->input('product_about_es');
        $datas->product_info_es = $request->input('product_info_es');

        $datas->name_it = $request->input('name_it');
        $datas->product_about_it = $request->input('product_about_it');
        $datas->product_info_it = $request->input('product_info_it');

        $datas->update();

        if($request->hasFile('images')){
            $files = $request->file('images');

            foreach ($files as $file){

                $imageName = time(). '_' .$file->getClientOriginalName();
                $file->move(public_path('uploads/products/images/'), $imageName);


                $images = new Image();
                $images->product_id = $id;
                $images->image = $imageName;
                $images->save();

            }
        }

        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);

        if(File::exists('uploads/products/main/'.$data->image)){
            File::delete('uploads/products/main/'.$data->image);
        }


        $images = Image::where("product_id",$data->id)->get();

        foreach($images as $image){
            if (File::exists("uploads/products/images/".$image->image)) {
                File::delete("uploads/products/images/".$image->image);
            }
        }

        $data->delete();
        return redirect('/admin/product');
    }
}
