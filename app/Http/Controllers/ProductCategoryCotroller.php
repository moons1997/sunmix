<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $datas = ProductCategory::all();
        return view('products.category.index', [
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
        $datas = ProductCategory::all();
        return view('products.category.create', [
            'datas' => $datas
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
        $datas = new ProductCategory();

        $request->validate([
            'name_en' => 'required',
        ]);

        $datas->name_en = $request->input('name_en');
        $datas->name_ru = $request->input('name_ru');
        $datas->name_de = $request->input('name_de');
        $datas->name_es = $request->input('name_es');
        $datas->name_it = $request->input('name_it');
        $datas->category_type = $request->input('category_type');

        $datas->save();

        return redirect('/admin/category');
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
        $data = ProductCategory::find($id);
        $datas = ProductCategory::all();
        return view('products.category.edit', [
            'data' => $data,
            'datas' => $datas,
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
        $data = ProductCategory::find($id);

        $request->validate([
            'name_en' => 'required',
        ]);

        $data->name_en = $request->input('name_en');
        $data->name_ru = $request->input('name_ru');
        $data->name_de = $request->input('name_de');
        $data->name_es = $request->input('name_es');
        $data->name_it = $request->input('name_it');
        $data->category_type = $request->input('category_type');

        $data->update();

        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProductCategory::find($id);

        $data->delete();
        return redirect('/admin/category');
    }
}
